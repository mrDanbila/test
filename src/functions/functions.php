<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/Farm.php");

$newObj = new Farm();

function addAnimal($obj, $count = 1): void
{
    global $newObj;
    for($i = 0;$i < $count; $i++)
    {
        $newObj->addAnimal($obj);
    }
}

function getCountAnimal($obj): void
{
    global $newObj;
    echo($newObj->getCountOfAnimal($obj));
}

function gather($obj): void
{
    global $newObj;
    $newObj->gatherEachWeek($obj);
}

function getCountProd($obj): void
{
    global $newObj;
    echo($newObj->getCountOfProd($obj));
}
?>