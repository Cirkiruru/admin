<?php
session_start();

include('database/dbconfig.php');

if ($connection) {
    
} else {
    header("Location: database/dbconfig.php");
}

// pag dile nako tangalon ning  naa sa baba kay dile magamit ang admin

// if(!$_SESSION['username'])
// {
//     header('Location: login.php');
// }
