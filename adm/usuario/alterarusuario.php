<html>

<body>






</body>





<?php
try{
include '../conexao/conexao.php';



$stmt = $conexao->prepare("select * from tbl_usuario where id_matricula = ?");


$id_mat= $_GET["id_matricula"]; 


$stmt->bindValue(1,$id_mat);
$stmt->execute();
$resultado = $stmt->fetchAll();


	

foreach($resultado as $linha){



echo ' <form action="updateusuario.php?id_matricula='. $linha['id_matricula'].'" method="POST"> 
   
   
   
Nome do Professor: 
  <input type="text" name="nome_usuario" value=' . $linha['nome_usuario'] . '><br>

Rg : 
<input name="rg_usuario" type="text" id="rg_usuario" value=' . $linha['rg_usuario'] . '>
<br>


Cpf : <input type="text" name="cpf_usuario" value=' . $linha['cpf_usuario'] . '><br>


  
Endereço : <input type="text" name="endereco_usuario" value=' . $linha['endereco_usuario'] . '><br>

Telefone : <input type="text" name="telefone_usuario" value=' . $linha['telefone_usuario'] . '><br>



email : <input type="text" name="email_usuario" value=' . $linha['email_usuario'] . '><br> 

Data de nascimento : <input type="text" name="data_nascimento_usuario" value=' . $linha['data_nascimento_usuario'] . '><br>


<label>Tipo de Usuário</label>
<select name="tipo_usuario" value= ' . $linha['tipo_usuario'] . '>  
<option value="A"> Administrador	</option>
<option value="F"> Funcionário	</option>
<option value="U"> Usuário	</option>
</select>
<br>

Senha : <input type="text" name="senha_usuario" value=' . $linha['senha_usuario'] . '><br> 


<input type="submit" value="Enviar">
</form> ' ;







} 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
} 
?>



</html> 

