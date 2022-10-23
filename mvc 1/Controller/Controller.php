<?php

 
class Controller {
	
    public function login() {
		
		
		/* Encaminha os dados a Model para que seja realizado a validação */
		$model = new Model();
		$validacao = $model->validaDados($usuario);
		
		/* Pega o resultado da validação realizada no Model e o encaminha para ser exibido pela View */
		$view = new View();
		$view->login($validacao); 
       
    }
}

?>
