<div name="pg_recover" >
<h2>Recuperar contrase&ntilde;a </h2>
<form method="post" id="form-elements" action="">
	
	
<div id="panelm4" class="easyui-panel" title="Ingrese su Correo Electr&oacute;nico" collapsible="true"  style="background:#fafafa;">	
	<table  width="100%" border="0" cellspacing="3" cellpadding="3" >
		<tr>
		<td width="35%" align="right" ><label for="txt_user">Usuario: </label><P> </td>
		<td width="65%"><input type="text" name="txt_user" id="id_user" class="easyui-validatebox"  required="true"  validType="email"  size="30" /><P> </td>
		</tr>
		<tr>
			<td width="35%" align="left"><label for="id_captcha">* Verificaci&oacute;n de seguridad: </label></td>
			<td width="65%" align="left"><img name="id_captcharecov" src="" width="100" height="30" vspace="3"><br></td>
		</tr>
		<tr>
			<td width="35%" align="left"></td>	
		  	<td width="65%" ><input type="text" name="id_captcharecov" id="id_captcha"  size="30"><br></td>
		</tr>
	</table>
	<table align="center">
		<tr >
			<td ><a href="#" class="easyui-linkbutton" iconCls="icon-ok" >Registar</a></td>  
    		<td ><a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="cancel()">Cancelar</a></td>  
		</tr>
	</table>
</div>	
</form>
</div>				