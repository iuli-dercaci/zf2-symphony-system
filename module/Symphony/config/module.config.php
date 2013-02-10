<?php
/**
 * @author: Iuli Dercaci <iuli.dercaci@site-me.info>
 * @data: 2/5/13
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'Symphony\Controller\Index' => 'Symphony\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'symphony' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/[:controller][/:action]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        'controller'    => 'Symphony\Controller\Index',
                        'action'        => 'index',
                    )
                )
            ),
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Symphony\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            )
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);