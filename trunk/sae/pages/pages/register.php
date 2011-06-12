<div id="form">
	<h2>Jquery registration form</h2>
	<form method="post" id="form-elements" >
	<TABLE>
		<tr id="fila" class="username">
		<td>
			<label>Username: </label><br/> 
		</td>
		<td>
			<input type="text" name="name" id="username" />
		</td>
		<td>
			<span class="error" id="spnusername"></span>
		</td>
		</tr>
		<tr id="fila" class="password">
		<td>
			<label>Password: </label><br/> 
		</td>
		<td>
			<input type="password" name="password" id="password" />
		</td>
		<td>
			<span class="error" id="spnpassword" ></span>
		</td>
		</tr>
		<tr id="fila" class="email">
		<td>
			<label>Email: </label><br/> 
		</td>
		<td>
			<input type="text" name="email" id="email" />
		</td>	
		<td>
			<span class="error" id="spnemail" ></span>
		</td>
		</tr>	
		<tr id="fila" class="phone">
		<td>
			<label>Phone No: </label><br/>
		</td>
		<td>
			<input type="text" name="phone" id="phone" />
		</td>
		<td>
			<span class="error" id="spnphone" ></span>
		</td>
		</tr>
		<tr id="fila" class="submit">
		<td>
			<input type="submit" value=" Register " id='submit'/>
		</td>
		</tr>
	</TABLE>
	</form>
</div>
