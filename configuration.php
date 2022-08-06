<?php 

$sqli = array('hostname' => 'localhost', 'username' => 'projeto', 'password' => 'projeto', 'database' => 'projeto');

$conn = mysqli_connect($sqli['hostname'],$sqli['username'],$sqli['password']) or die(mysqli_error());
if($conn) {
  mysqli_select_db($conn,$sqli['database']);
 }else{
  echo("Ops... Estamos com problemas tente novamente mais tarde.");
}

?>
