<?php

 


include '../conexao/conexao.php';
  
try{
$stmt = $conexao->prepare("insert into tbl_modalidade
(nome_modalidade,qtd_vagas_modalidade,turno_modalidade,horario_modalidade) values (?,?,?,?)");

$nome= $_POST["nome_modalidade"]; 
$qtd_vagas= $_POST["qtd_vagas_modalidade"]; 
$turno= $_POST["turno_modalidade"]; 
$Horario= $_POST["horario_modalidade"];  


$stmt -> bindParam(1,$nome);
$stmt -> bindParam(2,$qtd_vagas);
$stmt -> bindParam(3,$turno);
$stmt -> bindParam(4,$Horario);   
  
$stmt->execute(); 

echo "Inserção realizada com sucesso.";

header("Location: ../index.php");


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

