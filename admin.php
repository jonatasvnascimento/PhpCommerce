<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
ob_start();

if(!isset($_SESSION['id']) and !isset($_SESSION['nome']) and !isset($_SESSION['email'])){
  header("Location: index.php");
}

include_once 'tamplate/header.php';
include_once 'tamplate/body.php';
include_once 'tamplate/body2.php';
include_once 'tamplate/footer.php';
