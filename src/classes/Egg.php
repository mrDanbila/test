<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/interfaces/IAnimalProduction.php");

class Egg implements IAnimalProduction
{
    public function getProduction()
    {
        return(rand(0,1));
    }

    public function getType():string
    {
        return "Egg";
    }
}
?>