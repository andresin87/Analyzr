<!-- mp-menu -->
<nav id="mp-menu" class="mp-menu">
	<div class="mp-level">
		<h2 class="icon icon-world">MENU</h2>

		<ul>
			<li class="icon">
				<a class="fa fa-margin fa-home" href="/project">Inicio</a>
			</li>
			<li class="icon icon-arrow-left">
				<a class="fa fa-margin fa-gear" href="#">Controles</a>
				<div class="mp-level">
					<h2>Controles</h2>
					<a class="mp-back" href="#">Volver</a>
					<ul>
						<li class="icon">
							<a class="fa fa-margin fa-angle-left on fa-square-o margin-r-1px" onclick="goBack()">Atrás</a>
						</li>
						<li class="icon">
							<a class="fa fa-margin fa-angle-right margin-r-1px" onclick="goForward()">Adelante</a>
						</li>
						<li class="icon">
							<a class="fa fa-margin fa-undo" onclick="document.location.reload(true)">Refresca</a>
						</li>
						<li class="refresh_timer">
						<div class="refresh_timer font-08em" style="padding-top: 11px; text-align: right;">
								<i class="fa fa-refresh fa-spin "></i>
								<span id="refresh_timer"></span> segundos para actualización.
							</div>
						</li>
					</ul>
				</div>
			</li>
			<?php if(!Authentication::IsLogged()):?>
				<li class="icon">
					<a class="fa fa-margin fa-unlock-alt" href="/project/auth/login.php">Iniciar sesión</a>
				</li>
				<li class="icon">
					<a class="fa fa-margin fa-sign-in" href="/project/auth/signup.php">Registro</a>
				</li>
				<li class="icon">
					<a class="fa fa-margin fa-info-circle" href="/project/info.php">Información</a>
				</li>
			<?php else: $user = Session::Get("current_user"); ?>
			<?
				if($user->IsAdmin()){
			?>
				<li class="icon icon-arrow-left">
					<a class="fa fa-margin fa-gears" href="#">Admin</a>
					<div class="mp-level">
						<h2 class="icon icon-display">Administración</h2>
						<a class="mp-back" href="#">Atrás</a>
						<ul>
							<li class="icon">
								<a class="fa fa-margin fa-users" href="/project/admin/">Usuarios</a>
							</li>
							<li class="icon">
								<a class="fa fa-margin fa-plus" href="/project/admin/?page=adduser">Añadir Usuario</a>
							</li>
							<li class="icon">
								<a class="fa fa-margin fa-envelope-o" href="/project/admin/?page=sendmail">Redactar mail</a>
							</li>
						</ul>
					</div>
				</li>
			<?php
				}
			?>
				<li class="icon icon-arrow-left">
					<a class="fa fa-margin fa-user" href="#">Usuario</a>
					<div class="mp-level">
						<h2 class="icon icon-news">Usuario</h2>
						<a class="mp-back" href="#">Atrás</a>
						<ul>
							<li><a href="/project/user/settings.php">Configuración</a></li>
						</ul>
					</div>
				</li>
				<li class="icon icon-arrow-left">
					<a class="fa fa-margin fa-dashboard" href="#">Panel de control</a>
					<div class="mp-level">
						<h2 class="icon icon-news">Panel de control</h2>
						<a class="mp-back" href="#">Atrás</a>
						<ul>
							<?php
								if(isset($_GET['page'])&&$global_page=='traffic'){
							?>
								<li class="icon icon-arrow-left">
									<a class="fa fa-margin fa-globe" href="#">Rediris Traffic WeatherMap</a>
									<div class="mp-level">
										<h2 class="icon icon-news">Rediris Traffic WeatherMap</h2>
										<a class="mp-back" href="#">Atrás</a>
										<ul>											
											<li id="redirismapTrafficMenuSelector" class="redirismap traffic menu"><a>Lineas de tráfico</a></li>
											<li id="redirismapCellsMenuSelector" class="redirismap cells menu"><a>Celdas</a></li>
										</ul>
									</div>
								</li>
							<?php
								}
								else{
							?>
								<li><a class="fa fa-margin fa-globe" href="/project/templates/?page=traffic">Rediris Traffic Map</a></li>
							<?php
								}
							?>
							<?php
								if(isset($_GET['page'])&&$global_page=='matrix'){
							?>
								<li class="icon icon-arrow-left">
									<a class="fa fa-margin fa-th" href="#">Matriz de Tráfico Rediris</a>
									<div class="mp-level">
										<h2 class="icon icon-news">Matriz de Tráfico Rediris</h2>
										<a class="mp-back" href="#">Atrás</a>
										<ul>											
											<li id="redirismapTrafficMenuSelector" class="redirismap traffic menu"><a>XX</a></li>
											<li id="redirismapCellsMenuSelector" class="redirismap cells menu"><a>XX</a></li>
										</ul>
									</div>
								</li>
							<?php
								}
								else{
							?>
								<li><a class="fa fa-margin fa-th" href="/project/templates/?page=matrix">Rediris Traffic Matrix</a></li>
							<?php
								}
							?>
						</ul>
					</div>
				</li>
				<li class="icon">
					<a class="fa fa-margin fa-info-circle" href="/project/info.php">Información</a>
				</li>
				<li class="icon">
					<a class="fa fa-margin fa-sign-out" href="/project/auth/logout.php">Cerrar sesión</a>
				</li>
				
			<?php endif; ?>
		</ul>
			
	</div>
</nav>
<script type="text/javascript">		
	var millisec = 0;
	var seconds = 60;
	var timer;
	
	function start(){
	
	  if (millisec==0){
	     millisec=9;
	     seconds-=1;
	     if(seconds==0){	//refresh ajax aqui
		     seconds=60;
	     }
	  }
	  
	  else
	     millisec-=1;
	  var s = document.getElementById('refresh_timer');
	     
	  s.innerHTML = seconds + "." + millisec;
	  timer = setTimeout("start()",100);
	}
	window.onload = start();
</script>
<!-- /mp-menu -->