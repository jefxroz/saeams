<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("includes/top_page.php"); ?>
<body>
	<div id="wrapper">	
		<div id="header"> 
			<?php include("includes/header.php"); ?>
		</div> 
		<div id="content">
			<div id="colOne">
				<div id="logo">
					<h1><a href="#">SAE-SAP</a></h1>
					<h2> <a href="http://ingenieria-usac.edu.gt/">Facultad de Ingenieria</a></h2>
				</div>
				<div class="box">
				<div class="bottom">
				<form class="jqtransform" action="post.php" method="post">	
					<label for="user"> Acceder </label>
							<div class="rowElem">
									<label for="user">Usuario: </label>
									<input name="txtUser" type="text" id="txtUser" />
							</div>
							<div class="rowElem">
									<label for="password">Constraseña: </label> 
									<input name="txtPassword" type="password" id="txtPassword" />
							</div> 
							<div class="rowElem">
									<table>
										<tr>
											<td>  
												<div ><a href="pages/recuperar.php" class="ajaxmenu">Recuperar Contraseña</a>  </div >  
											</TD> 
											<TD>  
												<div ><a href="pages/registrar.php" class="ajaxmenu">Regitrarse</a>  </div >  
											</TD>
										</TR>
									</TABLE>
							</div> 
							<div class="rowElem">
									<input name="btnAcces" type="submit" id="btnAcces" value="Accesar" /> 
							</div>
						
					
				</form> 
				
				</div>
				</div>
			</div>
			<div id="colTwo">
				<? include("includes/pages.php"); ?>        
				<br style="clear:both;" />
			</div>
		</div>
		<div id="footer">  
			<?php include("includes/footer.php"); ?>
		</div>
	</div>
	</body>
</html>
		
