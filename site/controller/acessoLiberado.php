<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/aluno.php';
@include_once '../model/responsaveis.php';
@include_once '../model/email.php';
@include_once './model/email.php';
include_once "../controller/alunoController.php";
$msgAlert = "";
$alerta_sucesso = "";
$valorAtual = 'Por favor, preencha este campo.';
$verificarBiometria = false;
$id = $_GET['id'];

$alunoRetorno = $alunoObj->buscarPorId($id);
$ResponsavelObj = new Responsaveis();
$responsavelRetorno = $ResponsavelObj->buscarPorId($id);

//Cadastrar presença
if($alunoRetorno){ 
    $alunoObj->cadastrarRegistroEntrada($alunoRetorno[0]['id']);
   if($responsavelRetorno){
       $retorno = Email::sendEmail(
           $alunoRetorno[0]['id'],
           $alunoRetorno[0]['Nome'],
           $responsavelRetorno[0]['nome'],
           $responsavelRetorno[0]['email']
       );
   }else{$alerta_sucesso = "Responsável não Cadastrado.";}
 }else{$alerta_sucesso = "Aluno(a) já fez acesso hoje.";}

@$exibirFormulario = false;    
$alerta_sucesso = "Aluno(a) Localizado com Sucesso.";
include_once '../view/header.php';
include_once '../controller/acessoAjax.php';
if(@$exibirFormulario){include_once '../view/controleAcesso.php';}else{include_once '../view/controleAcesso_sucesso.php';}
include_once '../view/footer_acesso.php';
//http://localhost/Acesso_Inteligente_ETE/site/controller/acessoLiberado.php?id=31
//https://diogoramalho.com.br/ete/aie-homol/site/controller/acessoLiberado.php?id=28
?>
<script>
     $(document).ready(function(){
        setTimeout(alertFunc, 5000);
        function alertFunc() {
            window.location.href = "<?= constant("URL_LOCAL_SITE")?>/?pagina=acesso";
        }
    });
</script>