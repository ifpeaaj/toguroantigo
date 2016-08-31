
<?php


session_start(); 



if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	 
 } 
 
 
 //if (isset($_GET["nome"]))

?>

<?php

include '../conexao/conexao.php';
  

$stmt = $conexao->prepare("select * from tbl_modalidade where id_modalidade = ?");
 
 $id_modali= $_GET["id_modalidade"];
 
 $stmt -> bindParam(1,$id_modali);
//if (isset($_GET["nome"])){


$stmt->execute();






$obj = $stmt->fetchAll();

foreach($obj as $linha){
 
//session_start();

// echo $linha['qtd_vagas_modalidade'];
 
 $_SESSION["qtd_vagas_modalidade"] = $linha["qtd_vagas_modalidade"];
 
 
 $_SESSION["idmodalidade"] = $linha["id_modalidade"];
 
 
 
 
//echo $_SESSION["qtd_vagas_modalidade"];
	
include 'updatequantidade.php';	
	
	
//header('Location: updatequantidade.php'); 

//header('Location: updateusuario2.php'); 


} 















?>
