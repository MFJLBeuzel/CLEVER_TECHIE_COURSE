<?php

session_start();

$_SESSION['username'] = 'clevertechie';
$_SESSION['role'] = 'admin';

echo 'Session variable has been set!';

session_destroy();
