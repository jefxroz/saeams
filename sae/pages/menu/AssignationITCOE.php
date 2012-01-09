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
<title>Asignarse cursos - ITCOE</title>

<?php include("top_page.php"); ?>
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
						<td><img src="../.././resources/images/assign_48.png" ></td>
						<td><h2>Asignarse cursos en ITCOE</h2></td>
					</tr>
				</table>
				<br/>

				<table id="dgcourses" title="Asignar cursos en ITCOE" class="easyui-datagrid" style="width:800px;height:400px"
					   toolbar="#toolbar" fitcolumns="true" singleSelect="true">
					   <thead>
					   		<tr>
					   			<th  width="100%" colspan=4>Asignaci&oacute;n de cursos</th>
					   		</tr>
					   		<tr>
					   			<th field="code" width="15%">C&oacute;digo</th>
								<th field="name" width="60%">Nombre</th>
								<th field="section" width="25%" >Secci&oacute;n</th>
					   		</tr>
					   </thead>
					
				</table>

				
			       
				<br style="clear:both;" />
			</div>
		</div>
		<div id="footer">  
				<?php include(".././includes/footer.php"); ?>
		</div>
	</div>
	</body>
</html>