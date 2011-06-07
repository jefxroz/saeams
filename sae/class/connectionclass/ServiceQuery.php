<?php  
	class ServiceQueryDb
	{  
		private $obj_conn;    
		private $obj_user;
		public function ServiceQueryDb()
		{  
			$obj_conn = new ConnectionDb();
			$this->$obj_user=$user; 
		}  
		public function insertUser($user)
		{
			$obj_conn->ejecuteStatement("INSERT INTO tbrol VALUES(NEXTVAL('tbuser_iduser_seq'),$2,$3,$4,$5)",$user->getData());					
		}
		public function updateUsert($user)
		{
			
		}
		public function deleteUser($user)
		{
			
		}
	}
?>