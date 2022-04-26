<!doctype html>
<html lang="en">

<head>
	<!--========== Required meta tags ==========-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--========== Bootstrap CSS ==========-->
	<link rel="stylesheet" href="<?php echo base_url('assets/Bootstrap/css/bootstrap.min.css') ?>">

	<!--========== Poppins Font ==========-->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<!--========== CSS ==========-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styleIndex.css') ?>">

	<!--========== Favicon ==========-->
	<link rel="icon" type="image/x-item" href="https://id.top10place.com/img_files/410213025684784">

	<!--========== Title ==========-->
	<title>Klinik Fitria</title>

</head>

<body>
	<!--========== NAVBAR ==========-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url('assets/img/logo/logo.jpg') ?>" alt="Logo Klinik Fitria"
					class="img-fluid">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active mx-1" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-1" href="#">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-1" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-1" href="#">Link</a>
					</li>
				</ul>
				<a href="<?php echo base_url('register') ?>" class="btn bg-light px-3 text-mute mx-1">Daftar</a>
				<a href="<?php echo base_url('login') ?>" class="btn btn-primary px-3 mx-1">Masuk</a>
			</div>
		</div>
	</nav>
	<!--========== END OF NAVBAR ==========-->

	<!--========== MAIN CONTENT ==========-->
	<main class="main">

		<!--========== HERO SECTION ==========-->
		<section class="hero">
			<div class="container">
				<div class="row h-100">
					<div class="col-6 d-flex flex-column justify-content-center">
						<h1 class="fw-bolder">KLINIK FITRIA</h1>
						<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quia vel, repudiandae
							necessitatibus quos assumenda obcaecati molestiae eaque incidunt omnis illum praesentium,
							voluptate fugiat.
						</h5>
						<span><a href="#about" class="btn bg-light px-3 mt-4 fw-bold">Discover more</a></span>
					</div>
					<div class="col-6 d-flex flex-column justify-content-center">
						<img src="assets/wpa.gif" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#0099ff" fill-opacity="1" d="M0,96L1440,256L1440,0L0,0Z"></path>
		</svg>
		<!--========== END OF HERO SECTION ==========-->

		<section class="about mt-5 pt-5" id="about">
			<div class="container h-100">
				<div class="row h-100 gx-5">
					<div class="col-6 d-flex flex-column justify-content-center">
						<img src="https://media.istockphoto.com/photos/its-our-aim-to-get-you-to-optimum-health-picture-id1304125415?b=1&k=20&m=1304125415&s=170667a&w=0&h=3bUCiYdM8jJu9MQKpn87RCih8pwSA92NzdESYFuT3mo="
							alt="About Klinik Fitria" class="img-fluid p-5">
					</div>
					<div class="col-6 d-flex flex-column justify-content-center">
						<h2>Tentang Kami</h2>
						<p>
							Klinik Fitira adalah Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto
							ab, tenetur repellendus corrupti exercitationem expedita quasi fugit excepturi obcaecati
							nihil in, qui ratione, officia sint illum consectetur iusto. Odit, mollitia!
						</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quod excepturi blanditiis est
							laboriosam mollitia! Ad nisi quibusdam deleniti, nostrum ipsam, accusantium reiciendis
							dolorum dolore error, architecto sit nihil maiores? Vel quae error natus accusantium!
						</p>
						<span><a href="#about" class="btn btn-primary px-3 mt-4 fw-bold">About Klinik Fitria</a></span>
					</div>
				</div>
			</div>
		</section>
		<section class="film">
			<div class="container p-5">
				<div class="row p-5">
					<div class="col p-5 bg-warning shadow shadow-lg">
						<iframe width="100%" height="500" src="https://www.youtube.com/embed/1RwrSEMei8g"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
		<section class="about">
			<div class="container h-100">
				<div class="row h-100 d-flex align-items-center">
					<div class="col-xl-4 mb-3">
						<div class="card">
							<div class="card-header py-3">
								<h5 class="text-center"><strong>Keunggulan 1</strong></h5>
							</div>
							<div class="card-body">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header py-3">
								<h5 class="text-center"><strong>Keunggulan 2</strong></h5>
							</div>
							<div class="card-body">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header py-3">
								<h5 class="text-center"><strong>Keunggulan 3</strong></h5>
							</div>
							<div class="card-body">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel neque laboriosam
								assumenda inventore sint dolorum exercitationem repellendus, laborum sunt quidem
								distinctio, dolore maiores laudantium. Dicta facere culpa ex tenetur!
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#0099ff" fill-opacity="1" d="M0,64L1440,192L1440,320L0,320Z"></path>
	</svg>
	<footer class="footer text-light">
		<div class="container pt-3">
			<div class="row gx-5">
				<div class="col-4">
					<img src="<?php echo base_url("assets/img/logo/logo.jpg") ?>" alt="Logo" class="img-fluid">
				</div>
				<div class="col-8">
					<div class="input-email">
						<input type="email" name="email" class="form-control py-2 ps-4"
							placeholder="Tuliskan email anda!">
						<a href="" class="btn btn-primary btn-email px-5 py-2">Kirim Email</a>
					</div>
					<div class="row mt-4">
						<div class="col-6">
							<nav class="d-flex flex-column text-end mt-5">
								<h5>Home</h5>
								<h5>Tentang Kami</h5>
								<h5>Blog</h5>
								<h5>Contact</h5>
							</nav>
						</div>
						<div class="col-6">
							<nav class="d-flex flex-column text-end mt-5">
								<h5>Sepanjang jalan kenangan</h5>
								<h5>Kota Solo</h5>
								<h5>46258</h5>
								<h5>Indonesia</h5>
							</nav>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col">
							<hr>
							<h5 class="text-end">&copy Klinik Fitria 2022</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-xl-6 col-md-6 col-sm-12">
					<a href="#">
						<img src="https://id.top10place.com/img_files/410213025684784" alt="" class="w-25">
					</a>
				</div>
				<div class="col-xl-6 col-md-6 col-sm-12">
					<nav class="d-flex flex-column text-end">
						<p>Sepanjang jalan kenangan</p>
						<p>Kota Solo</p>
						<p>46258</p>
						<p>Indonesia</p>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<h5>&copy Klinik Fitria</h5>
				</div>
			</div> -->
		</div>
	</footer>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		const navbar = document.querySelector('.navbar');
		window.onscroll = () => {
			if (window.scrollY > 300) {
				navbar.classList.add('active');
			} else {
				navbar.classList.remove('active');
			}
		};

	</script>

</body>

</html>
