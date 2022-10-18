<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__); //

$nome = "Róbson Kunzler Mentzen";
$cidade = "Lajeado";
$idade = 22;

echo "<h3>Olá, me chamo " . $nome . ", moro em " . $cidade . " e tenho " . $idade . " anos</h3>";
echo "<h3>Olá, me chamo {$nome}, moro em {$cidade} e tenho {$idade} anos</h3>";

$pre_formatado = "<h4>Olá, me chamo %s, moro em %s e tenho %d anos</h4>";
printf($pre_formatado, $nome, $cidade, $idade);

var_dump([
    "variável" => $idade
]);


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__); //

$true = true;
$false = false;

$idade_pessoa = 19;
$idade_pessoa_2 = 17;

$maior_idade = ($idade_pessoa >= 18);
echo "<h3>Maior de idade = " . ($maior_idade ? "Sim" : "Não</h3>");

$maior_idade_2 = ($idade_pessoa_2 >= 18);
echo "<h3>Maior de idade = " . ($maior_idade_2 ? "Sim" : "Não</h3>");

var_dump([$true, $false, $maior_idade, $maior_idade_2]);


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__); //Uma variável que nos retorna uma rotina ou um valor. Tem um reotrno que é executado.

$code = "<h3>Título H3</h3><h4>Título H4</h4>";
$cleanCode = call_user_func("strip_tags", $code);

echo $code;
echo $cleanCode;

var_dump([
    'code' => $code,
    'cleanCode' => $cleanCode
]);

$retorno = function($param){
    echo "Saída = " . $param;
};

$retorno("Univates");


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Róbson Kunzler Mentzen";
$array = array("Olá", "Mundo");

$objeto = new stdClass();
$objeto->nomeCompleto = $string;
$objeto->idade = 22;

$int = 10;
$float = 127.50;
$null = null;

echo "<pre>";
var_dump([
    $string,
    $array,
    $objeto,
    $int,
    $float,
    $null
]);
echo "</pre>";


/**
 * [ Exercícios ]
 */
fullStackPHPClassSession("exercícios", __LINE__);

//exercício1
$pessoa1 = new stdClass();
$pessoa1->nome = "João";
$pessoa1->idade = 22;

$pessoa2 = new stdClass();
$pessoa2->nome = "Maria";
$pessoa2->idade = 17;

if($pessoa1->idade > $pessoa2->idade){
    echo $pessoa1->nome . " é a pessoa com a idade maior";
}else if($pessoa2->idade > $pessoa1->idade){
    echo $pessoa2->nome . " é a pessoa com a idade maior";
}else{
    echo $pessoa1->nome . " e " . $pessoa2->nome . " tem a mesma idade";
}

//exercício2
$codigoHTML = "<h2>Olá, <span><i>mundo!</i><span></h2>";
$codigoLimpo = call_user_func("strip_tags", $codigoHTML);

echo $codigoHTML;
echo $codigoLimpo;
