<?php

session_start(); 
include('../login-cadastro/conexao.php');
 




$name_2=$_SESSION["usuario"];

$name_1=$_SESSION["char"]; 
















        

         










$DONO=$name_2;

 





$sql14  = $pdo-> prepare( "SELECT * FROM currencies WHERE currencies_dono ='$name_1' AND currencies_nome = '$name_2'");
$sql14-> execute();
$result14 = $sql14-> fetchAll( PDO::FETCH_ASSOC );

foreach($result14 as  $row14 ) {
         


$goldc = $row14['currencies_gem'];
$gol=$row14['currencies_gold'];
$_SESSION["prgn"]= intval($gol/20000000);
$goldc = $goldc + 1;

$gol= $gol - 2000000000;


$prgn = $_SESSION["prgn"];

if($gol>=0){





















var_dump($gol);

var_dump($goldc);

try {


$sql23= $pdo-> prepare("UPDATE prgn SET prgn_gold = $prgn WHERE prgn_dono ='$name_2'");

$sql20 = $pdo-> prepare("UPDATE currencies SET Currencies_gold = $gol WHERE currencies_DONO ='$name_1' AND currencies_nome = '$name_2'");
$sql22 = $pdo-> prepare("UPDATE currencies SET Currencies_gem = $goldc WHERE currencies_DONO ='$name_1' AND currencies_nome = '$name_2'");
$sql20-> execute();
$sql22-> execute();
$sql23-> execute();
  echo $sql20->rowCount();
  echo 'new record created successfully';
  /* header('location: ./key_24.php ') ; */
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}




}
}




























?>