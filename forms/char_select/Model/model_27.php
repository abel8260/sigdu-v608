<?php  
namespace ge;
session_start();


class Model {
  
    public function validaDados() {
      include('../../../login-cadastro/db/conexao.php');

        $name_1=$_POST['char_00']; 
        $user_1= $_SESSION['usuario'];
        
        $_SESSION['char'] =$name_1;




    


try{

  
  $stmt = $pdo->prepare("INSERT INTO personagem(char_nome, char_power, char_user) VALUES( '$name_1', 0, '$user_1')");
  $stmt->execute();
    

  echo $stmt->rowCount();
  echo 'new record created successfully';

  header('location: ./model_270.php') ; 
} catch(PDOException $e) {
  echo 'Error: '.$e->getMessage();
}}}
use ge\Model as g;
      $vld = new g();
      $vld->validaDados();

?>
