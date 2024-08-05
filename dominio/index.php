<?php
// Verifica si el archivo solicitado existe
$request_uri = $_SERVER['REQUEST_URI'];
$file_path = $_SERVER['DOCUMENT_ROOT'] . $request_uri;

if (!file_exists($file_path)) {
    header("Location: ../error.php");
    exit;
}
return false;
?>
