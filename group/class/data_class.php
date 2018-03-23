<?php
include ('database_class.php');
class DATA_CLASS
	{
		
 public  function newstaff($table_name,$data)
		{
		
		    try{
					$database = new DATABASE();
					$connection  = $database->openConnection();
				
				
					$keys = array();
					$values = array();
					$pdo_key = array();
				foreach($data as $key => $value)
					{
						$keys[] = $key;
						$pdo_key[]="?";
						$values[] = $value;
					}
					
					$tableKey=implode(",", $keys);
					$instanceKey=implode(",", $pdo_key);
					$result= $connection->prepare("INSERT INTO $table_name($tableKey) VALUES($instanceKey)");
					$result->execute($values);
					$feedback = ($result)? true:false;
					return $feedback; 
			}
			catch (PDOException $e) 
			{
					echo "failed: " . $e->getMessage() . "\n";
					exit;
			}
		}
		
		
 public  function uppdateData($table_name,$idC,$cols,$data)
		{
	
		    try{
                        $database = new DATABASE();
                        $connection  = $database->openConnection();
						$col=array();
						foreach($cols as $key) {
							$col[] = "$key = ?";
						}
						$tableKey=implode(",", $col);			
						$result = $connection->prepare("UPDATE $Sh*t SET $tableKey WHERE $idC");					
						$result->execute($data);
						$feedback = ($result)? true:false;
						return $feedback; 
				}
			catch (PDOException $e) 
			{
					echo "failed: " . $e->getMessage() . "\n";
					exit;
			}	

		}
		
		
		
	public function getTableByID($table,$col,$id)
		   {
				try{
					$database = new DATABASE();
					$connection  = $database->openConnection();
					$query = "SELECT * FROM $table WHERE $col = ?";  
					$stmt = $connection->prepare( $query );
					$stmt->execute(array($id));
					return $stmt;
					}
				catch (PDOException $e) 
					{
						echo "failed: " . $e->getMessage() . "\n";
						exit;
					}
			}	
			
	public function getStuff($table)
		   {
				try{
					$database = new DATABASE();
					$connection  = $database->openConnection();
					$query = "SELECT * FROM $table ";  
					$stmt = $connection->prepare( $query );
					$stmt->execute();
					return $stmt;
					}
				catch (PDOException $e) 
					{
						echo "failed: " . $e->getMessage() . "\n";
						exit;
					}
			}	
			
			
	public function SetUPQuery($state)
		   {
				try{
					$database = new DATABASE();
					$connection  = $database->openConnection();
					$query = "$state";  
					$stmt = $connection->prepare( $query );
					$stmt->execute();
					return $stmt;
					}
				catch (PDOException $e) 
					{
						echo "failed: " . $e->getMessage() . "\n";
						exit;
					}

		   }					
			
			
			
			
			
			
			
	}
	
	?>