<?php
  session_start();
  if(empty($_SESSION["login_user"])){ /* IF NO USERNAME REGISTERED TO THE SESSION VARIABLE */
    header("LOCATION:login.php"); /* REDIRECT USER TO LOGIN PAGE */
  }
?>