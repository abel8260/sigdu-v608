<?php 
session_start(); 
require '../../login-cadastro/db/conexao.php'  ; 
$nome =$_SESSION["char"]; 
$user = $_SESSION["usuario"];





$name_2 = $_SESSION["usuario"]; 
$name_1 = $_SESSION["char"];











  



$sql14=$pdo->prepare("SELECT * FROM currencies WHERE Currencies_DONO ='$name_1' AND Currencies_nome = '$name_2'");
   
     $info14 = $sql14 -> fetchALL(); 
   

    $sql14-> execute();


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">

          <!--básico-->  
              <meta charset="UTF-8"/>  
              <title>Menu Principal;</title>
              <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/> 
          <!---->

          <!--tags para SEO-->
              <meta name="descripition" content="Jogo de rpg pra entretenimento."/>  
              <meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg"/>
              <meta name="author" content="rock studios"/>   
              <meta property="og:image" content="../../static/opengraph.png" />
          <!---->

          <!--tags pro favicon-->
            <link rel="shortcut icon" href="../../static/favicon/favicon_084925/favicon.ico" >
            <link rel="icon" type="image/gif" href="img_geral/favicon/favicon_084925/animated_favicon1.gif" >
            <link rel="stylesheet" href="../../home/View/css/key_24.css">
        
            
<style>


  

button {
    background-color: #000;
    font-weight: bold;
    color: white;
    cursor: pointer;
    font-family: inherit;
    padding: 1rem;
    border-radius: 5px;
    border: 2px solid white;
}

button:active {
    transform: scale(0.98);
}

button:focus {
    outline: none;
    background-color: rgba(0, 0, 0, 0.8);
}



    </style>



          <!---->

    


  </head>

  <body style="background-color: black;">
    
        <!--MENU-TOP--> 
            <div class="menu-top">
              <!--MENU-TOP-IND-WRAPPER-->
                <div class="menu-top-IND-wrapper">

                  <!--MENU-TOP-IND-WRAPPERPERFIL-->
                    <div class="menu-top-IND-wrapperPERFIL">
      

          
     <?php




