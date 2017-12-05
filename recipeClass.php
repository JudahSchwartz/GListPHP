<?php
 require "accessDB.php";
 class Recipe{
   public $name;
   public $cookTime;
   public $DPMStatus;
   public $instructions = array();
   public $recipeID = -1;
   public $userIDSpecific = -1;
    public function __construct() {
        
    }
    public function create($nam,$ct,$dpm,$inst,$uid)
    {
        $name = $name;
        $cookTime = $ct;
        $DPMStatus = $dpm; $instructions = $inst;
        $userIDSpecific = $uid;
    }
    public function fromDB($id){
        require 'accessDB.php';
        $result = $db->query("SELECT * FROM recipes WHERE RecipeID = '$id'");
        $obj = $result->fetch_object();
        $name = $obj->RecipeName;
        $cookTime = $obj->CookTime;
        $DPMStatus = $obj-> DPMStatus;
        $instructions = $obj->Instructions;
        $recipeID = $obl->$RecipeID;      
        
        $db->query();
    }
    public function addToDB(){
        
    }
}
class ingredient{
    
    public $name;
    public $quantity;
}