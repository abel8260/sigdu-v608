<?php
/* Realiza a inclusão dos arquivos com os códigos Model, View, Controller*/
include './View/view_27.php';
include './Controller/Controller_27.php';



/* Pega a ação passada pela URL*/
use cis\View as co;
use foo\Controller as fo;


/* Valida a ação passada, verifica se ela existe e se ela e o login 
 * Se a ação for exisir e for login inicia a função login do Controller
 * Se não inicia a função login da View*/

    $view = new co($user);
    $view->loginn(); 
     $logink = new fo();
      $logink->loginl();

    

?>