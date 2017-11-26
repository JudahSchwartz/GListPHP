
    <HTML>
<HEAD>
<LINK rel="stylesheet" href="styles.css" type="text/css" />
<TITLE>
   Random Meal Generator
</TITLE>
</HEAD>
<Body>
     <div id="header">
<a href="index.php"><img src = logo2.png alt = "logo" height = 150 width = 200 ></a>
<?php session_start(); 
    
    $user = 'root';
    $pass = '';
    $dbname = 'rmgdb';
    
    
  $db = new mysqli('localhost',$user,$pass,$dbname) or die("couldnt connect to db");
include "menu.php"; 

?></div>

<HR />

