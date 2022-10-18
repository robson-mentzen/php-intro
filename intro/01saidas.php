<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__); //Imprime o valor na tela.

echo "Olá, Mundo!";

$hello = 'Olá, Mundo!';
echo "<h3>{$hello}</h3>";
echo "<h2>" . $hello . "</h2>";
echo '<span class="tag">' . $hello . '</span>';

$univates = 'UNIVATES';
echo "<h1>{$univates}</H1>";


/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__); //Faz a mesma coisa que o comando echo.

print("Olá, Mundo!");
print "<h3>Olá, Mundo!</h3>";
print "<h2>Olá, " . "Mundo!</h2>";

$hello = 'Olá, Mundo!';
print '<span class="tag">' . $hello . '</span>';

$univates = 'UNIVATES';
print "<h1>{$univates}</H1>";


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__); //Imprime um array (vetor).

$array = ["Lajeado", "Estrela", "Arroio do Meio"];
print_r($array);

$vetor = print_r($array, true);
echo "<pre>" . $vetor . "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__); //Dar uma saída em uma variável pré-formatada, exemplo seri um array.

$article = "<article><p>%s</p><h3>%s</h3><h2>%s</h2></article>";
$univates = 'Univates';
$titulo = 'Título da notícia';
$noticia = 'Texto da notícia';

printf($article, $univates, $titulo, $noticia);
sprintf($article, $univates, $titulo, $noticia); //Mesma coisa do de cima, porém em forma de retorno.


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__); //Mesma coisa do printf, porém passando um array como argumento.

$company = "<article><h3>Instituição: %s</h3><h3>Curso: %s</h3><h3>Semestre: %s</h3></article>";
$array_company = ["Univates", "Técnico em Informática", "3º"];

vprintf($company, $array_company);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__); //

var_dump($array, $array_company);