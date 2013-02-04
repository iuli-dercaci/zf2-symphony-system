<?php
/**
 * @author: Iuli Dercaci <iuli.dercaci@site-me.info>
 * @data: 2/5/13
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'Symphony\Controller\Symphony' => 'Symphony\Controller\SymphonyController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'symphony' => __DIR__ . '/../view',
        ),
    ),
);