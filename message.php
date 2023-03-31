<?php

session_start();
define("TITLE", "Message");
define("CSS", "messagerie");

require_once(__DIR__ . "/controllers/usersController.php");
$usersController = new UsersController;
$usersController->verifyLogin();

require_once(__DIR__ . "/controllers/privateMessageController.php");
$privateMessageController = new PrivateMessageController;
$singleMessage = $privateMessageController->readOneValidate();

$messages = $privateMessageController->createFromMessageValidate();

include(__DIR__ . "/assets/inc/header.php"); 
include(__DIR__ . "/views/singleMessage.php");
include(__DIR__ . "/assets/inc/top.php"); 
include(__DIR__ . "/assets/inc/footer.php");