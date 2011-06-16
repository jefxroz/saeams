<?php  
	require_once("dbConnection.php");

	class dbServiceQuery
	{  
		private $objuser;    
		private $objconn;
		public function dbServiceQuery()
		{  
			echo "vamos en serviq ";
			$this->objconn = new dbConnection(); 
		}  
		public function setUser(&$user)
		{
				$this->$objuser=$objuser; 
		}
		public function getUser()
		{
			return $this->objuser;
		}
		public function getRol($name)
		{
			$this->objconn->prepared("SELECT_ROL","select * from rol where name='$1'",array($name));	
			$l_result=$this->$objconn->ejecuteQueryOne("SELECT_ROL",$user->get());
			$ojbRol=new Tbrol();
			if(!$l_result)
			{
				$row=$obj_conn->getRow($l_result,0);	
				$objRol->setIdRol($row['idrol']);
				$objRol->setName($row['name']);
			}
			return objRol;
		}
		public function insertUserStudent($user)
		{
			$this->objconn->prepared("INSERT_USER","INSERT INTO tbuser(iduser,mail,password,id,name,surname,address,gender,birthdate,carnet,unity,extention,career,state,idtypetrainer) VALUES(NEXTVAL('tbuser_iduser_seq'),$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,NULL);");	
			$obj->objconn->ejecuteStatement("INSERT_USER",$this->objuser->get());
		}		
	}
?>