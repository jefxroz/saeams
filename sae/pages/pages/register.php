<div name="pg_registrer" style="display:none;">
	<h2>Registrar un nuevo usuario</h2>
	<form method="post" id="form-elements" action="">
	<table>
		<tr>
			<td><br/><div style="padding:3px 2px;border-bottom:1px solid #ccc">Datos de acceso</div></td>
		</tr>
		<tr>
		<td><label for="txt_user">Usuario: </label></td>
		<td><input type="text" name="txt_user" id="id_user" class="easyui-validatebox"  required="true"  validType="email"/></td>
		</tr>
		<tr>
		<td><label for="txt_passoword">Contrase&ntilde;a: </label></td>
		<td><input type="password" name="txt_password" id="id_password" class="easyui-validatebox" required="true" /></td>
		</tr>
		<tr>
			<td><br/><div style="padding:3px 2px;border-bottom:1px solid #ccc">Datos Personales</div></td>	
		</tr>
		<tr>
			<td><label for="txt_id">DPI / Cedula: </label></td>
			<td><input type="text" name="txt_id" id="id_id" /></td>
		</tr>
		<tr>
			<td><label for="txt_name">Nombre: </label></td>
			<td><input type="text" name="txt_name" id="id_name" class="easyui-validatebox" required="true" /></td>
		</tr>
		<tr>
			<td><label for="txt_address">Direcci&oacute;n: </label></td>
			<td><input type="text" name="txt_address" id="id_address" class="easyui-validatebox" required="true" /></td>
		</tr>
		<tr>
			<td><label for="cb_gender">Genero: </label><br/></td>
			<td>
				<select id="id_gender"  name="cb_gender" style="width:150px;" class="easyui-combobox" required="true">
					<option value="M">Masculino</option>
					<option value="F">Femenino</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="dt_birthdate">Fecha de Nacimiento: </label></td>
			<td><input id="id_birthdate" name="dt_birthdate" style="width:150px;" class="easyui-datebox" required="true" size="50"></input></td>
		</tr>
		<tr>
			<td><div style="padding:3px 2px;border-bottom:1px solid #ccc">Datos de la Instituci&oacute;n</div></td>
		</tr>
		<tr>
			<td><label for="txt_carne">Carnet: </label><br/></td>
			<td><input type="text" name="txt_carne" id="id_carne" /></td>
		</tr>
		<tr>
			<td><label for="txt_unity">Unidad: </label></td>
			<td><input type="text" name="txt_unity" id="id_unity" /></td>
		</tr>
		<tr>
			<td><label for="txt_extenxion">Extensi&oacute;n: </label></td>
			<td><input type="text" name="txt_extension" id="id_extension" /></td>
		</tr>
		<tr>
			<td><label for="txt_career">Carrera: </label></td>
			<td><input type="text" name="txt_career" id="id_career" /></td>
		</tr>
		<tr style="padding:3px 2px;">
			<td><a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Registar</a></td>  
    		<td><a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="saveUser()">Cancelar</a></td>  
		</tr>
	</table>
	</form>
</div>