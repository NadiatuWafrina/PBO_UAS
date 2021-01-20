<?php
class Topping{
public $Toping1 = Array ("krupuk=> 500", "selada => 50", "garam => 3", "gula => 1");
public $Toping2 = Array ("AyamSuwir => 3000", "Dagingpotongkecil => 1000") ;
public $A;
public $B;


public function __construct($A, $B){
   $this->A = $A;
   $this->B = $B;
}
public function go(){
   if ($this->A == $this->Toping1 AND $this->B == $this->Toping2){
      echo "Food Menu" . "<\n> ";
      echo  "<\n> ". "Toping Ringan Price" .  "<\n> "; 
   echo "<\n> ". $this->A[0] . "<\n> " .  $this->A[1]. "<\n> " . $this->A[2]. "<\n> ". $this->A[3] ."<\n> ";
   echo "<\n> " ."Toping Sedang Price " . "<\n> "; 
   echo  $this->B[0]. "<\n> ". $this->B[1] ;
   }
   }
}
$A = Array ("krupuk=> 500", "selada => 50", "garam => 3", "gula => 1");
$B = Array ("AyamSuwir => 3000", "Dagingpotongkecil => 1000") ;
$Topping = new topping ($A, $B);
$Topping->go();
?>





