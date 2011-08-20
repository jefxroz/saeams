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
<title>Informaci&oacute;n de profesors - SAE-SAP</title>
<?php include("top_page.php"); ?>
<script language="javascript">
$(function(){

	//llenar combobox
	
	$('#cidinstitution').combobox({
		//panelHeight:100
	});

	
	
	if(<?php if($service){ echo $service;} else {echo"-1";} ?>==4)
	{
		$.ajax({
			 url: '../.././fw/view/trainer.php',
			 dataType: 'json',
			 data: {service:'3',idtrainer:<?php if($id){echo $id;}else{echo "-1";}  ?> },
			 type: 'post',
			 success: function(data){
				 
				 $('#nametrainer').val(data.name);
				 $('#description').val(data.description);
				 $('#cidinstitution').combobox('setValue',data.idinstitution);
				 $('#duration').val(data.duration);
				 
				      
			 }
			});
	}
});

function del()
{
	var url = '../.././fw/view/trainer.php?service=5<?php if($id){echo '&idtrainer='.$id;} else{echo "&idtrainer=-1";}?>';
	$('#fmtrainer').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},

		success: function(result){
			var result = eval('('+result+')');
			
			if (result.success){
				$.messager.show({
					title: 'profesor Creado',
					msg: 'Se ha creado el nuevo profesor sin problemas!!!'
				});
				document.location.href='trainerManagement.php';

			} else {
				$.messager.show({
					title: 'Error',
					msg: result.msg
				});

			}

		}

	});
}

function save(){
	var url = '../.././fw/view/trainer.php?service=<?php echo $service ?><?php if($id){echo '&idtrainer='.$id;} else{echo "&idtrainer=-1";}?>';
	$('#fmtrainer').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},

		success: function(result){
			var result = eval('('+result+')');
			
			if (result.success){
				$.messager.show({
					title: 'profesor Creado',
					msg: 'Se ha creado el nuevo profesor sin problemas!!!'
				});
				document.location.href='trainerManagement.php';

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
				<td><img src="../.././resources/images/ltrainer_48.png" ></td>
				<td><h2>Informaci&oacute;n de profesors</h2></td>
			</tr>
		</table>
		<br/>
		<form id="fmtrainer" method="post" >
		<table>
		<tr>
			<td>
				<label>Nombres:</label>
			</td>
			<td> 			
				<input name="nametrainer" id="nametrainer" class="easyui-validatebox" required="true" style="width:350px">
			</td>
		</tr>
		<tr>
			<td>
				<label>Apellidos:</label>
			</td>
			<td>
				<textarea name="description" id="description" class="easyui-validatebox" required="true" style="width:350px;height:100px" ></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tipo de Profesor:</label>
			</td>
			<td>
				<input  name="typetrainer" id="typetrainer" style="width:150px" required="true" url="../.././fw/view/Service.php?service=gettypetrainer"  valueField="id" textField="text"   panelheight="50px"></input>
			</td>
		</tr>
		
		<tr>
			<td>
			<?php if(isPrivilege("MODIFICAR PROFESOR",$privileges) or isPrivilege("ELIMINAR PROFESOR",$privileges)){ ?>
				<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save()">Guardar</a>
			<?php } ?>
			</td>
			<td>
				<a href="trainerManagement.php" class="easyui-linkbutton" iconCls="icon-cancel" >Cancelar</a>
			</td>
			
		</tr>
		<tr>
			<?php if($service==4 and isPrivilege("ELIMINAR PROFESOR",$privileges)){ ?>
			<td>
				<a href="#" class="easyui-linkbutton" iconCls="icon-remove" onclick="del()">Eliminar</a>
			</td>
			
			<?php } ?>
		</tr>
		</table>
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
		