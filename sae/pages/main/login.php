<script type="text/javascript">
	function Registrer(){
		var vz=document.getElementsByName('pg_homepage');
	  	  for(i=0; i<vz.length;i++)
		    	  vz[i].style.display='none';
			var vz=document.getElementsByName('pg_registrer');
		  	  for(i=0; i<vz.length;i++)
			    	  vz[i].style.display='';
		  	var vz=document.getElementsByName('pg_recover');
		  	  for(i=0; i<vz.length;i++)
			    	  vz[i].style.display='none';
		  	var vz=document.getElementsByName('pg_login');
		  	  for(i=0; i<vz.length;i++)
			    	  vz[i].style.display='none';
		  	$('#fm_register').form('clear');
			document.getElementById("lb_page").value="1";
	}
	function RecoverPassword(){
		var vz=document.getElementsByName('pg_homepage');
  	  for(i=0; i<vz.length;i++)
	    	  vz[i].style.display='none';
		var vz=document.getElementsByName('pg_registrer');
	  	  for(i=0; i<vz.length;i++)
		    	  vz[i].style.display='none';
	  	var vz=document.getElementsByName('pg_recover');
	  	  for(i=0; i<vz.length;i++)
		    	  vz[i].style.display='';
	  	var vz=document.getElementsByName('pg_login');
	  	  for(i=0; i<vz.length;i++)
		    	  vz[i].style.display='none';  
	  	$('#fm_recover').form('clear');
		document.getElementById("lb_page").value="2";
	}
</script>
		<div id="colOne">
				<div id="logo">
					<h1><a href="#">SAE-SAP</a></h1>
					<h2> <a href="http://ingenieria-usac.edu.gt/">Facultad de Ingenier&iacute;a</a></h2>
				</div>
				<div class="box">
				<div class="bottom">
		<div name ="pg_login" >
				<form  action="" method="post">	
					<label for="username"> Acceder </label>
							<br/><label for="username">Usuario: </label> 
							<br/><input class="easyui-validatebox" id="username" name="username" required="true"  validType="email" size="30">							
							<br/><label for="txt_password">Constrase&ntilde;a:</label>
							<br/><input class="easyui-validatebox" id="txt_password" name="txt_password" type="password" required="true" size="30">												
									<table> 
									<tr>
										<td> <a href="#" onclick="RecoverPassword()">Recuperar Contrase&ntilde;a</a> </td> 
										<td> <a href="#" onclick="Registrer()">Regitrarse</a> </td>
									</tr> 
									</table>
							
							<br/><input name="btnAcces" type="submit" id="btnAcces" value="Accesar" /> 
													
				</form>
		</div> 
				</div>
				</div>
			</div>
			