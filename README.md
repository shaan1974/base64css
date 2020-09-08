# base64css

Get all ressources of css file (images,fonts...) and transform it into base64 to have all ressources included into the css.

Also get all @import css definition file but only for the same domain.

Exemples are in folder "test/".

**Quick Example #1:**

```
require_once "../css64/rhea_css64_class.php"; 

$CSS64 = new Rhea_Css64();

$CSS64->css_file = __DIR__. '/../data_css/css.css';
$CSS64->css_minify = true;
$CSS64->rbg_to_hex = true;

$r = $CSS64->transform();
```

**Quick Example #2:**

```
require_once "../css64/rhea_css64_class.php"; 

$CSS64 = new Rhea_Css64();

$CSS64->css_file = __DIR__. '/../data_css/css.css';
$CSS64->css_minify = true;
$CSS64->transform();

$CSS64->save( __DIR__. '/../data_css_b64/css.css');
```

**Variable:**

- "css_file" : Where the file is located.

**Methods:**

- "transform" : To do the job.

- "save" : To save the result of css tranformation into a file.

**Configuration:**

- "css_minify" : [true/false] Allow you to minify css.

- "rbg_to_hex" : [true/false] Transform Rgb/Rgba color in Hex.

- "named_colors_to_hex" : [true/false] Convert named colors to hex values.

**Not yet supported / Todo:**

Let me think about it :)

**Versions :**

2.2

Replace the code for the background url.

2.1

Wiki page.

2.0

Code optimisation.

Bug in Curl call the extension was always defined as PNG.

1.9

Code optimisation.

1.8

Convert named colors to hex values.

1.7

Option to convert Rgb/Rgba Color to Hex.

| Examples: |  |
| --- | --- |
| rgb( 0, 0, 0) |  #000000 |
| rgb(50%, 0, 0) |  #7F0000 |
| rgba( 0, 0, 0, 50%) |  #0000007f |
| rgba( 0, 0, 0, 0.5) |  #0000007f |
|  |  |

1.6

Transit version. Test new code before delete it.

1.5

@import work, see /test/test_css_03.php
Just one limitation, imported css should be from the same domain.

@import definition examples:

```
@import url("fineprint.css") print;
@import url("fineprint.css") screen and (orientation:landscape);
@import url('fineprint.css') print;
@import url('fineprint.css') screen and (orientation:landscape);
@import 'fineprint.css' print;
@import 'extra_css/extra.css' screen and (orientation:landscape);
```

1.4

Basic support for @import. It could :

Integrate the @import css files on same level or below as the css container path.
```
@import url("fineprint.css") print;
@import url("fineprint.css") screen and (orientation:landscape);
@import url('fineprint.css') print;
@import url('fineprint.css') screen and (orientation:landscape);
@import 'fineprint.css' print;
@import 'extra_css/extra.css' screen and (orientation:landscape);
```
But the urls inside the @import css are not rewritten yet. If @import css is on the same level path as the main css it's ok.

1.3

- Add save command. (see exemple #1)
```
$CSS64->save( __DIR__. '/../data_css_b64/css.css');
```

1.2

- Update exemples.

1.1

- Add external domain files.

1.0 

- First version maybe somebugs are still present :)
