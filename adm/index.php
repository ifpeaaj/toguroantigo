
<?php

session_start(); 

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	 
 } 
 
 
 //if (isset($_GET["nome"]))

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/adm.css"/>
	</head>
	<body>
	
		<div style="background-color:#000" align="center">
			<p align="center"> <h1 align="center"><font size="6" color=#fff> :: ADMINISTRACÃO DO SITE TOGURO ::</font></h1></p>
		</div>
		<div>
 			<th><a href="../adm/login/sair.php"><img src="img/sair.png"width="60" title="Voltar a tela principal!"></a></th>
		</div>
		<div id="divUsu">
			<table style="width:80%" align="center"  cellspacing="15">
  
 				<tr >
    				<th><img src="img/usuario.png" width="80"></th>
     				<th><img src="img/professor.png" width="80"></th>
      				<th><img src="img/modalidades.png" width="80"></th>
  				</tr>
  				<tr>
 					<td align="center"><a href="usuario/index.php">Usuário</a></td>
     				<td align="center"><a href="professor/index.php">Professor</a></td>
      				<td align="center"><a href="modalidade/index.php">Modalidades</a></td>       
  				</tr>  
  			</table>
  		</div>
</body>
</html>
