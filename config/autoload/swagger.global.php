<?php

return [
    'swagger' => [
        /**
         * List a path or paths containing Swagger Annotated classes
         */
        'paths' => [
            __DIR__. '/../../module/Application/src/Controller',
        ],

        'resource_options' => [
            'output' => 'array',
            'json_pretty_print' => true, // for outputtype 'json'
            'defaultApiVersion' => null,
            'servers' => [
                [
                    'url' => 'https://example.com/api/v1', // servers replaces the host, basePath and schemes keywords used in OpenAPI 2.0.
                    'description' => null, // e.g. "Production server (uses live data)"
                ],
            ],
        ],
    ],
];