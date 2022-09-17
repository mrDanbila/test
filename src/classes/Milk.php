<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/interfaces/IAnimalProduction.php");

class Milk implements IAnimalProduction
{
    public function getProduction()
    {
        return(rand(8,12));
    }

    public function getType():string
    {
        return "Milk";
    }
}
?>