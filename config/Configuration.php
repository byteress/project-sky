<?php

/**
 * APP Configuration
 */
const PRODUCTION = false;

const DB_HOST = PRODUCTION ? '23.111.150.178' : 'localhost';
const DB_NAME = PRODUCTION ? 'agrisudi_production' : 'payment_gateway';
const DB_USER = PRODUCTION ? 'agrisudi_agriserve' : 'root';
const DB_PASS = PRODUCTION ? 'uXD3-bXc}{m#' : '';

error_reporting(PRODUCTION ? 0 : E_ALL);
ini_set('display_errors', PRODUCTION ? 'Off' : 'On');



