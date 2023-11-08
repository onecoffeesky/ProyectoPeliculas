<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>




</head>

<body>
	<section id="header" class="clearfix">

		<div class="col-sm-12 header clearfix">
			<div class="col-sm-3 header_left clearfix">
				<div class="col-sm-12 header_left_1 clearfix">
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle editor" data-toggle="dropdown"><i
									class="fa fa-pencil"></i></a>
							<ul class="dropdown-menu">
								<li>
									<div class="navbar-content">
										<div class="row">
											<div class="col-sm-12 changer clearfix">
												<p>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris
													massa.</p>
												<ul>
													<li class="changer_inner_1"><a href="#"><i
																class="fa fa-facebook"></i></a></li>
													<li class="changer_inner_2"><a href="#"><i
																class="fa fa-twitter"></i></a></li>
													<li class="changer_inner_3"><a href="#"><i
																class="fa fa-instagram"></i></a></li>
													<li class="changer_inner_4"><a href="#"><i
																class="fa fa-youtube"></i></a></li>
												</ul>
											</div>

										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9 header_right clearfix">
				<div class="col-sm-12 header_right_1 clearfix">
					<div class="navbar navbar-static-top" role="navigation">
						<div class="navbar-header clearfix">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
									class="icon-bar"></span><span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html">MOVIES MAGIC</a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right clearfix">
								<li><a href="index.html">Home</a></li>
								<li class="active_1"><a href="about.html">About Us</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="details.html">Details</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li class="dropdown"><a href="#" class="dropdown-toggle people"
										data-toggle="dropdown"><i class="fa fa-user"></i></a>
									<ul class="dropdown-menu">
										<li>
											<div class="navbar-content">
												<div class="row">
													<div class="col-sm-5">
														<img src="img/55.jpg" alt="Alternate Text"
															class="img-responsive">
														<p class="text-center small">
															<a href="#">Change Photo</a>
														</p>
													</div>
													<div class="col-sm-7">
														<span>Kamlesh Singh</span>
														<p class="text-muted small">
															info@gmail.com</p>
														<div class="divider">
														</div>
														<a href="#" class="btn btn-primary btn-sm active">View
															Profile</a>
													</div>
												</div>
											</div>
											<div class="navbar-footer">
												<div class="navbar-footer-content">
													<div class="row">
														<div class="col-sm-6">
															<a href="#" class="btn btn-default btn-sm">Change
																Passowrd</a>
														</div>
														<div class="col-sm-6">
															<a href="#" class="btn btn-default btn-sm pull-right">Sign
																Out</a>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="top" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 top_head clearfix">
					<div class="top clearfix">
						<div class="col-sm-12 top_1 clearix">
							<div class="col-sm-9 top_1_left clearfix padding_left_1">
								<div class="top_1_left_inner clearfix">
									<h2><a href="index.html"><span class="movie_1">M</span>OVIES MAGIC</a></h2>
								</div>
							</div>
							<div class="col-sm-3 top_1_right clearfix padding_right_1">
								<div class="top_1_right_inner clearfix">
									<div class="col-sm-12 top_1_right_inner_top clearfix">
										<div class="input-group col-sm-12">
											<p><input type="text" class="search-query form-control form-control_1"
													placeholder="Search..."></p>
											<span class="input-group-btn">
												<button class="btn btn-danger" type="button">
													<span class=" glyphicon glyphicon-search"></span>
												</button>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 about clearfix">
							<div class="about_inner clearfix">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>
										<p>|</p>
									</li>
									<li>
										<h5>About</h5>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 about_1 clearfix">
							<div class="about_1_inner clearfix">
								<h1>LOREM IPSUM DOLOR SIT</h1>
							</div>
							<?php
							// Conectarse a la base de datos (reemplaza con tus credenciales)
							$servername = "localhost";
							$username = "root";
							$password = "";
							$database = "movies";


							$conn = new mysqli($servername, $username, $password, $database);

							// Verificar la conexión
							if ($conn->connect_error) {
								die("Error de conexión: " . $conn->connect_error);
							}

							// Consulta SQL para obtener los datos de las películas
							$sql = "SELECT * FROM movies";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// Mostrar los datos de cada película en las cards
								$i = 1;
								while ($row = $result->fetch_assoc()) {
									echo '<div class="col-sm-6 about_1_left padding_all">';
									echo '<div class="col-sm-12 about_1_left_top padding_all">';
									echo '<div class="col-sm-6 about_1_left_top_left clearfix">';
									echo '<div class="about_1_left_top_left_inner clearfix">';
									echo '<h3>' . $row['moviename'] . '</h3>';
									echo '<p>' . $row['description'] . '</p>';
									echo '</div>';
									echo '</div>';
									echo '<div class="col-sm-6 about_1_left_top_right clearfix">';
									echo '<div class="about_1_left_top_right_inner clearfix">';
									echo '<div class="ih-item square effect13 left_to_right"><a href="#">';
									echo '<div class="img"><img src="' . $row['url'] . '" alt="img"></div>';
									echo '<div class="info">';

									echo '</div>';
									echo '</a></div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';

									$i++;
									if ($i > 4) {
										break; // Mostrar solo las primeras 4 películas
									}
								}
							} else {
								echo "No se encontraron películas en la base de datos.";
							}

							// Cerrar la conexión a la base de datos
							$conn->close();
							?>
							<div class="col-sm-6 about_1_left padding_all">
								<div class="col-sm-12 about_1_left_top padding_all">
									<div class="col-sm-6 about_1_left_top_left clearfix">
										<div class="about_1_left_top_left_inner clearfix">
											<h3>Quis sem at nibh elementum</h3>
											<p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis Class aptent taciti
												sociosqu ad litora torquent per conubia nostra, per inceptos C.
												Curabitursodales ligula in libero.</p>
										</div>
									</div>
									<div class="col-sm-6 about_1_left_top_right clearfix">
										<div class="about_1_left_top_right_inner clearfix">
											<div class="ih-item square effect13 left_to_right"><a href="#">
													<div class="img"><img src="img/37.jpg" alt="img"></div>
													<div class="info">
														<h3>Lacinia arcu</h3>
														<p>Dignissim lacinia nunc</p>
													</div>
												</a></div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="footer" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 footer clearfix">
					<p>� 2013 Your Website Name. All rights reserved | Design by <a href="#">TemplateOnWeb</a></p>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {

			$('#myCarousel').carousel({
				interval: 5000
			});

			$('#carousel-text').html($('#slide-content-0').html());

			//Handles the carousel thumbnails
			$('[id^=carousel-selector-]').click(function () {
				var id_selector = $(this).attr("id");
				var id = id_selector.substr(id_selector.length - 1);
				var id = parseInt(id);
				$('#myCarousel').carousel(id);
			});


			// When the carousel slides, auto update the text
			$('#myCarousel').on('slid', function (e) {
				var id = $('.item.active').data('slide-number');
				$('#carousel-text').html($('#slide-content-' + id).html());
			});
		});
	</script>
</body>

</html>