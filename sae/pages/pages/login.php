<script type="text/javascript">
$().ready(function() {
	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			username: {
				required: true,
				minlength: 2
			},
			txt_password: {
				required: true,
				minlength: 5
			}
		},
		messages: {
			username: {
				required: "Ingrese su usuario",
				minlength: "Su usuario debe contener almenos 2 caracteres"
			},
			txt_password: {
				required: "Ingrese su password",
				minlength: "Su password debe contener almenos 5 caracteres"
			}
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
							<br/><input id="username" name="username" />
							<br/><label for="txt_password">Constrase&ntilde;a:</label>
							<br/><input name="txt_password" type="password" id="txt_password" />
												
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
			