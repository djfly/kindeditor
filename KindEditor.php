<?php
/**
 * Usage:
 * <?=\djfly\kindeditor\KindEditor::widget([
 *   'id'=>'Article_content',	# Textarea id
 *
 *   # Additional Parameters (Check http://www.kindsoft.net/docs/option.html)
 *   'items' => [
 *       'width'=>'700px',
 *       'height'=>'300px',
 *       'themeType'=>'simple',
 *       'allowFileManager'=>false,
 *       'allowImageUpload'=>false,
 *       'items'=>[
 *           'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
 *           'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
 *           'insertunorderedlist', '|', 'emoticons', 'image', 'link',
 *   ]],
 * ]); ?>
 */

/**
 * KindEditor InputWidget.
 */
namespace djfly\kindeditor;
use Yii;

class KindEditor extends \yii\widgets\InputWidget
{
	public $language = '';

	/**
	 * @var array the kindeditor items configuration.
	 */
	public $items = array();

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		// Prevents the extension from registering scripts and publishing assets when ran from the command line.
		if (Yii::$app instanceof \yii\console\Application){
			return;
		}
		parent::init();
		Yii::setAlias('djfly/kindeditor', dirname(dirname(__DIR__)) . '/djfly/kindeditor');
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		$script = '';
		$script = $script.'KindEditor.ready(function(K){var editor=K.create("textarea[id='.$this->options['id'].']", {'.$this->renderItems($this->items).'})});';
		$this->getView()->registerJs($script);
		KindEditorAsset::register($this->getView());
	}

	/**
	 * Renders the items.
	 * @param array $items the item configuration.
	 */
	protected function renderItems($items)
	{
		$script = '';
		foreach ($items as $key => $item)
		{
			if(is_array($item))
			{
				$script = $script."'$key':[";
				foreach ($item as $value)
					$script = $script."'$value',";
				$script = $script."],";
			} else
				$script = $script."'$key':'$item',";
		}
		return $script;
	}
}
