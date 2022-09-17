<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/AnimalFactory.php");
class Stock
{
    public function add(object $obj):void //Выбираем на какой цех пойти, и что по итогу производить CowFactory, ChickenFactory
    {   
        $arrAnimal = [];
        $animal = $obj->getAnimal(); // Cow or Chicken
        $animal->create();
        array_push($arrAnimal, $obj->getId());
        array_push($arrAnimal, $animal->getType());
        array_push($arrAnimal, $animal->getTypeProd());
        //print_r($arrAnimal); сделано для проверки id, типа Животного, типа Продукции
    }

    public function countAnimal($obj):void // Вывод типов животных
    {
        $animal = $obj->getAnimal();
        echo ($animal->getCountAnimal())." ".($animal->getType());
    }

    public function countProd($obj):void // Вывод количества продукции
    {
        $animal = $obj->getAnimal();
        echo ($animal->getCountProd())." ".($animal->getTypeProd());
    }

    public function gatherPerWeek($obj)//Сбор продукции
    {   
        $animal = $obj->getAnimal();
        return ($animal->getProd());
    }
}
?>