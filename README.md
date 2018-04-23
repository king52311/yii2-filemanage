File Manage for Yii2
====================
File Manage for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist king52311/yii2-filemanage "*"
```

or add

```
"king52311/yii2-filemanage": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

use king52311\filemanage\Filemanage;

......
public function actionTest2()
   {
       $list = Filemanage::showFileList('./','/base/path/','aaa.txt');
       var_dump($list);exit;
   }
```
Params
-----
 1) the first params is search directory relative path
 2) the second params is will to substr base path for relative path
 3) the third params is search file name to filter files.
