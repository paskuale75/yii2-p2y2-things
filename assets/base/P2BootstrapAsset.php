<?php
/**
 * P2BootstrapAsset.php
 *
 * Yii2 asset for Bootstrap
 * http://getbootstrap.com/
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2BootstrapAsset
 * @license MIT
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

use p2m\base\helpers\AssetsSettings;

class P2BootstrapAsset extends \p2m\assets\base\P2AssetBundle
{
	public function init()
	{
		$bootswatch = self::bootswatch();

		if($bootswatch) {
			$this->assetData['sourcePath'] =
				'@vendor/thomaspark/bootswatch/' . $bootswatch;
			$this->assetData['baseUrl'] =
				'stackpath.bootstrapcdn.com/bootswatch/##-version-##/' . $bootswatch;
		}

		$this->setAssetProperties();
		parent::init();
	}
}

/* params
	'p2m' => [
		'assets' => [
			...
			// Bootswatch themes
			'bootswatch' = 'cerulean', // set to _one_ of:
				// 'cerulean', 'cosmo', 'cyborg', 'darkly',
				// 'flatly', 'journal', 'lumen', 'paper',
				// 'readable', 'sandstone', 'simplex', 'slate',
				// 'spacelab', 'superhero', 'united', 'yeti',
				// or false or not set to use no theme
		],
		...
	],
*/
