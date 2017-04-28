<?php

$open = true;
$url = 'https://goo.gl/forms/YTdrKcd8cPRI6BIy1';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
