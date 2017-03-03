<?php

$open = false;
$url = 'https://docs.google.com/a/buffalo.edu/forms/d/e/1FAIpQLSdUeFQBYuSwSDa2KWj6Sp1ziZXo0t2eb5bw2ZLc1zkME34fjw/viewform';

if ( !$open ) {
    $url = 'https://ubnetdef.org';
}

header('Location: ' . $url);
