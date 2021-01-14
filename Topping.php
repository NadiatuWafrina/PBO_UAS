<?php
 
   $Menu = Array ("soto" => 20.000, "rawon" => 13.000, "nasicampur" => 20.000);  
   $AToping = Array ("krupuk" => 500, "selada" => 50, "garam" => 3, "gula" => 1);
   $BToping = Array ("AyamSuwir" => 3000, "Dagingpotongkecil" => 1000) ;
   $AAA = 3;
   $BBBB = 4;
   $bill;
   foreach ($Menu as $List => $pricetag) {
}
    foreach ($AToping as $A => $Aprice) {

}foreach ($BToping as $B=> $Bpriceg) {

}

if ($Menu['nasicampur'] && $AToping && $BToping){
    $bill = (($pricetag) + ($Aprice) + ($Bprice));
    echo $bill;
}

//if ($Menu['rawon'] OR $Menu['soto'] && ($AAA * $AToping) && ($BBBB * $BToping){
 //   $bill = (($pricetag) + ($AAA * $APrice) + ($BBBB * $BPrice));
  //  echo $bill;
//}

?>
