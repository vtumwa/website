<?php

$open = false;
$url = 'https://docs.google.com/forms/d/e/1FAIpQLScoPP8r4G0Ycy_rA-qA1O9aTsGc2QTen-YQqi_8OXnhkwFX1Q/viewform?usp=sf_link';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
