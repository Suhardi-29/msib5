<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					 <small></small>
				</h1>
			</div>
			<nav class="menu">
				<ul>
				  <li><a href="#">Home</a></li>
				  <li><a href="#About">About</a></li>
				  <li><a href="#contact">Contact</a></li>
				
					</div>
				</li>
			</ul>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-240107">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-240107">
					</li>
					<li data-slide-to="1" data-target="#carousel-240107">
					</li>
					<li data-slide-to="2" data-target="#carousel-240107" class="active">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="img/me5.jpg">
						<div class="carousel-caption">
							<h4>
								Hobby
							</h4>
							<p>
								Saya Mempunyai Hobby Goes.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/me3.jpg">
						<div class="carousel-caption">
							<h4>
								Motivasi
							</h4>
							<p>
								saya Selalu mencoba Untuk Membiasakan diri membaca buku, Karna Untuk Mengetahui dunia kita perlu banyak membaca .
							</p>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/me4.jpg">
						<div class="carousel-caption">
							<h4>
								Keseharian Saya
							</h4>
							<p>
								Selesai Pulang Kuliah Biasanya Saya membantu Orang tua untuk mencangkul disawah
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-240107" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-240107" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
	<br>
	<h2 style="text-align: center;">About</h2>
	<br>
	<div class="row"; style="background-color: rgb(73, 79, 65);">
	<!-- About Me -->
    <section class="About" id="About">

        <div class="row">
            <div class="info">
                <h3><span> Name : </span> Suhardi </h3>
                <h3><span> Age : </span> 22 </h3>
                <h3><span> qualification : </span> Universitas Hamzanwadi </h3>
                <h3><span> Post : </span> Front End Developer </h3>
                <h3><span> language : </span> Indonesian </h3>
                <!-- <a href="img/Izzu  Firdaus.pdf" download><button class="btn-send"> download CV</button></a> -->
            </div>
			<section class="education" id="education">
				<h3 style="text-align: center; background-color: yellowgreen;"> Pendidikan</h3>
		
				<div class="box-container">
					<!-- <div class="box">
						<i class="fas fa-graduation-cap"></i>
						<span>2020</span>
						<h3>Front End Developer</h3>
						<p>Saya lulus dari WEARNES EDUCATION CENTER BALI pada 27 Agustsus 2022</p>
					</div> -->
					<div class="box">
						<i class="fas fa-graduation-cap"></i>
						<span>2020</span>
						<p>Saya lulus dari MA Nurul Mukhlishin NWDI pada 20 April 2020</p>
					</div>
					<div class="box">
						<i class="fas fa-graduation-cap"></i>
						<span>2017</span>
						<p>Saya lulus dari MTS AL-Hamidiyah NWDI pada 12 april 2017</p>
					</div>
					<div class="box">
						<i class="fas fa-graduation-cap"></i>
						<span>2014</span>
						<p>Saya lulus dari SDN 1 Pusuk Lestari pada 14 April 2014</p>
					</div>
				</div>
			</section>
			<!-- Akhir Education -->
		
            <div class="counter">

                <div class="box">
                    <span>2+</span>
                    <h3>years of Experience</h3>
                </div>
                <div class="box">
                    <span>100+</span>
                    <h3>Project Completed</h3>
                </div>
                <div class="box">
                    <span>450+</span>
                    <h3>Happy Client</h3>
                </div>
                <div class="box">
                    <span>12+</span>
                    <h3>Award won</h3>
                </div>
            </div>
        </div>
    </section>
			</p>
		</div>
	</div>
	<br>
	<br>
	<!-- contact -->
    <section class="contact" id="contact">
		<div class="row"; style="background-color: rgb(73, 79, 65);">
        <h1 style="text-align: center;">Contact <span>Me</span></h1>

        <div class="row">

            <div class="content">

                <h3 class="title">Contact Info</h3>
<?php 
$nama = 'Suhardi';
$alamat = 'Pusuk Lrstari';
$email = 'wwardy95@gmail.com';
$tlpn = '085237895912';
?>
<div>
<ul class= "card-body" style="width: 250px;">
<li class="list-grup-item"><?=$nama; ?></li>
<li class="list-grup-item"><?=$alamat; ?></li>
<li class="list-grup-item"><?=$email; ?></li>
<li class="list-grup-item"><?=$tlpn; ?></li>
 </ul>
 </div>
            </div>
            
            <form name="submit-to-google-sheet">
                <div class="alert alert-warning alert-dismissible fade show d-none myalert" role="alert">
                    <strong>Thank You !</strong> Pesan Anda sudah kami terima.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
                <input type="text" placeholder="name" class="box" name="name" required>
                <input type="email" placeholder="email" class="box" name="email" required>
                <input type="text" placeholder="project" class="box" name="project" required>
                <textarea name="message" id="" cols="30" rows="10" placeholder="message" class="box message" required></textarea>

                <button type="submit" class="btn-send">Send <i class="fas fa-paper-plane"></i></button>

                <div class="spinner-border btn-loading d-none" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </form>

        </div>
    </section>
    <!-- Akhir Contact -->
	<div class="row">
		<div class="col-md-8">
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>