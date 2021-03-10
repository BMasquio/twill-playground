<?php

return [
    'frontend' => [
        'views_path' => 'site',
    ],
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,

        'publish_date_24h' => true, // enable 24h format in publisher dates
        'publish_date_format' => 'd F Y H:i', // format used by publication date pickers
        'publish_date_display_format' => 'DD MMMM YYYY HH:mm', // format used when displaying the publication date
    ],
];
