<?php
include ("config.php");

class DB_connection
{
	function __construct() {
      $con = mysql_connect(config::HOST,config::USER,config::PASSWORD) or die("failed to establish connection....!");
	  mysql_select_db(config::DATABASE);
	}
	
	function insert($tablename, $key, $val){
	
	$sql= "INSERT INTO $tablename ($key[0],$key[1],$key[2],$key[3]) VALUES ($val[0], $val[1], $val[2], $val[3]);";
   // echo $sql;    INSERT INTO project (name,age,occupation,address) VALUES ("5tyty", "234", "ht", "gdfs");
 
    mysql_query($sql);
	echo mysql_insert_id();    //7
    }

	/*function update($tablename, $key, $val,$n){
	
	$sql="UPDATE $tablename SET $key[0]= $val[0],$key[1]= $val[1],$key[2]= $val[2],$key[3]= $val[3] WHERE $key[0]=$n;";
	echo $sql;
	exit;

    mysql_query($sql);
	echo mysql_insert_id(); 
	
	}
	*/
	
}
	?>



