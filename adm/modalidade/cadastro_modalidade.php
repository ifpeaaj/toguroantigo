<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/adm.css"/>
</head>
<body>
<form action="insertmodalidade.php" method="POST" class="header"> 
	<div class="margimformadm">

	<p class="texte" >Cadastro de Modalidade </p>

	<table border="0">
		<tr>
			<td>Nome da Modalidade :</td>
			<td><input type="text" name="nome_modalidade" required="" autofocus="">
			</td>
		</tr>
		<tr>
			<td>Quantidade de Vagas :</td>
			<td><input type="text" name="qtd_vagas_modalidade" required="" maxlength="2">
			</td>
		</tr>
		<tr>
			<td>Turno :</td>
			<td>
				<select name="turno_modalidade" required="">
					<option></option>
					<option value="Manhã"> Manhã	</option>
					<option value="Tarde"> Tarde	</option>
					<option value="Noite"> Noite	</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Horario :</td>
			<td><input type="time" name="horario_modalidade" required="">
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
