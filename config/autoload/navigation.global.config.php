<?php
//sample navigation
return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Media',
                'resource' => 'cms.media.index',
                'route' => 'media',
                'pages' => array(
                    array(
                        'label' => 'Gallery',
                        'action' => 'index',
                        'resource' => 'cms.media.index',
                        'visible' => true,
                        'route' => 'media',
                    ),
                    array(
                        'label' => 'Add New',

                        'action' => 'add',
                        'resource' => 'cms.media.add',
                        'visible' => true,
                        'route' => 'media',
                    ),
                ),
            ),
            array(
                'label' => 'Post',
                'controller' => 'post',
                'action' => 'index',
                'resource' => 'cms.post.index',
                'visible' => true,
                'route' => 'post',
                'pages' => array(
                    array(
                        'label' => 'All Post',    
                        'action' => 'index',
                        'resource' => 'cms.post.index',
                        'visible' => true,
                        'route' => 'post',
                    ),
                    array(
                        'label' => 'Add New',
                        'action' => 'add',
                        'resource' => 'cms.post.add',
                        'visible' => true,
                        'route' => 'post',
                    ),
                ),
            ),
            array(
                'label' => 'Log',
                'resource' => 'cms.log.index',
                'route' => 'log',
            ),            
            array(
                'label' => 'Users',
                'controller' => 'admin',
                'action' => 'index',
                'resource' => 'zfcuser',
                'visible' => true,
                'route' => 'zfcuser',
                'class' => 'glyphicon glyphicon-user',
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
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
);
