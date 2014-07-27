<?php 
if(isset($_POST['name']) && !empty($_POST['name']) &&
	isset($_POST['subject']) && !empty($_POST['subject']) &&
	isset($_POST['body']) && !empty($_POST['body'])){

	$to      = "cristianjaramillo32@gmail.com"; //Para quien va dirigido
	$subject = $_POST['subject'];				//Asunto
	$message = $_POST['body'];					//Mensaje
	$username =$_POST['name']; 					//Nombre del Usuario

	mail($to,$subject,$message,$username);
	header('Location: index.html');				//Redireccionamiento
}
else 
	header('Location: 404.html');				//Redireccionamiento Error
 ?>