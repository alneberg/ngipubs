<?php
require 'lib/global.php';

global $CONFIG;
$errors = [];
$publications = new NGIpublications();
$chars = $publications->getAllAuthors();

header('Content-Type: application/json;charset=utf-8');
echo json_encode($chars);
