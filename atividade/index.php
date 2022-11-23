<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <h6><b>Nome:</b> Róbson Kunzler Mentzen</h6>
        <h6><b>Data:</b> 25/10/2022</h6>
        <h6><b>Disciplina:</b> Desenvolvimento de Aplicações para Internet</h6>
        <h6><b>Professor:</b> Jonas Alberto Dhein</h6>    
    </body>
</html>

<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Atividades");

fullStackPHPClassSession("Atividades", __LINE__);

//Exercício1
echo "<h3>Exercício 1:</h3>";
$array = [
    "Aluno",
    "Professor",
    "Atividade",
    "Disciplina",
    "Univates",
];

var_dump($array);

//Exercício2
echo "<h3>Exercício 2:</h3>";
array_unshift($array, "Informática");

var_dump($array);

//Exercício3
echo "<h3>Exercício 3:</h3>";
if (in_array("Aluno", $array)) {
    echo "<h6>A palavra 'Aluno' foi encontrada</h6>";
} else {
    echo "<h6>A palavra 'Aluno' não foi encontrada</h6>";
};

if (in_array("Prova", $array)) {
    echo "<h6>A palavra 'Prova' foi encontrada</h6>";
} else {
    echo "<h6>A palavra 'Prova' não foi encontrada</h6>";
};

//Exercício4
echo "<h3>Exercício 4:</h3>";
$frase = array("Desenvolvimento de Aplicações para Internet");
$contador = 0;

var_dump($frase);
while($contador < count($frase)){

    $letras = mb_strlen($frase[$contador]);
    echo  "<h5>A frase '{$frase[$contador]}' tem {$letras} letras</h5>";

    $contador++;
};

//Exercício5
echo "<h3>Exercício 5:</h3>";
$frase1 =  "Desenvolvimento de Aplicações para Internet";

var_dump([
    "Frase em maiúsculo:" => mb_convert_case($frase1, MB_CASE_UPPER),
]);

$frase2 = array("Desenvolvimento de Aplicações para Internet");
$contador = 0;

while($contador < count($frase2)){

    $transform = mb_strtoupper($frase2[$contador]);
    echo  "<h5>Frase em maiúsculo: {$transform}</h5>";

    $contador++;
};
