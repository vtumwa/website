<?php

$open = true;
$url = 'https://goo.gl/forms/AgctuZdYP4HKEq0s2';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
