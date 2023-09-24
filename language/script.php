<?php
$_SESSION["default_language"] = "es";
/* Valido que exista la cookie de idioma */
if (!isset($_COOKIE["idioma"])) {
    setcookie("idioma", $_SESSION["default_language"], time() + 3600, "/");
}
/* Idiomas disponibles */
$_SESSION["languages_available"] = [
    ["label" => "Español", "value" => "es"],
    ["label" => "Ingles", "value" => "en"],
];
/**
 * Funcion para obtener el select para cambiar el idioma de la pagina
 */
function GetSelectLanguage(): void
{
    $languages = $_SESSION["languages_available"];
    $options = '
        <select 
            onchange="changeLanguage()" 
            id="languageSelect" 
            style="
                width: 150px;
	            height: 50px;
	            font-size: 16px;
	            text-transform: uppercase;
	            padding: 15px;
	            border-radius: 15px;
            ">
        ';
    foreach ($languages as $language) {
        $options .= "<option value=\"{$language["value"]}\">{$language['label']}</option>";
    }
    $options .= '</select>';
    echo $options;
}
/**
 * Funcion para obtener el script que se ejecutara cuando cambie de idioma
 */
function GetScriptSelectLanguage(): void
{
    if (file_exists("../language/script.html")) {
        $htmlScript = file_get_contents('../language/script.html');
    } elseif (file_exists("./language/script.html")) {
        $htmlScript = file_get_contents('./language/script.html');
    }
    echo $htmlScript;
}
/**
 * Funcion para obtener el texto traducido
 */
function GetTextoTraducido(string $pagina): array
{
    $pagina .= ".php";
    include_once($pagina);
    return $texto[$_COOKIE["idioma"] ?? $_SESSION["default_language"]];
}
/**
 * Funcion para cambiar el idioma de la cookie
 */
function OnChangeLanguage(string $languageSelected)
{
    setcookie("idioma", $languageSelected, time() + 3600, "/");
}
/* Ejecuto las peticiones  */
$request = $_POST["request"] ?? "";
switch ($_POST["function"] ?? "") {
    case 'OnChangeLanguage':
        OnChangeLanguage($request["languageSelected"]);
        break;

    default:
        break;
}
