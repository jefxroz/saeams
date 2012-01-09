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
<title>Gestionar Cursos - SAE-SAP</title>
<?php include("top_page.php"); ?>
	<script>
		var url;
	
		$(function(){
			$('#dginstitution').datagrid({
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
	                {title:'Codigo',field:'idinstitution',width:80,sortable:true},
				]],
				url:'../.././fw/view/Institution.php?service=1',
				pagination:true
			});
			var p = $('#dginstitution').datagrid('getPager');
			if (p){
				$(p).pagination({
					onBeforeRefresh:function(){

					}
				});
			}
		});

		function viewCourse(){			
			var row = $('#dginstitution').datagrid('getSelected');

			if (row){
				//document.getElementById("namecourse").value='hola';
				//$('#fmcourse').form('load',row);

				//url = '../.././fw/view/Course.php?service=3&id='+row.idcourse;
				if(row.state!='INACTIVO')
				{
					document.location.href='Course.php?service=4&id='+row.idcourse;
				}
				else
				{
					$.messager.alert('Advertencia','El curso ha sido inactivado','error');
				}
				
			}
			else 
			{
				$.messager.alert('Advertencia','No se ha seleccionado ningun curso','error');
			}

		}

		function activateCourse(){			
			var row = $('#dgcourse').datagrid('getSelected');

			if (row){
				//document.getElementById("namecourse").value='hola';
				//$('#fmcourse').form('load',row);

				//url = '../.././fw/view/Course.php?service=3&id='+row.idcourse;
				if(row.state=='INACTIVO')
				{
					document.location.href='../.././fw/view/Course.php?service=6&id='+row.idcourse+'&state='+row.state;
				}
				else
				{
					$.messager.alert('Advertencia','El curso no esta inactivo','error');
				}
				
			}
			else 
			{
				$.messager.alert('Advertencia','No se ha seleccionado ningun curso','error');
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
						<td><img src="../.././resources/images/course_48.png" ></td>
						<td><h2>Gestionar Cursos</h2></td>
					</tr>
				</table>
				<br/>			          	
				<!--  						
					<div align="center">					
				 			<input type="text" id="id_search" name="id_search"  size="26">
				 			&nbsp;&nbsp;
				 			<a href="#" class="easyui-linkbutton" iconCls="icon-search">Buscar</a>
				 			&nbsp;&nbsp;
				 			<a href="#" class="easyui-linkbutton" iconCls="icon-reload">Mostrar Todos</a>							
					</div>
				-->		
				<br/>
					<!--  
					<table id="test"></table>	 
					-->  
				<table id="dginstitution" title="Gestionar Instituciones" class="easyui-datagrid" style="width:800px;height:400px" 
				toolbar="#toolbar" 
				fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th  width="700" colspan=4>Informaci&oacute;n de las instituciones</th>
						</tr>
						<tr>
							<th field="name" width="400">Instituci&oacute;n</th>
							<th field="state" width="120" >Estado</th>
						</tr>
					</thead>
				</table>

			<div id="toolbar">
		
		<?php
				if(isPrivilege("CREAR CURSO",$privileges))
				{
					echo '<a href="Course.php?service=2" class="easyui-linkbutton" iconCls="icon-add" plain="true" >Crear Curso</a>';
				}
				if(isPrivilege("MODIFICAR CURSO",$privileges) or isPrivilege("ELIMINAR CURSO",$privileges) )
				{
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="viewCourse()">Ver Curso</a>';
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="activateCourse()">Activar</a>';
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