<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/interfaces/IAnimal.php");
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/Egg.php");

class Chicken implements IAnimal 
{   
    private static $countChicken = 0; //счётчик куриц
    private static $chickenProd = 0; //количество производимой продукции

    //Что делают все функции описано в интерфейсе
    public function getType() : string
    {   
        return "Chicken";
    }

    public function create() : void
    {
        ++self::$countChicken;
    }

    public function getCountAnimal() : int
    {
        return(self::$countChicken);
    }

    public function getCountProd() : int
    {
        return(self::$chickenProd);
    }

    public function getProd() : int
    {
        $obj = new Egg;
        for($i = 0; $i < 7; $i++)
        {
            for($k = 0;$k < (self::$countChicken); $k++)
            {
                self::$chickenProd+=($obj->getProduction());
            }
        }
        return(self::$chickenProd);
    }

    public function getTypeProd(): string
    {
        $obj = new Egg;
        return($obj->getType());
    }
}
?>