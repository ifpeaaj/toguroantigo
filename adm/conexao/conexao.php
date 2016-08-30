<?php

 



  
try{
$conexao = new PDO('mysql:host=192.168.1.15;dbname=bd_academia_toguro','root','123'); 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 

} 

?>
  
