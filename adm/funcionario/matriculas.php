<?php
echo "<meta charset = 'UTF-8'>"; 
//session_start();

//$_SESSION["username"] = $_POST["username"];
//$_SESSION["senha"] = $_POST["senha"];
 
//echo "Olá "; 
//echo $_SESSION["cpf"]; 
//echo " você está logado";user
//echo $_SESSION["rg"];   

//tbl_modalidade tbl_usua
include '../../adm/conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_cadastro");
 
 
//if (isset($_GET["nome"])){


$stmt->execute();


$obj = $stmt->fetchAll();

foreach($obj as $linha){
 
//session_start();

 echo $linha['id_mat']." | " ;

	  echo $linha['id_modali']." | ";
	  
	  
	  echo $linha['data_cadastro']."<br>";

//header('Location: updateusuario.php'); 

//header('Location: updateusuario2.php'); 


} 















?>


