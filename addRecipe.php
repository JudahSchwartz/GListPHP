<!Doctype html>

<a href="recipeAddHandler.php"></a>
<div class = mainInfo>
<?php include "header.php" ?>
    <P>Please fill out all of the information regarding your recipe</P>
    <form name = recipeForm action = recipeAddHandler.php method ='POST' class = inputLists>
         Name of Recipe:
        <input type = text name = "nameOfRecipe"><br>
        Cook Time:  <input type ='text' name ='cookTime' ><br>
        
        Is the recipe: <br>
        <input type="radio" name ="DPMstatus" value ="dairy">Dairy
        <input type="radio" name ="DPMstatus" value ="parev" checked>Parev
        <input type="radio" name ="DPMstatus" value ="meat">Meat<br>
        what type of dish is it? <br>
        <input type="radio" name ="dish" value ="main">Main
        <input type="radio" name ="dish" value ="side" checked>Side
        <input type="radio" name ="dish" value ="dessert">Dessert<br>
        
        Ingredients: (Hold down the ctrl key to select multiple)<br>
        <select name = "ingredients[]"  multiple size = 10>
            <?php 
            
            $ingredients = $db->query("SELECT * FROM ingredients ORDER BY Name") or die("Couldnt get the ingredients from db" . mysqli_error($db));
            $options ="";
            
                        while ($obj = $ingredients->fetch_object()) 
                        {
                            $options .= '<option value = '.$obj->IngredientID .'>' . $obj->Name .  '</option>';
                        }
                        echo $options;
                ?>

                
                
            
            
        </select><br>
        
        
        
        Instructions for the recipe:<br>
        <textarea name ='instructions' wrap =soft cols="60" rows="5"></textarea><br>
        <input type="submit"  value ="submit">
        
    </form>
    </div>
<?php include "footer.php"; ?>


