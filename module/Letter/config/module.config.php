<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'letter_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(__DIR__ . '/../src/Letter/Entity')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Letter\Entity' => 'letter_driver'
                )
            )
        )
    ),

    'router' => array(
        'routes' => array(
            'letter' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/letter[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Letter',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'Letter' => 'Letter\Controller\LetterController',
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);