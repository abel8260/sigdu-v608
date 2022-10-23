<?php 
session_start();



include('../../login-cadastro/db/conexao.php');

$user =$_SESSION["char"]; 
$dono = $_SESSION["usuario"];

?>

<!DOCTYPE html>



<html lang="en">
<head>
<!--básico-->  
            <meta charset="UTF-8"/>  
            <title>Perfil;</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/> 
        <!---->

        <!--tags para SEO-->
            <meta name="descripition" content="Jogo de rpg pra entretenimento."/>  
            <meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg"/>
            <meta name="author" content="rock studios"/>   
        <!---->

        <!--tags pro favicon-->
           <link rel="shortcut icon" href="../img_geral/favicon/favicon_084925/favicon.ico" >
           <link rel="icon" type="image/gif" href="img_geral/favicon/favicon_084925/animated_favicon1.gif" >
        <!---->
<style>
  	body{position:relative;}
    .button {
      position:absolute;
      padding: 10% 15%;
      text-align: center;
      font-size: 16px;
      background-color: black ;
      color: white;
      border: 2px solid white;
    }


    p:hover {
      background-color: #555555;
      
    }

    img:hover{
    	box-shadow: 0 0 2px 1px #000;
      border: 1px solid #000;
      border-radius: 4px;
      padding: 5px;
    }


    #button01{
    	position:absolute;
      margin-top:2%;
      margin-left:10%;
      width: 22%;

    }

 

    #button03{
      margin-top:2%;
      margin-left:33%;
      padding-right: 28%;
    }

    a.pg1{
         margin-left:82%;
         margin-top:2%;
         position:absolute; 
       }
       
       a.pg1:link, a.pg1:visited {
      background-color: black ;
      color: white;
      padding: 14px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border: 1px solid white;
    }

    a.pg1:hover, a.pg1:active {
      background-color: #e0e0d1;
      color: #000;
    }

    body{
      background-color: black ; 
    }

    p{color:white;}

    @media screen and (max-width: 720px ){

     #button01{
      position:absolute;
      margin-top:2%;
      margin-left:10%;
      width: 30%;

    }

   

    #button03{
     margin-top:40%;
      margin-left:10%;
      
       width: 9vw;
    }
    a.pg1{
         margin-left:50%;
         margin-top:2%;
         position:absolute; 
       }
    } 

</style>
<meta charset="UTF-8"/>  
</head>

<body>
   <img id="button01"  src=<?php




$stmt34= $pdo-> prepare( "SELECT * FROM inv_camada ORDER BY
       id_inv_cam DESC LIMIT 1 ");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         


echo $value34["clan"];

          
                   
                     }





?>    
 ></a>
   
   <a href="key_61.php"> <p id="button03" class="button">Ficha</p></a>
   <a class= "pg1" href="key_24.php">menu principal</a>
      
<br/>
   <br/>
    <br/>
<br/>
   <br/>
<br/>
   <br/>
<br/>
   <br/>
<br/>   <br/>
<br/>
   <br/>
<br/>
   <br/>
<br/>
   <br/>
<br/>
   <br/>
<br/>
<hr/>  
<br/>

  <figure>
    <figcaption style="color:white; font-weight: bold ">Background-Music:</figcaption>
    <br/>

    <audio
        controls
        loop
        play
        src="../ost/theme.mp3">
            Your browser does not support the
            <code>audio</code> element.

    </audio>
    <br/>

</figure>
<br/>

<hr/>
<br/>
<br/>
</body>
</html>