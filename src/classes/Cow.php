<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/interfaces/IAnimal.php");
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/Milk.php");

class Cow implements IAnimal 
{   
    private static $countCow = 0; //счётчик коров
    private static $cowProd = 0; //количество производимой продукции

    //Что делают все функции описано в интерфейсе
    public function getType():string 
    {   
        return "Cow";
    }

    public function create():void
    {
        ++self::$countCow;
    }

    public function getCountAnimal():int
    {
        return(self::$countCow);
    }

    public function getCountProd():int
    {
        return(self::$cowProd);
    }

    public function getProd():int
    {
        $obj = new Milk;
        for($i = 0; $i < 7; $i++)
        {
            for($k = 0;$k < (self::$countCow); $k++)
            {
                self::$cowProd += $obj->getProduction();
            }
        }
        return(self::$cowProd);
    }

    public function getTypeProd():string
    {
        $obj = new Milk;
        return($obj->getType());
    }
}
?>