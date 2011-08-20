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
<title>Gestionar Usuarios - SAE-SAP</title>
<?php include("top_page.php"); ?>
<script>
		var url;
	
		$(function(){
			$('#dguser').datagrid({
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
	                {title:'Codigo',field:'iduser',width:80,sortable:true},
				]],
				url:'../.././fw/view/User.php?service=1',
				pagination:true
			});
			var p = $('#dgcourse').datagrid('getPager');
			if (p){
				$(p).pagination({
					onBeforeRefresh:function(){

					}
				});
			}
		});

		function viewCourse(){			
			var row = $('#dguser').datagrid('getSelected');

			if (row){
				//document.getElementById("namecourse").value='hola';
				//$('#fmcourse').form('load',row);

				//url = '../.././fw/view/Course.php?service=3&id='+row.idcourse;
				document.location.href='User.php?service=4&id='+row.iduser;
				
				
			}
			else 
			{
				$.messager.alert('Advertencia','No se ha seleccionado ningun usuario','error');
			}

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
				<td><img src="../.././resources/images/User_48.png" ></td>
				<td><h2>Gestionar Usuarios</h2></td>
			</tr>
		</table>
		<br/>
		<table id="dguser" title="Gestionar Usuarios" class="easyui-datagrid" style="width:800px;height:400px" 
				toolbar="#toolbar" 
				fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th  width="700" colspan=4>Informaci&oacute;n de los usuarios</th>
						</tr>
						<tr>
							<th field="mail" width="100">mail</th>
							<th field="name" width="200">Nombre</th>
							<th field="surname" width="200" >Apellido</th>
						</tr>
					</thead>
				</table>

			<div id="toolbar">
		
		<?php
				if(isPrivilege("CREAR USUARIO",$privileges))
				{
					echo '<a href="User.php?service=2" class="easyui-linkbutton" iconCls="icon-add" plain="true" >Crear Usuario</a>';
				}
				if(isPrivilege("MODIFICAR USUARIO",$privileges) or isPrivilege("ELIMINAR USUARIO",$privileges) )
				{
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="viewCourse()">Ver Usuario</a>';
				}
		?>	
				</div>
			       
			       
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
		