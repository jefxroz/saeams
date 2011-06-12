<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pagina inicial de SAE-SAP</title>
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	
	<!--css principal y libreria jquery principal--->
	<link href=".././resources/css/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=".././libraries/jquery-1.4.4.min.js"></script>
	
	<!--css de transform, plugin jqtransform y javascript para tranformar la apariencia--->
	<link  href=".././libraries/jqtransform/jqtransformplugin/jqtransform.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src=".././libraries/jqtransform/jqtransformplugin/jquery.jqtransform.js" ></script>
	<script type="text/javascript" src=".././resources/js/transform.js"></script>
	
	<!--css para registrar y javascript para validar el registro--->
	
	<link href=".././resources/css/register.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=".././resources/js/ValidatorRegister.js"></script>
	

	
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

