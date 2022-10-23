<?php

class View {
  
    public function login($validacao) {
	
		if(!isset($validacao)){
			
			/* Exibe o formulário de login, onde será realizada a requisição pelo usuário */
			echo ' 
					<div>
						<h3>Login</h3>
						<form action="../index.php?acao=login" method ="POST">
							Usu&aacute;rio:
							<input type="number" name="usuario"></br></br>
							</br>
							<input class="botao" type="reset"  value="Limpar">
							<input class="botao" type="submit" name="submit" value="Logar">
						</form>
					</div>';
		}else{
			
			/* Exibe o resultado da validação do login feita pela Model */
			echo '<h3>'.$validacao.'</h3>';
		}
	}
}

?>