<?php

    include_once 'init.php';

    $farmers = new Farmers();
    echo json_encode($farmers->fetchAllFarmers());