<?php 
session_start();
include('../../../login-cadastro/db/conexao.php');
 $local = "andar 29 do h. golden star" ; 
 $name_1=$_SESSION["char"];
 $name_2=$_SESSION["usuario"];

 $sql90=$pdo->prepare("INSERT INTO  localidads  (   char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES( '$name_1','$local', '../cen/hotel_golden_star/andar17.php','../../../LAPIDE-SEMINOVA-D.png')");
 $sql90-> execute();

 $sql92=$pdo->prepare("INSERT INTO perfil_quest (Perfil_quest_id, Perfil_quest_DONO, Perfil_quest_nome, Perfil_quest_quest, Perfil_quest_mais, Perfil_quest_menos, Perfil_quest_atg, Perfil_quest_meta, Perfil_quest_timer, Perfil_quest_ico) VALUES (NULL, '$name_2', '$name_1', 'mumia do quarto 30', 'xp', 'power', 'n', 1,time(), '../../static/16.png');");
 $sql92-> execute();

 ?>
<!DOCTYPE html> <html> <head> <meta charset='utf-8'/> <title> PoRTAO v1.4 </title> <style> a{ text-decoration: none; color:black; } .cen_box{ border: 4px solid black; margin-bottom:4%; cursor:pointer; background-color:#666666; } .text_cen_box{ padding-left:1%; } .cen_box_title{ border: 4px solid black; margin-bottom:3%; background-color: #333333; font-weight:bold; } .cen_box:hover { background-color: #555555; color:white; } a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited { background-color: #000; border: 1px solid #000; color: white; display: inline-block; padding: 13px 45px; text-align: center; text-decoration: none; width:100%; } a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active { background-color: #e0e0d1; color: #000; } .links{ width:130px; margin-bottom:2%; } vermelho{ color:red; } input{ background-color: #ccc; color:black ; font-style: italic; } </style> <script type='text/javascript' src='script.js'></script> </head> <body style= 'background-color:black');> <div class='links'> <a class= 'menu' href='../exportar/cen_add.php'>exportar</a> <br> <a class= 'voltar' href='cen_add.php'>voltar</a> <br> <a class= 'voltar' href='tela_01_cen_map.php'>Mapa</a> <br> </div> <div class='cen_box_title' > </div>
andar 29---
<div class='cen_box' style='padding : 9px' >andar finale---<br></div>

<form action='../../../menus/cen/hotel_golden_star/andar22.php' method='POST'><div class='cen_box' style='padding : 9px' >50---<br/>ver sala 22---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_12enemy1.php' method='POST'><div class='cen_box' style='padding : 9px' >18---<br/>ver red 29---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_12enemy2.php' method='POST'><div class='cen_box' style='padding : 9px' >19---<br/>ver redo 29---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_12fusionboss.php' method='POST'><div class='cen_box' style='padding : 9px' >19---<br/>ver boss finale---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>