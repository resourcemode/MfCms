<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'cmsadmin' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/cmsadmin',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Cms\Controller',
                        'controller'    => 'index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'post' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route'    => '/post[/:action][/:id]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'controller' => 'Cms\Controller\Post',
                                'action'     => 'page',
                            ),
                        ),
                    ),
                ),
            ),
            'cmspost' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/cmsadmin/post[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Cms\Controller\Post',
                        'action'     => 'page',
                    ),
                ),
            ),
            'cmstest' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/cmsadmin/test[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Cms\Controller\Test',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
      
    'controllers' => array(
        'invokables' => array(
            'Cms\Controller\Index' => 'Cms\Controller\IndexController',
            'Cms\Controller\Test' => 'Cms\Controller\TestController',
            'Cms\Controller\Post' => 'Cms\Controller\PostController',          
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'cms' => __DIR__ . '/../view',
        ),
    ), 
//    'view_manager' => array(
//        'display_not_found_reason' => true,
//        'display_exceptions'       => true,
//        'doctype'                  => 'HTML5',
//        'not_found_template'       => 'error/404',
//        'exception_template'       => 'error/index',
//        'template_map' => array(
//            'layout/layout'           => __DIR__ . '/../view/layout/cms.layout',
//            'cms/test/index' => __DIR__ . '/../view/cms/index/index.phtml',
//            'cms/test/list' => __DIR__ . '/../view/cms/index/list.phtml',
//            'error/404'               => __DIR__ . '/../view/error/404.phtml',
//            'error/index'             => __DIR__ . '/../view/error/index.phtml',
//        ),
//        'template_path_stack' => array(
//            __DIR__ . '/cms/view',
//        ),
//    ),
);
