<?php
/**
 * BootstrapSocialAsset.php
 *
 * Yii2 asset for Bootstrap Social
 * https://lipis.github.io/bootstrap-social/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\BootstrapSocialAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\BootstrapSocialAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\BootstrapSocialAsset',
 */

namespace p2m\assets;

class BootstrapSocialAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
