<?php
session_start();
?>


<?php
echo "<meta charset = 'UTF-8'>"; 


//$_SESSION["username"] = $_POST["username"];
//$_SESSION["senha"] = $_POST["senha"];
 
//echo "Olá "; 
//echo $_SESSION["cpf"]; 
//echo " você está logado";user
//echo $_SESSION["rg"];   


include '../adm/conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_usuario where cpf_usuario= ? and senha_usuario = ?");
  
 
//if (isset($_GET["nome"])){
$cpf= $_POST["cpf_usuario"];
$senha= $_POST["senha_usuario"];
  

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
$_SESSION["id_matricula"] = $linha['id_matricula'];
$_SESSION["mecadastrei"] = "NAOCADASTREI";

 $_SESSION["erro"] = "VAGAS DISPONÍVEIS";


$_SESSION["nome"] = $linha["nome_usuario"];
$_SESSION["tipo_usuario"] = $linha['tipo_usuario']; 


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


