<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
echo fullStackPHPClassName("Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operadorA = 10;

echo "<h3>operadorA = {$operadorA}</h3>";

$operadores = [
    "OperadorA += 5" => $operadorA += 5,
    "OperadorA -= 5" => $operadorA -= 5,
    "OperadorA *= 5" => $operadorA *= 5,
    "OperadorA /= 5" => $operadorA /= 5,
];

var_dump($operadores);


$operadorB = 5;

echo "<h3>operadorB = {$operadorB}</h3>";
$incrementos = [
    "pós-incremento" => $operadorB++,
    "resultado-incremento" => $operadorB,
    "pré-incremento" => ++$operadorB,
    "pós-decremento" => $operadorB--,
    "resultado-decremento" => $operadorB,
    "pré-decremento" => --$operadorB,
];

var_dump($incrementos);


/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$varA = 5;
$varB = "5";
$varC = 4;

$comparacoes = [
    "a == b" => ($varA == $varB),
    "a === b" => ($varA === $varB),
    "a != b" => ($varA != $varB),
    "a !== b" => ($varA !== $varB),
    "a > c" => ($varA > $varB),
    "a < c" => ($varA < $varB),
];

var_dump($comparacoes);


/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$pessoa = new stdClass();
$pessoa->idade = 18;
$pessoa->possui_hab = true;
$pessoa->bebeu = false;

$logicos = [
    "&&" => ($pessoa->idade >= 18 && $pessoa->possui_hab),
    "||" => ($pessoa->possui_hab || $pessoa->bebeu),
];

var_dump($logicos);


/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;

$calculos = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];

var_dump($calculos);