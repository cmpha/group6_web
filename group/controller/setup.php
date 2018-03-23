<?php

include ('../class/data_class.php');
$dbtask = new DATA_CLASS;

$drop1=" DROP TABLE IF EXISTS department; ";

$drop2=" DROP TABLE IF EXISTS staff ;";

$drop3=" DROP TABLE IF EXISTS position ; ";

$drop4=" DROP TABLE IF EXISTS users; ";







$tabledelete=array($drop1,$drop2,$drop3,$drop4);

foreach($tabledelete as $state){

$drop =$dbtask->SetUPQuery($state);

}

if($drop){
	
$table1="
			CREATE TABLE department
			(
			department_id INT IDENTITY(1,1)  PRIMARY KEY ,
			department_name VARCHAR(60)
			);	
	
		";
		
		
$table2="
CREATE TABLE users 
(
user_id INT IDENTITY(1,1)  PRIMARY KEY ,
first_name VARCHAR(60),	
last_name VARCHAR(60),
username VARCHAR(60),	
email VARCHAR(60),	
password VARCHAR(90),
role VARCHAR(60),										
department_id INT FOREIGN KEY REFERENCES department(department_id)ON DELETE CASCADE ON UPDATE CASCADE
);								
							
		";
		
$table3="
  
CREATE TABLE position
(
position_id INT IDENTITY(1,1)  PRIMARY KEY ,
position_name VARCHAR(60)
);		

		";
		
$table4="
	
CREATE TABLE staff 
(
user_id INT FOREIGN KEY REFERENCES users(user_id)ON DELETE CASCADE ON UPDATE CASCADE,
position_id INT FOREIGN KEY REFERENCES position(position_id)ON DELETE CASCADE ON UPDATE CASCADE
);
   
		";	
	
$create5="

INSERT INTO department ( department_name) VALUES ( 'mathematics');

";	

$create6="

INSERT INTO position ( position_name) VALUES ( 'admin');
INSERT INTO position ( position_name) VALUES ( 'QAC');
INSERT INTO position ( position_name) VALUES ( 'QAM');

";
$rut=array($table1,$table2,$table3,$table4,$create5,$create6);

foreach($rut as $state){

$createstuff =$dbtask->SetUPQuery($state);

}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       	
	
if($createstuff){

	echo"<div class='alert alert-success'> <p>Database installed</p> </div>";
	echo "<a href='index'>use</a>";

}else{

	echo"<div class='alert alert-danger'> <p>failed to complete</p> </div>";

}	
	
}
else{
	
	
		echo"<div class='alert alert-danger'> <p>failed to drop database</p> </div>";
	
}








	
				
?>
