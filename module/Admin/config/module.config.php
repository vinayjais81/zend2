<?php
return array(
    
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Admin' => 'Admin\Controller\AdminController',
            'Admin\Controller\User' => 'Admin\Controller\UserController',
        ),
    ),
    
    'router' => array(
        'routes' => array(
            'admin' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Admin',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin/user' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/admin/user[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\User',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'admin/layout' => __DIR__ . '/../view/layout/layout.phtml',
        ),
        'template_path_stack' => array(
            'admin' => __DIR__ . '/../view',
        ),
    ),
    
);
?>
