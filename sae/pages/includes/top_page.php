<head>
	<title>Pagina inicial de SAE-SAP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<link href="favicon.ico" rel="shortcut icon" />
	
	<!--css principal y libreria jquery principal--->
	<script type="text/javascript" src=".././libraries/jquery-1.4.4.min.js"></script>
		<link href=".././resources/css/theme-sae.css" rel="stylesheet" type="text/css" />	
	
	<!--Librería de Jquery Easy UI --->
	<link rel="stylesheet" type="text/css" href=".././libraries/themes/default/easyui.css">
	<script type="text/javascript" src=".././libraries/jquery.easyui.min.js"></script>
	<script type="text/javascript" src=".././libraries/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src=".././libraries/locale/easyui-lang-es.js"></script>
	<link rel="stylesheet" type="text/css" href=".././libraries/themes/gray/easyui.css">
	<link rel="stylesheet" type="text/css" href=".././libraries/themes/icon.css">
	<script language="javascript">
	</script>
	<script type="text/javascript">
	var url='.././class/controllerview/vwUser.php';
	function cancel(){
		var vz=document.getElementsByName('pg_homepage');
	  	  for(i=0; i<vz.length;i++)
		    	  vz[i].style.display='';
			var vz=document.getElementsByName('pg_registrer');
		  	  for(i=0; i<vz.length;i++)
			    	  vz[i].style.display='none';
		  	var vz=document.getElementsByName('pg_recover');
		  	  for(i=0; i<vz.length;i++)
			    	  vz[i].style.display='none';
		  	var vz=document.getElementsByName('pg_login');
		  	  for(i=0; i<vz.length;i++)
			    	  vz[i].style.display='';
		  	document.getElementById("id_page").value="0";
	}

	function saveUser()
	{
		$('#fm_register').form('submit',{
			url: '.././class/controllerview/vwUser.php',
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				 $.messager.alert('Info', result, 'info'); 
				  
				/*var result = eval('('+result+')');
				if (result.success){
					$('#dlg').dialog('close');		// close the dialog
					$('#dg').datagrid('reload');	// reload the user data
				} else {
					$.messager.show({
						title: 'Error',
						msg: result.msg
					});
				}*/
			}
		});
	}

	</script>
</head>

