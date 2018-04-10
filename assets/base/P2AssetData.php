<?php
/**
 * P2AssetData.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2AssetData
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

class P2AssetData
{
	/*
	 * @var array
	 * protected $assetsData;
	 */

	 private static $assetsData = array(
		'jqueryAsset' => array(
			'name' => 'jquery',
			'version' => '3.3.1',
			'published' => [
				'sourcePath' => '@p2m@/jquery',
				'js' => [
					'jquery-##-version-##.min.js',
				],
			],
			'static' => [
				'baseUrl' => 'https://code.jquery.com',
				'js' => [
					'jquery-##-version-##.min.js',
				],
				'jsIntegrity' => 'sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT',
				'crossorigin' => 'anonymous',
			],
		),
		'bootstrapPluginAsset' => array(
			'name' => 'bootstrap',
			'version' => '4.0.0',
			'published' => [
				'fullPath' => 'fullPath',
				'basePath' => 'basePath',
				'sourcePath' => '@twbs/bootstrap/dist',
				'js' => [
					'js/bootstrap.min.js',
				],
			],
			'static' => [
				'baseUrl' => 'https://maxcdn.bootstrapcdn.com/bootstrap/',
				'js' => [
					'js/bootstrap.min.js',
				],
				'jsIntegrity' => 'sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl',
				'crossorigin' => 'anonymous',
			],
			'depends' => [
				'p2m\assets\base\P2JqueryAsset',
			],
		),
	 );
}
