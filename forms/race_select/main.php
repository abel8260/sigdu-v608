<?php
/* Realiza a inclusão dos arquivos com os códigos Model, View, Controller*/
include './View/view.php';




/* Pega a ação passada pela URL*/
use cs\View as c;
use foo\Controller as f;


/* Valida a ação passada, verifica se ela existe e se ela e o login 
 * Se a ação for exisir e for login inicia a função login do Controller
 * Se não inicia a função login da View*/

    $view = new c();
  $view->loginn(); 
  $controller = new f();
  $controller->login();
  

  

?>