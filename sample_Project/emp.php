<?php include 'Employee.php';
if($_POST){
$emp= new Employee(); $emp->add();
//$emp->change();
}
?>
<HTML>
<BODY>
<form name="add" method="post">
<center>Name: <input type="text" id= "P_name" name="P_name"></center><br>
<center>Age: <input type="text" id= "P_age" name="P_age"></center><br>
<center>Occupation: <input type="text" id= "P_occup" name="P_occup"></center><br>
<center>Address: <input type="text" id= "P_addr" name="P_addr"></center><br>

<center><input type="submit" class="button" name="Add" value="submit" /></center><br>

</BODY>

</HTML>