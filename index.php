<?php
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        
        print_r("GET");
        // La solicitud es del método GET
        // Aquí puedes procesar los datos recibidos a través de $_GET
        // Ejemplo: $parametro1 = $_GET['parametro1'];
        break;

    case 'POST':
        $jsonString =file_get_contents('php://input');
        var_dump($jsonString);
        // La solicitud es del método POST
        // Aquí puedes procesar los datos recibidos a través de $_POST
        // Ejemplo: $parametro1 = $_POST['parametro1'];
        break;

    // Agrega más casos según tus necesidades para otros métodos HTTP, si es necesario.
    case 'PUT':
        print_r("PUT");
    //     // La solicitud es del método PUT
    //     // Aquí puedes procesar los datos recibidos a través de file_get_contents("php://input")
        break;

    case 'DELETE':
        print_r("DELETE");
    //     // La solicitud es del método DELETE
    //     // Aquí puedes procesar los datos recibidos según corresponda.
        break;

    default:
        // Otro método diferente a GET o POST
        // Puedes manejar otros métodos aquí si los necesitas
        break;
}
?>