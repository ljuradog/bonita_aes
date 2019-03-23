<?php
session_start();
$post = file_get_contents('php://input');

$request = json_decode($post);
$response = new stdClass();

if (is_object($request)) {
    $_SESSION["apiToken"] = $request->apiToken;
    $_SESSION["userId"] = $request->userId;    
    $_SESSION["userName"] = $request->userName;
    
    $response->msg = 'Se han seteado correctamente las variables de sesion';
    echo json_encode($response);
} else {
    header("HTTP/1.1 400 Bad Request");
}
