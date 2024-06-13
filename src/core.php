<?php

define('APP_DIR', dirname(__DIR__));

ini_set('display_errors', true);
error_reporting(E_ALL);

// require __DIR__ . "/database/database.php";

require __DIR__ . "/includeTemplate.php";
require __DIR__ . "/getGalery.php";
require __DIR__ . "/getRentPrice.php";
require __DIR__ . "/getTransferPrice.php";
require __DIR__ . "/getTestimonials.php";