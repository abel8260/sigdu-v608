<?php 

namespace cs;


class View {
  
    
  
    public function loginn() {
echo '<!DOCTYPE html>';

echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8"/>';  
 
  echo '<title> ADD nome de usuario';
   echo '</title>';
echo '<link href="style.css" rel="stylesheet">';

 


echo '<script type="text/javascript" src="script17.js">';echo '</script>';
echo '<script type="text/javascript" src="../tela_22/script_tela_22.js">';echo '</script>';
echo '</head>';

echo '<body>';

      echo '<div class="links">';
        echo '<a class= "menu" href="../tela_18/tela_18.html">menu</a>';
        echo '<a class= "voltar " href="key_1.php">voltar</a>';
      echo '</div>';

      echo '<br>';
      echo '<form action="../Model/model_27.php" method="POST">';
          echo '<div class="registro01" >';
          
            echo '<h1 class="name-char">Nome do char</h1>';
            echo '<input  id="input02" name="char_00" type="text" >'; echo '</input>';echo '<br/>';
            echo '<a href= "">';echo '<button class="bottom" type="submit" >ok </button>';echo '</a>';

          echo '</div>';
      echo '</form>';
      echo '<!--MOBILE ABAIXO-->'   ;

      echo '<div class="links-mob" >';
        echo '<a class= "menu-mob" href="../tela_18/tela_18.html">Menu</a>';
        echo '<a class= "volta-mob " href="key_1.php">Voltar </a>';
      echo '</div>';

      echo '<br>';
      echo '<form action="./Model/model_27.php" method="post">' ;
          echo '<div class="registro01-mob" >';
        
            echo '<h1 class="name-char-mob">Nome do char:</h1>';
            echo '<input id="input02-mob" name="char_000" type="text">'; echo '</input>';echo '<br/>';

            echo '<button class="bottom-mob" type="submit" > ENVIAR ';
             echo '</button>';

          echo '</div>';
      echo '</form>';

      echo '<br/>';
      echo '<br/>';
      echo '<br/>';
      echo '<br/>';
      echo '<a class="next"  href= "../tela_29/tela_29.html">Próxima páginaecho </a>';
      echo '<br/>';
     
      echo '<a class="ficha"  href="../tela_61/tela_61.html" onclick="MOBILE()">Verificar fichaecho </a>';
      echo '<!--FIM DE MOBILE-->';

echo '</body>';
echo '</html>'; 
}}
    use cs\View as c;
    $view = new c();
    $view->loginn();
?>