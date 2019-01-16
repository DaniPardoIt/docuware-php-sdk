<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require "../connection.php";

use \DocuWare\Platform as Platform;

try {
    $docuware = new Platform($host, $organization, $username, $password);
    $result = $docuware->Organization->roles();
    echo $result;
} catch (\Exception $e) {
    echo $e->getMessage();
}