<?php 


if(isset($_POST['email']) && !empty($_POST['email'])){
  
  //ini_set("SMTP","smtp.gmail.com");
  //ini_set("smtp_port","465");
  //ini_set('sendmail_from','test@gmail.com');

  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $message = addslashes($_POST['message']);

  $to = "example@gmail.com";
  $subject = "Formulario Contato";
  $body = "Nome : ".$name."\r\n".
  		  "Email : ".$email."\r\n".
  		  "Mensagem : ".$message;

   //Email - From
   $header = "From: test@gmail.com"."\r\n".
   	         "Reply-To:".$email."\n".
   	         "X=Mailer:PHP/".phpversion();

   	if(mail($to, $subject, $body, $header)){

       echo "Email enviado com sucesso!";
   	
    }else{
   	
       echo "Erro ao enviar o email";
   	}
}

?>