<?php
/**
 * FullCalendarPrintAsset.php
 *
 * Yii2 asset for FullCalendarPrint
 * https://fullcalendar.io
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\FullCalendarPrintAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\FullCalendarPrintAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\FullCalendarPrintAsset',
 */

namespace p2m\assets;

class FullCalendarPrintAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
