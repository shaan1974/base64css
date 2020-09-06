<?php
	
	/*
		TO DO @IMPORT
	*/
	class Rhea_Css64
	{
		private $version = "1.7";

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

		private $named_colors = array(
			/* 	RED 	*/
			"lightsalmon" 			=> "#FFA07A",
			"salmon" 				=> "#FA8072",
			"darksalmon" 			=> "#E9967A",
			"lightcoral" 			=> "#F08080",
			"indianred" 			=> "#CD5C5C",
			"crimson" 				=> "#DC143C",
			"firebrick" 			=> "#B22222",
			"red" 					=> "#FF0000",
			"darkred" 				=> "#8B0000",
			/*	ORANGE	*/
			"coral" 				=> "#FF7F50",
			"tomato" 				=> "#FF6347",
			"orangered" 			=> "#FF4500",
			"gold" 					=> "#FFD700",
			"orange" 				=> "#FFA500",
			"darkorange" 			=> "#FF8C00",
			/*	YELLOW	*/
			"lightyellow" 			=> "#FFFFE0",
			"lemonchiffon" 			=> "#FFFACD",
			"lightgoldenrodyellow" 	=> "##FAFAD2",
			"papayawhip" 			=> "#FFEFD5",
			"moccasin" 				=> "#FFE4B5",
			"peachpuff" 			=> "#FFDAB9",
			"palegoldenrod" 		=> "#EEE8AA",
			"khaki" 				=> "#F0E68C",
			"darkkhaki" 			=> "#BDB76B",
			"yellow"	 			=> "#FFFF00",
			/*	GREEN	*/
			"lawngreen" 			=> "#7CFC00",
			"chartreuse"			=> "#7FFF00",
			"limegreen"		 		=> "#32CD32",
			"lime" 					=> "#00FF00",
			"forestgreen" 			=> "#228B22",
			"green" 				=> "#008000",
			"darkgreen" 			=> "#006400",
			"greenyellow" 			=> "#ADFF2F",
			"yellowgreen" 			=> "#9ACD32",
			"springgreen" 			=> "#00FF7F",
			"mediumspringgreen" 	=> "#00FA9A",
			"lightgreen" 			=> "#90EE90",
			"palegreen" 			=> "#98FB98",
			"darkseagreen" 			=> "#8FBC8F",
			"mediumseagreen" 		=> "#3CB371",
			"seagreen" 				=> "#2E8B57",
			"olive" 				=> "#808000",
			"darkolivegreen" 		=> "#556B2F",
			"olivedrab" 			=> "#6B8E23",
			/*	CYAN 	*/
			"lightcyan" 			=> "#E0FFFF",
			"cyan" 					=> "#00FFFF",
			"aqua" 					=> "#00FFFF",
			"aquamarine" 			=> "#7FFFD4",
			"mediumaquamarine" 		=> "#66CDAA",
			"paleturquoise"	 		=> "#AFEEEE",
			"turquoise" 			=> "#40E0D0",
			"mediumturquoise" 		=> "#48D1CC",
			"darkturquoise" 		=> "#00CED1",
			"lightseagreen" 		=> "#20B2AA",
			"cadetblue" 			=> "#5F9EA0",
			"darkcyan" 				=> "#008B8B",
			"teal" 					=> "#008080",
			/*	BLUE	*/
			"powderblue" 			=> "#B0E0E6",
			"lightblue" 			=> "#ADD8E6",
			"lightskyblue" 			=> "#87CEFA",
			"skyblue" 				=> "#87CEEB",
			"deepskyblue" 			=> "#00BFFF",
			"lightsteelblue" 		=> "#B0C4DE",
			"dodgerblue" 			=> "#1E90FF",
			"cornflowerblue" 		=> "#6495ED",
			"steelblue" 			=> "#4682B4",
			"royalblue" 			=> "#4169E1",
			"blue" 					=> "#0000FF",
			"mediumblue" 			=> "#0000CD",
			"darkblue" 				=> "#00008B",
			"navy" 					=> "#000080",
			"midnightblue" 			=> "#191970",
			"mediumslateblue" 		=> "#7B68EE",
			"slateblue" 			=> "#6A5ACD",
			"darkslateblue" 		=> "#483D8B",
			/*	PURPLE	*/
			"lavender" 				=> "#E6E6FA",
			"thistle" 				=> "#D8BFD8",
			"plum" 					=> "#DDA0DD",
			"violet" 				=> "#EE82EE",
			"orchid" 				=> "#DA70D6",
			"fuchsia" 				=> "#FF00FF",
			"magenta" 				=> "#FF00FF",
			"mediumorchid" 			=> "#BA55D3",
			"mediumpurple" 			=> "#9370DB",
			"blueviolet" 			=> "#8A2BE2",
			"darkviolet" 			=> "#9400D3",
			"darkorchid"	 		=> "#9932CC",
			"darkmagenta" 			=> "#8B008B",
			"purple" 				=> "#800080",
			"indigo" 				=> "#4B0082",
			/*	PINK	*/
			"pink" 					=> "#FFC0CB",
			"lightpink" 			=> "#FFB6C1",
			"hotpink"				=> "#FF69B4",
			"deeppink" 				=> "#FF1493",
			"palevioletred" 		=> "#DB7093",
			"mediumvioletred" 		=> "#C71585",
			/*	WHITE	*/
			"white" 				=> "#FFFFFF",
			"snow" 					=> "#FFFAFA",
			"honeydew" 				=> "#F0FFF0",
			"mintcream" 			=> "#F5FFFA",
			"azure" 				=> "#F0FFFF",
			"aliceblue" 			=> "#F0F8FF",
			"ghostwhite" 			=> "#F8F8FF",
			"whitesmoke" 			=> "#F5F5F5",
			"seashell" 				=> "#FFF5EE",
			"beige" 				=> "#F5F5DC",
			"oldlace" 				=> "#FDF5E6",
			"floralwhite" 			=> "#FFFAF0",
			"ivory" 				=> "#FFFFF0",
			"antiquewhite" 			=> "#FAEBD7",
			"linen" 				=> "#FAF0E6",
			"lavenderblush" 		=> "#FFF0F5",
			"mistyrose" 			=> "#FFE4E1",
			/*	GRAY	*/
			"gainsboro" 			=> "#DCDCDC",
			"lightgray" 			=> "#D3D3D3",
			"silver" 				=> "#C0C0C0",
			"darkgray"	 			=> "#A9A9A9",
			"gray" 					=> "#808080",
			"dimgray" 				=> "#696969",
			"lightslategray" 		=> "#778899",
			"slategray" 			=> "#708090",
			"darkslategray" 		=> "#2F4F4F",
			"black" 				=> "#000000",
			/*	BROWN	*/
			"cornsilk" 				=> "#FFF8DC",
			"blanchedalmond" 		=> "#FFEBCD",
			"bisque" 				=> "#FFE4C4",
			"navajowhite" 			=> "#FFDEAD",
			"wheat" 				=> "#F5DEB3",
			"burlywood" 			=> "#DEB887",
			"tan" 					=> "#D2B48C",
			"rosybrown" 			=> "#BC8F8F",
			"sandybrown" 			=> "#F4A460",
			"goldenrod"	 			=> "#DAA520",
			"peru" 					=> "#CD853F",
			"chocolate" 			=> "#D2691E",
			"saddlebrown" 			=> "#8B4513",
			"sienna"		 		=> "#A0522D",
			"brown" 				=> "#A52A2A",
			"maroon" 				=> "#800000"
		);
		
		private $build_css = "";

		public $css_file;
		public $css_minify = false;
		public $rbg_to_hex = false;
		public $named_colors_to_hex = false;

		function __construct() {}

		function replaceNamedColors($css)
		{
			$l=array();

			foreach ($this->named_colors as $key => $value) {
				array_push($l,$key);
			}

			$l = implode("|",$l);
			$re = '/[^#.a-z]('.$l.')/m';
			preg_match_all($re, $css, $matches, PREG_SET_ORDER, 0);

			for($cnt=0;$cnt<count($matches);$cnt++)
			{
				$css = str_replace( $matches[$cnt][0] , $this->named_colors["".$matches[$cnt][1].""] , $css );
			}

			return $css;
		}

		function RgbToHex($css)
		{
			$re = '/rgb[a]*\((.*?),(.*?),(.*?)(,(.*?))*\)/m';
			preg_match_all($re, $css, $matches, PREG_SET_ORDER, 0);

			for($cnt=0;$cnt<count($matches);$cnt++)
			{
				$r 		= ( strpos( $matches[$cnt][1] , "%") !== '' )  ? intval((255/100)*intval(str_replace("%","",$matches[$cnt][1]))) : $matches[$cnt][1];
				$g 		= ( strpos( $matches[$cnt][2] , "%") !== '' )  ? intval((255/100)*intval(str_replace("%","",$matches[$cnt][2]))) : $matches[$cnt][2];
				$b 		= ( strpos( $matches[$cnt][3] , "%") !== '' )  ? intval((255/100)*intval(str_replace("%","",$matches[$cnt][3]))) : $matches[$cnt][3];			
				$color 	= strtoupper(sprintf("#%02x%02x%02x", $r, $g, $b));
				
				if ( count($matches[$cnt]) === 6 )
				{
					$o 		= trim($matches[$cnt][5]);
					$o 		= (substr_compare( $o , "%", -strlen( "%" ) ) === 0 ) ? intval(str_replace("%","",$o))/100 : $o;
					$color 	= $color."".dechex($o*255);
				}				
				$css = str_replace( $matches[$cnt][0] , $color , $css );
			}

			return $css;
		}

		/*
	      	some of the following functions to minimize the css-output are directly taken
	      	from the awesome CSS JS Booster: https://github.com/Schepp/CSS-JS-Booster
	      	all credits to Christian Schaefer: http://twitter.com/derSchepp
		*/
	    function minifyCss($css) 
	    {
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
		    /*foreach ( $matches[3] as $match )
		        if ( !empty($match) )
		            $urls['import'][] = preg_replace( '/\\\\(.)/u', '\\1', $match );*/
		 
		    // @import url(...)
		    // @import url('...')
		    // @import url("...")
		    /*foreach ( $matches[7] as $match )
		        if ( !empty($match) )
		            $urls['import'][] =  preg_replace( '/\\\\(.)/u', '\\1', $match );*/
		 
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
				// $current_path 	= str_replace("\\","/", getcwd() );
				$css_base_dir 	= $path_parts["dirname"];
	
			//	@IMPORT
			//
				$re = '/(@import\s[url\(]*["\']((.*?).css)["\'][\)]*)(\s(aural|braillle|handheld|print|projection|screen|tty|tv|all)(.*?));/m';
				preg_match_all($re, $css_content, $matches, PREG_SET_ORDER, 0);

				for($cnt=0;$cnt<count($matches);$cnt++)
				{
					//	CREATE VARIABLE FOR NEW MEDIA CONTAINER
					//
						$z = str_replace( $matches[$cnt][1] , "@media", $matches[$cnt][0] );					
						// $import_file = file_get_contents($css_base_dir."/".$matches[$cnt][2]);
					
					/* --- */
					//	GET REAL PATH
					//
						// echo "<br/>OLD - ".$css_base_dir."/".$matches[$cnt][2];
						$path_parts = realpath($css_base_dir."/".$matches[$cnt][2]);
						$path_parts = str_replace("\\","/", $path_parts  );
						// echo "<br>NEW - (".$path_parts.")<br/>";
					
					//	APPLY CLASS CSS64 ON LINK FROM IMPORT
					//
						$CSS64_INSIDE = new Rhea_Css64();
						$CSS64_INSIDE->css_file = $path_parts;
						$CSS64_INSIDE->css_minify = false;
						$import_file="\n".$CSS64_INSIDE->transform();

					/* --- */

					//	REPLACE THE @IMPORT DECLARATION WITH @MEDIA (XXX) AND CONTENT CSS
					//
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
						/*
						if ( (strpos($urls[$cnt], "/") === 0) )
						{						
							$ext_ressource 	= file_get_contents( $_SERVER["DOCUMENT_ROOT"]."".$urls[$cnt] );
							$path_parts 	= pathinfo( $original_url );
						}
						*/
						if ( strpos( $urls[$cnt] , "http") !== 0 )
						{						
							if ( strpos($urls[$cnt], "/") === 0 )
							{
								$urls[$cnt] = $_SERVER["DOCUMENT_ROOT"]."".$urls[$cnt];
							}
							else
							{
								$urls[$cnt] = realpath( $css_base_dir."/".$urls[$cnt] );
							}
							$ext_ressource 	= file_get_contents( ($urls[$cnt]) );
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
							//	USELESS CODE
							/*
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
							*/
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

			//	RGB(A) TO HEX COLOR
			//
				if ( $this->rbg_to_hex === true )
				{
					$css_content = $this->RgbToHex($css_content);
				}

			//	REPLACE NAMED COLOR
			//
				if ( $this->named_colors_to_hex === true )
				{
					$css_content = $this->replaceNamedColors($css_content);
				}

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