<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '397571498304-km3nfaf6gf9ffqapadl7b9gp3hcje616.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],
<<<<<<< HEAD
=======

    'facebook' => [
        'client_id' => '541776160722058',
        'client_secret' => '2400ddc2f49186854f9c778d506b4488',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9

    'facebook' => [
        'client_id' => '541776160722058',
        'client_secret' => '2400ddc2f49186854f9c778d506b4488',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'stripe' => [
        'secret' => env('STRIPE_SECRET'),
   ],
];
