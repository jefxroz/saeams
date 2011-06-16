	<script type="text/javascript">
	var id_page=0;
	$().ready(function() {
		$.extend($.fn.validatebox.defaults.rules, {
			minLength: {
				validator: function(value, param){
				    value=$.trim((value));
					return value.length >= param[0];
				},
				message: 'Debe introducir m&iacute;nimo {0} caracteres'
			},
			txt_valid_pass: {
				 validator: function(value, param) {
					 var ck_pass = document.getElementById("id_password").value;
	                 if (value != null) {     
	                         if(value ==ck_pass ) return true;
	                         else return false;
	                 }else return false;       
	             },
	             message: 'Debe ingresar la misma contrase&ntilde;a'
				
				}
		});
		
	});
	
	var url='.././class/controllerview/vwUser.php';
	function cancel(){
		
		var vz=document.getElementsByName('pg_homepage');
		id_page=1;
		  	
	}

	function saveUser()
	{
		document.getElementById("id_page").value=id_page;
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

	function Registrer(){
		
		$('div[name|="pg_registrer"]').each(function(index) {
	           $(this).hide();
	          
	     });
	}
	function RecoverPassword(){
		$('div[name|="pg_registrer"]').each(function(index) {
	           $(this).show();
	          
	     });
	  	id_page=2;
	}


	</script>