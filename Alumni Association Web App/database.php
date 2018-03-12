

<?php
/*	define($servername, "localhost");
  	define($username, "root");
  	define($password, "");
  	define($myDB, "pstu_emba_alumni");*/
	
	class database 
	{

  		public $servername = "localhost";
  		public $username = "root";
  		public $password = "";
  		public $myDB = "pstu_emba_alumni";
  		public $link;
  		public $error;

  		public function __construct(){ 
  			$this->conncetDB();
  		}
  		// Database connection.
		private function conncetDB(){
			$this->link = new mysqli( $this->servername,$this->username,$this->password,$this->myDB);
			if (!$this->link) {
				$this->link = "Database Connection Failed !".$this->link->connect_error;    
				return false;
			}
		}
		//select or read data.
		public function select_data($query){
			$result = $this->link->query($query) or die($this->link->error.__LINE__) ;
			if ($result->num_rows > 0) {
				return $result;
			}else{
				return false;
			}
		}
		//Insert or Create Data
		public function insert($create){
			$insert_data = $this->link->query($create) or die($this->link->error.__LINE__);
			if ($insert_data) {
				header("Location:read.php?msg=".urlencode("Data Inserted Succesfully !"));
				exit();
			}else{
				die("Error:(".$this->link->errno.")".$this->link->error);
			}
		}
		//Update data
		public function update($query){
			$update_data = $this->link->query($query) or die($this->link->error.__LINE__);
			if ($update_data) {
				header("Location:edit.php?msg=".urlencode("Data Updated Succesfully !"));
				exit();
			}else{
				die("Error:(".$this->link->errno.")".$this->link->error);
			}
		}
	}
?>