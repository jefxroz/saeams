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

[{  
    "id":1,  
    "text":"Femenino"  
},{  
    "id":2,  
    "text":"Masculino"  
}]

</script>
<div name="pg_registrer" style="display:none;">
	
	<table>
	<tr>
	<td><img src=".././resources/images/user_48.png" alt="Usuarios"></td>
	<td><h2>Registrarse</h2></td>
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
					<td width="65%" ><input type="text" name="id_mail" id="id_mail" class="easyui-validatebox"  required="true"  validType="email" size="30"/></td>
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
					<td width="65%"><input type="text" name="id_name" id="id_name" class="easyui-validatebox" required="true" size="50" /></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_secondname">* Apellido: </label></td>
					<td width="65%"><input type="text" name="id_secondname" id="id_secondname" class="easyui-validatebox" required="true" size="50" /></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_address">* Direcci&oacute;n: </label></td>
					<td width="65%"><input type="text" name="id_address" id="id_address" class="easyui-validatebox" required="true" size="70" /></td>
				</tr>
				<tr>
					<td width="35%"   align="left"><label for="id_gender">* Genero: </label><br/></td>
					<td width="65%">
						<select id="id_gender"  name="id_gender" style="width:150px;" class="easyui-combobox" required="true" editable="false" panelheight="50">
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="dt_birthdate">* Fecha de Nacimiento: </label><P></td>
					<td width="65%"><input id="id_birthdate" name="id_birthdate" style="width:150px;" class="easyui-datebox" required="true" size="50" editable="false"></input><P></td>
				</tr>
	</table>
	
	<br/>	
	<div class="label-prin">Datos de la Instituci&oacute;n</div>
	<br/>
	
	<table width="100%" border="0" cellspacing="3" cellpadding="3" >
		<tr>
			<td width="35%"  align="left"><label for="txt_carne">Carnet: </label><br/></td>
			<td width="65%"><input  name="txt_carne" id="id_carne"  class="easyui-numberbox" type="text" precision="0"  /></td>
		</tr>
		<tr>
			<td width="35%"  align="left"><label for="txt_unity">Unidad: </label></td>
			<td width="65%"><input type="text" name="txt_unity" id="id_unity" size="10" type="text"  class="easyui-validatebox"  validType="minLength[2]" /></td>
		</tr>
		<tr>
			<td width="35%"  align="left"><label for="txt_extenxion">Extensi&oacute;n: </label></td>
			<td width="65%"><input type="text" name="txt_extension" id="id_extension" size="10" type="text"  class="easyui-validatebox"  validType="minLength[2]" /></td>
		</tr>
		<tr>
			<td width="35%"  align="left"><label for="txt_career">Carrera: </label><P></td>
			<td width="65%"><input type="text" name="txt_career" id="id_career" size="10"  type="text" class="easyui-validatebox"  validType="minLength[2]"  /><P></td>
		</tr>
	</table>
	
		<table align="center"><tr>
			<td><a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Registar</a></td>  
    		<td><a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="cancel()">Cancelar</a></td>  
		</tr></table>
	
	</div>
	</form>
</div>