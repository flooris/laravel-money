<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel money
     |--------------------------------------------------------------------------
     */
    'locale'                     => config('app.locale', 'nl_NL'),
    'default_currency'           => 'EUR',
    'default_currency_attribute' => 'currency_iso',
    'currencies'                 => [
        'iso' => [
            'EUR',
        ],
    ],
];
