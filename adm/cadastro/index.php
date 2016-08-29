<?php
session_start();
 

if ($_SESSION['status'] = 'LOGADO') { 
	echo $_SESSION["status"];
	
	} else {
     header("Location: erro.php"); 
}
	?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
	
	

	
	
	
	 <style type="text/css">
		#div {
 
        width:500px; /* Tamanho da Largura da Div */
	height:200px; /* Tamanho da Altura da Div */
        position:absolute; 
        top:50%; 
        margin-top:-100px; /* ou seja ele pega 50% da altura tela e sobe metade do valor da altura no caso 100 */
        left:50%;
       margin-left:-250px; /* ou seja ele pega 50% da largura tela e diminui  metade do valor da largura no caso 250 */
	background-color:#Fff;
 
}
</style>
	
	<div style="background-color:#000" align="center">
	<p align="center"> <h1 align="center"><font size="6" color=#fff> ::  PÁGINA DO USUÁRIO ::</font></h1></p>
	</div>
	
				<div>
 <th><a href="../../index.html"><img src="../img/sair.png"width="60" title="Voltar a tela principal!"></a></th>
	
	</div>
	

	
	
	<div id="div">
<table style="width:80%" align="center"  cellspacing="15">
  
  <tr >
    <th><img src="../img/modalidades.png"width="80"></th>
  

  </tr>
  <tr>
 <td align="center"><a href="formcadastro.php">Escolher modalidade</a></td>


       
  </tr>  
    
  <tr>

  </tr>
  </div>
  
  
  
  </table>
  
 



</body>
</html>
