<?php



session_start(); 
include('../../../login-cadastro/db/conexao.php');


$user_1= $_SESSION['usuario'];
$name_1=$_SESSION['char'];


 







$Daemon_racial3_atk = 100;
$Daemon_racial3_def = 100;
$Daemon_racial3_pw = 0;
$Daemon_racial3_hp = 100;
$Daemon_racial3_mp = 100;



$HP_MAX = $Daemon_racial3_hp;
$MP_MAX = $Daemon_racial3_mp;

$Cons = round($Daemon_racial3_hp/2);
$CHA = round($Daemon_racial3_pw/2);
$Fr	= round($Daemon_racial3_atk);
$Vel =	round($Daemon_racial3_pw/2);
$Int =	round($Daemon_racial3_mp);
$Sorte = round(($Daemon_racial3_def + $Cons)/2);
  
try {

$cem = 100;
  $stmt = $pdo->prepare("INSERT INTO  fichasuno(  ficha_dono, ficha_nome, ficha_Race, ficha_ATK, ficha_DEF, ficha_PW, ficha_HP, ficha_MP, ficha_hp_MAX, ficha_mp_MAX, ficha_XP, ficha_LV , ficha_Const , ficha_CHA , ficha_Fr , ficha_Vel, ficha_Int , ficha_Sorte , ficha_Class , ficha_Sclass) VALUES( '$user_1' , '$name_1','daemon' , $cem , 	$cem, 	$cem, 	$cem , 	$cem , 	$cem , 	$cem ,	$cem  , 	$cem , 	$cem ,	$cem , 	$cem ,  	$cem , 	$cem , 	$cem , 	$cem , 	$cem )");
  $stmt->execute();
  echo $stmt->rowCount();
  echo 'new record created successfully';
  header('location: ../../class_select/View/View.php') ; 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   ?>