<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidaterUtil.php";

$request= new LoginRequest();
$request->username = null;
$request->password = null;

ValidaterUtil::validateRefecltion($request);