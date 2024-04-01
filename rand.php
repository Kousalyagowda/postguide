<?php


    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $result = '';
    for ($i = 0; $i < 5; $i++)
     echo   $result .= $characters[mt_rand(0, 61)];

?>