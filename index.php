<?php
require_once("Controladores/GetData.php");
$method = $_SERVER['REQUEST_METHOD'];

$INFO= new GetData(); 
switch ($method) {
    case 'GET':
        header('Content-Type: application/json');
        $data = json_decode( $INFO->GetDatas(), true);
        echo json_encode($data);
        break;

    case 'POST':
        header('Content-Type: application/json');
        $input_data = file_get_contents('php://input');
        $json = json_decode($input_data);
        if ($json !== null) {
            $data = $INFO->ValidarUser($json);
            echo json_encode($data);
        } else {
            // Manejar el error de JSON inválido
            $error_response = array("error" => "JSON inválido");
            echo json_encode($error_response);
        }
        break;

    case 'PUT':
        print_r("PUT");

        break;

    case 'DELETE':
        break;
}

?>