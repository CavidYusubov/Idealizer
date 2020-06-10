<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => 'images',
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],
        'startup_logo' => [
            'driver' => 'local',
            'root' =>'images/startups/logo',
            'url' => env('APP_URL').'/public/images/startups/logo',
            'visibility' => 'public',
        ],
        'startup_images' => [
            'driver' => 'local',
            'root' =>'images/startups/images',
            'url' => env('APP_URL').'/public/images/startups/images',
            'visibility' => 'public',
        ],
        'startup_files' => [
            'driver' => 'local',
            'root' =>'images/startups/files',
            'url' => env('APP_URL').'/public/images/startups/files',
            'visibility' => 'public',
        ],
        'konkurs_icons' => [
            'driver' => 'local',
            'root' =>'images/konkurs/actions_icons',
            'url' => env('APP_URL').'/public/images/konkurs/actions_icons',
            'visibility' => 'public',
        ],



        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

];