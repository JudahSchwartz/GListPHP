
<?php include "header.php"; 
   $_SESSION +=   $_POST;

 //print_r($_POST);
?>

<form name = withQ action = 'recipeDone.php' method = 'POST' onsubmit="return validate()" class = inputLists> 
    <?php
    
    $sesKeys = array_keys($_POST);
$infoIsValid = true;
echo '<br>';
foreach($sesKeys as $key)
{
    if($_POST[$key]===NULL||$_POST[$key]==="")
    {
        echo $key . ' is empty <br> ';
        $infoIsValid = false;
        
    }
}
    if(empty($_POST['ingredients']))
    {
        echo 'No Ingredients were chosen';
    }
    elseif($infoIsValid)
    {
echo 'Please put in the required quantities for each ingredient <br>';
 foreach($_POST['ingredients'] as $ing)
 {
     
     $result = $db->query("SELECT Name FROM ingredients WHERE IngredientID = $ing");
     $obj = $result->fetch_object();
     echo $obj->Name . '<input type ="text" name = '. $ing . ' >'  .'<br>';
 }
    
 ?>
<input type="submit"  value ="submit">
    <?php } ?>
</form>

 <?php

include "footer.php";
