
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>


<?php
include '../conexao/conexao.php';
  
  
try{
$stmt = $conexao->prepare("delete from tbl_professor where cod_professor = ?");


$cod_prof= $_GET["cod_professor"]; 
 
   
$stmt -> bindParam(1,$cod_prof);    


$stmt->execute(); 

if($stmt->rowCount() >0){
	 echo "Professor Excluido com Sucesso";
	}else{
	 echo "Professor Não Excluido !";	
	}	



echo "Deletado com sucesso.";

header("Location: ../index.php");


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

