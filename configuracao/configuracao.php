<?php
session_start();
setlocale(LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');


// var_dump($_SERVER['DOCUMENT_ROOT']);
$enviroment['local'] = "http://localhost/eteAcesso/";
$enviroment['homol'] = "https://diogoramalho.com.br/ete/aie-homol/";
$enviroment['prod'] = "https://diogoramalho.com.br/ete/aie/";

/**
 * Definindo constante URL_LOCAL
 * Caminho absoluto
 */
define("URL_LOCAL_BASE",$enviroment['local']);
define("URL_LOCAL_IMG",constant("URL_LOCAL_BASE")."assets/img/");
define("URL_LOCAL_SITE",constant("URL_LOCAL_BASE")."site/");
define("URL_LOCAL_ADM",constant("URL_LOCAL_BASE")."adm/");
define("URL_LOCAL_FORMS",constant("URL_LOCAL_BASE")."site/controller/");
define("URL_LOCAL_EMAIL_ACESSO",constant("URL_LOCAL_SITE")."view/templateEmail/alertaAcessoAluno.html");
define("URL_LOCAL_EMAIL_LOGO",constant("URL_LOCAL_IMG")."tela/logoEmail.png");
define("URL_LOCAL_UPLOAD_IMG",constant("URL_LOCAL_SITE")."controller/upload/");
?>