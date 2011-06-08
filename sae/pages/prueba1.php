<?php 
	include(".././class/connectionclass/ConnectionDb.php");  
	$db = new ConnectionDb();  
	$query = $db->ejecutequery("SELECT * FROM tbrol");  
	$total=$db->getNumRows($query);
	if($total>0)
	{  	
		
		//$r=$db->ejecuteStatement("INSERT INTO tbrol values(6,'a6')");
		if (!$r) 
		{
			$error.="pg_last_error($connection)<li>";
		}
		while($result = $db->getResult($query))
		{  
			echo "ID: ".$result['idrol']."<br />";  
			echo "Name: ".$result['name']."<br />";  
		}
		for ($i = 0 ; $i < $total ; $i++)
		{
			$row = $db->getRow($query,$i );
			echo "ID: ".$row['idrol']."<br />";  
			echo "Name: ".$row['name']."<br />";
		}
		
	}  
	
	
?>