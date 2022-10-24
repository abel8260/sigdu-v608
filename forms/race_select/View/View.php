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
            echo '<title>Escolha de raça</title>';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>'; 
        echo '<!---->';

        echo '<!--tags para SEO-->';
            echo '<meta name="descripition" content="Jogo de rpg pra entretenimento."/>';  
            echo '<meta name="keywords" content="rpg, steampunk, medieval, jogo de rpg"/>';
            echo '<meta name="author" content="rock studios"/>';   
        echo '<!---->';

        echo '<!--tags pro favicon-->';
           echo '<link rel="shortcut icon" href="../../../static/favicon/favicon_084925/favicon.ico" >';
           echo '<link rel="icon" type="image/gif" href="../../../static/favicon/favicon_084925/animated_favicon1.gif" >';
           echo '<link rel="stylesheet" href="style.css"';
        echo '<!---->';
  
  
  

echo '</head>';

echo '<body>';
  echo '<div class="links">';
  echo '<a class= "menu" href="key_24.php">menu</a>';
echo '<br>';
  echo '<a class= "voltar" href="key_27.php">voltar </a>';
echo '<br>';
echo '</div>';

  echo '<h1>Escolha sua raça</h1>';


  echo '<a  id="img01" href= "../Model/myRace01.php" ><img src= "../../../static/dae-1.png"></a>'; 
  echo '<a  id="img02" href= "../Model/myRace02.php"> <img src= "../../../static/draco-1.png"></a>';
  echo '<a  id="img03" href= "../Model/myRace03.php" ><img src= "../../../static/elem-1.png"></a>'; 
  echo '<a  id="img04" href= "../Model/myRace04.php" ><img src= "../../../static/feral-1.png"></a>';
  echo '<a  id="img05" href= "../Model/myRace05.php" ><img src= "../../../static/gig-1.png"></a>';
  echo '<a  id="img06" href= "../Model/myRace06.php" ><img src= "../../../static/hum-1.png"></a>';

  
  

echo '</body>';
echo '</html>';}}
  use cs\View as c;
  $view = new c();
  $view->loginn();

?>