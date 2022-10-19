<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$curso = "Técnico em Informática";

var_dump([
    "string" => $curso,
    "strlen" => strlen($curso),
    "mb_strlen" => mb_strlen($curso),
    "substr" => substr($curso, 11),
    "mb_substr" => mb_substr($curso, 11),
    "strtoupper" => strtoupper($curso),
    "mb_strtoupper" => mb_strtoupper($curso),
    "strtolower" => strtolower($curso),
    "mb_strtolower" => mb_strtolower($curso),
]);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$curso = "TÉCNICO em Informática";

var_dump([
    "strtoupper" => strtoupper($curso),
    "mb_strtoupper" => mb_strtoupper($curso),
    "strtolower" => strtolower($curso),
    "mb_strtolower" => mb_strtolower($curso),
    "mb_convert_case UPPER" => mb_convert_case($curso, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($curso, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($curso, MB_CASE_TITLE),
]);


/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$substituicao = "Programação para Internet";

echo "<h5>{$substituicao}</h5>";
echo "<h5>" . str_replace("Internet", "Mobile", $substituicao) . "</h5>";
echo "<h5>" . str_replace(["Programação", "Mobile"],
              array("Desenvolvimento", "Mobile"), $substituicao) . "</h5>";


/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$site = "https://www.google.com.br/search?q=univates&source=hp&ei=QEFPY87gDZyq5OUPjNeo-As&iflsig=AJiK0e8AAAAAY09PUFdK4BQJXyRWE2Sh8Veff_pB_sff&ved=0ahUKEwjOgJmrgev6AhUcFbkGHYwrCr8Q4dUDCAg&uact=5&oq=univates&gs_lcp=Cgdnd3Mtd2l6EAMyCwgAEIAEELEDEIMBMgsIABCABBCxAxCDATIFCAAQgAQyBQgAEIAEMgsILhCABBDHARCvATIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOhEILhCABBCxAxCDARDHARDRAzoOCC4QgAQQsQMQgwEQ1AI6CAguELEDEIMBOggILhCABBDUAjoFCC4QgAQ6DgguELEDEIMBEMcBENEDOggIABCABBCxAzoLCC4QgAQQsQMQgwFQwAZYjw5ggBBoAXAAeACAAboBiAHkB5IBAzAuOJgBAKABAbABAA&sclient=gws-wiz";

mb_parse_str($site, $siteComParametros);

var_dump([
    "site" => $site,
    "parâmetros" => $siteComParametros,
]);

/**
 * [ Exercícios ]
 */
fullStackPHPClassSession("exercícios", __LINE__);

//exercício1
$vet_palavras = array("Univates", "Curso", "Técnico", "Software", "HTML e PHP");
$contador = 0;

var_dump([
    $vet_palavras
]);
while($contador < count($vet_palavras)){

    $letras = mb_strlen($vet_palavras[$contador]);
    echo  "<h5>A palavra {$vet_palavras[$contador]} tem {$letras} letras</h5>";

    $contador++;
};

//exercício2
$vet_palavras = array("Univates", "Curso", "Técnico", "Software", "HTML / PHP");
$contador = 0;

var_dump([
    $vet_palavras
]);
while($contador < count($vet_palavras)){

    $transform = mb_strtoupper($vet_palavras[$contador]);
    echo  "<h5>Palavra em maiúsculo: {$transform}</h5>";

    $contador++;
};