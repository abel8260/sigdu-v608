<?php






	

class View {
  
    public function login() {
	
		echo '<body>';
            echo '<figure>';
    echo '<figcaption style="color:white; font-weight: bold">';
    echo 'Background-Music:';
    echo '</figcaption>';
    echo '<audio
        controls
        loop
        play
        src="../static/ost/theme.mp3">';
              echo ' Your browser does not support the';
           echo ' <code>'; echo 'audioecho ';echo'</code>'; echo 'element.';
    echo '</audio>';
    echo '</figure>';

        echo '<!--BOXX-->';
			echo '<div class="boxx">'; 
				echo '<a href="../static/html/cookies/term/termo.html"">';
				echo '<button class="button"> termos gerais</button> </a>'; 
								
		    echo '</div>';
        echo '<!---->';
	    echo '<img id = "Titulo" src="../static/home/title.png">';

	echo '</body>';




echo '</html>';
			
			/* Exibe o resultado da validação do login feita pela Model */
			echo '<h3></h3>';
		
	}
}

?>