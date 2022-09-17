<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/AnimalFactory.php");
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/Chicken.php");

class ChickenFactory extends AnimalFactory
{
    public function getAnimal(): Chicken
    {
        return new Chicken;
    }
}
?>