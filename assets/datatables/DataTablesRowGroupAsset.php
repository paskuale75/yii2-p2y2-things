<?php
/**
 * DataTablesRowGroupAsset.php
 *
 * Yii2 asset for DataTables RowReorder
 * https://github.com/DataTables/RowReorder
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesRowGroupAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesRowGroupAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesRowGroupAsset',
 */

namespace p2m\assets\datatables;

class DataTablesRowGroupAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
