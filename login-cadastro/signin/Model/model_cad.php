<?php

namespace ge;



class Model {
  
    public function validaDados() {
        
           $usuario = $_POST['user4_9'];
           $senhaa = $_POST['pass4_9'];
			/* Aplica a validação ao usuário e senha passados, utilizando as regras de négocio especificas para ele. */
            include('../../.././login-cadastro/db/conexao.php');
			$sth=$pdo->prepare("SELECT count(*) AS total  FROM usuario  where usuario= '$usuario' AND senha=  '$senhaa'");



			$sth->execute();


			echo $sth ->rowCount();
			  var_dump($sth); 
			$row = $sth ->rowCount();

			  echo $sth ->rowCount();
			  var_dump($sth);


					if($row == 1){

		 $_SESSION['usuario'] = $usuario ;
		 





		header('location: ../../../menus/home_2/main.php');


		 exit();  

		}else{
			
			header('location:../View/view_cad.php'); 
			exit();
		}




	
   
}}
use ge\Model as g;
	    $vld = new g();
	  	$vld->validaDados();

?>
