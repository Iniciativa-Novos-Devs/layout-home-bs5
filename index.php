<?php

$pages = [
    'home'      => [
        'title' => 'Home',
    ],
    'contact'   => [
        'title' => 'Contact',
    ],
    'terms'   => [
        'title' => 'Terms',
    ],
    'privacy'   => [
        'title' => 'Privacy',
    ],
    'jobs'   => [
        'title' => 'Jobs',
    ],
];

$page_to_load = isset($_GET['page']) && in_array($_GET['page'], array_keys($pages)) ? $_GET['page'] : 'home';

$page_title = $pages[$page_to_load]['title'] ?? '';
$page_title = $page_title ? "$page_title - " : '';

require_once __DIR__."/includes/layout-app.php";
