<?php  
	class dbServiceQueryDb
	{  
		private $obj_conn;    
		private $obj_user;
		public function dbServiceQueryDb()
		{  
			$obj_conn = new ConnectionDb();
			$this->$obj_user=$user; 
		}  
		public function getRol($name)
		{
			$obj_conn->prepared("SELECT_ROL","select * from rol where name='$1'",array($name));	
			$l_result=$obj_conn->ejecuteQueryOne("SELECT_ROL",$user->get());
			$ojbRol=new Tbrol();
			if(!$l_result)
			{
				$row=$obj_conn->getRow($l_result,0);	
				$objRol->setIdRol($row['idrol']);
				$objRol->setName($row['name']);
			}
			return objRol;
		}
		public function insertUser($user)
		{
			$obj_conn->prepared("INSERT_USER","INSERT INTO tbrol VALUES(NEXTVAL('tbuser_iduser_seq'),$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14)");	
			$obj_conn->ejecuteStatement("INSERT_USER",$user->get());
		}		
	}
?>