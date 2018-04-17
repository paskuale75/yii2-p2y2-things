<?php
/**
 * DataTablesButtonsAsset.php
 *
 * Yii2 asset for DataTables Buttons
 * https://github.com/DataTables/Buttons
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesButtonsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesButtonsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesButtonsAsset',
 */

namespace p2m\assets\datatables;

class DataTablesButtonsAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
