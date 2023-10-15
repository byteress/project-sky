<?php

    include_once 'init.php';

    if (!$user->isLoggedIn()) {
        header("Location: login.php");
    }