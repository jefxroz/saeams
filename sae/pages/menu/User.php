<?php 
	require_once("../.././fw/model/mapping/TbUser.php");
	require_once("../.././fw/model/mapping/TbPrivilege.php");
	session_start();

	//echo 'Hola';
	$objuser = unserialize($_SESSION['usuario']);	
	if($objuser)
	{
		$privileges=$objuser->getPrivileges();	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>Modificar Perfil - SAE-SAP</title>
<?php 
include("top_page.php"); 
?>
<script type="text/javascript" >

var url='../.././fw/view/User.php?service=4';

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

function saveUser()
{

	$('#fm_updateuser').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},
		success: function(result){
			var result = eval('('+result+')');
			
			if (result.success){
				$.messager.show({
					title: 'Modificacion de perfil Exitoso',
					msg: 'Se ha modificado perfil sin Problemas!!!'
				});
				cancel();		// close the dialog
				
			} else {
				$.messager.show({
					title: 'Error',
					msg: result.msg
				});
			}
		}
	});
}


</script>

</head>
<body>
	<div id="wrapper">	
		<div id="content">
		<div align="right"> Bienvenido:
		<?php echo $objuser->getName()." ".$objuser->getSurname(); ?>
		 | <a  href="../.././fw/view/Service.php?service=logout">Salir</a></div>
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
			





	<form method="post" id="fm_updateuser" action="">

	<div id="panelm1" class="easyui-panel" title="Datos de acceso"   style="background:#fafafa;">
		<br/>
		
		<table width="100%" border="0" cellspacing="3" cellpadding="3" >		
				
				<tr>
					<td width="35%"  align="left"><label  >* Correo Electr&oacute;nico: </label></td>
					<td width="65%" ><label  ><?php echo $objuser->getMail();?> </label>
					<input type="hidden" name="id_user" id="id_user"  value="<?php echo $objuser->getIdUser();?>"/>
					</td>
				</tr>
				<tr>
					<td width="35%" align="left"><label for="id_password_actually">* contrase&ntilde;a actual: </label></td>
					<td width="65%" ><label  ><?php echo $objuser->getPassword();?> </label></td>
				</tr>
				<tr>
					<td width="35%" align="left"><label for="id_password">* Elige una contrase&ntilde;a: </label></td>
					<td width="65%" ><input type="password" name="id_password" id="id_password" class="easyui-validatebox"  size="30"  validType="minLength[5]" value=""/></td>
				</tr>
				<tr>
					<td width="35%" align="left"><label for="id_pass_comp">* Vuelve a introducir la contrase&ntilde;a: </label></td>
					<td width="65%" ><input type="password" name="id_pass_comp" id="id_pass_comp" class="easyui-validatebox"  size="30"  validType="txt_valid_pass" value="" /></td>
				</tr>
		</table>
	</div>	
	<br/>	
	
	<div id="panelm2" class="easyui-panel" title="Datos Personales"  style="background:#fafafa;">
	<br/>
	<table width="100%" border="0" cellspacing="3" cellpadding="3" >
				<tr>
					<td width="35%"  align="left"><label for="id_id">DPI / Cedula: </label></td>
					<td width="65%"><input type="text" name="id_id" id="id_id" size="30" value="<?php echo $objuser->getId();?>"/></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label >* Nombre: </label></td>
					<td width="65%"><label  ><?php echo $objuser->getName();?> </label></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label >* Apellido: </label></td>
					<td width="65%"><label  ><?php echo $objuser->getSurname();?></label></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_address">* Direcci&oacute;n: </label></td>
					<td width="65%"><input type="text" name="id_address" id="id_address" class="easyui-validatebox" size="70" value="<?php echo $objuser->getAddress();?>" /></td>
				</tr>
				<tr>
					<td width="35%"   align="left"><label for="id_gender">* Genero: </label><br/></td>
					<td width="65%">
						<label  ><?php  if($objuser->getGender()==0){echo "MASCULINO";} else{echo "FEMENINO";} ?></label>
					</td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_birthdate">* Fecha de Nacimiento: </label><P></td>
					<td width="65%"><label  ><?php echo $objuser->getBirthDate();?></label></td>
				</tr>
	</table>
	</div>
	<br/>	
	<div id="panelm3" class="easyui-panel" title="Datos de la Instituci&oacute;n" collapsible="true"  style="background:#fafafa;">
	<br/>
	
	<table width="100%" border="0" cellspacing="3" cellpadding="3" >
				<tr>
					<td width="35%"  align="left"><label for="id_carnet">Carnet: </label><br/></td>
					<td width="65%"><input  name="id_carnet" id="id_carnet"  class="easyui-numberbox" type="text" precision="0" value="<?php echo $objuser->getCarnet();?>" /></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_unity">Unidad: </label></td>
					<td width="65%"><input type="text" name="id_unity" id="id_unity" size="10" type="text"  class="easyui-validatebox"  validType="minLength[2]" value="<?php echo str_pad($objuser->getUnity(),2,"0",STR_PAD_LEFT); ?>"/></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_extention">Extensi&oacute;n: </label></td>
					<td width="65%"><input type="text" name="id_extention" id="id_extention" size="10" type="text"  class="easyui-validatebox"  validType="minLength[2]" value="<?php echo str_pad($objuser->getExtention(),2,"0",STR_PAD_LEFT); ?>"/></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_career">Carrera: </label><P></td>
					<td width="65%"><input type="text" name="id_career" id="id_career" size="10"  type="text" class="easyui-validatebox"  validType="minLength[2]"  value="<?php echo str_pad($objuser->getCareer(),2,"0",STR_PAD_LEFT); ?>"/><P></td>
				</tr>
				<tr>
					<td width="35%"  align="left"><label for="id_page"></label><P></td>
					<td width="65%"><input type="hidden" name="id_page" id="id_page" size="10"   /><P></td>
				</tr>
	</table>
	</div>
		<br/>
		<div align="center">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Modificar Perfil</a>
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
<?php

		}
		else
		{
			header("Location: http://localhost/Proyectos/sae/pages/index.php");
		}
		
		
?>	