$stmt5= $pdo-> prepare( "SELECT * FROM inv_camada WHERE DONO_INV = '$name_2'  AND user_inv = '$name_1' ORDER BY
       id_inv_cam DESC LIMIT 1 ");
$stmt5-> execute();
$result5 = $stmt5-> fetchAll( PDO::FETCH_ASSOC );

foreach($result5 as  $value5) {
         

echo "<div class='card'>";

echo "<img class='elmo' src='".$value5["head"]."'/>";

echo "</div>";
          
                   
}





?>              
                     
                    </div>
                  <!---->

                  <!--MENU-TOP-IND-WRAPPERMAODIR-->
                    <div class="menu-top-IND-wrapperMAODIR">
                     


      
     <?php




$stmt34= $pdo-> prepare( "SELECT * FROM inv_camada WHERE DONO_INV = '$name_2'  AND user_inv = '$name_1' ORDER BY  id_inv_cam DESC LIMIT 1 ");
$stmt34-> execute();
$result34 = $stmt34-> fetchAll( PDO::FETCH_ASSOC );

foreach($result34 as  $value34) {
         

echo "<div class='card'>";

echo "<img class='mao-dir' src='".$value34["clan"]."'/>";

echo "</div>";
          
                   
                     }





?>    


    


                     
                    </div>
                  <!---->
                  

                </div> 
              <!---->

              <!--MENU-TOP-IND-WRAPPER2-->
                <div class="menu-top-IND-wrapper2">
                  <a href="./key_pull.php"> <img  src="../../static/x-ui-1.png" width="60px" height="60px"/></a> 
                </div> 
              <!---->
            

              <!--MENU-TOP-IND-WRAPPER4-->
                <div class="menu-top-IND-wrapper4">
                  <!--MENU-TOP-IND-WRAPPERMOEDA1-->
                    <div class="menu-top-IND-wrapperMOEDA1">
                      <img class="MOEDA1" src="../../static/PROTOTIPO DESIGN V3/Sin título-94.png">
                    </div>
                  <!---->

                  <!--MENU-TOP-IND-WRAPPERVALOR1-->
                    <div class="menu-top-IND-wrapperVALOR1">
                      <!--MENU-TOP-IND-WRAPPERVALOR1-->
                        <div class="menu-top-INDEXVALOR1">
                           <p id="level" class="letra2 letra3" ><?php


$stmt59= $pdo-> prepare( "SELECT * FROM currencies WHERE currencies_nome = '$user' AND currencies_DONO = '$nome'  ORDER BY Currencies_id  LIMIT 1 ");
$stmt59-> execute();
$result59 = $stmt59-> fetchAll( PDO::FETCH_ASSOC );

foreach($result59 as  $value59) {
          echo "<p id='level' class='letra2 letra3' >".$value59['Currencies_gold']."</p>";


          
                   
                     }





?></p>
                        </div>
                      <!---->
                    </div>
                  <!---->
                </div> 
              <!---->
              <!--MENU-TOP-IND-WRAPPER5-->
                <div class="menu-top-IND-wrapper5">
                  <!--MENU-TOP-IND-WRAPPERMOEDA2-->
                    <div class="menu-top-IND-wrapperMOEDA2">
                      <img class="MOEDA2" src="../../static/PROTOTIPO DESIGN V3/Sin título-95.png">
                    </div>
                  <!---->

      <!--MENU-TOP-IND-WRAPPERVALOR2-->
                    <div class="menu-top-IND-wrapperVALOR2">
                      <!--MENU-TOP-IND-WRAPPERVALOR2-->
                        <div class="menu-top-INDEXVALOR2">
                          <p id="level" class="letra2 letra3" ><?php


$stmt4= $pdo-> prepare( "SELECT * FROM currencies WHERE currencies_nome = '$user' AND currencies_DONO = '$nome'  ORDER BY Currencies_id  LIMIT 1 ");
$stmt4-> execute();
$result4 = $stmt4-> fetchAll( PDO::FETCH_ASSOC );

foreach($result4 as  $value4) {
          echo "<p id='level' class='letra2 letra3' >".$value4['Currencies_gem']."</p>";


          
                   
                     }





?></p>
                        </div>
                      <!---->
                    </div>
                  <!---->
                                  </div> 
              <!---->
              <!--MENU-TOP-IND-WRAPPER6-->
                <div class="menu-top-IND-wrapper6">
                </div> 
              <!---->
            </div> 
        <!---->
                  <!--CLEAR-->
                    <div class="clear">
                    </div> 
                  <!---->
    <!--tela_esco-->
      <div class="tela_esco">


        <div class="tela_up">

            <a href="key_18.php">
              <img class="tu1" src="../../static/PROTOTIPO DESIGN V3/Sin título-7.png"/></a>

            <a href="key_12inventory.php">
              <img class="tu2" src="../../static/PROTOTIPO DESIGN V3/Sin título-8.png"/></a>
        </div> 
        <div class="tela_mid">

            <img class="tu3" src="../../static/PROTOTIPO DESIGN V3/Sin título-1.png"/>
            
        </div>

        <div class="tela_dw">

            <a href="key_4732.php"><img class="tu4" src="../../static/PROTOTIPO DESIGN V3/Sin título-9.png"/></a>
            <a href="../cen/cen_add.php"><img class="tu5" src="../../static/PROTOTIPO DESIGN V3/Sin título-90.png"/></a>
            <a href="key_473.php"><img class="tu6" src="../../static/PROTOTIPO DESIGN V3/Sin título-92.png"/></a>
            <a href="key_4733.php"><img class="tu7" src="../../static/PROTOTIPO DESIGN V3/Sin título-93.png"/></a>
        </div>



      </div> 
   



    <div class="menu-down">


    </div>





      <div id="container" style="background-color:#ccc; border: 2px solid black; color:black  "></div>
<button id="button">Mostrar notificações </button>
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
<script>
  const button = document.getElementById("button");
const container = document.getElementById("container");
const messages = [
'links ótimos nos anuncios',
'Combates foram retirados do game',
'Sistema de mineraçao de itens em funcionamento.    ',
'Novos itens chegaram, colecionaveis nivel intermédiario ',
'Canecas de healer e equipamento do arco demon crest',
'Personalização de clan adicionada ',
'Bem vindo de volta  asciente viajante'];


button.addEventListener("click", () => {
createNotification();
});

function createNotification() {
const notif = document.createElement("div");
notif.classList.add("toast");

notif.innerText = getRandomMessage();

container.appendChild(notif);

setTimeout(() => {
notif.remove();
}, 3000);
}

function getRandomMessage() {
return messages[Math.floor(Math.random() * messages.length)];
}
    </script>
    
    <iframe data-aa="1813000" src="//ad.a-ads.com/1813000?size=728x90" style="width:728px; height:90px; border:0px; padding:0; overflow:hidden; background-color: transparent;" ></iframe>
  </body>
</html>

<!--
      
      Inventário</p></a>
      Lideres</p></a>
      Shops</p></a>
      Missões</p></a>-->
