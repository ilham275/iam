<?php
class biodata {
  public $nama;
  public $umur;

  function __construct($nama, $umur) {
    $this->nama = $nama;
    $this->umur = $umur;
  }
  function getnama(){
	  return $this->nama;
  }
  function getumur(){
	  return $this->umur;
  }
}
$biodata = new biodata ("ilham","16");
echo $biodata->getnama();
echo "<br>";
echo $biodata->getumur();
?>