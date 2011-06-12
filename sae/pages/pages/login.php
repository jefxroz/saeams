<script type="text/javascript">
$().ready(function() {
	 $.extend($.fn.validatebox.defaults.rules, {
	        txt_validator: {
	            validator: function(value, param) {
	            	var ck_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
	                if (value != null) {     
							if(param[0] =='mail' &&ck_email.test(value)) return true;
							else return false;
	                }else return false;       
	            },
	            message: 'Debe ingresar un correo electronico valido'
	        }

	    });
	});

</script>

		<div id="colOne">
				<div id="logo">
					<h1><a href="#">SAE-SAP</a></h1>
					<h2> <a href="http://ingenieria-usac.edu.gt/">Facultad de Ingenier&iacute;a</a></h2>
				</div>
				<div class="box">
				<div class="bottom">
				<form  id="signupForm" action="" method="post">	
					<label for="username"> Acceder </label>
							<br/><label for="username">Usuario: </label> 
							<br/><input class="easyui-validatebox" id="username" name="username" required="true"  validType="txt_validator['mail']">							
							<br/><label for="txt_password">Constrase&ntilde;a:</label>
							<br/><input class="easyui-validatebox" id="txt_password" name="txt_password" required="true">
												
									<table> 
									<tr>
										<td> <a href="pages/recuperar.php" class="ajaxmenu">Recuperar Contrase&ntilde;a</a> </td> 
										<td> <a href="pages/registrar.php" class="ajaxmenu">Regitrarse</a> </td>
									</tr> 
									</table>
							
							<br/><input name="btnAcces" type="submit" id="btnAcces" value="Accesar" /> 
													
				</form> 
				</div>
				</div>
			</div>
			