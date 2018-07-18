<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Pool ID
    |--------------------------------------------------------------------------
    |
    | This is the ID of your AWS Cognito User Pool.
    |
    */

    'pool-id' => env('AWS_COGNITO_IDENTITY_POOL_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Error Handler
    |--------------------------------------------------------------------------
    |
    | A Default error handler for handling failed authentication attempts.
    | See docs for available options.
    |
    */

    'errors' => [
        'handler' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | User Attributes
    |--------------------------------------------------------------------------
    |
    | This is the list of attributes that are present on your cognito users
    | which you want to map to the laravel user.
    |
    */

    'user-attributes' => [
        'email',
        'phone_number'
    ],

    /*
    |--------------------------------------------------------------------------
    | Default User Pool Application
    |--------------------------------------------------------------------------
    |
    | Here you can define the default application to use when making api calls
    | to the User Pool
    |
    */

    'app' => 'default',

    /*
    |--------------------------------------------------------------------------
    | User Pool Applications
    |--------------------------------------------------------------------------
    |
    | Here you can define the details of your applications through which the
    | User Pool will be accessed.
    |
    */

    'apps' => [

        'default' => [
            'client-id' => env('AWS_COGNITO_IDENTITY_APP_CLIENT_ID', ''),
            'refresh-token-expiration' => 30,
            'client-secret' => env('AWS_COGNITO_IDENTITY_APP_CLIENT_SECRET', ''),
        ],

    ],

];
