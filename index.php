<?php
require_once("Controladores/GetData.php");
$method = $_SERVER['REQUEST_METHOD'];

$INFO= new GetData(); 
switch ($method) {
    case 'GET':
        $data = json_decode( $INFO->GetDatas(), true);
        header('Content-Type: application/json');
        echo json_encode($data);
        break;

    case 'POST':
        break;

    case 'PUT':
        print_r("PUT");

        break;

    case 'DELETE':
        break;

    default:
        break;
}
?>