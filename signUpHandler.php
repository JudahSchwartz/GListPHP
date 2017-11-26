<?php include "header.php";
$un =($_POST['userName']);
$query = "SELECT * FROM users WHERE UserName = '$un'";
$pw = $_POST['password'];
$queryResult = $db->query($query);
$insertQuery = "INSERT INTO users (username,password) VALUES('$un','$pw')";

if($queryResult-> num_rows > 0)
{
    echo 'username has already been taken.'
     ?><a class = linkText href="signUp.php">Try again </a><?PHP
}
elseif($_POST['password'] != $_POST['passwordConfirmation'])
{
    echo 'password doesnt match confirmation'; 
    ?><a class = linkText href="signUp.php">Try again </a><?PHP
}
else{
    $db->query($insertQuery) or die('couldnt add new row to users (query wouldnt run)'. mysqli_error($db));
    echo 'userName submitted successfully. Please '?> <a href="LoginOptions.php" class = linkText> Sign In</a><?PHP
}
include "footer.php";

