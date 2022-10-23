<?php

namespace cs;


class View {
  
    public function loginn() {

echo '<!doctype html>';

echo '<html lang="en">';
echo '<head>';
  
  echo '<meta charset="utf-8">';


  echo '<!--básico-->';  
            echo '<meta charset="UTF-8"/>';  
            echo '<title>Escolha de classe</title>';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>';
            echo '<link rel="stylesheet" href="./style.css"/>';
        echo '<!---->';

        echo '<!--tags para SEO-->';
            echo '<meta name="descripition" content="Jogo de rpg pra entretenimento."/>';  
            echo '<meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg"/>';
            echo '<meta name="author" content="rock studios"/>';   
        echo '<!---->';

        echo '<!--tags pro favicon-->';
           echo '<link rel="shortcut icon" href="../img_geral/favicon/favicon_084925/favicon.ico" >';
           echo '<link rel="icon" type="image/gif" href="img_geral/favicon/favicon_084925/animated_favicon1.gif" >';
        echo '<!---->';
  
  echo '<style>';

  echo '</style>';
  

echo '</head>';

echo '<body>';
  echo '<div class="links">';
  echo '<a class= "menu" href="key_24.php"> menu </a>';
  echo '<br>';
   echo '<a class= "menu" href="key_29.php">  voltar </a>';
echo '<br>';
echo '</div>';


  echo '<h1>Escolha sua classe</h1>';

  echo '<a  id="img01"  href="../Model/myClass01.php" >';echo '<img src= "../../../static/arqueiro.png">';echo '</img>';echo '</a>'; 
  echo '<a  id="img02"  href="../Model/myClass02.php" >';echo '<img src= "../../../static/barbaro.png">';echo '</img>';echo '</a>';
  echo '<a  id="img03"  href="../Model/myClass03.php" >';echo '<img src= "../../../static/guerreiro.png">';echo '</img>';echo '</a>';
  echo '<a  id="img04"  href="../Model/myClass04.php" >';echo '<img src= "../../../static/mago.png">';echo '</img>';echo '</a>';
  echo '<a  id="img05"  href="../Model/myClass05.php" >';echo '<img src= "../../../static/necromante.png">';echo '</img>';echo '</a>';
  echo '<a  id="img06"  href="../Model/myClass06.php" >';echo '<img src= "../../../static/ladino.png">';echo '</img>';echo '</a>';
 
echo '</body>';
echo '</html>';}}
  use cs\View as c;
  $view = new c();
  $view->loginn();

?>