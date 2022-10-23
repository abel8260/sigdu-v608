<?php
/* Realiza a inclusão dos arquivos com os códigos Model, View, Controller*/
include './Controller/Controller_home.php';
include './View/View_home.php';
include './Model/Model_home.php';

/* Pega a ação passada pela URL*/


/* Valida a ação passada, verifica se ela existe e se ela e o login 
 * Se a ação for exisir e for login inicia a função login do Controller
 * Se não inicia a função login da View*/

    $view = new View();
	$view->login(); 
	$controller = new Controller();
	$controller->login();
	

	

?>