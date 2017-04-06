<?php

$open = true;
$url = 'https://goo.gl/forms/SAx4h9JHILJeZNmU2';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
