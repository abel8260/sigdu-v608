<?php 
session_start();
include('../../../login-cadastro/db/conexao.php');
 $local = "saida do hotel" ; 
 $name_1=$_SESSION["char"]; 
 $sql90=$pdo->prepare("INSERT INTO  localidads  ( localidad_id,  char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES(NULL, '$name_1','$local', '../cen/hotel_golden_star/tela_10_cen.php','../../../LAPIDE-SEMINOVA-D.png')");
 $sql90-> execute();

 $querylQUEST = "INSERT INTO  quests (   char_quests ,quests_estado ,quests_src ) VALUES( '$name_1', 'PROCESS','../../img_geral/quest-mumia-escondida.png')";
 pg_query($querylQUEST);


 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<title> PoRTAO </title>
		
		<style>
			body{
    		background-image:url("../../../static/PROTOTIPO DESIGN V3/fundo.png");  
    	}
           a{
           	text-decoration: none;
           	color:black;
           } 
	       .cen_box{
				border: 3px solid black;
				margin-bottom:2%; 
				cursor:pointer;
				background-color:#666666; 
	        }

	        .text_cen_box{
				padding-left:1%; 			
	        }

	        .cen_box_title{
				border: 3px solid black;
				margin-bottom:2%; 
				background-color: #333333;
				
				font-weight:bold;
	        }
	        .cen_box:hover {
			  background-color: #555555;
			  color:white;

			}
            a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited {
			    background-color: #000;
			    border: 1px solid #000;
			    color: white;
			    display: inline-block;
			    padding: 14px 25px;
			    text-align: center;
			    text-decoration: none;
			    
			    width:100%;
		    }

		    a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active  {

		      background-color: #e0e0d1;
		      color: #000;
		    }


		    .links{
			    width:120px;
			    margin-bottom:2%; 
		    }
		    vermelho{
		    	color:red;
		    }
		</style>
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body>
		<div class="links"> 
			<a class= "menu" href="../../keypage/key_24.php">menu</a>
			<br>
			<a class= "voltar" href="../cen_add.php">voltar</a>
			<br>
			<a class= "voltar" href="tela_01_cen_map.php">Mapa</a>
			<br>
		</div>
		<div class="cen_box_title" >
			<p class="text_cen_box"> O zumbi abre a porta e voc?? percebe uma mini saleta logo a dentro do local deles.  </p> 
		</div>
        <a href="#"> 
		<div class="cen_box" >
			<p class="text_cen_box" > Entrar  </p> 
		</div></a>
        
        <a href="#"> 
		<div class="cen_box" >
			<p class="text_cen_box" > Nao entrar  </p> 
		</div></a>
        
	</body>
	</body>
</html>