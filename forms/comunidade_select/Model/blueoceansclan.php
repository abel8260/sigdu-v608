<?php
session_start(); 
include('../../../login-cadastro/db/conexao.php');


$id = $_SESSION["id-char"];
try{

$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];
$id= $_SESSION['id-char'];
$sql = $pdo->prepare("INSERT INTO  perfil_clan (Perfil_clan_id, Perfil_nome, Perfil_DONO, Perfil_clan, Perfil_ouvinte, Perfil_tipo, Perfil_mod, Perfil_clan_id_ficha, Perfil_clan_ico) VALUES (NULL, '$name_1', '$user_1', 'blueoceans', 'S', 'clan', 'mod', $id, '../../../static/braso_ini.png')");
$sql-> execute();
 

 var_dump($sql);
  echo $sql->rowCount();
    echo 'new record created successfully';
  /*header('location: ./key_29.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
try{

$sql23 =$pdo->prepare("SELECT * FROM fichasuno
 WHERE ficha_id ='$id'");
  $sql23-> execute();
 

 var_dump($sql23);
  echo $sql23->rowCount();
  echo 'new record created successfully';
  /*header('location: ./key_29.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];
$id= $_SESSION['id-char'];

try{

$sql12 =$pdo->prepare(" INSERT INTO currencies(Currencies_DONO,Currencies_nome,Currencies_gold,Currencies_gem) VALUES('$name_1','$user_1',5000,5)");
$sql12-> execute();
 

 var_dump($sql12);
  echo $sql12->rowCount();
    echo 'new record created successfully';
  /*header('location: ./key_29.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}




header("location:../../../menus/static/key_24.php"); ?>