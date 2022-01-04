<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id'     =>'301424957743933',
        'client_secret' =>'9dc1a0518ed73998a2f6ce5b8d072fa9',
        'redirect'      =>'http://localhost:8000/auth/facebook/callback',
    ],
    'github' => [
        'client_id'     =>'33d46d0349fca606439b',
        'client_secret' =>'72a84315cb2ac38bf238a6444ba47f9d9d4e796f',
        'redirect'      =>'http://localhost:8000/auth/github/callback',
    ],
    'google' => [
        'client_id'     =>'976131790745-ag7t65526pu6b1pq8r9912t8708gc2ea.apps.googleusercontent.com',
        'client_secret' =>'74c36JBCF_FnX4c49I2uNDLQ',
        'redirect'      =>'http://localhost:8000/auth/google/callback',

    ],

];
