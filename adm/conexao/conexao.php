<?php

 



  
try{
$conexao = new PDO('mysql:host=localhost;dbname=bd_academia_toguro','root','@luno1fpe'); 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 

} 

?>
  
