<?php  
namespace gee;
session_start();


class Model {
  
    public function validaDdados() {
      include('../../../login-cadastro/db/conexao.php');

        $name_1= $_SESSION['char'];
        $user_1= $_SESSION['usuario'];
        
 




    




  
try {

echo $_SESSION['usuario'];
$path ='path';
 $stmt0 = $pdo->prepare("INSERT INTO  inv_camada  (  DONO_INV ,  user_inv ,  head ,  olhoDIR ,  olhoesq ,  ombroDIR ,  ombroesq ,  peitoral ,  cintura ,  handDIR ,  handesq ,  chifreDIR ,  chifreesq ,  cotoveloDIR ,  cotoveloesq ,  coxaDIR ,  coxaesq ,  feetDIR ,  feetesq ,  orelhaDIR ,  orelhaesq ,  asaDIR ,  asaesq ,  calda ,  neck ,  camada ,  clan ,  save ,  custom , pact) VALUES ( '$user_1', '$name_1', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png', '../../static/braso_ini.png')");
  $stmt0->execute();
  
    

  echo $stmt0->rowCount();
  echo 'new record created successfully';
  header('location: ../../race_select/View/View.php') ; 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}}}
use gee\Model as dg;
      $vldd = new dg();
      $vldd->validaDdados();

?>
