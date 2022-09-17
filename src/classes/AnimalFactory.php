<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/ChickenFactory.php");
require_once("CowFactory.php");
abstract class AnimalFactory
{
    static protected $id = 0;

    abstract public function getAnimal();//Cow or Chicken
    public function getId() // Id для каждого животного
    {
        ++self::$id;
        return(self::$id);
    }
}
?>