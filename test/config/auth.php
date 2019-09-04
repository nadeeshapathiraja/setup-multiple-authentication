<?php

return [

    

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
//new addeds for admin and users
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'writer' => [
            'driver' => 'session',
            'provider' => 'writers',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
//new addeed
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],
        'writers' => [
            'driver' => 'eloquent',
            'model' => App\Writer::class,
        ],

    ],

    

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],



   
];
