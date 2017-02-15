<?php
// prints e.g. 'Current PHP version: 4.1.1'
echo 'Current PHP version: ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
echo '<br>'. phpversion('tidy');

echo '<br>'. date_default_timezone_get();

echo '<br>PHP time: ' . date("Y-m-d H:i:s");

echo '<br>PHP: ' . phpinfo();
?>