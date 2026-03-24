<?php
// api.php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once 'dados_api.php'; // Puxa o array do outro arquivo

echo json_encode($produtos);