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
		pagination:true
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

function modInstitution()
{
	var row = $('#dginstitutions').datagrid('getSelected');
	if (row){
		var institution = row.code;
		var section = row.section;
		var cupo = row.cupo;
		var periodo = row.periodo;
		var anio = row.anio;
		var state = row.state;
		$('#dlg2').dialog('open').dialog('setTitle','Modificar datos de Institucion a curso');
		$('#fm2').form('clear');
		$('#cmbperi2').combobox({
			data:[{
				"id":1,
				"text":"1. Primer Semestre"
			},{
				"id":2,
				"text":"2. Segundo Semestre"
			}
			]
		});
		$('#cidinstitution2').combobox({
			//panelHeight:100
		});
		$('#cidinstitution2').combobox('setValue',institution); $('#cidinstitution2h').val(institution);
		$('#section2').val(section); $('#section2h').val(section);
		$('#anio2').val(anio); $('#anio2h').val(anio);
		$('#cmbperi2h').val(periodo);
		/*switch(periodo){
			case 1: periodo = '1. Primer Semestre'; break;
			case 2: periodo = '2. Segundo Semestre'; break;
		}*/
		$('#cmbperi2').combobox('setValue',periodo);
		$('#cupo2').val(cupo);
		$('#state2').val(state);
	}else{
		$.messager.alert('Advertencia','No se ha seleccionado ninguna institucion para el curso','Error');
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
				<input  name="cstate" id="cstate" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getstatecourse"  valueField="id" textField="text"   panelheight="50px"></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Instituciones:</label>
			</td>
			<td>
				<table id="dginstitutions"  class="easyui-datagrid" style="width:650px;height:200px" 
				toolbar="#toolbar" 
				fitColumns="true" singleSelect="true">
					<thead>
						
						<tr>
							<th field="name" width="400">Institucion</th>
							<th field="section" width=400">Secci&oacute;n</th>
							<th field="cupo" width=400">Cupo</th>
							<th field="periodo" width=400">Per&iacute;odo</th>
							<th field="anio" width=400">A&ntilde;o</th>
							<th field="state" width="400">Estado</th>
						</tr>
					</thead>
				</table>
					<div id="toolbar">
		
		<?php
				if(isPrivilege("MODIFICAR CURSO",$privileges) or isPrivilege("ELIMINAR CURSO",$privileges) )
				{
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="addInstitution()">Agregar</a>';
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="modInstitution()">Modificar</a>';
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="actInstitution()">Activar</a>';
					echo '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="delInstitution()">Inactivar</a>';
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
	<div id="dlg" class="easyui-dialog" style="width:300px;height:210px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<form id="fm" method="post">
			<div class="fitem">
				<label>Instituci&oacute;n:</label>
				<input  name="cidinstitution" id="cidinstitution" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getinstitution"  valueField="id" textField="text"   panelheight="50px"></input>
				<br><label>Secci&oacute;n:</label>
				<input name="section" id="section" style="width:75px; text-transform:uppercase" maxlength="1" required="true" valueField="id" textField="text" panelheight="50px"></input>
				<br><label>Cupo:</label>
				<input name="cupo" id="cupo" style="width:100px" required="true" panelheight="50px"></input>
				<br><label>Per&iacute;odo</label>
				<input name="periodo" id="cmbperi" style="width:150px" required="true" valueField="id" textField="text" panelheight="50px"></input>
				<br><label>A&ntilde;o</label>
				<input name="anio" id="anio" style="width:100px" required="true" panelheight="50px"></input>
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="add()">Asignar</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancelar</a>
	</div>
	
	<div id="dlg2" class="easyui-dialog" style="width:300px;height:210px;padding:10px 20px"
			closed="true" buttons="#dlg2-buttons">
		<form id="fm2" method="post">
			<div class="fitem">
				<label>Instituci&oacute;n:</label>
				<input  name="cidinstitution2" id="cidinstitution2" style="width:150px" required="true" url="../.././fw/view/Service.php?service=getinstitution"  valueField="id" textField="text"   panelheight="50px"></input>
				<input name="cidinstitution2h" id="cidinstitution2h" type="hidden"></input>
				<br><label>Secci&oacute;n:</label>
				<input name="section2" id="section2" style="width:75px; text-transform: uppercase" maxlength="1" required="true" valueField="id" textField="text" panelheight="50px"></input>
				<input name="section2h" id="section2h" type="hidden"></input>
				<br><label>Cupo:</label>
				<input name="cupo2" id="cupo2" style="width:100px" required="true" panelheight="50px"></input>
				<br><label>Per&iacute;odo</label>
				<input name="periodo2" id="cmbperi2" style="width:150px" required="true" valueField="id" textField="text" panelheight="50px"></input>
				<input name="periodo2h" id="cmbperi2h" type="hidden"></input>
				<br><label>A&ntilde;o</label>
				<input name="anio2" id="anio2" style="width:100px" required="true" panelheight="50px"></input>
				<input name="anio2h" id="anio2h" type="hidden"></input>
				<input name="state2" id="state2" type="hidden"></input>
			</div>
		</form>
	</div>
	<div id="dlg2-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="mod()">Modificar</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg2').dialog('close')">Cancelar</a>
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
		