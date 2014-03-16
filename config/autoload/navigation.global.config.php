<?php
return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Post',
                'controller' => 'post',
                'action' => 'page',
                'resource' => 'cms.post.page',
                'visible' => true,
                'route' => 'cmsadmin/post',
                'pages' => array(
                    array(
                        'label' => 'All Post',   
                        'controller' => 'post',
                        'action' => 'page',
                        'resource' => 'cms.post.page',
                        'visible' => true,
                        'route' => 'cmsadmin/post',
                    ),
                    array(
                        'label' => 'Add New',
                        'controller' => 'post',
                        'action' => 'add',
                        'resource' => 'cms.post.add',
                        'visible' => true,
                        'route' => 'cmsadmin/post',
                    ),
                ),
            ),
            array(
                'label' => 'Test',
                'controller' => 'test',
                'action' => 'index',
                'resource' => 'cms.test.index',
                'visible' => true,
                'route' => 'cmstest',
                'pages' => array(
                    array(
                        'label' => 'All Test',    
                        'action' => 'index',
                        'resource' => 'cms.test.index',
                        'visible' => true,
                        'route' => 'cmstest',
                    ),
                    array(
                        'label' => 'List',    
                        'action' => 'index',
                        'resource' => 'cms.test.list',
                        'visible' => true,
                        'route' => 'cmstest',
                    ),
                ),
            ),
//            array(
////                'label' => 'Log',
////                'resource' => 'cms.log.index',
////                'route' => 'log',
////            ),            
            array(
                'label' => 'Users',
                'controller' => 'admin',
                'action' => 'index',
                'resource' => 'zfcuser',
                'visible' => true,
                'route' => 'zfcuser',
                'class' => '',
                'pages' => array(
                    array(
                        'label' => 'All Users',
                        'action' => 'index',
                        'resource' => 'cms.admin.index',
                        'visible' => true,
                        'route' => 'admin',
                    ),
                    array(
                        'label' => 'Add New',
                        'action' => 'add',
                        'resource' => 'cms.admin.add',
                        'visible' => true,
                        'route' => 'admin',
                    ),
                    array(
                        'label' => 'Sign Out',
                        'route' => 'zfcuser/logout',
                        'class' => 'glyphicon glyphicon-off',
                    ),
                ),
            ),       
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            //'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory', 
        ),
    ),
);
