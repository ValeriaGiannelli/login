<?php

//Initialize the session
session_start();

//destroy the session
session_destroy();

//Redirect to the login page
header('Location. login.php');
exit;

?>