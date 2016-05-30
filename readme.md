sesamnet ViewHelpers
=========

Todo
---------------
- Sprach-ID [Erledigt]
- Seiten-ID [Erledigt]
- Jahr [Erledigt]
- Seitentitel [Erledigt]
- Dateinamen trennen (Filename und Extension) [Erledigt]
- Lorem Ipsum Generator (mit Anzahl Zeichen) [Erledigt]
- Random / Shuffle Array (Random Ausgabe von einem Array) [Erledigt]
- SVG Fallback  (Dateiname als Parameter)
                (*Dateityp (jpg/png) als Option)
                (*optional kann alternativ name als parameter übergeben werden)
                (Dateiname als rückgabewert)
 

sesamnet ViewHelpers
===============================
A collection of viewhelpers and other stuff.


## Content Elements
Arrayrandom...
Filename...
Loremipsum...
Pageinfos...
Year...
...Viewhelper




### &lt;sn:year&gt;

### Examples

&lt;sn:year /&gt;



### Attributes
not required


#### sn:loremipsum

### Examples

&lt;sn:loremipsum anzahl="50" /&gt;



### Attributes
| Name          | Type      | Default value | Required  |
|:--------------|:----------|:--------------|:----------|
| anzahl        | int       | NULL          | Yes       |


#### sn:filename

### Examples

&lt;sn:loremipsum filename="HalloWelt.apk" option="1" /&gt;

    Option 1 get Filename
    Option 2 get Filetype
    Option 3 get both

### Attributes
| Name          | Type      | Default value | Required  |
|:--------------|:----------|:--------------|:----------|
| filename      | string    | NULL          | Yes       |
| option        | int       | NULL          | No        |


#### sn:pageinfos

### Examples

&lt;sn:pageinfos option="1" /&gt;

    Option 1 get only the Page-title
    Option 2 get only the Page-uid
    Option 3 get only the Language-id
    Option 4 get all Infos
    

### Attributes
| Name          | Type      | Default value | Required  |
|:--------------|:----------|:--------------|:----------|
| option        | int       | NULL          | Yes       |





