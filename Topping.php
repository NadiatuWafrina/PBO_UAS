<?php
 class Topping{
   public $Menu = Array ("soto" => 20.000, "rawon" => 13.000, "nasicampur" => 20.000);  
   public $AToping = Array ("krupuk" => 500, "selada" => 50, "garam" => 3, "gula" => 1);
   public $BToping = Array ("AyamSuwir" => 3000, "Dagingpotongkecil" => 1000) ;
   public $bill;

   public function __construct($Menu , $AToping , $BToping)
   {
      $this->Menu = $Menu;
      $this->AToping = $AToping; 
      $this->BToping = $BToping;
   }
   public function ulang(){
   foreach ($this->Menu as $pricetag) {
}
    foreach ($this->AToping as $Aprice) {

}foreach ($this->BToping as $Bprice) {

}
if ($this->Menu['nasicampur'] && $this->AToping && $this->BToping){
    $bill = (($pricetag) + ($Aprice) + ($Bprice));
    echo $bill;
}

//if ($this->Menu['rawon'] OR $this->Menu['soto'] && ($AAA * $this->AToping) && ($BBBB * $this->BToping){
   // $bill = (($pricetag) + ($AAA * $APrice) + ($BBBB * $BPrice));
   // echo $bill;
//}
 }
}
?>
