<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>Modificar Perfil - SAE-SAP</title>
<?php include("top_page.php"); ?>
<script type="text/javascript" >
$().ready(function() {
	$.extend($.fn.validatebox.defaults.rules, {
		minLength: {
			validator: function(value, param){
			    value=$.trim((value));
				return value.length >= param[0];
			},
			message: 'Debe introducir m&iacute;nimo {0} caracteres'
		},
		txt_valid_pass: {
			 validator: function(value, param) {
				 var ck_pass = document.getElementById("id_password").value;
                 if (value != null) {     
                         if(value ==ck_pass ) return true;
                         else return false;
                 }else return false;       
             },
             message: 'Debe ingresar la misma contrase&ntilde;a'
			
			}

	});
});

</script>

</head>
<body>
	<div id="wrapper">	
		<div id="content">
			<div id="colOne">
				
				<?php include("menu.php"); ?>
			</div>
			<div id="colTwo">

		<table>
			<tr>
				<td><img src="../.././resources/images/setting1_48.png" ></td>
				<td><h2>Modificar Perfil</h2></td>
			</tr>
		</table>
		<br/>
	
	<form method="post" id="fm_register" action="">
	<div class="boxed">
	<br/>
	<div class="label-prin"> Datos de acceso </div>
		<br/>
		<table width="100%" border="0" cellspacing="3" cellpadding="3" >		
				<tr>
					<td width="35%"  align="left"><label for="id_mail" >* Correo Electr&oacute;nico: </label></td>
					<td width="65%"><label id="id_mail" name="id_mail">micorreo@gmail.com</label></td>
				</tr>
				<tr>
					<td width="35%" align="left"><label for="id_passoword">* Elige una contrase&ntilde;a: </label></td>
					<td width="65%" ><input type="password" name="id_password" id="id_password" class="easyui-validatebox" required="true" size="30"  validType="minLength[5]" /></td>
				</tr>
				<tr>
					<td width="35%" align="left"><label for="pwd_pass_comp">* Vuelve a introducir la contrase&ntilde;a: </label></td>
					<td width="65%" ><input type="password" name="id_pass_comp" id="id_pass_comp" class="easyui-validatebox" required="true" size="30"  validType="txt_valid_pass" /></td>
				</tr>
		</table>
	<br/>	
	<div class="label-prin">Datos Personales</div>
	<br/>
	<table width="100%" border="0" cellspacing="3" cellpadding="3" >
				<tr>
					<td width="35%"  align="left"><label for="id_id">DPI / Cedula: </label></td>
					<td width="65%"><input type="text" name="id_id" id="id_id" size="30" /></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_name">* Nombre: </label></td>
					<td width="65%"><label id="id_name" name="id_name">Mi nombre</label></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_secondname">* Apellido: </label></td>
					<td width="65%"><label id="id_name" name="id_name">Mi apellido</label></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_address">* Direcci&oacute;n: </label></td>
					<td width="65%"><input type="text" name="id_address" id="id_address" class="easyui-validatebox" required="true" size="70" /></td>
				</tr>

	</table>
	<br/>	
	
		<table align="center"><tr>
			<td><a href="#" class="easyui-linkbutton" iconCls="icon-ok" ">Guardar</a></td>  

		</tr></table>
	
	</div>
	</form>




			       

			       
				<br style="clear:both;" />
			</div>
		</div>
		<div id="footer">  
				<?php include(".././includes/footer.php"); ?>
		</div>
	</div>
	</body>
</html>
		