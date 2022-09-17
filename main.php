<?
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/classes/Farm.php");
require_once($_SERVER['DOCUMENT_ROOT']."/proj/src/functions/functions.php");

$cow = new CowFactory;
$chicken = new ChickenFactory;

addAnimal($cow,10);   //шаг1 добавление животных
addAnimal($chicken,20);  

getCountAnimal($cow); //шаг2 Вывод  типа животных
echo ' ';
getCountAnimal($chicken);
echo '<br>';

gather($cow);  //шаг3 сбор продукции
gather($chicken); 

getCountProd($cow); //шаг4 Вывод продукции на экран
echo ' ';
getCountProd($chicken);
echo '<br>';

addAnimal($cow); //шаг 5 добавление животных
addAnimal($chicken,5);

getCountAnimal($cow); //шаг6 Вывод  типа животных
echo ' ';
getCountAnimal($chicken);
echo '<br>';

gather($cow);  //шаг7 сбор продукции
gather($chicken); 

getCountProd($cow); //шаг8 Вывод продукции на экран
echo ' ';
getCountProd($chicken);
echo '<br>';
?>