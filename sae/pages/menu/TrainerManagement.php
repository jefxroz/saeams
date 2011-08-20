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
<title>Gestionar Profesores - SAE-SAP</title>
<?php include("top_page.php"); ?>
	<script>
		var url;
	
		$(function(){
			$('#dgtrainer').datagrid({
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
	                {title:'Codigo',field:'idtrainer',width:80,sortable:true},
				]],
				url:'../.././fw/view/trainer.php?service=1',
				pagination:true
			});
			var p = $('#dgtrainer').datagrid('getPager');
			if (p){
				$(p).pagination({
					onBeforeRefresh:function(){

					}
				});
			}
		});

		function viewtrainer(){			
			var row = $('#dgtrainer').datagrid('getSelected');

			if (row){
				//document.getElementById("nametrainer").value='hola';
				//$('#fmtrainer').form('load',row);

				//url = '../.././fw/view/trainer.php?service=3&id='+row.idtrainer;
				document.location.href='trainer.php?service=4&id='+row.idtrainer;
				
				
			}
			else 
			{
				$.messager.alert('Advertencia','No se ha seleccionado ningun profesor!!!','error');
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
						<td><img src="../.././resources/images/trainer_48.png" ></td>
						<td><h2>Gestionar profesores</h2></td>
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
				<table id="dgtrainer" title="Gestionar Profesores" class="easyui-datagrid" style="width:800px;height:400px" 
				toolbar="#toolbar" 
				fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th  width="700" colspan=4>Informaci&oacute;n de los profesores</th>
						</tr>
						<tr>
							<th field="name" width="150">Nombres</th>
							<th field="surname" width="150">Apellidos</th>
							<th field="typetrainer" width="100" >Tipo de Profesor</th>
						</tr>
					</thead>
				</table>

			<div id="toolbar">
		
		<?php
				if(isPrivilege("CREAR PROFESOR",$privileges))
				{
					echo '<a href="trainer.php?service=2" class="easyui-linkbutton" iconCls="icon-add" plain="true" >Crear Profesor</a>';
				}
				if(isPrivilege("MODIFICAR PROFESOR",$privileges) or isPrivilege("ELIMINAR PROFESOR",$privileges) )
				{
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="viewtrainer()">Ver Profesor</a>';
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