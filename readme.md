sesamnet ViewHelpers
=========

Todo
---------------
- Sprach-ID
- Seiten-ID
- Jahr
- Seitentitel
- Dateinamen trennen (Filename und Extension)
- Lorem Ipsum Generator (mit Anzahl Zeichen)
- Random / Shuffle Array (Random Ausgabe von einem Array)

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




#### sn:year

### Examples

<sn:year/>



### Attributes
not required


#### sn:loremipsum

### Examples

<sn:loremipsum anzahl="50"/>



### Attributes
| Name          | Type      | Default value | Required  |
|:--------------|:----------|:--------------|:----------|
| anzahl        | int       | NULL          | Yes       |


#### sn:filename

### Examples

<sn:loremipsum filename="HalloWelt.apk" option="1"/>

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

<sn:pageinfos option="1"/>

   Option 1 Get only the Page-tItle
   Option 2 Get only the Page-uid
   Option 3 Get only the Language-id
   Option 4 Get all Infos

### Attributes
| Name          | Type      | Default value | Required  |
|:--------------|:----------|:--------------|:----------|
| option        | int       | NULL          | Yes       |





