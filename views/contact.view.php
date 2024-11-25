<?php
include __DIR__ .'/partials/inicio-doc.part.php';
?>

<?php
include __DIR__ .'/partials/nav.part.php';
?>

<!-- Principal Content Start -->
<div id="contact">
	<div class="container">
		<div class="col-xs-12 col-sm-8 col-sm-push-2">
			<h1>CONTACT US</h1>
			<hr>
			<p>Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>

			<?php
			// Comprueba si el array de errores esta vacio
			if (!empty($mostrarErrores)) {
				echo "<div class='alert alert-danger'>";
				// Recorre el array con los strings guardados
				foreach ($mostrarErrores as $error) {
					echo "<li> $error ";
				}
				echo "</div>";
			}
			//Comprueba si el array con los datos de los campos del formulario esta vacio
			if(!empty($mostrarDatos)) {
				echo "<div class='alert alert-info'>";
				//Recorre el array con los strings guardados 
				foreach ($mostrarDatos as $dato) {
					echo "<li> $dato ";
				}
				echo "</div>";
			}
			
			?>

			<form class="form-horizontal" method="post">
				<div class="form-group">
					<div class="col-xs-6">
						<label class="label-control">First Name</label>
						<input class="form-control" type="text" name="nombre" value="<?php echo isset($nombre) ? htmlspecialchars($nombre) : ''; ?>">
						<!--Guardando en el value el valor ingresado previamente del nombre y  se muestra hasta que se envie-->
						
					</div>
					<div class="col-xs-6">
						<label class="label-control">Last Name</label>
						<input class="form-control" type="text" name="apellido" value="<?php echo isset($apellido) ? htmlspecialchars($apellido) : ''; ?>">
						<!--Guardando en el value el valor ingresado previamente del apellido y  se muestra hasta que se envie-->
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<label class="label-control">Email</label>
						<input class="form-control" type="text" name="email"  value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
						<!--Guardando en el value el valor ingresado previamente del email y  se muestra hasta que se envie-->
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<label class="label-control">Subject</label>
						<input class="form-control" type="text" name="subject" value="<?php echo isset($subject) ? htmlspecialchars($subject) : ''; ?>">
						<!--Guardando en el value el valor ingresado previamente del subject y  se muestra hasta que se envie-->
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<label class="label-control">Message</label>
						<textarea class="form-control" name="texto"><?php echo isset($texto) ? htmlspecialchars($texto) : ''; ?></textarea>
						<!--Guardando en el value el valor ingresado previamente del texto y  se muestra hasta que se envie-->
						<button class="pull-right btn btn-lg sr-button">SEND</button>
					</div>
				</div>
			</form>
			<hr class="divider">
			<div class="address">
				<h3>GET IN TOUCH</h3>
				<hr>
				<p>Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero.</p>
				<div class="ending text-center">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-facebook sr-icons"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-twitter sr-icons"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-google-plus sr-icons"></i></a>
						</li>
					</ul>
					<ul class="list-inline contact">
						<li class="footer-number"><i class="fa fa-phone sr-icons"></i> (00228)92229954 </li>
						<li><i class="fa fa-envelope sr-icons"></i> kouvenceslas93@gmail.com</li>
					</ul>
					<p>Photography Fanatic Template &copy; 2017</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Principal Content Start -->

<?php
include __DIR__ . '/partials/fin-doc.part.php';
?>