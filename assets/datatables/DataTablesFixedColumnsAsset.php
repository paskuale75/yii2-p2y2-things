<?php
/**
 * DataTablesFixedColumnsAsset.php
 *
 * Yii2 asset for DataTables FixedColumns
 * https://github.com/DataTables/FixedColumns
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesFixedColumnsAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesFixedColumnsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesFixedColumnsAsset',
 */

namespace p2m\assets\datatables;

class DataTablesFixedColumnsAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
