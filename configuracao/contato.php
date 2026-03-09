<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contato
 *
 * @author diogo
 */
class Contato extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
    }
    
     /***
    * Método para gerar a página de contato
    */
   public function index($msg=NULL){
      
       $err = NULL;
       $suc = NULL;
        
        //Pagina
        $pagina = 'contato';
        
        if($msg){
            if($msg == 0){$err = '<strong>ERRO!</strong> Infelizmente esse envio falhou... Tente novamente mais tarde. ';}
            if($msg == 1){$suc = '<strong>SUCESSO!</strong> Seu e-mail foi enviado. Em breve retornaremos seu contato. ';}
        }
        
        $data['pagina'] = $pagina;
        $data['suc'] = $suc;
        $data['err'] = $err;
        
        $this->load->view('site/elementos/header',$data);
        $this->load->view('site/view_contato',$data);
        $this->load->view('site/elementos/footer');
    }
    
    public function sendContato(){
        
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $assunto = $this->input->post('assunto');
        $telefone = $this->input->post('telefone');
        $mensagem = $this->input->post('mensagem');
        
        //Define o arquivo e o caminho do template
        $template = (file_get_contents(site_url().'assets/emailTemplate/template_contato.html')); //, dirname(__FILE__)
        
        $template = str_replace("{BASE_URL_LOGO}",site_url('assets/imagem/marca-curriculo-email.png'),$template);
        $template = str_replace("{NOME}",$nome,$template);
        $template = str_replace("{EMAIL}",$email,$template);
        $template = str_replace("{TELEFONE}",$telefone,$template);
        $template = str_replace("{ASSUNTO}",$assunto,$template);
        $template = str_replace("{MENSAGEM}",$mensagem,$template);
//        var_dump($template);die;

        $caminhoTemplate = site_url().'assets/emailTemplate/template_contato.html';
        
        $this->sendMail($template,$caminhoTemplate);
    }
    
    public function sendMail($template, $caminhoTemplate){
        
        //date_default_timezone_set('Etc/UTC');   
        $this-> load-> library ('SMTP');
        $this-> load-> library ('PHPMailer');

        //Create a new PHPMailer instance
        $mail = new PHPMailer();
       
//        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
         $mail->CharSet = 'UTF-8';

        //Set the hostname of the mail server
//        $mail->Host = "smtp.sucesso.adm.br";
//        //Set the SMTP port number - likely to be 25, 465 or 587
//        $mail->Port = 587;
//        //Whether to use SMTP authentication
//        $mail->SMTPAuth = true;
//        //Username to use for SMTP authentication
//        $mail->Username = "diogo@sucesso.adm.br";
//        //Password to use for SMTP authentication
//        $mail->Password = "0Sucesso";

        //Set who the message is to be sent from
        $mail->setFrom('site@sucessoseminovos.com.br', 'Sucesso Seminovos');
        //Set an alternative reply-to address
        $mail->addReplyTo('site@sucessoseminovos.com.br', 'Reply');
        //Set who the message is to be sent to
        $mail->addAddress('osmar.neto@gruposucessoempresarial.com.br', 'Atendimento');
        //Adicionar cópia oculta
        $mail->AddBCC('janaina.oliveira@sucessoseminovos.com.br','Copia'); 
        $mail->AddBCC('dioramalho@gmail.com','Copia'); 
        //Set the subject line
        $mail->Subject = 'NOVO CONTATO DO SITE SUCESSO SEMINOVOS';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($template, $caminhoTemplate); //file_get_contents('contents.html'), dirname(__FILE__)
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
//        $mail->addAttachment('images/phpmailer_mini.png');

        //send the message, check for errors
        if (!$mail->send()) {
            $msg = 0;
            $this->index($msg);
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg = 1;
            $this->index($msg);
        }
    }
    
}
