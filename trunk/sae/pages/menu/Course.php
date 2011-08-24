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
	
	
	$('#cstate').combobox({
		//panelHeight:100
	});

	$('#dginstitutions').datagrid({
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
            {title:'Codigo',field:'code',width:80,sortable:true},
		]],
		url:'../.././fw/view/Course.php?service=7&id=<?php if($id){echo $id;}else{echo "-1";}  ?>',
		pagination:false
	});
	var p = $('#dginstitutions').datagrid('getPager');
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
				 //$('#cidinstitution').combobox('setValue',data.idinstitution);
				 $('#cstate').combobox('setValue',data.state);
				 
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
				$.messager.alert('Curso Eliminado','Se ha eliminado el curso!!!','info');
				document.location.href='CourseManagement.php';

			} else {
				$.messager.alert('Error',result.msg,'error');

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
			//alert(result);
			var result = eval('('+result+')');
			
			if (result.success){
				$.messager.alert('Curso Creado','Se ha creado el nuevo curso sin problemas!!!','info');
				document.location.href='CourseManagement.php';

			} else {
				$.messager.alert('Error',result.msg,'error');

			}

		}

	});

}

function add(){
	var url = '../.././fw/view/Course.php?service=8<?php if($id){echo '&idcourse='.$id;} else{echo "&idcourse=-1";}?>';
	$('#fm').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},

		success: function(result){
			var result = eval('('+result+')');
			
			if (result.success){
				$.messager.alert('Cambios Realizados','Se ha agregado la institucion!!!','info');
				
				$('#dlg').dialog('close');		// close the dialog
				$('#dginstitutions').datagrid('reload');	// reload the user data
				
				

			} else {
				$.messager.alert('Error',result.msg,'error');

			}

		}

	});

	

}

function delInstitution(){
	
	
	var row = $('#dginstitutions').datagrid('getSelected');

	if (row){
			$.ajax({
				 url: '../.././fw/view/Course.php',
				 dataType: 'json',
				 data: {service:'9',id:row.code,idcourse:<?php if($id){echo $id;}else{echo "-1";}  ?> },
				 type: 'post',
				 success: function(data){
					   	$('#dginstitutions').datagrid('reload');
						$.messager.alert('Informacion','ya no pertenece a la institucion','info');
						location.reload();	
							
				 }
				});
	}
	else 
	{
		$.messager.alert('Advertencia','No se ha seleccionado ninguna institucion','error');
	}
}


function addInstitution()
{
	$('#dlg').dialog('open').dialog('setTitle','New User');
	$('#fm').form('clear');

	$('#cidinstitution').combobox({
		//panelHeight:100
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
		<!--  
		<tr>
			<td>
				<label>Instituci&oacute;n:</label>
			</td>
			<td>
				<input  name="cidinstitution" id="cidinstitution" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getinstitution"  valueField="id" textField="text"   panelheight="50px"></input>
			</td>
		</tr>
		-->
		<tr>
			<td>
				<label>Duraci&oacute;n:</label>
			</td>
			<td>
				<input name="duration" id="duration" class="easyui-validatebox" required="true" style="width:150px">
			</td>
		</tr>
		
<?php if($service==4){ ?>
		<tr>
			<td>
				<label>Estado:</label>
			</td>
			<td>
				<input  name="cstate" id="cstate" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getstate"  valueField="id" textField="text"   panelheight="50px"></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Instituciones:</label>
			</td>
			<td>
				<table id="dginstitutions"  class="easyui-datagrid" style="width:300px;height:200px" 
				toolbar="#toolbar" 
				fitColumns="true" singleSelect="true">
					<thead>
						
						<tr>
							<th field="name" width="400">Instituciones</th>
							
						</tr>
					</thead>
				</table>
					<div id="toolbar">
		
		<?php
				if(isPrivilege("MODIFICAR CURSO",$privileges) or isPrivilege("ELIMINAR CURSO",$privileges) )
				{
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="addInstitution()">Agregar</a>';
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="delInstitution()">Quitar</a>';
				}
		?>	
				</div>
			
			<td>
		<tr>
<?php } ?>
		<tr>
			<td>
			<?php if(isPrivilege("MODIFICAR CURSO",$privileges) or isPrivilege("ELIMINAR CURSO",$privileges)){ ?>
				<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="save()">Guardar</a>
			<?php } ?>
			</td>
			<td>
				<a href="CourseManagement.php" class="easyui-linkbutton" iconCls="icon-cancel" >Cancelar</a>
			</td>
			
		</tr>
		<tr>
			<?php if($service==4 and isPrivilege("ELIMINAR CURSO",$privileges)){ ?>
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
	<div id="dlg" class="easyui-dialog" style="width:250px;height:150px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<form id="fm" method="post">
			<div class="fitem">
				<label>Instituciones:</label>
				<input  name="cidinstitution" id="cidinstitution" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getinstitution"  valueField="id" textField="text"   panelheight="50px"></input>
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="add()">Asignar</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancelar</a>
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
		