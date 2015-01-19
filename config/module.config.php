<?php

return array(
	'router' => array(
		'routes' => array(
			'zf2assetic' => array(
				'type'    => 'Literal',
				'options' => array(
					'route'    => '/zf2assetic',
					'defaults' => array(
						'__NAMESPACE__' => 'ZF2AsseticExamples\Controller',
						'controller'    => 'Index',
						'action'        => 'index',
					),
				),
				'may_terminate' => true,
				'child_routes' => array(
					'default' => array(
						'type'    => 'Segment',
						'options' => array(
							'route'    => '/[:action]',
							'constraints' => array(
								'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
							),
							'defaults' => array(
							),
						),
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			'ZF2AsseticExamples\Controller\Index' => 'ZF2AsseticExamples\Controller\IndexController',
		),
	),
	'service_manager' => array(
		'invokables' => array(
			'ZF2AsseticExamples\IndexModel' => 'ZF2AsseticExamples\Model\IndexModel',
		),
	),
	'view_manager' => array(
		'template_map' => array(
			'zf2asseticexamples/layout'  => __DIR__ . '/../view/layout.phtml'
		),
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
	'zf2assetic' => array(
		'assets' => array(
			'css' => array(
				'target' => 'styles.css',
				'viewHelper' => 'HeadLink',
				'leafs' => array(
					__DIR__ . '/../view/assets/css/css.css',
				),
				'filters' => array(
					'?CssMinFilter',
				),
			),
			'HeadLinkTest' => array(
				'target' => 'HeadLinkTest.css',
				'viewHelper' => 'HeadLink',
				'leafs' => array(
					__DIR__ . '/../view/assets/css/HeadLinkTest.css',
				),
				'filters' => array(
					'?CssMinFilter',
				),
			),
			'HeadStyleTest' => array(
				'viewHelper' => 'HeadStyle',
				'leafs' => array(
					__DIR__ . '/../view/assets/css/HeadStyleTest.css',
				),
				'filters' => array(
					'?CssMinFilter',
				),
			),
			'HeadLinkTestLess' => array(
				'target' => 'HeadLinkTestLess.css',
				'viewHelper' => 'HeadLink',
				'leafs' => array(
					__DIR__ . '/../view/assets/less/HeadLinkTestLess.less',
				),
				'filters' => array(
					'LessphpFilter',
					'?CssMinFilter',
				),
			),
			'HeadScriptLinkTest' => array(
				'target' => 'HeadScriptLinkTest.js',
				'viewHelper' => 'HeadScript',
				'leafs' => array(
					__DIR__ . '/../view/assets/scripts/HeadScriptLinkTest.js',
				),
				'filters' => array(
					'?JSMinFilter',
				),
			),
			'HeadScriptScriptTest' => array(
				'viewHelper' => 'HeadScript',
				'leafs' => array(
					__DIR__ . '/../view/assets/scripts/HeadScriptScriptTest.js',
				),
				'filters' => array(
					'?JSMinFilter',
				),
			),
			'InlineScriptLinkTest' => array(
				'viewHelper' => 'InlineScript',
				'leafs' => array(
					__DIR__ . '/../view/assets/scripts/InlineScriptLinkTest.js',
				),
				'filters' => array(
					'?JSMinFilter',
				),
			),
			'InlineScriptScriptTest' => array(
				'target' => 'InlineScriptScriptTest.js',
				'viewHelper' => 'InlineScript',
				'leafs' => array(
					__DIR__ . '/../view/assets/scripts/InlineScriptScriptTest.js',
				),
				'filters' => array(
					'?JSMinFilter',
				),
			),
		),
	),
);