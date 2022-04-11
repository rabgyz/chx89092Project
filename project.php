<?php

class Car
{
    public $speed;
    public $cargo;
    public $passengerQty;

    public function info()
    {
        echo $this->speed . ", ładunek: " . $this->cargo . ", liczba pasażerów: " . $this->passengerQty . "<br>";
         
    }
    public function accelerate()
    {
        $this->speed=$this->speed+5;
    }
    public function slowDwn()
    {
        if($this->speed>=5) {
        $this->speed=$this->speed-5;
        }
        if($this->speed<5) {
        (echo "Nie jesteś w ruchu!");
        }
    }
}

class PassengerCar extends Car
{
    public function getIn()
    {
        if($this->passengerQty<=5) {
        $this->passengerQty=+1;
        }
        if($this->passengerQty>5) {
        (echo "Wszystkie miejsca w samochodzie są już zajęte!");
        }
    }
    public function getOut()
    {
        if($this->passengerQty>=1) {
        $this->passengerQty=-1;
        }
        if($this->passengerQty<1) {
        (echo "Brak pasazerow!" );
        }
    }
}

class TIR extends Car
{
    public function charge()
    {
        $this->cargo=+10
    }
    public function discharge()
    {
        if($this->cargo>=10){
        $this->cargo=-10;
        }
        if($this->cargo<10){
        (echo "Brak ładunku");
        }
    }
}

$a1 = new Car();
$a1->speed = "100";
$a1->cargo = "10";
$a1->passengerQty = "2";

echo $a1->speed; 
echo '<br>';

$a1->info()

?>