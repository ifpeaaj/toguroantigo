 
<?php


session_start(); 

echo $_SESSION["mecadastrei"];

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	
 } 
 
 
 //if (isset($_GET["nome"]))

?>





<?php




//echo "Olá ". $_SESSION["username"] . " você está ". $_SESSION["status"];



echo $_SESSION["qtd_vagas_modalidade"];

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	 
 } 
 

 
 
 
 //if (isset($_GET["nome"]))

?>

<?php

include '../conexao/conexao.php';
  
//try{
	
	if ($_SESSION["qtd_vagas_modalidade"]>0){	
$stmt = $conexao->prepare("update tbl_modalidade
set qtd_vagas_modalidade=qtd_vagas_modalidade-1 where id_modalidade = ?");


//$qtd = $_COOKIE["qtd"];




$id_modalidade= $_GET["id_modalidade"]; 





$stmt -> bindParam(1,$id_modalidade);

 

$stmt->execute(); 

header('location: index.php');
$novo = "CADASTREI";
$_SESSION["mecadastrei"]=$novo;

 header('Location: insertcadastro.php'); 


}else{
	
	echo "<script> type='text/javascript' language='javascript'>
    alert ('Desculpe, vagas indisponível!');
    window.location.href='index.php';
    </script>";
 $_SESSION["erro"] = "SEM VAGA";




 
header('location: index.php');



}



//header('Location: index.php'); 
 
//}


//}catch(PDOException $e){
//echo 'ERROR: ' . $e->getMessage();

//}

?>

