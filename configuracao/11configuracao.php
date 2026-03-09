<?php
session_start();
setlocale(LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');


// var_dump($_SERVER['DOCUMENT_ROOT'].'/diogo/Acesso_inteligente_ETE/');die;


/**
 * Definindo constante URL_LOCAL
 * Caminho absoluto
 */
define("URL_LOCAL_BASE","http://localhost/Acesso_Inteligente_ETE/");
define("URL_LOCAL_ASSETS","http://localhost/Acesso_Inteligente_ETE/assets/");
define("URL_LOCAL_IMG",constant("URL_LOCAL_BASE")."assets/img/");
define("URL_LOCAL_SITE",constant("URL_LOCAL_BASE")."site/");
define("URL_LOCAL_ADM",constant("URL_LOCAL_BASE")."adm/");
define("URL_LOCAL_FORMS",constant("URL_LOCAL_BASE")."site/controller/");

define("URL_LOCAL_EMAIL_ACESSO",constant("URL_LOCAL_BASE")."view/templateEmail/alertaAcessoAluno.html");
define("URL_LOCAL_EMAIL_LOGO",constant("URL_LOCAL_ASSETS")."img/tela/logoEmail.png");
?>