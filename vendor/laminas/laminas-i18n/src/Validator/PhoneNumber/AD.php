<?php

return [
    'code' => '376',
    'patterns' => [
        'national' => [
            'general' => '/^(?:[346-9]|180)\d{5}$/',
            'fixed' => '/^[78]\d{5}$/',
            'mobile' => '/^[346]\d{5}$/',
            'tollfree' => '/^180[02]\d{4}$/',
            'premium' => '/^9\d{5}$/',
            'emergency' => '/^11[0268]$/',
        ],
        'possible' => [
            'general' => '/^\d{6,8}$/',
            'fixed' => '/^\d{6}$/',
            'mobile' => '/^\d{6}$/',
            'tollfree' => '/^\d{8}$/',
            'premium' => '/^\d{6}$/',
            'emergency' => '/^\d{3}$/',
        ],
    ],
];
