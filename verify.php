<?php

class Authenticate{

    public $email,$password;
function __construct($email,$password){

$this->email=$email;
$this->password=$password;
// Validar as caracteristicas da senha
$Upercase = preg_match('@[A-Z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$SpecialChar = preg_match('@[^\w]@', $password);
$minimum= strlen($password) < 8 ;
$max strlen($password) > 25 ;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)||!$number||!$SpecialChar||!$Upercase|| $minimum||$max){
    $myfile = fopen("check.txt", "w") or die("Unable to open file!");
    $txt = " Dados :$email and $password are  not good!!!!";
    fwrite($myfile, $txt);
    fclose($myfile);
    
}else{

    $myfile = fopen("check.txt", "w") or die("Unable to open file!");
    $txt = " Dados :$email e $senha  Are good!!";
    fwrite($myfile, $txt);
    fclose($myfile);
    

}


}
}

$test= new Authenticate('<your_email>','<your_password>');

?>
