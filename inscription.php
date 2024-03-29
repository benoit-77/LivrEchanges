<?php

session_start();
define("TITLE", "Inscription à Livr'Échanges");
define("CSS", "inscription");

require_once(__DIR__ . "/controllers/usersController.php");

$usersController = new UsersController;

$messages = $usersController->inscriptionValidate();


include(__DIR__ . "/assets/inc/header.php"); 
include(__DIR__ . "/views/displayInscription.php");
include(__DIR__ . "/assets/inc/top.php"); 
include(__DIR__ . "/assets/inc/footer.php");