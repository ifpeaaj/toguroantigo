<?php

 



  
try{
$conexao = new PDO('mysql:host=localhost;dbname=bd_academia_toguro4','root','12345678'); 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 

} 

?>
  
