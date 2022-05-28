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
<footer class="footer">
    <div>
        <a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021
        creativeLabs.
    </div>
    <div class="ms-auto">
        Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a>
    </div>
</footer>