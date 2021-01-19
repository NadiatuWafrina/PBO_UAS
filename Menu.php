<?php
class Menu{
public $Food = Array (
"soto => 20.000", 
"rawon => 13.000", 
"nasicampur => 20.000");  

public $FoodMenu;

public function __construct($FoodMenu){
   $this->FoodMenu = $FoodMenu;
}
public function run(){
   if ($this->FoodMenu == $this->Food){
      echo "Food Menu";
      echo "<br/>"; 
   echo  $this->Food[0];
   echo "<br/>";
   echo $this->Food[1];
   echo "<br/>";
   echo $this->Food[2];
   }
}
}

$FoodMenu = Array (
   "soto => 20.000", 
   "rawon => 13.000", 
   "nasicampur => 20.000"); ;
$Menu = new menu ($FoodMenu);
$Menu->run();
?>





