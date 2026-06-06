<?php
require_once __DIR__ . '/../../configuracao/configuracao.php';
require_once __DIR__ . '/../../configuracao/conexao.php';
require_once __DIR__ . '/../model/login.php';
require_once __DIR__ . '/../model/aluno.php';

/**
 * Informações do formulário
 */

$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$sexo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sexo'])) ? $_POST['sexo'] : null;
$dataN = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['dataN'])) ? $_POST['dataN'] : null;
$matricula = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['matricula'])) ? $_POST['matricula'] : null;
$curso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['curso'])) ? $_POST['curso'] : null;
$serie = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['serie'])) ? $_POST['serie'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$usuarioLogado = false;


// Informações estática da tela
$titulo = "Cadastro de Alunos";

// Criação de objetos
$alunoObj = new Aluno(null, null, null);
$usuarioLogado = Login::verificarAutenticacao('secretaria');


// Validação dos dados do formulário
$erros = [];
$valores = [
    'nome' => $nome,
    'sexo' => $sexo,
    'dataN' => $dataN,
    'matricula' => $matricula,
    'curso' => $curso,
    'serie' => $serie,
    'email' => $email,
    'telefone' => $telefone,
];

if($_POST && $usuarioLogado){

    if (!trim($nome)) {
        $erros[] = 'O nome do aluno é obrigatório.';
    }
    
    if (!in_array($sexo, ['M', 'F'], true)) {
        $erros[] = 'O sexo do aluno é obrigatório.';
    }
    
    if (!$dataN || !DateTime::createFromFormat('Y-m-d', $dataN)) {
        $erros[] = 'A data de nascimento é obrigatória e deve estar no formato correto.';
    }
    
    if (!trim($matricula)) {
        $erros[] = 'A matrícula é obrigatória.';
    }
    
    if (!trim($curso)) {
        $erros[] = 'O curso é obrigatório.';
    }
    
    if (!trim($serie)) {
        $erros[] = 'A série é obrigatória.';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = 'O email informado é inválido.';
            }
            $telefoneSomenteNumeros = preg_replace('/\D+/', '', $telefone);
            if (!$telefoneSomenteNumeros || strlen($telefoneSomenteNumeros) < 8) {
                $erros[] = 'O telefone deve conter pelo menos 8 dígitos numéricos.';
                }
                
                if (!$erros) {
                    $matriculaExistente = $alunoObj->buscarPorMatricula($matricula);
                    if ($matriculaExistente) {
                        $erros[] = 'Esta matrícula já está cadastrada.';
                        }
                        }
                        
                        if (!$erros) {
                            $dataN = $alunoObj->dataFormatada($dataN);
                            $cadastro = Aluno::cadastrarAluno($matricula, $nome, $dataN, $sexo, $serie, $curso, $email, $telefoneSomenteNumeros);
                            if ($cadastro) {
                                header('LOCATION:' . constant('URL_LOCAL_SITE') . "?pagina=lista-aluno");
                                exit;
                                }
        $erros[] = 'Erro ao cadastrar o aluno. Tente novamente.';
    }
}

// Tela que vem do index via get
if(@$paginaUrl && $usuarioLogado){
    $exibirFormulario = true;

    @include_once './view/header.php';
    @include_once './view/cadastroAluno.php';
    @include_once './view/footer.php';
}else{
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=secretaria");
}