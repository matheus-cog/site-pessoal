<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['mensagem'])){
        echo 'Conexão inválida.';
    } else{
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(false);

        try {
            //Server settings
            $mail->SMTPDebug  = false;                                                  //Enable verbose debug output
            $mail->isSMTP();                                                            //Send using SMTP
            $mail->CharSet    = 'UTF-8';                                                //Set the collation
            $mail->Host       = 'YOUR-SERVER-HERE';                                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                                   //Enable SMTP authentication
            $mail->Username   = 'YOUR-USERNAME-HERE';                                   //SMTP username
            $mail->Password   = 'YOUR-PASSWORD-HERE';                                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom($email, $nome);
            $mail->addAddress('YOUR-EMAIL-HERE', 'YOUR-NAME-HERE');                     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                                        //Set email format to HTML
            $mail->Subject = $nome.' ('.$email.') deixou esta mensagem para você!';     //Set the subject
            $mail->Body = $mensagem;                                                    //Set the email body
        
            if($mail->send()){
                echo "A mensagem foi enviada com sucesso!";
            } else{
                echo "Houve um erro no envio do e-mail.";
            }
        } catch (Exception $e){
            echo "Houve um erro no envio do e-mail. Erro: ".$mailer->ErrorInfo;
        }
    }

?>