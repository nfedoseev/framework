<?php
/**
 * Daitel Framework | Base File
 *
 * @author Nikita Fedoseev <agent.daitel@gmail.com>
 * @link https://github.com/daitel/framework
 *
 */
if (empty($dir)) {
	$dir = 'framework';
}
$modules = array(
	'base' => array(
		'base/DfTimer',
		'logging/DfLogger',
		'base/DfComponent',
		'base/DfFile',
		'logging/DfLoggerFile'
	),
	'db' => array(
		'db/DfMysql',
		'db/DfSql'
	),
	'utils' => array(
		'utils/DfConverter'
	)
);

foreach ($modules as $module) {
	foreach ($module as $file) {
		$file_path = $dir . '/' . $file . '.php';
		if (file_exists($file_path)) {
			require($file_path);
		}
	}
}

require_once('base/DfTimer.php');
$time_start = DfTimer_start();

$log = new DfLogger();

