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
	
	

	$('#dgpriv').datagrid({
		iconCls:'icon-save',
		pageSize:10,
		nowrap: false,
		striped: true,
		collapsible:true,
		sortName: 'code',
		sortOrder: 'desc',
		remoteSort: false,
		idField:'code',
		
		frozenColumns:[[
            {title:'Codigo',field:'idcourse',width:80,sortable:true},
		]],
		url:'../.././fw/view/Course.php?service=1',
		pagination:true
	});
	var p = $('#dgpriv').datagrid('getPager');
	if (p){
		$(p).pagination({
			onBeforeRefresh:function(){

			}
		});
	}

	
	
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
	var url = '../.././fw/view/User.php?service=<?php echo $service ?><?php if($id){echo '&iduser='.$id;} else{echo "&idcourse=-1";}?>';
	$('#fmuser').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},

		success: function(result){
			var result = eval('('+result+')');
			
			if (result.success){
				$.messager.show({
					title: 'Curso Creado',
					msg: 'Se ha creado el nuevo curso sin problemas!!!'
				});
				document.location.href='UserManagement.php';

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
				<td><h2>Informaci&oacute;n de Usuarios</h2></td>
			</tr>
		</table>
		<br/>
		<form id="fmuser" method="post" >
		<table>
		<tr>
			<td>
				<label>Correo:</label>
			</td>
			<td> 			
				<input name="mail" id="mail" class="easyui-validatebox" required="true" style="width:350px">
			</td>
		</tr>
		<tr>
			<td>
				<label>Nombres:</label>
			</td>
			<td>
				<textarea name="name" id="name" class="easyui-validatebox" required="true" style="width:350px" ></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Apellidos:</label>
			</td>
			<td>
				<input  name="surname" id="surname" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getinstitution"  valueField="id" textField="text"   panelheight="50px"></input>
			</td>
		</tr>
		<tr>
			<table id="dgpriv" title="Privilegios asignados" class="easyui-datagrid" style="width:600px;height:150px" 
				toolbar="#toolbar" 
				fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th  width="700" colspan=4>Privilegios asignados</th>
						</tr>
						<tr>
							<th field="name" width="600">Nombre</th>
							
						</tr>
					</thead>
				</table>

			<div id="toolbar">
		
		<?php
				if(isPrivilege("CREAR CURSO",$privileges))
				{
					echo '<a href="Course.php?service=2" class="easyui-linkbutton" iconCls="icon-add" plain="true" >Asignar Privilegio</a>';
				}
				
		?>	
				</div>
			
		</tr>
		<tr>
			<td>
			<?php if(isPrivilege("MODIFICAR USUARIO",$privileges) or isPrivilege("ELIMINAR USUARIO",$privileges)){ ?>
				<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save()">Guardar</a>
			<?php } ?>
			</td>
			<td>
				<a href="UserManagement.php" class="easyui-linkbutton" iconCls="icon-cancel" >Cancelar</a>
			</td>
			
		</tr>
		<tr>
			<?php if($service==4 and isPrivilege("ELIMINAR USUARIO",$privileges)){ ?>
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
		