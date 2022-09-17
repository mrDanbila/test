<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/AnimalFactory.php");
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/Cow.php");
class CowFactory extends AnimalFactory
{   
    public function getAnimal(): Cow
    {
        return new Cow;
    }
}
?>