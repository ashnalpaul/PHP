<?php
  interface Car
  {
	public function name();
  }
  interface Color
  {
	public function color();
  }
class Vehicle implements Car,Color
{
  public function name()
   {
	echo"swit";
   }
  public function color()
   {
	echo" White";
    }
}
$obj= new Vehicle();
$obj->name();
$obj->color();
?>
