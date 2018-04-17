<?php
/**
 * P2AssetBundle.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2AssetBundle
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

namespace p2m\assets\base;

class P2AssetBundle extends \p2m\base\assets\P2AssetBase
{
	/*
	 * @var string
	 * protected $_p2mProjectId;
	 */
	protected $_p2mProjectId = 'yii2-p2y2-things';

	/*
	 * @var string
	 * protected $version;
	 */
	protected $version; // = '0.0.0'

	/*
	 * @var array
	 * protected $assetData;
	 */

	/**
	 * Yii asset properties
	 *
	 * @var string
	 * public $sourcePath;
	 *
	 * @var string
	 * public $baseUrl;
	 *
	 * @var array
	 * public $css = [];
	 *
	 * @var array
	 * public $cssOptions = [];
	 *
	 * @var array
	 * public $js = [];
	 *
	 * @var array
	 * public $jsOptions = [];
	 *
	 * @var array
	 * public $depends = [];
	 *
	 * @var array
	 * public $publishOptions = [];
	 */

	/*
	 * P2 asset data structure

	'assetName' => array(
		'version' => 'version',
		'sourcePath' => 'sourcePath',
		'baseUrl' => 'baseUrl',
		'css' => [
		],
		'js' => [
		],
		'cssOptions' => [
		],
		'jsOptions' => [
		],
		'depends' => [
		],
		'publishOptions' => [
		],
	),

	 */

	public function __construct()
	{
		$allAssetsData = require(__DIR__ . '/_assetsData.php');

		if(!array_key_exists(get_class($this), $allAssetsData)) {
			return;
		}

		$this->assetData = $allAssetsData[$assetName];
		$allAssetsData = null;
	}
}
