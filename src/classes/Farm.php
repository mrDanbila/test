<?
require_once ($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/Stock.php");
class Farm{
    private function getStock() //экземпляр склада
    {
        return(new Stock);
    }

    public function addAnimal($obj) // Вывод типов животных
    {
        ($this->getStock())->add($obj); // Вывод количества продукции
    }

    public function getCountOfAnimal($obj) // Вывод типов животных
    {
        return(($this->getStock())->countAnimal($obj));
    }

    public function getCountOfProd($obj) // Вывод количества продукции
    {
        return(($this->getStock())->countProd($obj));
    }

    public function gatherEachWeek($obj) //Сбор продукции
    {
        return(($this->getStock())->gatherPerWeek($obj));
    }

    //Тут такой же функционал, как и у класса Склад, но по задумке, этот класс расширяется, а склад по идее больше не будет.
    //Думал о том чтобы сделать метод убрать параметр объекта, но тогда придётся создавать два экземпляра с Chicken и Cow, по итогу передумал.
}
?>