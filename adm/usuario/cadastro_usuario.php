<html>
<body>
<form action="insertusuario.php" method="POST"> 


Seu Nome : <input type="text" name="nome_usuario"><br>

Rg : 
<input name="rg_usuario" type="text" id="rg">
<br>


Cpf : <input type="text" name="cpf_usuario"><br>


  
Endereço : <input type="text" name="endereco_usuario"><br>

Telefone : <input type="text" name="telefone_usuario"><br>


email : <input type="text" name="email_usuario"><br>

Data de nascimento : <input type="text" name="data_nascimento_usuario"><br>

<label>Tipo de Usuário</label>
<select name="tipo_usuario">
<option value="A"> Administrador	</option>
<option value="F"> Funcionário	</option>
<option value="U"> Usuário	</option>
</select>
<br>

Senha : <input type="text" name="senha_usuario"><br>




<input type="submit" value="Enviar">
</form> 
 </body>
</html> 
