<?php
abstract class Harvested
{
public $name;
public $color;
public function furits()
{
  return $this->name.",".$this->color;
}
   abstract public function nuts();
}
class nuts extends Harvested
{
  public function nuts()
  {
	return " Almond";
  }
  public function furits()
  {
    return parent::furits();
  }
}
$Harvested=new nuts();
$Harvested->name = "Peanut";
$Harvested->color = "Brown";
echo $Harvested->furits();
echo $Harvested->nuts();
?>
