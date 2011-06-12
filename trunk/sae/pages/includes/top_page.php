<head>
	<title>Pagina inicial de SAE-SAP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	
	<!--css principal y libreria jquery principal--->
	<link href=".././resources/css/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=".././libraries/jquery-1.4.4.min.js"></script>
		
	<!--css para registrar y javascript para validar el registro--->
	
	<link href=".././resources/css/register.css" rel="stylesheet" type="text/css" />
	
	<!--Librería de Jquery Easy UI --->
	<link rel="stylesheet" type="text/css" href=".././libraries/themes/default/easyui.css">
	<script type="text/javascript" src=".././libraries/jquery.easyui.min.js"></script>
	<script src=".././libraries/plugins/jquery.validate.js" type="text/javascript"></script>
	
	<script language="javascript">
$(document).ready(function(){
$.ajaxSetup ({
	cache: false
});
var ajax_load = "<img src='.././resources/images/load.gif' alt='loading...' />";
$(".ajaxmenu").live("click", function(){
	myUrl= $(this).attr('href');
	if (myUrl.match('#')) {
		  var myAnchor = myUrl.split('#')[1];
		  /*Ahora arreglamos el URL - para evitar problemas en ie6*/
		  var loadUrl = myUrl.split('#')[0];
	}else{
		var loadUrl = $(this).attr('href');
	}
	$("#colTwo").html(ajax_load).load(loadUrl,function(){
 		if (myUrl.match('#')) {
		/*Calculamos la distancia entre el anchor y la pagina y animamos*/
		  var targetOffset = $("a[name='"+myAnchor+"']").offset().top; 
		  $('html').animate({scrollTop: targetOffset}, 400); 
		}
		$.getScript(".././resources/js/ValidatorRegister.js", function(){
			
		});
		$.getScript(".././resources/js/Transform.js", function(){
			
		});
		$(".jqtransform").hide();
		
	 }
	);
	
	return false;		
});
});
</script>
</head>

