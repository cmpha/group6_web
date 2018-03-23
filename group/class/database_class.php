
<?php


Class DATABASE 
	{


		protected $con;
			   public function openConnection()
			   {
					try
					{
						 $this->con = new PDO("sqlsrv:server = tcp:webenterprise.database.windows.net,1433; Database = nacit", "mphaya", "Chifundo2018");
					return $this->con;
					 }

					catch (PDOException $e)
						{
							echo "There is some problem in connection: " . $e->getMessage();
						}
				}
		public function closeConnection()
				{
					$this->con = null;
				}

	}


?>