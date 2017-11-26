<?php include "header.php";

//the key is the id for the ingredient the value is the amount

echo "<br>";
$un;
$submitToDB = true;
$message = 'Thank you for submitting the recipe!';
foreach($_POST as $amt)
{
    if($amt === "")
    {
        $submitToDB = false;
        $message = 'not all of the quantities for the ingredients were given';
        break;
    }
    
}
echo $message;
$ct = $_SESSION['cookTime'];
$dpm = $_SESSION['DPMstatus'];
$inst = $_SESSION['instructions'];
$name = $_SESSION['nameOfRecipe'];
//echo 'This is working.'  . $ct .$dpm. $inst. $name;
if($submitToDB)
{
   $rid = submit($db,$ct,$dpm,$inst,$name);
   include 'getRecipe.php';
   getRecipe($db, $rid);
    
}
function submit($database,$ct,$dpm,$inst,$nam)
{
    $query = "INSERT INTO recipes (CookTime,DPMStatus,Instructions,RecipeName) VALUES (
            '$ct' , '$dpm' , '$inst', '$nam'  )";
    $database->query($query)or die(mysqli_error($database));
    
    $result = $database->query("SELECT RecipeID FROM Recipes WHERE CookTime = '$ct' "
            . "AND DPMStatus = '$dpm' AND RecipeName = '$nam' AND Instructions = '$inst' ")or 
            die(mysqli_error($database));
    $recipeID = $result->fetch_object()->RecipeID;
    
    $keys = array_keys($_POST);
    foreach($keys as $key)
    {
        $database->query("INSERT INTO recipeingredients (Quantity,RecipeID,IngredientID) VALUES ('$_POST[$key]',$recipeID,'$key')") 
                or die(mysqli_error($database));
    }
    return $recipeID;
    
}



//Need to reser the session variable except for the username
if(isset($_SESSION['username']))
{
    $un = $_SESSION['username'];
}
$_SESSION = array();
if(isset($un))
{
    $_SESSION['username'] = $un;
}

