<html>

<body>






</body>





<?php
try{
include '../conexao/conexao.php';



$stmt = $conexao->prepare("select * from tbl_modalidade where id_modalidade = ?");


$id_mod= $_GET["id_modalidade"]; 


$stmt->bindValue(1,$id_mod);
$stmt->execute();
$resultado = $stmt->fetchAll();


	

foreach($resultado as $linha){



echo '
<form action="updatemodalidade.php?id_modalidade='. $linha['id_modalidade'].'" method="POST"> 


Seu Nome : <input type="text" name="nome_modalidade" value=' . $linha['nome_modalidade'] . '><br>

Quantidade de Vagas : <input type="text" name="qtd_vagas_modalidade" value=' . $linha['qtd_vagas_modalidade'] . '><br>


Turno : <input type="text" name="turno_modalidade" value=' . $linha['turno_modalidade'] . '><br>


<br>  

Horario : <input type="text" name="horario_modalidade" value= ' . $linha['horario_modalidade'] .  '><br>
  

<input type="submit" value="Enviar">
</form> 
';







} 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
} 
?>



</html> 

