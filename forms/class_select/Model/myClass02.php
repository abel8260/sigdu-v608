
<meta charset="UTF-8"/>  
<?php


session_start(); 
include('../../../login-cadastro/db/conexao.php');

$name_5 = $_SESSION["usuario"]; 
$name_6=$_SESSION['char'];








$sql387=$pdo->prepare("SELECT ficha_id FROM fichasuno  ORDER BY ficha_id DESC LIMIT 1");
    $sql387-> execute();
     $info87 = $sql387 -> fetchALL(); 
    
    foreach ($info87 as $key => $value ){

    
   


$_SESSION["id-char"] =  $value["ficha_id"];

   

    
$id=$_SESSION["id-char"] ;

try{
$sql287=$pdo->prepare("UPDATE fichasuno SET ficha_Class = 'guardião',  ficha_Sclass = 'Barbaro'  WHERE ficha_id= '$id' ");
$sql287-> execute();

  echo $sql287->rowCount();
  echo 'new record created successfully';
 header('location: ../../comunidade_select/View/clan.php') ;
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}}


?>
