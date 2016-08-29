<html>

<body>






</body>





<?php
try{
include '../conexao/conexao.php';



$stmt = $conexao->prepare("select * from tbl_professor where cod_professor = ?");


$id_prof= $_GET["cod_professor"]; 

 
$stmt->bindValue(1,$id_prof);
$stmt->execute();
$resultado = $stmt->fetchAll();


	

foreach($resultado as $linha){

 
 echo ' <form action="updateprofessor.php?cod_professor='. $linha['cod_professor'].'" method="POST"> 
   
   
   
Nome do Professor: 
  <input type="text" name="nome_professor" value=' . $linha['nome_professor'] . '><br>

Rg : 
<input name="rg" type="text" id="rg" rg_professor=' . $linha['rg_professor'] . '>
<br>


Cpf : <input type="text" name="cpf_professor" value=' . $linha['cpf_professor'] . '><br>


  
Endereço : <input type="text" name="endereco_professor" value=' . $linha['endereco_professor'] . '><br>

Telefone : <input type="text" name="telefone_professor" value=' . $linha['telefone_professor'] . '><br>

 

email : <input type="text" name="email_professor" value=' . $linha['email_professor'] . '><br> 

Data de nascimento : <input type="text" name="data_nascimento_professor" value=' . $linha['data_nascimento_professor'] . '><br>




<input type="submit" value="Enviar">
</form> ' ;
 
 






} 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
} 
?>



</html> 

