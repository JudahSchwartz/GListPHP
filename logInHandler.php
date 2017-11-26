<?php include "header.php";
$un =($_POST['username']);
$query = "SELECT username, password FROM users WHERE username = '$un'";

$queryResult = $db->query($query);
$pw = $_POST['password'];
if($queryResult->fetch_assoc()['password']==$pw)
{
        echo "logged in successfully<br/>";
         $_SESSION['loggedIn']= true;
     $_SESSION['username'] = $_POST['username'];
     if($_POST['username'] == 'JudahSch'and $_POST['password']== 'rmgHoop20')
     {
         echo 'Welcome. Here is the link to the admin page: ' ?>
          <a href="adminPage.php" class = linkText> Administrator Page</a> <?php
     }
}
else
{
    echo 'username/password is incorrect.'; ?> <a href="LoginOptions.php" class = linkText >Try Again  <?PHP
}

include "footer.php";


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

