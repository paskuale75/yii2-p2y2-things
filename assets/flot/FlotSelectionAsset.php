<?php
/**
 * FlotSelectionAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\flot\FlotSelectionAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\flot\FlotSelectionAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\flot\FlotSelectionAsset',
 */

namespace p2m\assets\flot;

class FlotSelectionAsset extends \p2m\assets\flot\FlotAssetBase
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
