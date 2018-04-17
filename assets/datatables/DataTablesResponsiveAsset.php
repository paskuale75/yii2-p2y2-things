<?php
/**
 * DataTablesResponsiveAsset.php
 *
 * Yii2 asset for DataTables Responsive
 * https://github.com/DataTables/Responsive
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesResponsiveAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesResponsiveAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesResponsiveAsset',
 */

namespace p2m\assets\datatables;

class DataTablesResponsiveAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$this->setAssetProperties();
		parent::init();
	}
}
