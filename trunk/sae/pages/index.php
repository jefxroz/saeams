
<?php include("includes/top_page.php"); ?>

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
				<form class="jqtransform" action="post.php" method="POST">	
					<label for="user">Acceder </label>
							<div class="rowElem">
									<label for="user">Usuario: </label>
									<input name="txtUser" type="text" id="txtUser" />
							</div>
							<div class="rowElem">
									<label for="password">Constraseña: </label> 
									<input name="txtPassword" type="password" id="txtPassword" />
							</div> 
							<div class="rowElem">
									<TABLE >
										<TR>
											<TD>  
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
<? include("includes/bottom_page.php"); ?>
		
