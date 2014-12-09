<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';

use phpsanca\phpcert\controller\CertificateController;

$action = 'create';
if (!empty($_GET['action']) ) {
    $action = strtolower(filter_var($_GET['action'], FILTER_SANITIZE_STRING));
}
try {
    $certificate = new CertificateController($action);
} catch (\Exception $e) {
    $erro = $e->getMessage();
    include_once __DIR__."/view/pages/erro.php";
    echo $view;
    exit();
}
