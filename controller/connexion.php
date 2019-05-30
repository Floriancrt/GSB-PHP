<?php

session_start();


require_once '../views/authentification.php';



if(isset($_SESSION["login"]))header("Location: ./controllerMedicaments.php");