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
			$obj_conn->preparedStatement("INSERT_USER","INSERT INTO tbrol VALUES(NEXTVAL('tbuser_iduser_seq'),$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14)");	
			$obj_conn->ejecuteStatement("INSERT_USER",$user->get());				
		}
		
	}
?>