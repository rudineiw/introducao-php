<?php
include 'constantes.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclua o autoload do PHPMailer
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

function EnviaEmail($email,$assunto,$mensagem) {
    global $USERNAME, $SENHA;
    
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Substitua pelo seu servidor SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = $USERNAME; // Substitua pelo seu e-mail
        $mail->Password   = $SENHA; // Substitua pela sua senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use SSL ou TLS, dependendo do seu servidor
        // - SMTPS (implicit TLS on port 465) or
        // - STARTTLS (explicit TLS on port 587)
        $mail->Port       = 587; // Porta do servidor SMTP

        // Remetente e destinatário
        $mail->setFrom($USERNAME, 'Sistema');
        $mail->addAddress($email, 'Nome do Destinatário');

        // Conteúdo do e-mail
        $mail->isHTML(true); // Define o formato do e-mail como HTML
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;

        // Adicione anexos se necessário
        // $mail->addAttachment('/caminho/do/arquivo.pdf');

        // Envie o e-mail
        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro no envio do e-mail: {$mail->ErrorInfo}";
    }
}