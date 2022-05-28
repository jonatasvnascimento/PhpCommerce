<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
ob_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['nome']) && !isset($_SESSION['email'])){
  header("Location: index.php");
}
?>