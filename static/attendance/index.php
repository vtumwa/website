<?php

$open = true;
$url = 'https://goo.gl/forms/wWOlrYzT1yHe7B9t2';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
