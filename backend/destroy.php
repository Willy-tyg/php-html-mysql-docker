<?php
header("Access-Control-Allow-Origin: *");
    session_start();
    session_destroy();
    header("Location: http://192.168.42.201/");
?>
