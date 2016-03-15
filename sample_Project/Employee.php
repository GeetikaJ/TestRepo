<?php
include "dtb_emp.php";

class Employee{
	function add(){
	
	       $key=array("name", "age", "occupation", "address");
		   $val=array('"'.$_POST['P_name'].'"', '"'.$_POST['P_age'].'"', '"'.$_POST['P_occup'].'"', '"'.$_POST['P_addr'].'"');
           $db= new DB_connection();
		   $db->insert(config::TABLENAME,$key,$val);	  
		}
		
/*	function change(){
	$n=3;
	$key=array("name","age","occupation","address");
	$val=array('"'.$_POST['P_name'].'"','"'.$_POST['P_age'].'"','"'.$_POST['P_occup'].'"','"'.$_POST['P_addr'].'"',);
	$db= new DB_connection();
	$db->update(project,$key,$val,$n);
	}
*/
	
}

?>

