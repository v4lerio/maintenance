<?php

return [
    'deletableTimeLimit' => 60 * 60,
    'linkExpiration' => 60 * 60 * 24,
    'imageWidth' => 2048,
    'imageHeight' => 2048,
    'documentables' => [
        'owner' => App\Owner::class,
        'workorder' => App\WorkOrder::class,
    ],
];
