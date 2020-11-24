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

    'firebase' => [
        'apiKey' => 'AIzaSyAJiPNFCPgcyMwJ74kTIvbloDpFjtoNMRw',
        'authDomain' => 'fyp-univis.firebaseapp.com',
        'databaseURL' => 'https://fyp-univis.firebaseio.com',
        'projectId' => 'fyp-univis',
        'storageBucket' => 'fyp-univis.appspot.com',
        'messagingSenderId' => '1017413433548',
        'appId' => '1:1017413433548:web:80905c4a434581790aaa69',
    ],
];
