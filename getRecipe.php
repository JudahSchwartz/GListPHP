<?php
function getRecipe($dbcon,$recipeID)
{
    $result = $dbcon->query("SELECT * FROM Recipes WHERE RecipeID = '$recipeID'")or die(mysqli_error($dbcon));
    $resultobj = $result->fetch_Object();
    echo "<br>Name of Recipe: $resultobj->RecipeName";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

