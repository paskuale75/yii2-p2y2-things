<?php
/**
 * _assetsData.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS FILE DIRECTLY!       ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

return array(
	'jqueryAsset' => [
		'version' => '3.3.1',
		'data' => array(
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
	],
	'bootstrapPluginAsset' => [
		'version' => '4.0.0',
		'data' => array(
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
	],
);
