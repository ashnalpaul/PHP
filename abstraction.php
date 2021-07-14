<?php
abstract class Vehicle
{
public $name;
public $color;
public function furits()
{
  return $this->name.",".$this->color;
}
   abstract public function nuts();
}
class Bike extends Vehicle
{
  public function nuts()
  {
	return " Bullet";
  }
  public function furits()
  {
    return parent::furits();
  }
}
$vehicle=new nuts();
$vehicle->name = "Honda City";
$vehicle->color = "White";
echo $vehicle->furits();
echo $vehicle->nuts();
?>
