<?php
/**
 * P2FontAwesomeAsset.php
 *
 * Yii2 asset for Font Awesome
 * http://fontawesome.io/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2FontAwesomeAsset
 * @license MIT
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2FontAwesomeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2FontAwesomeAsset',
 */

namespace p2m\assets\base;

class P2FontAwesomeAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->configureDataFileAsset();
		parent::init();
	}
}
