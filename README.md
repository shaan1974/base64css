# base64css

Get all ressources of css file (images,fonts...) and transform it into base64 to have all ressources included into the css.

Exemples are in folder "test".

**Example #1:**

```
require_once "../css64/rhea_css64_class.php"; 

$CSS64 = new Rhea_Css64();

$CSS64->css_file = __DIR__. '/../data_css/css.css';
$CSS64->css_minify = true;

$r = $CSS64->transform();
```

**Example #2:**

```
require_once "../css64/rhea_css64_class.php"; 

$CSS64 = new Rhea_Css64();

$CSS64->css_file = __DIR__. '/../data_css/css.css';
$CSS64->css_minify = true;
$CSS64->transform();

$CSS64->save( __DIR__. '/../data_css_b64/css.css');
```

**Not yet supported / Todo:**

@import
When a css is imported into the main caller, the url inside the imported css should be rewritten.

**Versions :**

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
