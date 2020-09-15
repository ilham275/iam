<?php

class Motor
{
    public $kecepatanMax;
 
    public function lihatKecepatan()
    {
        return $this->kecepatanMax = 120;
    }
}
 
class motorSport
{
 
    public function getSpeed()
    {
        $motor = new Motor();
 
        return $motor->lihatKecepatan();
    }
}
 
 
$motor = new MotorSport();
 
echo $motor->getSpeed();
?>