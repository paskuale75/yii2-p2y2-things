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

use p2m\assets\base\P2AssetData;

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
	 *
	 * @var boolean
	 * public $_useStatic = false;
	 *
	 * @var array | false
	 * public $_staticEnd = [] | false;
	 */

	protected static getDataFor($assetName)
	{
		if(!array_key_exists($assetName, P2AssetData::assetsData)) {
			return false;
		}

		$assetData = P2AssetData::assetsData[$assetName];

		if(!array_key_exists('version', $assetData)) {
			$this->version = $assetData['version'];
		}
		if(!array_key_exists('data', $assetData)) {
			$this->resourceData = $assetData['data'];
		}

		return true;
	}




	public static function dataFor($assetName)
	{
		return self::assetsData[$assetName];
	}

}
