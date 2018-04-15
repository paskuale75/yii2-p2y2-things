<?php
return array(
	'P2JqueryAsset' => array(
		'version' => '3.2.1',
		'published' => [
			'sourcePath' => '@p2m@/jquery',
			'js' => [
				'jquery-##-version-##.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//code.jquery.com',
			'js' => [
				'jquery-##-version-##.min.js',
			],
		],
	),
	'P2YiiAsset' => array(
		'published' => [
			'sourcePath' => '@yii/assets',
			'js' => [
				'yii.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2JqueryAsset',
		],
	),
	'P2BootstrapPluginAsset' => array(
		'version' => '3.3.7',
		'published' => [
			'sourcePath' => '@bower/bootstrap/dist',
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//maxcdn.bootstrapcdn.com/bootstrap/',
			'js' => [
				'js/bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2JqueryAsset',
		],
	),
	'P2BootstrapAsset' => array(
		'version' => '3.3.7',
		'published' => [
			'sourcePath' => '@p2m@/bootstrap-##-version-##-dist',
			'css' => [
				'css/bootstrap.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//maxcdn.bootstrapcdn.com/bootstrap/##-version-##',
			'css' => [
				'css/bootstrap.min.css',
			],
		],
		'depends' => [
			'p2m\assets\base\P2BootstrapPluginAsset',
		],
	),
	'P2FontAwesomeAsset' => array(
		'version' => '4.7.0',
		'published' => [
			'sourcePath' => '@vendor/fortawesome/font-awesome',
			'css' => [
				'css/font-awesome.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//maxcdn.bootstrapcdn.com/font-awesome/##-version-##',
			'css' => [
				'css/font-awesome.min.css',
			],
		],
	),
	'DataTablesBundleAsset' => array(
		'depends' => [
			'p2m\assets\JSZipAsset',
			'p2m\assets\PdfMakeAsset',
			'p2m\assets\datatables\DataTablesBootstrapAsset',
			'p2m\assets\datatables\DataTablesAutoFillAsset',
			'p2m\assets\datatables\DataTablesButtonsAsset',
			'p2m\assets\datatables\DataTablesButtonsColVisAsset',
			'p2m\assets\datatables\DataTablesButtonsFlashAsset',
			'p2m\assets\datatables\DataTablesButtonsHTML5Asset',
			'p2m\assets\datatables\DataTablesButtonsPrintAsset',
			'p2m\assets\datatables\DataTablesColReorderAsset',
			'p2m\assets\datatables\DataTablesFixedColumnsAsset',
			'p2m\assets\datatables\DataTablesFixedHeaderAsset',
			'p2m\assets\datatables\DataTablesKeyTableAsset',
			'p2m\assets\datatables\DataTablesResponsiveAsset',
			'p2m\assets\datatables\DataTablesRowGroupAsset',
			'p2m\assets\datatables\DataTablesRowReorderAsset',
			'p2m\assets\datatables\DataTablesScrollerAsset',
			'p2m\assets\datatables\DataTablesSelectAsset',
		],
	),
	'DataTablesBootstrapAsset' => array(
		'version' => '1.10.15',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/DataTables-##-version-##/media',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/##-version-##',
			'css' => [
				'css/dataTables.bootstrap.min.css',
			],
			'js' => [
				'js/jquery.dataTables.min.js',
				'js/dataTables.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'DataTablesAutoFillAsset' => array(
		'version' => '2.2.0',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/AutoFill-##-version-##',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/autofill/##-version-##',
			'css' => [
				'css/autoFill.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.autoFill.min.js',
				'js/autoFill.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesButtonsAsset' => array(
		'version' => '1.3.1',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Buttons-##-version-##',
			'css' => [
				'css/buttons.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.buttons.min.js',
				'js/buttons.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'css' => [
				'css/buttons.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.buttons.min.js',
				'js/buttons.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesButtonsColVisAsset' => array(
		'version' => '1.3.1',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Buttons-##-version-##',
			'js' => [
				'js/buttons.colVis.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.colVis.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesButtonsAsset',
		],
	),
	'DataTablesButtonsFlashAsset' => array(
		'version' => '1.3.1',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Buttons-##-version-##',
			'js' => [
				'js/buttons.flash.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.flash.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesButtonsAsset',
		],
	),
	'DataTablesButtonsHTML5Asset' => array(
		'version' => '1.3.1',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Buttons-##-version-##',
			'js' => [
				'js/buttons.html5.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.html5.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesButtonsAsset',
		],
	),
	'DataTablesButtonsPrintAsset' => array(
		'version' => '1.3.1',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Buttons-##-version-##',
			'js' => [
				'js/buttons.print.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/buttons/##-version-##',
			'js' => [
				'js/buttons.print.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesButtonsAsset',
		],
	),
	'DataTablesColReorderAsset' => array(
		'version' => '1.3.3',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/ColReorder-##-version-##',
			'css' => [
				'css/colReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.colReorder.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/colreorder/##-version-##',
			'css' => [
				'css/colReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.colReorder.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesFixedColumnsAsset' => array(
		'version' => '3.2.2',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/FixedColumns-##-version-##',
			'css' => [
				'css/fixedColumns.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedColumns.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/fixedcolumns/##-version-##',
			'css' => [
				'css/fixedColumns.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedColumns.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesFixedHeaderAsset' => array(
		'version' => '3.1.2',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/FixedHeader-##-version-##',
			'css' => [
				'css/fixedHeader.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/fixedheader/##-version-##',
			'css' => [
				'css/fixedHeader.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.fixedHeader.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesKeyTableAsset' => array(
		'version' => '2.2.1',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/KeyTable-##-version-##',
			'css' => [
				'css/keyTable.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.keyTable.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/keytable/##-version-##',
			'css' => [
				'css/keyTable.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.keyTable.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesResponsiveAsset' => array(
		'version' => '2.1.0',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Responsive-##-version-##',
			'css' => [
				'css/responsive.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.responsive.min.js',
				'js/responsive.bootstrap.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/responsive/##-version-##',
			'css' => [
				'css/responsive.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.responsive.min.js',
				'js/responsive.bootstrap.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesRowGroupAsset' => array(
		'version' => '1.0.0',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/RowGroup-##-version-##',
			'css' => [
				'css/rowGroup.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowGroup.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/rowgroup/##-version-##',
			'css' => [
				'css/rowGroup.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowGroup.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesRowReorderAsset' => array(
		'version' => '1.2.0',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/RowReorder-##-version-##',
			'css' => [
				'css/rowReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowReorder.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/rowreorder/##-version-##',
			'css' => [
				'css/rowReorder.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.rowReorder.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesScrollerAsset' => array(
		'version' => '1.4.2',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Scroller-##-version-##',
			'css' => [
				'css/scroller.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/scroller/##-version-##',
			'css' => [
				'css/scroller.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'DataTablesSelectAsset' => array(
		'version' => '1.2.2',
		'published' => [
			'sourcePath' => '@p2m@/DataTables/Select-##-version-##',
			'css' => [
				'css/select.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/select/##-version-##',
			'css' => [
				'css/select.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.select.min.js',
			],
		],
		'depends' => [
			'p2m\assets\datatables\DataTablesBootstrapAsset',
		],
	),
	'JSZipAsset' => array(
		'version' => '3.1.3',
		'published' => [
			'sourcePath' => '@vendor/stuk/jszip/dist',
			'js' => [
				'jszip.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdnjs.cloudflare.com/ajax/libs/jszip/##-version-##',
			'js' => [
				'jszip.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'PdfMakeAsset' => array(
		'version' => '0.1.27',
		'published' => [
			'sourcePath' => '@vendor/bpampuch/pdfmake',
			'js' => [
				'build/pdfmake.min.js',
				'build/vfs_fonts.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.rawgit.com/bpampuch/pdfmake/##-version-##',
			'js' => [
				'build/pdfmake.min.js',
				'build/vfs_fonts.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotBundleAsset' => array(
		'depends' => [
			'p2m\assets\flot\FlotAsset',
			'p2m\assets\ColorHelpersAsset',
			'p2m\assets\flot\FlotCanvasAsset',
			'p2m\assets\flot\FlotCategoriesAsset',
			'p2m\assets\flot\FlotCrosshairAsset',
			'p2m\assets\flot\FlotErrorbarsAsset',
			'p2m\assets\flot\FlotFillbetweenAsset',
			'p2m\assets\flot\FlotImageAsset',
			'p2m\assets\flot\FlotNavigateAsset',
			'p2m\assets\flot\FlotPieAsset',
			'p2m\assets\flot\FlotResizeAsset',
			'p2m\assets\flot\FlotSelectionAsset',
			'p2m\assets\flot\FlotStackAsset',
			'p2m\assets\flot\FlotSymbolAsset',
			'p2m\assets\flot\FlotThresholdAsset',
			'p2m\assets\flot\FlotTimeAsset',
			'p2m\assets\flot\FlotTooltipAsset',
		],
	),
	'FlotAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotCanvasAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.canvas.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.canvas.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotCategoriesAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.categories.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.categories.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotChartsAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.min.js',
				'jquery.colorhelpers.min.js',
				'jquery.flot.canvas.min.js',
				'jquery.flot.categories.min.js',
				'jquery.flot.crosshair.min.js',
				'jquery.flot.errorbars.min.js',
				'jquery.flot.fillbetween.min.js',
				'jquery.flot.image.min.js',
				'jquery.flot.navigate.min.js',
				'jquery.flot.pie.min.js',
				'jquery.flot.resize.min.js',
				'jquery.flot.selection.min.js',
				'jquery.flot.stack.min.js',
				'jquery.flot.symbol.min.js',
				'jquery.flot.threshold.min.js',
				'jquery.flot.time.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.min.js',
				'jquery.colorhelpers.min.js',
				'jquery.flot.canvas.min.js',
				'jquery.flot.categories.min.js',
				'jquery.flot.crosshair.min.js',
				'jquery.flot.errorbars.min.js',
				'jquery.flot.fillbetween.min.js',
				'jquery.flot.image.min.js',
				'jquery.flot.navigate.min.js',
				'jquery.flot.pie.min.js',
				'jquery.flot.resize.min.js',
				'jquery.flot.selection.min.js',
				'jquery.flot.stack.min.js',
				'jquery.flot.symbol.min.js',
				'jquery.flot.threshold.min.js',
				'jquery.flot.time.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotCrosshairAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.crosshair.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.crosshair.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotErrorbarsAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.errorbars.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.errorbars.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotFillbetweenAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.fillbetween.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.fillbetween.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotImageAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.image.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.image.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotNavigateAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.navigate.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.navigate.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotPieAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.pie.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.pie.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotResizeAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.resize.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.resize.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotSelectionAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.selection.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.selection.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotStackAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.stack.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.stack.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotSymbolAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.symbol.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.symbol.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotThresholdAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.threshold.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.threshold.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotTimeAsset' => array(
		'version' => '0.8.3',
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.time.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.time.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlotTooltipAsset' => array(
		'version' => '0.9.0',
		'published' => [
			'sourcePath' => '@p2m@/flot.tooltip-##-version-##',
			'js' => [
				'js/jquery.flot.tooltip.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot.tooltip/##-version-##',
			'js' => [
				'jquery.flot.tooltip.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'ColorHelpersAsset' => array(
		'version' => '1.1-1',
		'published' => [
			'sourcePath' => '@p2m@/jquery-colorhelpers-jquery-colorhelpers-##-version-##',
			'js' => [
				'jquery.colorhelpers.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\flot\FlotTooltipAsset',
		],
	),
	'AmplitudejsAsset' => array(
		'version' => '2.2',
		'published' => [
			'sourcePath' => '@p2m@/amplitudejs-##-version-##',
			'js' => [
				'js/amplitude.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],

	),
	'AnimateAsset' => array(
		'version' => '3.5.2',
		'published' => [
			'sourcePath' => '@vendor/drmonty/animate.css',
			'css' => [
				'css/animate.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/animate.css/##-version-##',
			'css' => [
				'animate.min.css',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'BootstrapSocialAsset' => array(
		'version' => '5.1.1',
		'published' => [
			'sourcePath' => '@p2m@/bootstrap-social-##-version-##',
			'css' => [
				'bootstrap-social.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/##-version-##',
			'css' => [
				'bootstrap-social.min.css',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'BootstrapSweetalertAsset' => array(
		'published' => [
			'sourcePath' => '@p2m@/bootstrap-sweetalert-##-version-##/dist',
			'css' => [
				'sweet-alert.css',
			],
			'js' => [
				'sweet-alert.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'BootstrapSwitchAsset' => array(
		'version' => '3.3.2',
		'published' => [
			'sourcePath' => '@vendor/nostalgiaz/bootstrap-switch/dist',
			'css' => [
				'css/bootstrap3/bootstrap-switch.min.css',
			],
			'js' => [
				'js/bootstrap-switch.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/##-version-##',
			'css' => [
				'css/bootstrap3/bootstrap-switch.min.css',
			],
			'js' => [
				'js/bootstrap-switch.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'CircleButtonsAsset' => array(
		'published' => [
			'sourcePath' => '@p2m@/pub',
			'css' => [
				'css/circle-buttons.css',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'EkkoLightboxAsset' => array(
		'version' => '4.0.1',
		'published' => [
			'sourcePath' => '@vendor/drmonty/ekko-lightbox',
			'css' => [
				'css/ekko-lightbox.min.css',
			],
			'js' => [
				'js/ekko-lightbox.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/##-version-##',
			'css' => [
				'ekko-lightbox.min.css',
			],
			'js' => [
				'ekko-lightbox.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FitvidsAsset' => array(
		'version' => '1.2.0',
		'published' => [
			'sourcePath' => '@p2m@/FitVids.js-##-version-##',
			'js' => [
				'jquery.fitvids.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/fitvids/##-version-##',
			'js' => [
				'jquery.fitvids.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FlagIconCssAsset' => array(
		'version' => '2.8.0',
		'published' => [
			'sourcePath' => '@vendor/components/flag-icon-css',
			'css' => [
				'css/flag-icon.min.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdn.jsdelivr.net/flag-icon-css/##-version-##',
			'css' => [
				'css/flag-icon.min.css',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	),
	'FullCalendarAsset' => array(
		'version' => '3.2.0',
		'published' => [
			'sourcePath' => '@p2m@/fullcalendar-##-version-##',
			'css' => [
				'fullcalendar.min.css',
			],
			'js' => [
				'fullcalendar.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/##-version-##',
			'css' => [
				'fullcalendar.min.css',
			],
			'js' => [
				'fullcalendar.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
			'p2m\assets\MomentAsset',
			'p2m\assets\FullCalendarPrintAsset',
			'p2m\assets\JuiAsset',
		],
	),
);
