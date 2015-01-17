<?php
     mysql_connect("localhost","root","");
     mysql_select_db("dbphp") or print(mysql_error()); 
$sql = "SELECT * FROM funcionario"; 
$result = mysql_query($sql); 
?>

