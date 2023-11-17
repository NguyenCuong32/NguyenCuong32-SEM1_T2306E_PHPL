<?php
include_once'formvalidate.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
        
    //validate userName
   $name = $_POST['name'];
   $nameValidate = new NameValidate();
   $inputNameValue = $nameValidate -> inputvalidate($name );
   $nameValidate -> validate( $inputNameValue);
   $UserError = $nameValidate-> getErerrorMessagesrors();
   // validate Email

   $email = $_POST['email'];
   $emailValidate = new EmailValidate;
   $inputValueEmail = $emailValidate -> inputvalidate($email);
   $emailValidate -> validate($inputValueEmail);
   $EmailError = $emailValidate -> getErerrorMessagesrors();
   

}



?>