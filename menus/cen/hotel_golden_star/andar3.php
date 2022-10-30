<?php 
session_start();
include('../../../login-cadastro/db/conexao.php');
 $local = "andar 3 do h. golden star" ; 
 $name_1=$_SESSION["char"];


 $sql90=$pdo->prepare("INSERT INTO  localidads  (   char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES( '$name_1','$local', '../cen/hotel_golden_star/andar21.php','../../../LAPIDE-SEMINOVA-D.png')");
 $sql90-> execute();



 ?>
 <!DOCTYPE html> <html> <head> <meta charset='utf-8'/> <title> PoRTAO v1.3 </title> <style> a{ text-decoration: none; color:black; } .cen_box{ border: 3px solid black; margin-bottom:3%; cursor:pointer; background-color:#666666; } .text_cen_box{ padding-left:1%; } .cen_box_title{ border: 3px solid black; margin-bottom:3%; background-color: #333333; font-weight:bold; } .cen_box:hover { background-color: #555555; color:white; } a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited { background-color: #000; border: 1px solid #000; color: white; display: inline-block; padding: 14px 35px; text-align: center; text-decoration: none; width:100%; } a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active { background-color: #e0e0d1; color: #000; } .links{ width:130px; margin-bottom:2%; } vermelho{ color:red; } input{ background-color: #ccc; color:black ; font-style: italic; } </style> <script type='text/javascript' src='script.js'></script> </head> <body style= 'background-color:black');> <div class='links'> <a class= 'menu' href='../exportar/cen_add.php'>exportar</a> <br> <a class= 'voltar' href='cen_add.php'>voltar</a> <br> <a class= 'voltar' href='tela_01_cen_map.php'>Mapa</a> <br> </div> <div class='cen_box_title' > </div>
andar 3---
<div class='cen_box' style='padding : 9px' >andar 3---<br></div>


<form action='../../../menus/static/key_13initial.php' method='POST'><div class='cen_box' style='padding : 9px' >17---<br/>ver shop inicial---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/cen/hotel_golden_star/andar10.php' method='POST'><div class='cen_box' style='padding : 9px' >30---<br/>ver sala 3---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_13initial.php' method='POST'><div class='cen_box' style='padding : 9px' >6---<br/>ver shop inicial---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_473.php' method='POST'><div class='cen_box' style='padding : 9px' >16---<br/>ver shop free 3---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>
<form action='../../../menus/static/key_13enemy1.php' method='POST'><div class='cen_box' style='padding : 9px' >18---<br/>ver red 3---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_13enemy3.php' method='POST'><div class='cen_box' style='padding : 9px' >19---<br/>ver redo 3---<br/>normal---<br/>hotel_golden_star---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

