<?php

$bytes = openssl_random_pseudo_bytes(rand(2,10), $cstrong); // 
var_dump($bytes);
echo "<pre>$cstrong</pre>";


$hex   = bin2hex($bytes);

var_dump($hex);
