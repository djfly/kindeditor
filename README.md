kindeditor
==========

kindeditor for yii2

##install
composer


##useful
~~~~~~~~~~~~~
<?=\djfly\kindeditor\KindEditor::widget([
    'id' => 'post-content',
    'model' => $model,
    'attribute' => 'content',
    'items' => [
        'langType' => Yii::$app->language, // 'en' , 'zh-CN'
        'height' => '300px',
        'themeType' => 'simple',
        'allowImageUpload'=>true,
        'allowFileManager'=>true,
        'items' => [
            'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
            'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
            'insertunorderedlist', '|', 'emoticons', 'image', 'link',
        ]
    ],
])?>
~~~~~~~~~~~~~
