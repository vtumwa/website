<?php

$open = true;
$url = 'https://goo.gl/forms/5uJKNjjuKQuffCr53';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
