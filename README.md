kindeditor
==========

kindeditor for yii2

#Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require djfly/kindeditor "*"
```

or add

```json
"djfly/kindeditor": "*"
```

to the require section of your `composer.json` file.

and download kindeditor put it into assets dir, Because there is no composer package for kindeditor


#Usage
~~~~~~~~~~~~~
<?=\djfly\kindeditor\KindEditor::widget([
    'id' => 'post-content',
    'model' => $model,
    'attribute' => 'content',
    'items' => [
        'langType' => Yii::$app->language, // 'en' , 'zh-CN'
        'height' => '300px',
        'themeType' => 'simple',
        'allowImageUpload' => true,
        'allowFileManager' => true,
        'uploadJson' => 'upload_json.php',
        'fileManagerJson' => '../php/file_manager_json.php',
        'items' => [
            'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
            'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
            'insertunorderedlist', '|', 'emoticons', 'image', 'link',
        ]
    ],
])?>
~~~~~~~~~~~~~


#DOCUMENTATION

source https://github.com/kindsoft/kindeditor

official kindeditor http://kindeditor.net/
