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

**Versions :**

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
