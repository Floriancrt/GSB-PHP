<?php

session_start();
if(isset($_SESSION["login"]))header("Location:controllerMedicaments.php");

require_once '../views/authentification.php';