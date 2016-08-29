<?php

 

 
include '../conexao/conexao.php';
  
try{
$stmt = $conexao->prepare("insert into tbl_cadastro
(id_mat,id_modali,data_cadastro) values (?,?,?)"); 

$id_mat= $_POST["id_mat"]; 
$id_modali= $_POST["id_modali"]; 
$data_cadastro= NULL;


$stmt -> bindParam(1,$id_mat);
$stmt -> bindParam(2,$id_modali);
$stmt -> bindParam(3,$data_cadastro); 
  
$stmt->execute(); 

echo "Inserção realizada com sucesso.";

header("Location: index.php");


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

