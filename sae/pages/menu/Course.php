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
<title>Informaci&oacute;n de cursos - SAE-SAP</title>
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
			 url: '../.././fw/view/Course.php',
			 dataType: 'json',
			 data: {service:'3',idcourse:<?php if($id){echo $id;}else{echo "-1";}  ?> },
			 type: 'post',
			 success: function(data){
				 
				 $('#namecourse').val(data.name);
				 $('#description').val(data.description);
				 $('#cidinstitution').combobox('setValue',data.idinstitution);
				 $('#duration').val(data.duration);
				 
				      
			 }
			});
	}
});

function del()
{
	var url = '../.././fw/view/Course.php?service=5<?php if($id){echo '&idcourse='.$id;} else{echo "&idcourse=-1";}?>';
	$('#fmcourse').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},

		success: function(result){
			var result = eval('('+result+')');
			
			if (result.success){
				alert('sigue bien');
				$.messager.show({
					title: 'Curso Creado',
					msg: 'Se ha creado el nuevo curso sin problemas!!!'
				});
				document.location.href='CourseManagement.php';

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
	var url = '../.././fw/view/Course.php?service=<?php echo $service ?><?php if($id){echo '&idcourse='.$id;} else{echo "&idcourse=-1";}?>';
	$('#fmcourse').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},

		success: function(result){
			var result = eval('('+result+')');
			
			if (result.success){
				alert('sigue bien');
				$.messager.show({
					title: 'Curso Creado',
					msg: 'Se ha creado el nuevo curso sin problemas!!!'
				});
				document.location.href='CourseManagement.php';

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
				<td><img src="../.././resources/images/lcourse_48.png" ></td>
				<td><h2>Informaci&oacute;n de cursos</h2></td>
			</tr>
		</table>
		<br/>
		<form id="fmcourse" method="post" >
		<table>
		<tr>
			<td>
				<label>Curso:</label>
			</td>
			<td> 			
				<input name="namecourse" id="namecourse" class="easyui-validatebox" required="true" style="width:350px">
			</td>
		</tr>
		<tr>
			<td>
				<label>Descripci&oacute;n:</label>
			</td>
			<td>
				<textarea name="description" id="description" class="easyui-validatebox" required="true" style="width:350px;height:100px" ></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Instituci&oacute;n:</label>
			</td>
			<td>
				<input  name="cidinstitution" id="cidinstitution" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getinstitution"  valueField="id" textField="text"   panelheight="50px"></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Duraci&oacute;n:</label>
			</td>
			<td>
				<input name="duration" id="duration" class="easyui-validatebox" required="true" style="width:150px">
			</td>
		</tr>
		<tr>
			<td>
				<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save()">Guardar</a>
			</td>
			<td>
				<a href="CourseManagement.php" class="easyui-linkbutton" iconCls="icon-cancel" >Cancelar</a>
			</td>
			
		</tr>
		<tr>
			<?php if($service==4){ ?>
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
		