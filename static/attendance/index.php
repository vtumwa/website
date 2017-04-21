<?php

$open = true;
$url = 'https://goo.gl/forms/VZ3xv6qYfLLLoP9x2';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
