<?php

$open = false;
$url = 'https://goo.gl/forms/18WBcE6fuuBmgByw2';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
