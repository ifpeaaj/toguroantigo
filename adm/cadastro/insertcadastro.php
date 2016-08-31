
<?php

session_start(); 

echo  $_SESSION["idmodalidade"];

echo "<br>";

echo  $_SESSION["id_matricula"];



if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	 
 } 
 
 
 //if (isset($_GET["nome"]))

?>


<?php
 
include '../conexao/conexao.php';
  
try{ 
	

	
		
	
$stmt = $conexao->prepare("insert into tbl_cadastro
(id_mat,id_modali,data_cadastro) values (?,?,?)"); 

 
$matricula = $_SESSION["id_matricula"]; ;

$modalidade = $_SESSION["idmodalidade"];

$data_cadastro= NULL; 


$stmt -> bindParam(1,$matricula);
$stmt -> bindParam(2,$modalidade);
$stmt -> bindParam(3,$data_cadastro); 




	





echo "Inserção realizada com sucesso.";




//header("Location: index.php");




}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

