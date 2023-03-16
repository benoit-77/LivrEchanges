<?php

session_start();
define("TITLE", "Ajout d'un livre");
define("CSS", "bookSearch");


require_once(__DIR__ . "/controllers/bookController.php");
$bookController = new BookController;
$books = $bookController->readAllValidate();



include(__DIR__ . "/assets/inc/header.php"); 
include(__DIR__ . "/views/bookSearch.php");
include(__DIR__ . "/assets/inc/footer.php");