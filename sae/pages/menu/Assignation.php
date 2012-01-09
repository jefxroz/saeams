<?php
	require_once("../.././fw/model/mapping/TbUser.php");
	require_once("../.././fw/model/mapping/TbPrivilege.php");
	session_start();

	//echo 'Hola';
	$objuser = unserialize($_SESSION['usuario']);	
	if($objuser)
	{
		$privileges=$objuser->getPrivileges();	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>Asignarse cursos</title>

<?php include("top_page.php");?>
<script>
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

	function SelectInst(){
		var row = $('#dginstitution').datagrid('getSelected');
		if(row){
			var url = 'StudentAssignation.php?id='+row.idinstitution;
			document.location.href = url;
		}else{
			$.messager.alert('Advertencia','Debe seleccionar una instituci&oacute;n','Error');
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
					<td><h2>Asignaci&oacute;n de cursos</h2></td>
				</tr>
			</table>
			<br/>			          	

			<table id="dginstitution" title="Por favor seleccione una instituci&oacute;n" class="easyui-datagrid" style="width:600px;height:400px" 
				toolbar="#toolbar" 
				fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th  width="500" colspan=4>Seleccione la instituci&oacute;n a la cual desea asignarse</th>
						</tr>
						<tr>
							<th field="name" width="400">Instituci&oacute;n</th>
						</tr>
					</thead>
				</table>

			<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-add" onclick="SelectInst()">Asignar cursos</a>
			</div>
			

			
					      
					<br style="clear:both;" />
				</div>
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