<?php
    function genPass($num) {
    $tokens = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";
    $password = "";
    for ($i = 0; $i < 16; $i++) {
        $password .= $tokens[rand(0, strlen($tokens) - 1)];
    }
    return $password;
    }
?>
