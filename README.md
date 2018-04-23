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
 
 Result
 -----
 ```
 ... ...
 8 => 
    array (size=4)
      'file_path' => string './files/' (length=8)
      'file_name' => string 'files' (length=5)
      'file_type' => int 2
      'file_ids' => string '' (length=0)
  9 => 
    array (size=4)
      'file_path' => string './index.php' (length=11)
      'file_name' => string 'index.php' (length=9)
      'file_type' => int 1
      'file_ids' => string '' (length=0)
  10 => 
    array (size=4)
      'file_path' => string './robots.txt' (length=12)
      'file_name' => string 'robots.txt' (length=10)
      'file_type' => int 1
      'file_ids' => string '' (length=0)
  11 => 
    array (size=4)
      'file_path' => string './test.php' (length=10)
      'file_name' => string 'test.php' (length=8)
      'file_type' => int 1
      'file_ids' => string '' (length=0)
      ... ...
 ```
