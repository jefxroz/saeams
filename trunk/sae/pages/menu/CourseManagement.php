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
		$(function(){
			$('#test').datagrid({
				title:'Gestionar Cursos',
				iconCls:'icon-save',
				width:800,
				height:400,
				nowrap: false,
				striped: true,
				collapsible:true,
				sortName: 'code',
				sortOrder: 'desc',
				remoteSort: false,
				idField:'code',
				frozenColumns:[[
	                {title:'Codigo',field:'code',width:80,sortable:true}
				]],
				columns:[[
			        {title:'Informaci&oacute;n de los cursos',colspan:4},
					{field:'Modd',title:'Modificar',width:100,align:'center', rowspan:2,
						formatter:function(value,rec){
							return '<span style="color:red">Edit Delete</span>';
						}
					}
				],[
					{field:'name',title:'Nombre',width:120},
					{field:'descr',title:'Descripci&oacute;n',width:120,rowspan:2,sortable:true,
						sorter:function(a,b){
							return (a>b?1:-1);
						}
					},
					{field:'Duration',title:'Duraci&oacute;n',width:150},
					{field:'cost',title:'Costo',width:120}
				]],
				pagination:true,
				rownumbers:true,
				toolbar:[{
					id:'btnadd',
					text:'Crear Curso',
					iconCls:'icon-add',
					handler:function(){
						$('#btnsave').linkbutton('enable');
						
					}
				}]
			});
			var p = $('#test').datagrid('getPager');
			if (p){
				$(p).pagination({
					onBeforeRefresh:function(){

					}
				});
			}
		});
</script>

</head>
<body>
	<div id="wrapper">	
		<div id="content">
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
					<div align="center">					
				 			<input type="text" id="id_search" name="id_search"  size="26">
				 			&nbsp;&nbsp;
				 			<a href="#" class="easyui-linkbutton" iconCls="icon-search">Buscar</a>
				 			&nbsp;&nbsp;
				 			<a href="#" class="easyui-linkbutton" iconCls="icon-reload">Mostrar Todos</a>
				 										
					</div>
				<br/>
					
					<table id="test"></table>	         
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