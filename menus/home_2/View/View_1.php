<?php 

namespace cs;


class View {
  
    public function loginn() {



echo '<body style= "position:relative">';
  



  
  echo '<img id="img1pg00000001" src="../../static/PROTOTIPO DESIGN V3/logo.png">';
   echo '<img id="img1pg00000001-mob" src="../../static/PROTOTIPO DESIGN V3/logo.png">';

 
    echo '<img id="img2pg00000001"src="../../static/keypage_1/livro_simple.png" width="20%" heigth="5%">';
   



echo '<div id="menu01pg00000001" >';
 echo '<ul id="ulpg00000001">';
  echo '<li id="li1pg00000001">';echo '<a id="a1pg00000001" href="../../forms/char_select/View/view_27.php">';echo '<b>Começar </b>';echo '</a>';echo '</li>';
  echo '<li id="li2pg00000001">';echo '<a id="a2pg00000001" href="../../menus/static/key_23.php">';echo '<b>Continuar </b>';echo '</a>';echo '</li>';
  echo '<li id="li3pg00000001">';echo '<a id="a3pg00000001"  href="../sobre/sobre_1.php">';echo '<b>Sobre </b>';echo '</a>';echo '</li>';
 echo '</ul>';
echo '</div>';

echo '<div id="menu01pg00000001-mob" >';
 echo '<ul id="ulpg00000001-mob">';
  echo '<li id="li1pg00000001-mob">'; echo '<a id="a1pg00000001-mob" href="key_27.php">Começar</a>';echo '</li>';
  echo '<li id="li2pg00000001-mob">'; echo '<a id="a2pg00000001-mob" href="key_23.php">Continuar</a>';echo '</li>';
  echo '<li id="li3pg00000001-mob">'; echo '<a id="a3pg00000001-mob" href="../sobre/sobre_1.php">Sobre</a>';echo '</li>';
 echo '</ul>';
echo '</div>';

 echo '<img id="img2pg00000001-mob" src="../img_geral/keypage_1/livro_simple.png"/>';

echo '</body>';

echo '</html>';

}}
use cs\View as c;
      $view = new c();
    $view->loginn();
?>