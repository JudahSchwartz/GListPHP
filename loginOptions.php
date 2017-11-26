<!Doctype html>


<div class = mainInfo>
<?php include "header.php"; 


  ?>
    
    <form name = Form action = logInHandler.php method ='POST' class = inputLists>
    username: <input type = text name = "username">
    password: <input type = password name = "password">
     <input type="submit" name =" submitButton" value ="submit">
    </form> 
    if you don't have an account, <a class = linkText href="signUp.php"> Sign Up </a>
    
    
    </div>
<?php include "footer.php"; ?>


