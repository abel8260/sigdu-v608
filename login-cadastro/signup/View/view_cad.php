<?php
namespace cs;


class View {
  
    public function loginn() {
	
		if(!isset($validacao)){ 
echo '<!--ALGORITMO:-ESTRUTURA-LOGIN-IN--->';
echo '<!--PARA:-PROJETO-R-S---------------->';  
echo '<!--COMENTÁRIOS:-PADRÕES-DE-PROJETO-->';
echo '<!--LANG:-HTML-ESTRUTURA------------->';
echo '<!--DESIGNER-IDEA:-ABEL-BARBOSA------>';
echo '<!--ADAPTAÇÃO:-ABEL-BARBOSA---------->';

	echo '<!--INICIO-- >';

		echo '<!DOCTYPE html >';
			echo '<html>';
		        echo '<!--SESSION-START-->';
				

					

				echo '<!---->';
			echo '<head >';
		
	    echo '<!--básico-->'; 
			echo '<meta charset="UTF-8"/>'; 
			echo '<title>  Reinos de Sigduecho </title >';
			echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>';
		echo '<!---->';

		echo '<!--inclusão de css-->';
			echo '<link href="../../../home/View/css/cadastro_2.css" rel="stylesheet" type="text/css" >';
			echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" >';
	        echo '<link href="css/style.css" rel="stylesheet" type="text/css" / >';
		echo '<!---->';


		echo '<!--tags para SEO-->';
			echo '<meta name="descripition" content="Empresa de empreendimentos imobiliarios."/>'; 
			echo '<meta name="keywords" content="imóvel, imovéis"/>';
			echo '<meta name="author" content="Abel Barbosa"/>';  
		echo '<!---->'; 
	echo '</head >';





			echo '<body>';

				


			
			    echo '<form id="form55" action="../Controller/Controller_cad.php"  method="POST">';
					echo '<div class="login-box">';
						echo '<span>Cadastro:';
						echo '</span >';
					echo '</div >';

					echo '<input class="user55" type="text" name="user4_9" >';
                    echo '<div class="clear" >';echo '</div >';

					

	                echo '<div class="senha-box">';
						echo '<span >Senha:';
						echo '</span >';
					echo '</div >';
					echo '<div class="clear">';
					echo '</div >';

	                echo '<input class ="pass55" type="password" name="pass4_9" >';

	                echo '<div class="clear" >';echo '</div>';
                    
	                echo '<button id="button55" type="submit" >';echo '<p >';echo '<b >ENTRAR';
	                echo '</b >'; echo '</p >';echo '</button>';
			   echo '</form >';
            
            echo '<img src="../../../static/PROTOTIPO DESIGN V3/Sin título-1.png" class="img-logo"  />';

			echo '<!--';
			echo '<form id="form55" action="../Controller/Controller_cad.php"  method="POST" >';
				echo '<p >';echo '<b >Usuário:'; echo '</b >';echo '</p >'; 
				echo '<input id="user55" type="text" name="user4_9">';
				echo '<p >';echo '<b >Senha:'; echo '</b >';echo '</p >'; 
				echo '<input id="pass55" type="password" name="pass4_9" >';
				echo '<button id="button55" type="submit" >login </button>';
			echo '</form>-->';

            echo '<!--';
			echo '<a href="cadastro.php" >';
			 echo '<p id="p55" >';
			 echo '<b >';
			 echo '<strongecho >Se juntar ao jogo. Cadastro';
			  echo '</strong>'; 
			  echo '</b>';
			  echo '</p >';
			   echo '</a>'; 
			echo '<a href="../index.php" >'; echo '<p id="p55" >';echo '<b>'; echo '<strong >Tela inicial. Home';echo '</strong>'; echo '</b >';echo '</p >'; echo '</a >'; 
            echo '>';

			echo '</body>';


		echo '</html>';


	echo '<!---->';


echo '<!---->';
}else{
			
			/* Exibe o resultado da validação do login feita pela Model */
			echo '<h3>'.$validacao.'</h3>';
		}
	} 

}   use cs\View as c;
	  $view = new c();
	$view->loginn();?>