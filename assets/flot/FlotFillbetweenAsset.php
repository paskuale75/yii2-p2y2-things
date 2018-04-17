<?php
/**
 * FlotFillbetweenAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\flot\FlotFillbetweenAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\flot\FlotFillbetweenAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\flot\FlotFillbetweenAsset',
 */

namespace p2m\assets\flot;

class FlotFillbetweenAsset extends \p2m\assets\flot\FlotAssetBase
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
