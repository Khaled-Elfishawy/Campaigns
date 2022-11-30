<?php

return [
    'activated'        => true, // active/inactive all logging
    'middleware'       => ['web', 'auth'],
    'route_path'       => '/user-activity',
    'admin_panel_path' => '/',
    'delete_limit'     => 30, // default 7 days

    'model' => [
        'user' => "App\Models\User",
        'lead' => "App\Models\Lead",
        'lead' => "App\Models\Campaign",
        'lead' => "App\Models\Comment",
    ],

    'log_events' => [
        'on_create'     => false,
        'on_edit'       => true,
        'on_delete'     => true,
        'on_login'      => true,
        'on_lockout'    => true
    ]
];
