<?php
	
	/*
		TO DO @IMPORT
	*/
	class Rhea_Css64
	{
		private $version = "1.4";

		private $array_data = array(
	        "OET"		=> "data:application/octet-stream;",
	        "SVG"		=> "data:image/svg+xml;",
	        "TTF"		=> "data:application/octet-stream;",
	        "WOFF" 	    => "data:application/font-woff;",
	        "WOFF2"	    => "data:application/font-woff2;",
	        "GIF"		=> "data:image/gif;",
	        "ICO"		=> "data:image/x-icon;",
	        "JPE"		=> "data:image/jpeg;",
	        "JPEG"	    => "data:image/jpeg;",
	        "JPG"		=> "data:image/jpeg;",
	        "PNG"		=> "data:image/png;"
		);  
		
		private $build_css = "";

		public $css_file;
		public $css_minify = false;

		function __construct() {}

		/*
			MINIFY CSS
		*/

	    function minifyCss($css) 
	    {
	      // some of the following functions to minimize the css-output are directly taken
	      // from the awesome CSS JS Booster: https://github.com/Schepp/CSS-JS-Booster
	      // all credits to Christian Schaefer: http://twitter.com/derSchepp
	      // remove comments
	      $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
	      // backup values within single or double quotes
	      preg_match_all('/(\'[^\']*?\'|"[^"]*?")/ims', $css, $hit, PREG_PATTERN_ORDER);
	      for ($i=0; $i < count($hit[1]); $i++) {
	        $css = str_replace($hit[1][$i], '##########' . $i . '##########', $css);
	      }
	      // remove traling semicolon of selector's last property
	      $css = preg_replace('/;[\s\r\n\t]*?}[\s\r\n\t]*/ims', "}\r\n", $css);
	      // remove any whitespace between semicolon and property-name
	      $css = preg_replace('/;[\s\r\n\t]*?([\r\n]?[^\s\r\n\t])/ims', ';$1', $css);
	      // remove any whitespace surrounding property-colon
	      $css = preg_replace('/[\s\r\n\t]*:[\s\r\n\t]*?([^\s\r\n\t])/ims', ':$1', $css);
	      // remove any whitespace surrounding selector-comma
	      $css = preg_replace('/[\s\r\n\t]*,[\s\r\n\t]*?([^\s\r\n\t])/ims', ',$1', $css);
	      // remove any whitespace surrounding opening parenthesis
	      $css = preg_replace('/[\s\r\n\t]*{[\s\r\n\t]*?([^\s\r\n\t])/ims', '{$1', $css);
	      // remove any whitespace between numbers and units
	      $css = preg_replace('/([\d\.]+)[\s\r\n\t]+(px|em|pt|%)/ims', '$1$2', $css);
	      // shorten zero-values
	      $css = preg_replace('/([^\d\.]0)(px|em|pt|%)/ims', '$1', $css);
	      // constrain multiple whitespaces
	      $css = preg_replace('/\p{Zs}+/ims',' ', $css);
	      // remove newlines
	      $css = str_replace(array("\r\n", "\r", "\n"), '', $css);
	      // Restore backupped values within single or double quotes
	      for ($i=0; $i < count($hit[1]); $i++) {
	        $css = str_replace('##########' . $i . '##########', $hit[1][$i], $css);
	      }
	      return $css;
	    }			    

		/*
			EXTRACT URLS

			http://phpcrossref.com/xref/moodle/repository/url/locallib.php.html#l698
			https://stackoverflow.com/questions/23697813/extract-css-urls-using-preg-math
			https://github.com/jrphub/elgoog/blob/master/extract_css_urls.php
		*/

		function extract_css_urls( $text )
		{
		    $urls = array();
			
			// $urls['property']= array();

		    $url_pattern     = '(([^\\\\\'", \(\)]*(\\\\.)?)+)';
		    $urlfunc_pattern = 'url\(\s*[\'"]?' . $url_pattern . '[\'"]?\s*\)';
		    $pattern         = '/(' . '(@import\s*[\'"]' . $url_pattern     . '[\'"])' . '|(@import\s*'      . $urlfunc_pattern . ')'      . '|('                . $urlfunc_pattern . ')'      .  ')/iu';
		    if ( !preg_match_all( $pattern, $text, $matches ) )
		        return $urls;
		 
		    // @import '...'
		    // @import "..."
		    foreach ( $matches[3] as $match )
		        if ( !empty($match) )
		            $urls['import'][] = preg_replace( '/\\\\(.)/u', '\\1', $match );
		 
		    // @import url(...)
		    // @import url('...')
		    // @import url("...")
		    foreach ( $matches[7] as $match )
		        if ( !empty($match) )
		            $urls['import'][] =  preg_replace( '/\\\\(.)/u', '\\1', $match );
		 
		    // url(...)
		    // url('...')
		    // url("...")
		    foreach ( $matches[11] as $match )
		        if ( !empty($match) )
		            $urls['property'][] =  preg_replace( '/\\\\(.)/u', '\\1', $match );
		 
			return $urls["property"];
		}	

		function transform()	
		{
			//	IN CASE OF LOCAL PATH WITH WINDOWS WE REPLACE THE \ WITH /
			//
				$this->css_file = str_replace("\\","/", $this->css_file  );

			//	LOAD CSS CONTENT FILE
			//
				$css_content 	= file_get_contents($this->css_file);
				$path_parts		= pathinfo( $this->css_file );
				$current_path 	= str_replace("\\","/", getcwd() );
				$css_base_dir 	= $path_parts["dirname"];

				// echo $css_base_dir;
				// die();
	
			//	@IMPORT
			//
				$re = '/(@import\s[url\(]*["\']((.*?).css)["\'][\)]*)(\s(aural|braillle|handheld|print|projection|screen|tty|tv|all)(.*?));/m';
				preg_match_all($re, $css_content, $matches, PREG_SET_ORDER, 0);

				for($cnt=0;$cnt<count($matches);$cnt++)
				{
					$z = str_replace( $matches[$cnt][1] , "@media", $matches[$cnt][0] );
					$import_file = file_get_contents($css_base_dir."/".$matches[$cnt][2]);
					$z = str_replace( ";" , "{\n\n ".$import_file."\n\n}", $z );
					$css_content = str_replace( $matches[$cnt][0] , $z, $css_content );
				}
								
			//	EXTRACT URLS
			//
				$urls = $this->extract_css_urls($css_content);
				
			//	LOOP
			//	
				for( $cnt=0;$cnt<count($urls);$cnt++ )
				{
					$original_url 	= $urls[$cnt];
					//
					//	IF STARTWITH "/"
					//
					//	background: url('/twig_test/data_images/symbol_middot_green.png')
					//
						if ( (strpos($urls[$cnt], "/") === 0) )
						{						
							$ext_ressource 	= file_get_contents( $_SERVER["DOCUMENT_ROOT"]."".$urls[$cnt] );
							$path_parts 	= pathinfo( $original_url );
						}
					//
					//	DIRECT URL
					//
					//	background: url('http://localhost/twig_test/data_images/bird.png');
					//
						else if ( strpos( $urls[$cnt] , "http") === 0 )
						{
					        $ch = curl_init();

					        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

					        //Set the URL that you want to GET by using the CURLOPT_URL option.
					        curl_setopt($ch, CURLOPT_URL, ''.$urls[$cnt].'' );

					        //Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
					        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					        //Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
					        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

					        //Execute the request.
					        $ext_ressource = curl_exec($ch);

					        //Close the cURL handle.
					        curl_close($ch);

					        $path_parts = array('extension' => 'png');
						}
					//
					//	OTHERS CASE ../ OR NOTHING
					//
					//	background: url('img/symbol_middot_green.png')
					//	background: url('../data_images/bird.png');
					//	
						else
						{
							$new_url 			= [];
							$urls[$cnt] 		= explode("/",$urls[$cnt]);	
							$tmp_css_base_dir 	= explode("/",$css_base_dir);

							for( $cnt2=0;$cnt2<count($urls[$cnt]);$cnt2++ )
							{
								//	IF WE HAVE TO GO UP IN THE PATH WE REMOVE THE LAST ENTRY INTO $TMP_CSS_BASE_DIR
								//
								if ( $urls[$cnt][$cnt2] === ".." )
								{
									array_pop( $tmp_css_base_dir );
								}
								else
								{
									array_push( $new_url ,$urls[$cnt][$cnt2] );
								}
							}

							$pop_url 		= implode("/",$new_url);
							$base_dir 		= implode("/",$tmp_css_base_dir);
							$ext_ressource 	= file_get_contents( $base_dir."/".$pop_url );
							$path_parts 	= pathinfo( $base_dir."/".$pop_url );
						}

						$file_ext = strtoupper($path_parts['extension']);

						//	CHECK IF EXTENSION EXIST IN ARRAY_DATA
						//
							$key = array_key_exists( $file_ext, $this->array_data );

						//	IF YES
						//
							if ( $key === true  )
							{
								//	TRANSFORM THE CURRENT RESSOURCE IN BINARY 64
						        //	SET CORRECT STRING URI DATA RELATED TO THE EXTENSION TYPE
						        //
						        	$base64 = "".$this->array_data[$file_ext]."base64,".base64_encode($ext_ressource)."";

						        //	REPLACE CSS CONTENT WITH DATA URI
						        //
						        	$css_content = str_replace( $original_url , $base64 , $css_content );		
							}
				}

			//	END LOOP
			//
			//	RETURN
			//
				$this->build_css = $css_content;
				
				return ( $this->css_minify === true ) ? $this->minifyCss($this->build_css) : $this->build_css;
		}

		function save($file)	
		{
			file_put_contents($file, $this->build_css);
		}
	}
?>