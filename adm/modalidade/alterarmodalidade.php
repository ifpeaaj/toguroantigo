﻿<html>

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
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/adm.css"/>
</head>
<body>
<form action="updatemodalidade.php?id_modalidade='. $linha['id_modalidade'].'" method="POST" class="header"> 
	<div class="margimformadm">

	<p class="texte" >Cadastro de Modalidade </p>

	<table border="0">
		<tr>
			<td>Nome da Modalidade :</td>
			<td><input type="text" name="nome_modalidade" required="" autofocus="" value=' . $linha['nome_modalidade'] . '>
			</td>
		</tr>
		<tr>
			<td>Quantidade de Vagas :</td>
			<td><input type="text" name="qtd_vagas_modalidade" required="" maxlength="2" value=' . $linha['qtd_vagas_modalidade'] . '>
			</td>
		</tr>
		<tr>
			<td>Turno :</td>
			<td>
				<select name="turno_modalidade" required="" value=' . $linha['turno_modalidade'] . '>
					<option></option>
					<option value="Manhã"> Manhã	</option>
					<option value="Tarde"> Tarde	</option>
					<option value="Noite"> Noite	</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Horario :</td>
			<td><input type="time" name="horario_modalidade" required="" value= ' . $linha['horario_modalidade'] .  '>
			</td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" value="Enviar">
			</td>
		</tr>
	</table>
</form> 
</div>
</body>
</html>
';







} 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
} 
?>



</html> 

