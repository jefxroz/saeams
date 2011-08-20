

	<div id="logo">
			<div align="center">
				<img src="../.././resources/images/SAEv2.png" alt="" width="80" height="80" />
			</div>
			<br>
			<h2> <a href="http://ingenieria-usac.edu.gt/">FACULTAD DE INGENIER&Iacute;A</a></h2>
	</div>	
	<div id="menu_acc" class="easyui-accordion" style="width:238px;">
		<div id="menu_pn1"  selected="true" title='Administraci&oacute;n' iconCls="icon-reload" style="padding:10px;">
			<div id="menu2">
			<ul class="menu2">
<?php
				if(isPrivilege("MODIFICAR PERFIL",$privileges))
				{			
					echo '<li><a href="EditProfile.php" > <img src="../.././resources/images/setting1_24.png" /> Modificar Perfil</a></li>';
				}

				if(isPrivilege("VER USUARIOS",$privileges))
				{
					echo '<li><a href="UserManagement.php" ><img src="../.././resources/images/User_24.png" /> Gestionar Usuarios</a></li>';
				}
				
				if(isPrivilege("VER PROFESORES",$privileges))
				{
					echo '<li><a href="TrainerManagement.php" ><img src="../.././resources/images/User_24.png" /> Gestionar Profesores</a></li>';
				}
				
				if(isPrivilege("VER CURSOS",$privileges))
				{
					echo '<li><a href="CourseManagement.php" ><img src="../.././resources/images/course_24.png" /> Gestionar Cursos</a></li>';
				}
				if(isPrivilege("VER HORARIOS",$privileges))
				{
					echo '<li><a href="ScheduleManagement.php" ><img src="../.././resources/images/schedule_24.png" /> Gestionar Horarios</a></li>';
				}
				if(isPrivilege("VER NOTAS",$privileges))
				{
					echo '<li><a href="GradeManagement.php" ><img src="../.././resources/images/grade_24.png" /> Gestionar Notas</a></li>';
				}
				if(isPrivilege("VER REPORTES",$privileges))
				{
					echo '<li><a href="Report.php" ><img src="../.././resources/images/report_24.png" /> Reportes</a></li>';
				}
				if(isPrivilege("VER DASBOARD",$privileges))
				{
					echo '<li><a href="Dashboard.php" ><img src="../.././resources/images/dashboard_24.png" /> Dashboard</a></li>';
				}
?>
	</ul>
			
			</div>
		</div>
		<div id="menu_pn2" title='Asignaci&oacute;n' iconCls="icon-reload" style="padding:10px;">
			<div id="menu2">
			<ul class="menu2">
<?php
			if(isPrivilege("VER INFORMACION",$privileges))
			{
				echo '<li><a href="Course.php" > <img src="../.././resources/images/lcourse_24.png" /> Informaci&oacute;n de cursos</a></li>';
			}
			if(isPrivilege("VER ASIGNAR",$privileges))
			{
				echo '<li><a href="Assignation.php" ><img src="../.././resources/images/assign_24.png" /> Asignarse cursos</a></li>';
			}
			if(isPrivilege("VER CONSULTAR NOTAS",$privileges))
			{
				echo '<li><a href="Grade.php" ><img src="../.././resources/images/grade_24.png" /> Consultar Notas</a></li>';
			}
?>
			</ul>
			</div>
		</div>
	</div>

<?php

		function isPrivilege($nameprivilege,$privileges)
		{
			for($i=0;$i<count($privileges);$i++)
			{
				$privilege=$privileges[$i];
				if($privilege->getName()==$nameprivilege)
				{
					return true;
				}
				
			}
			return false;
      		
		}
?>	