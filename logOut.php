<?php include 'header.php';
$_SESSION = array();
session_destroy();
echo 'logged out successfully';
include 'footer.php';
$_SESSION['loggedIn'] = false;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

