<?php

class Autenticar{

    public $email,$senha;
function __construct($email,$senha){

$this->email=$email;
$this->senha=$senha;
// Validar as caracteristicas da senha
$Maiusculo = preg_match('@[A-Z]@', $senha);
$numero    = preg_match('@[0-9]@', $senha);
$CaracteresEspeciais = preg_match('@[^\w]@', $senha);
$minimo= strlen($senha) < 8 ;
$maximo= strlen($senha) > 25 ;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)||!$numero||!$CaracteresEspeciais||!$Maiusculo|| $minimo||$maximo){
    $myfile = fopen("validar.txt", "w") or die("Unable to open file!");
    $txt = " Dados :$email e $senha não são validos!!!!";
    fwrite($myfile, $txt);
    fclose($myfile);
    
}else{

    $myfile = fopen("validar.txt", "w") or die("Unable to open file!");
    $txt = " Dados :$email e $senha  São Validos !!";
    fwrite($myfile, $txt);
    fclose($myfile);
    

}


}
}

$teste= new Autenticar('joaoecarol39@gmail.com','Joaopedro12@');

?>
