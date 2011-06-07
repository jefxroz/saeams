$(function() 
	{
		$("tr.username").show();
		$("#username").width('200px');
		//$("#username").css('padding','5px');
		var ck_username = /^[A-Za-z0-9_]{5,20}$/;
		var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
		var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
		var ck_phone = /^[0-9-]{10,20}$/;
		$('#username').keyup(function()
		{
			var username=$(this).val();
			if (!ck_username.test(username)) 
			{
			 	$("#spnusername").show().html("Minimum 5 characters");
			}
			else
			{
				$("#spnusername").hide();
				$("tr").next("tr.password").show();
				$("#password").width('200px');
				//$("#password").css('padding','5px');
		
		
			}
		});

		$('#password').keyup(function()
		{
			var password=$(this).val();
			if (!ck_password.test(password)) 
			{
			 	$("#spnpassword").show().html("Minimum 6 Characters");
			}
			else
			{
				$("#spnpassword").hide();
				$("tr").next("tr.email").show();
				$("#email").width('200px');
				//$("#email").css('padding','5px');
		
		
			}
		});
		$('#email').keyup(function()
		{
			var email=$(this).val();
			if (!ck_email.test(email)) 
			{
			 	$("#spnemail").show().html("Enter valid email");
			}
			else
			{
				$("#spnemail").hide();
				$("tr").next("tr.phone").show();
				$("#phone").width('200px');
				//$("#phone").css('padding','5px');
		
		
			}
		});
		$('#phone').keyup(function()
		{
			var phone=$(this).val();
			if (!ck_phone.test(phone)) 
			{
			 	$("#spnphone").show().html("Minimum 10 numbers");
			}
			else
			{
				$("#spnphone").hide();
				$("tr").next("tr.submit").show();
			}
		});
		
		$('#submit').click(function()
		{
			var email=$("#email").val();
			var username=$("#username").val();
			var password=$("#password").val();
			if(ck_email.test(email) && ck_username.test(username) && ck_password.test(password) )
			{
				$("#form").show().html("<h1>Thank you!</h1><p>You have registered successfully</p>");
			}
			else
			{
				alert("Existen errores en el registro");
			}
			return false;
		});
	})
