	
	<script type="text/javascript">
	var id_page="0";
	var url='.././class/controllerview/vwUser.php';
	$().ready(function() {

		id_page="0";
		$('div[name|="pg_registrer"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_recover"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_homepage"]').each(function(index) {
	           $(this).show();  
	     });
		$('div[name|="pg_login"]').each(function(index) {
	           $(this).show();  
	     });

		
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
	function cancel(){
		id_page="0";
		$('div[name|="pg_registrer"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_recover"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_homepage"]').each(function(index) {
	           $(this).show();  
	     });
		$('div[name|="pg_login"]').each(function(index) {
	           $(this).show();  
	     });
	}
	function Registrer()
	{
		 $('#fm_register').form('clear');
		id_page="1";
		$.ajax({
			 url: '.././class/controllerview/vwService.php',
			 dataType: 'json',
			 data: {service:'getcaptcha'},
			 type: 'post',
			 success: function(data){
				 alert(data.uno);
			     document.id_img_captcha.src="main/captcha.php?texto="+data.uno;
			     document.getElementById("id_hid_captcha").value=data.dos;
			 }
			});

		$('#id_school').combobox({
			//panelHeight:100
		});
		
		$('div[name|="pg_registrer"]').each(function(index) {
	           $(this).show(); 
	           
	     });
		$('div[name|="pg_recover"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_homepage"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_login"]').each(function(index) {
	           $(this).hide();  
	     });
	     
	}
	function RecoverPassword(){
	  	$('#fm_recover').form('clear');
	  	id_page="2";
	  	document.id_captcharecov.src="main/captcha.php";
	  	$('div[name|="pg_registrer"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_recover"]').each(function(index) {
	           $(this).show();  
	     });
		$('div[name|="pg_homepage"]').each(function(index) {
	           $(this).hide();  
	     });
		$('div[name|="pg_login"]').each(function(index) {
	           $(this).hide();  
	     });
	}

	function saveUser()
	{
		document.getElementById("id_page").value=id_page;
		$('#fm_register').form('submit',{
			url: url,
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				
				if (result.success){
					$.messager.show({
						title: 'Registro Exitoso',
						msg: 'Registro Realizado sin Problemas!!!'
					});
					cancel();		// close the dialog
					
				} else {
					$.messager.show({
						title: 'Error',
						msg: result.msg
					});
				}
			}
		});
	}
	</script>