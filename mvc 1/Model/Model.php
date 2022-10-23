<?php
class Model {
  
    public function validaDados($usuario) {
        
			/* Aplica a validação ao usuário e senha passados, utilizando as regras de négocio especificas para ele. */
			if($usuario==200){
				
				return 'pagina ok';
				
			}else if($usuario==405){
				
				return 'nao permitida';
				
			}else{
				
				return 'out-dated';
				
			}	
    }
}
 
?>
