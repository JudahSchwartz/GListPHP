<div class = mainInfo>
   
    <?php include "header.php"; ?>

   
   
              
    <form name = SignUpForm action = signUpHandler.php method ='POST' class = inputLists onsubmit="return submitCond()">
    username: <input id = "un" type = text name = "userName" onchange = "validate()">
    password: <input id= "p1" type = password name = "password"  onchange = "validate()">
    reenter password:  <input id ="p2" type = password name = "passwordConfirmation" onchange = "validate()">
    
    <input type="submit" value ="submit" onclick="submitCond()">
     
    </form>
    <div id="feedback"> 
        
    </div>
    
    </div>
<script> 
  
    
    var feedback = document.getElementById("feedback");
    var p1 = document.getElementById("p1"),
        p2 = document.getElementById("p2"),
        un = document.getElementById("un"),
        valid;
   /* p2.addEventListener("onblur",validate);
    p1.addEventListener("onfocus",validate); */
    function validate()
    {
        valid = false;
    if(un.value === "")
    {
        feedback.innerHTML = "username can't be empty";
    }
    else if(  p1.value!==p2.value )
    {
        feedback.innerHTML = "passwords dont match";
    }
    else if(p1.value==="")
    {
          valid = false;
         feedback.innerHTML = "Must have a password";
    }
    else
    {
        feedback.innerHTML = "valid";
        valid = true;
        
    }
}
function submitCond()
{
    validate()
    
    if(!valid)
    {
        feedback.innerHTML = "Can't submit yet. Form not valid."
        return false;
    }
    return true;
}
//window.setInterval(validate,1000);
</script>
    
<?php include "footer.php"; ?>
<!-- for jquery
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
-->