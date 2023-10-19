<?php

return [
    'roles' => [
        'admin' => 'Admin',
        'moderator' => 'moderator',
        'client' => 'Client',
        'subscriber' => 'Subscriber',
    ],
    'roles_priorities' => [
        'admin' => 40,
        'moderator' => 30,
        'client' => 20,
        'subscriber' => 10,
    ],
    'actions' => [
        // 'user' => [
        //     'create' => 'Create user page',
        //     'store' => 'Store user',
        //     'read' => 'Show user',
        //     'read_all' => 'Show all users',
        //     'edit' => 'Edit user page',
        //     'update' => 'Update user',
        //     'delete' => 'Delete user',
        // ],
    ],

    'dev' => [
        'admin' => [
            'name' => env('DEV_ADMIN_NAME', 'Admin'),
            'email' => env('DEV_ADMIN_EMAIL', 'admin@gmail.com'),
            'password' => env('DEV_ADMIN_PASSWORD', 'secret'),
        ],
        'moderator' => [
            'name' => env('DEV_MODERATOR_NAME', 'Moderator'),
            'email' => env('DEV_MODERATOR_EMAIL', 'moderator@gmail.com'),
            'password' => env('DEV_MODERATOR_PASSWORD', 'secret'),
        ],
        'client' => [
            'name' => env('DEV_CLIENT_NAME', 'Client'),
            'email' => env('DEV_CLIENT_EMAIL', 'client@gmail.com'),
            'password' => env('DEV_CLIENT_PASSWORD', 'secret'),
        ],
        'subscriber' => [
            'name' => env('DEV_SUBSCRIBER_NAME', 'Subscriber'),
            'email' => env('DEV_SUBSCRIBER_EMAIL', 'subscriber@gmail.com'),
            'password' => env('DEV_SUBSCRIBER_PASSWORD', 'secret'),
        ],
    ],
];
