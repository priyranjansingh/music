<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
require_once( dirname(__FILE__) . '/../components/helpers.php');
require(dirname(__FILE__) . '/global.php');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Music',
	'theme' => 'frontend',
	'defaultController' => 'home',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'admin',
		'home',
		'albums',
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl' => array('/site/login'),
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<module:(admin)>/<controller:\w+>/<action:\w+>/<id:(.*?)>' => '<module>/<controller>/<action>/<id>',
                '<module:(admin)>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<module:(admin)>/<controller:\w+>' => '<module>/<controller>',
                '<module:(gii)>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<module:(gii)>/<controller:\w+>' => '<module>/<controller>',
                '<module:\w+>/<action:\w+>/<id:(.*?)>' => '<module>/default/<action>/<id>',
                '<module:\w+>/<action:\w+>' => '<module>/default/<action>',
			),
		),
		

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				array(
                        'class'=>'CFileLogRoute',
                        'levels'=>'trace',
                        'categories'=>'system.db.*',
                        'logFile'=>'sql.log',
                ),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>$global
);
