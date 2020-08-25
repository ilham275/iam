<?php

class laptop {


   var $pemilik;
  

   function hidupkan_laptop() {
     return "Hidupkan Laptop";
    }
   function matikan_laptop() {
     return "Matikan Laptop";
   }
}
  
$laptop_anto = new laptop();
$laptop_anto->pemilik ="Anto";
echo $laptop_anto->pemilik;
echo "<br />";
echo $laptop_anto -> matikan_laptop();
?>