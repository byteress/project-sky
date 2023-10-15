<?php
include_once __DIR__ . '/../init.php';

if ($_POST['action']) {

    $action = $_POST['action'];

    switch ($action) {
        case 'userLogin':
            $auth = new Authentication();
            $auth->userLogin($_POST['username'], $_POST['password']);
        break;
        default:
            echo "Unknown request";
    }

}