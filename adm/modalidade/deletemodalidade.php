<?php

 


include '../conexao/conexao.php';
  
  
try{
$stmt = $conexao->prepare("delete from tbl_modalidade where id_modalidade = ?");


$id_mod= $_GET["id_modalidade"]; 
 
   
$stmt -> bindParam(1,$id_mod);    


$stmt->execute(); 

if($stmt->rowCount() >0){
	 echo "Modalidade Excluida com Sucesso";
	}else{
	 echo "Modalidade N�o Excluida !";	
	}	



echo "Deletado com sucesso.";

header("Location: ../index.php");


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

