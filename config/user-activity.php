<?php

return [
    'activated'        => true, // active/inactive all logging
    'middleware'       => ['web', 'auth'],
    'route_path'       => 'admin/user-activity',
    'admin_panel_path' => 'admin/dashboard',
    'delete_limit'     => 7, // default 7 days

    'model' => [
        'game' => "App\Models\Game",
        'game_reference' => "App\Models\GameReference",
        'registration' => "App\Models\Registration",
        'specialty' => "App\Models\Specialty",
        'user' => "App\Models\User",
        'usher' => "App\Models\Usher",
        'venue' => "App\Models\Venue",
    ],

    'log_events' => [
        'on_create'     => true,
        'on_edit'       => true,
        'on_delete'     => true,
        'on_login'      => true,
        'on_lockout'    => true
    ]
];
