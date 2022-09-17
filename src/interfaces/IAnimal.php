<?
interface IAnimal
{   
    public function getType():string; //Выводит тип Животного
    public function getCountAnimal():int; // Выводит текущее количество животных
    public function create():void; //Является счётчиком, при создании Животного добавляет к количеству животных + 1, сделано для getCountAnimal
    public function getCountProd():int;// Выводит текущее количество продукции
    public function getProd():int;// Собирает продукцию
    public function getTypeProd():string;//Выводит тип Продукции
}
?>