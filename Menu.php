<?php
class Menu{
public $Food = Array (
"soto => 20.000", 
"rawon => 13.000", 
"nasicampur => 20.000");  

public function __construct($Food){
   $this->Food= $Food;
}
public function run(){
   echo "Food Menu" ."\n";
   foreach ($this->Food as $food){
   echo "\n" . $food;

   }
}
}
$FoodMenu = Array (
   "soto => 20.000", 
   "rawon => 13.000", 
   "nasicampur => 20.000"); 
$Menu = new menu ($FoodMenu);
$Menu->run();
?>





