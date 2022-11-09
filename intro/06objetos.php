<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Manipulação de objetos");
/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

//criar um objeto stdClass
$objeto = new stdClass();
$objeto->name = "Róbson Kunzler Mentzen";
$objeto->company = "UNIVATES";

$array = [
    "name" => "Róbson Kunzler Mentzen",
    "company" => "UNIVATES",
];

echo var_dump($array);

//cria um objeto através de um array
$objPessoa = (object)$array;

echo var_dump($objPessoa);

echo var_dump($objeto);

//acessando informações atráves do array
echo "<h4>Meu nome é {$array["name"]}</h4>";

//acessando informações atráves do objeto
echo "<h4>Minha empresa é a {$objeto->company}</h4>";