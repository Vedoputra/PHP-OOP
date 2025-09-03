<?php
require_once "exception/ValidationException.php";
require_once "helper/Validation.php";
require_once "data/LoginRequest.php";

$LoginRequest = new LoginRequest();
$LoginRequest->username = " ";
$LoginRequest->password = " ";

try{
    ValidateLoginRequest($LoginRequest);
    echo "VALID". PHP_EOL;
} catch (ValidationException | Exception $exception){
    echo "EROR : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
} finally{
    echo "EROR GA EROR , AKAN DIEKSEKUSI". PHP_EOL;
}

