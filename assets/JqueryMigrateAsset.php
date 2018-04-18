<?php
/**
 * JqueryMigrateAsset.php
 *
 * Yii2 asset for jQuery Migrate
 * http://jquery.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\JqueryMigrateAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\JqueryMigrateAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\JqueryMigrateAsset',
 */

namespace p2m\assets;

class JqueryMigrateAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
