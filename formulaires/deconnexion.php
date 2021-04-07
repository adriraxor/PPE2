<?php
session_start();
session_unset(); //**destruction variables sesssions
session_destroy(); //**desstruction, session en cours
header('location: ../index.php');
?>