<?php

// Error Reporting
ini_set("error_reporting", E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING);

require_once __DIR__ . '/../vendor/autoload.php';

$appPath = __DIR__ . '/../../../';
$managerInitializer = new \eventos\utils\ManagerInitializer($appPath);

return $managerInitializer->getInitializedManagerInstance()->getConf('db.siga3');