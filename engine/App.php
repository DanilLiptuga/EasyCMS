<?php
define('ROOT_PATH', __DIR__ . '/../');
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/helpers.php";
use CMS\Cms;
use Engine\DI;
try {
    $di = new DI();
    $services = require ROOT_PATH . "/engine/Config/Service.php";
    foreach ($services as $service){
        $nService = new $service($di);
        $nService->init();
    }
} catch (Exception $e) {
    echo $e->getMessage();
} ?>
