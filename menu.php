
<ul id=menuList, class = mainInfo>
    
<li class = linkText  ><a href="index.php"  class = linkText>Home Page</a>
<li class = linkText  ><a href="addRecipe.php"  class = linkText>Add A Recipe</a>
<li class = linkText><a href="todaysRecipe.php"  class = linkText>View Today's Recipe</a>
<?php    
if( isset($_SESSION['username']))
{
 ?>
    <li class =linkText><a href="logOut.php"  class = linkText> <?php echo ' username:'. $_SESSION['username'];?> logOut </a>
<?php }

else { 
    ?>
     
    <li class = linkText><a href="LoginOptions.php" class = linkText>Sign Up/Sign In</a>
        <?php } ?>
    
</ul>
