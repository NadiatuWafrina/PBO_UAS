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
      echo "Food Menu" ."\n";
   echo "\n" . $this->FoodMenu[0] . "\n" . $this->FoodMenu[1].  "\n" .$this->FoodMenu[2]. "\n";

   }
}
}

$Menu = new menu ($FoodMenu);
$Menu->run();
?>





