<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../assets/PHPMailer-master/Exception.php';
require '../../assets/PHPMailer-master/PHPMailer.php';
require '../../assets/PHPMailer-master/SMTP.php';

class Email {

    public static function sendEmail( $alunoId, $alunoNome, $responsavelNome, $responsavelEmail){
        $mail = new PHPMailer(true);
        $dataAcesso = date('d/m/Y');
        $aluno = ($alunoNome)?$alunoNome:null;
        $responsavel = ($responsavelNome)?$responsavelNome:null;
        $email = ($responsavelEmail)?$responsavelEmail:null;
        $link = constant("URL_LOCAL_SITE").'?pagina=login-responsavel&idAluno='.$alunoId;
    
        try {
            $template = (file_get_contents(constant('URL_LOCAL_EMAIL_ACESSO')));
            $template = str_replace("{BASE_URL_LOGO}",constant('URL_LOCAL_EMAIL_LOGO'),$template);
            $template = str_replace("{ALUNO}",$aluno,$template);
            $template = str_replace("{ACESSO}",$dataAcesso,$template);
            $template = str_replace("{RESPONSAVEL}",$responsavel,$template);
            $template = str_replace("{LINK}",$link,$template);
            $caminhoTemplate = constant('URL_LOCAL_EMAIL_ACESSO');
        
            //Server settings
            $mail->Host       = 'mail.diogoramalho.com.br';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
            $mail->Username   = 'eteacesso@diogoramalho.com.br';                     //SMTP username
            $mail->Password   = '';                              //SMTP password
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
            $mail->setFrom('eteacesso@diogoramalho.com.br', ':: ETE-ACESSO INTELIGENTE ::');
            $mail->addAddress($email, $responsavel);     //Add a recipient
            $mail->addReplyTo('no-reply@email.com.br', 'no-reply');
            $mail->addBCC('dioramalho@gmail.com', 'Cópia Oculta');
            $mail->addBCC('jhonathan.rsilva@professor.educacao.pe.gov.br', 'Cópia Oculta');
        
            //Content
            $mail->isHTML(true);                                 
            $mail->SMTPDebug = 0;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'O aluno: '.$aluno.' acessou o ambiente escolar hoje'; //Titulo
            //convert HTML into a basic plain-text alternative body
            $mail->msgHTML($template, constant('URL_LOCAL_EMAIL_ACESSO'));
            $mail->Body    = $template;//'This is the HTML message body <b>in bold!</b>';//strval($template);//'This is the HTML message body <b>in bold!</b>';//corpo
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
            return true;
        } catch (Exception $e) {
            echo "<br><br>Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }
    
}

