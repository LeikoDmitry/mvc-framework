<?php

/**
 * Global Configuration Override
 **/

return [
    'doctrine' => [
        'driver' => [
            'app_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__.'/../../module/Application/src/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Application\Entity' => 'app_annotation_driver',
                ],
            ],
        ],
    ],
];
