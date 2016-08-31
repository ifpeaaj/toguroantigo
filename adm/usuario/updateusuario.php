	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>


<?php

include '../conexao/conexao.php';
  
try{
$stmt = $conexao->prepare("update tbl_usuario
set nome_usuario=? ,rg_usuario=?,cpf_usuario=?,endereco_usuario=?,telefone_usuario=?,email_usuario=?,data_nascimento_usuario=?,tipo_usuario=?,senha_usuario=? where id_matricula = ?");



$nome= $_POST["nome_usuario"]; 
$rg= $_POST["rg_usuario"]; 
$cpf= $_POST["cpf_usuario"]; 
$endereco= $_POST["endereco_usuario"]; 

$telefone= $_POST["telefone_usuario"]; 
$email= $_POST["email_usuario"]; 
$data_nascimento= $_POST["data_nascimento_usuario"]; 
//$data_matricula= $_POST["data_matricula"]; 

$tipo_usuario= $_POST["tipo_usuario"]; 
$senha_usuario= $_POST["senha_usuario"]; 

$id_matricula= $_GET["id_matricula"]; 




$stmt -> bindParam(1,$nome);
$stmt -> bindParam(2,$rg);
$stmt -> bindParam(3,$cpf);
$stmt -> bindParam(4,$endereco);

$stmt -> bindParam(5,$telefone);
$stmt -> bindParam(6,$email);
$stmt -> bindParam(7,$data_nascimento);
//$stmt -> bindParam(8,$data_matricula);

$stmt -> bindParam(8,$tipo_usuario);
$stmt -> bindParam(9,$senha_usuario);

   
$stmt -> bindParam(10,$id_matricula);    


$stmt->execute(); 

if($stmt->rowCount() >0){
	 echo "Usuário alterado com sucesso";
	}else{
	 echo "Usuário não alterado !";	
	}	
	


header("Location: ../index.php");


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

