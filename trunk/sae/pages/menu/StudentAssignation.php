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

	$('#dgsections').datagrid({
		iconCls:'icon-save',
		pageSize:20,
		nowrap: false,
		striped: true,
		collapsible:true,
		sortName: 'idcourse',
		sortOrder: 'desc',
		remoteSort: false,
		idField:'idcourse',
		
		frozenColumns:[[
            {title:'Codigo',field:'idcourse',width:80,sortable:true},
		]],
		url:'../.././fw/view/InstitutionCourse.php?service=1&id=<?php if($id){echo $id;}else{echo "-1";}  ?>',
		pagination:true
	});
	var p = $('#dgsections').datagrid('getPager');
	if (p){
		$(p).pagination({
			onBeforeRefresh:function(){

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
				$.messager.alert('Curso Modificado','Se ha gestionado el curso sin problemas!!!','info');
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

function mod(){
	//alert($('#cidinstitution2').combobox('getValue') + $('#section2').val() + $('#cmbperi2').combobox('getValue') + $('#anio2').val() + $('#cupo2').val() + $('#state2').val());
	//alert($('#cidinstitution2h').val() + $('#section2h').val() + $('#cmbperi2h').val() + $('#anio2h').val() + $('#cupo2').val() + $('#state2').val());
	var url = '../.././fw/view/Course.php?service=10<?php if($id){echo '&idcourse='.$id;} else{echo "&idcourse=-1";}?>';
	$('#fm2').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},
		success: function(result){
			var result = eval('('+result+')');
			if (result.success){
				$.messager.alert('Cambios Realizados','Se ha modificado la institucion!!!','info');
				
				$('#dlg2').dialog('close');		// close the dialog
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
		if(row.state!='INACTIVO')
		{
			$.ajax({
				 url: '../.././fw/view/Course.php',
				 dataType: 'json',
				 data: {service:'9',state:'INACTIVO',id:row.code,section:row.section,periodo:row.periodo,anio:row.anio,idcourse:<?php if($id){echo $id;}else{echo "-1";}  ?> },
				 type: 'post',
				 success: function(data){
					   	$('#dginstitutions').datagrid('reload');
						$.messager.alert('Informacion','Se ha inactivado la seccion indicada','info');
				 }
				});
		}
		else
		{
			$.messager.alert('Advertencia','La Institucion esta inactiva para este curso en este momento','error');				
		}
	}
	else 
	{
		$.messager.alert('Advertencia','No se ha seleccionado ninguna institucion','error');
	}
}

function actInstitution(){
	var row = $('#dginstitutions').datagrid('getSelected');
	if (row){
		if(row.state!='ACTIVO')
		{
			$.ajax({
				 url: '../.././fw/view/Course.php',
				 dataType: 'json',
				 data: {service:'9',state:'ACTIVO',id:row.code,section:row.section,periodo:row.periodo,anio:row.anio,idcourse:<?php if($id){echo $id;}else{echo "-1";}  ?> },
				 type: 'post',
				 success: function(data){
					   	$('#dginstitutions').datagrid('reload');
						$.messager.alert('Informacion','Se ha activado la seccion indicada','info');
				 }
				});
		}
		else
		{
			$.messager.alert('Advertencia','La Institucion ya esta activa para este curso en este momento','error');				
		}
	}
	else 
	{
		$.messager.alert('Advertencia','No se ha seleccionado ninguna institucion','error');
	}
}

function addInstitution()
{
	$('#dlg').dialog('open').dialog('setTitle','Agregar Institucion a curso');
	$('#fm').form('clear');
	$('#cmbperi').combobox({  
        data:[{  
            "id":1,  
            "text":"1. Primer Semestre"  
        },{  
            "id":2,  
            "text":"2. Segundo Semestre"  
        }]   
    });  
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
				<td><h2>Asignaci&oacute;n de cursos</h2></td>
			</tr>
		</table>
		<br/>
		<form id="fmcourse" method="post" >
		<table>
		<tr>
			<td>
				<label>Seleccione los cursos que desea asignarse:</label>
			</td>
		</tr>
		<tr>
			<td>
				<table id="dgsections"  class="easyui-datagrid" style="width:650px;height:350px"  
				fitColumns="true">
					<thead>
						
						<tr>
							<th field="name" width="400">Curso</th>
							<th field="section" width=400">Secci&oacute;n</th>
							<th field="catedratico" width=400">Catedr&aacute;tico</th>
							<th field="vigencia" width=400"  style="display:block;">Vigencia</th>
						</tr>
					</thead>
				</table>
			<td>
		<tr>
		<tr>
			<td>
			<?php if(isPrivilege("ASIGNAR CURSO",$privileges)){ ?>
				<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="asignar()">Guardar</a>
			<?php } ?>
			</td>
			<td>
				<a href="Assignation.php" class="easyui-linkbutton" iconCls="icon-cancel" >Cancelar</a>
			</td>
			
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