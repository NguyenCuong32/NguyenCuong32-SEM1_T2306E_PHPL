<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // include_once'validate.php';
    $UserError=$EmailError='';
    abstract class validate{
   

        public function inputvalidate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;

        }

        public function validate($input) {
         
        }
        public function getErerrorMessagesrors() {
            return $this->errorMessages;
        }
    }

    //Lớp vadidate userName
class NameValidate extends validate {
    public function validate($input) {
        if (empty($input)) {
            $this->errorMessages = "Field is required";
        } elseif (!preg_match("/^[a-zA-Z0-9']*$/", $input)) {
            $this->errorMessages = "Name is invalid";
        }
        else   $this->errorMessages ='';
    }
}

 // lớp vadidate email

class EmailValidate extends validate {
    public function validate($input){
        if(empty($input)) $this -> errorMessages =  "Field is required";
        elseif(!filter_var($input, FILTER_VALIDATE_EMAIL))  $this -> errorMessages =  "Email is invalid";
        else $this -> errorMessages ='';
    }
}

// validate

include_once'validate.php';

// if($_SERVER['REQUEST_METHOD']=='POST'){
        
//     //validate userName
//    $name = $_POST['name'];
//    $nameValidate = new NameValidate();
//    $inputNameValue = $nameValidate -> inputvalidate($name );
//    $nameValidate -> validate( $inputNameValue);
//    $UserError = $nameValidate-> getErerrorMessagesrors();
//    // validate Email

//    $email = $_POST['email'];
//    $emailValidate = new EmailValidate;
//    $inputValueEmail = $emailValidate -> inputvalidate($email);
//    $emailValidate -> validate($inputValueEmail);
//    $EmailError = $emailValidate -> getErerrorMessagesrors();
   

// }

    ?>

        <form method="post" 
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        User <input type="text" name="name">
          <?php
              echo '<span class="error">' . $UserError . '</span>';  ?>
         <br><br>
        Email <input type="email" name="email">
            <?php 
                echo '<span class="error"> '.$EmailError ?>

        <input type="submit" value="Submit">
    </form>
</body>
</html>