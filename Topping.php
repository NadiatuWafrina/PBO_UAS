<?php
class Topping{
public $Toping1 = Array ("krupuk=> 500", "selada => 50", "garam => 3", "gula => 1");
public $Toping2 = Array ("AyamSuwir => 3000", "Dagingpotongkecil => 1000") ;


public function __construct($Toping1, $Toping2){
    $this->Toping1 = $Toping1;
    $this->Toping2 = $Toping2;
}
public function go(){
   foreach ($this->Toping1 as $A){
       echo $A;
   }
   foreach ($this->Toping2 as $B){
    echo $B;
}
   }
}
$A = Array ("krupuk=> 500", "selada => 50", "garam => 3", "gula => 1");
$B = Array ("AyamSuwir => 3000", "Dagingpotongkecil => 1000") ;
$Topping = new topping ($A, $B);
$Topping->go();
?>





