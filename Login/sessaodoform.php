<?php
echo "<meta charset = 'UTF-8'>"; 
//session_start();

//$_SESSION["username"] = $_POST["username"];
//$_SESSION["senha"] = $_POST["senha"];
 
//echo "Olá "; 
//echo $_SESSION["cpf"]; 
//echo " você está logado";user
//echo $_SESSION["rg"];   


include '../adm/conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_usuario where cpf= ? and senha = ?");
 
 
//if (isset($_GET["nome"])){
$cpf= $_POST["cpf"];
$senha= $_POST["senha"];
  

$stmt->bindValue(1, $cpf);
$stmt->bindValue(2, $senha);



$stmt->execute();


$obj = $stmt->fetchAll();

foreach($obj as $linha){
 
if ($obj) {  


//session_start();

//$_SESSION["senha"] = $senha;
//$_SESSION["nome"] = nome;
//echo "Olá ";
//echo $_SESSION["username"]; 
$_SESSION["status"] = 'LOGADO';
$_SESSION["cpf"] = $cpf;
$_SESSION["nome"] = $linha["nome"];
$_SESSION["tipo_usuario"] = $linha['tipo_usuario'];
//echo '<p  align="center">    ' . $stmt['nome'] . '</p>';


//echo $_SESSION["cpf"]." você está logado"."<br>"; 
//echo $_SESSION["nome"]."<br>"; 
//echo $_SESSION["tipo_usuario"]."<br>"; 

} else { 
echo "Senha errada";

}

 $tipo =  $_SESSION["tipo_usuario"];
 
 
 if ($tipo == 'U') {
	 
	 header('Location: ../adm/cadastro'); 
 
 } 
	 
 
	  if ($tipo == 'A') {
	 
	 header('Location: ../adm'); 
 
 }
	 
	 	  if ($tipo == 'F') {
	 
	 header('Location: ../adm/funcionario'); 
 
 }
	 
	 

//header('Location: updateusuario.php'); 

//header('Location: updateusuario2.php'); 


} 















?>


