<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
	<!-- Font Awesome 4 -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Yamm3 -->
	<link rel="stylesheet" href="css/yamm.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
	
	.news-item {
    margin-bottom: 30px;
	}
	
	.white-space {
	margin-bottom: 50px;
	}
	
	.section-title {
	margin-bottom: 30px;
	}
	
	.news-text {
		font-size: 14px;
	}
	
	.agenda-items {
    margin: 1em 0 0;
	}
	
	.agenda-items li {
		border-bottom: 1px dotted #ccc;
		display: table;
		margin-bottom: 1em;
	}
	
	.agenda-items li:last-child {
		border: medium none;
		padding-bottom: 0;
	}
	
	.agenda-item-date {
		display: table-cell;
	}
	
	.agenda-item-detail {
		display: table-cell;
	}
	
	.agenda-item-title {
		font-size: 13px;
		font-weight: 600;
	}
	
	.agenda-item-date {
		text-align: center;
		vertical-align: middle;
		width: 75px;
	}
	
	.agenda-item-day {
		color: #888;
		display: block;
		font-size: 24px;
		margin-bottom: 0.25em;
	}
	
	.agenda-item-preview {
		color: #777;
		margin-bottom: 0;
	}
	
	.agenda-item-month {
		color: #888;
		display: block;
		font-size: 12px;
		font-weight: 600;
		padding-right: 1px;
	}
	
	.footer {
	  position: relative;
	  margin-top: -150px; /* negative value of footer height */
	  height: 150px;
	  clear:both;
	  padding-top:20px;
	} 
	</style>
  </head>
  <body>
	<div class="container">
		  <nav class="navbar navbar-toggleable-md navbar-light">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand my-auto" href="#"><img src="img/logo.png" width="150" height="100" class="img-responsive d-inline-block align-top"></a>
			<div class="collapse navbar-collapse flex-md-column" id="navbarCollapse">
				<ul class="navbar-nav ml-auto x-small list-inline">
					<li class="list-inline"><button class="btn"><i class="fa fa-twitter"></i></button></li>
					<li class="list-inline"><button class="btn"><i class="fa fa-facebook"></i></button></li>
					<li class="list-inline"><button class="btn"><i class="fa fa-youtube"></i></button></li>
				</ul>
				<ul class="navbar-nav ml-auto large">
				<li class="nav-item active">
						<a class="nav-link" href="#">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Akademik</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Admisi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Kontak</a>
					</li>
				</ul>
			</div>
		</nav>
		</div>
		
	<!-- Main Carousel -->
     <div id="mainCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mainCarousel" data-slide-to="1"></li>
			<li data-target="#mainCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
			  <img class="d-block img-fluid" width="100%" src="img/1400x875.png" alt="First slide">
			</div>
			<div class="carousel-item">
			  <img class="d-block img-fluid" width="100%" src="img/1400x875.png" alt="Second slide">
			</div>
			<div class="carousel-item">
			  <img class="d-block img-fluid" width="100%" src="img/1400x875.png" alt="Third slide">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
		<!-- News -->
		<div class="white-space">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-title"><h2>News</h2><hr /></div>
					
					<div class="row">
							<div class="col-lg-4 col-sm-6 news-item">
								<div class="card h-100">
									<a href="#"><img class="card-img-top img-fluid" src="img/700x400.png" alt=""></a>
									<div class="card-block">
										<h4 class="card-title"><a href="#">News One</a></h4>
										<p class="card-text news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 news-item">
								<div class="card h-100">
									<a href="#"><img class="card-img-top img-fluid" src="img/700x400.png" alt=""></a>
									<div class="card-block">
										<h4 class="card-title"><a href="#">News Two</a></h4>
										<p class="card-text news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 news-item">
								<div class="card h-100">
									<a href="#"><img class="card-img-top img-fluid" src="img/700x400.png" alt=""></a>
									<div class="card-block">
										<h4 class="card-title"><a href="#">News Three</a></h4>
										<p class="card-text news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 news-item">
								<div class="card h-100">
									<a href="#"><img class="card-img-top img-fluid" src="img/700x400.png" alt=""></a>
									<div class="card-block">
										<h4 class="card-title"><a href="#">News Four</a></h4>
										<p class="card-text news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 news-item">
								<div class="card h-100">
									<a href="#"><img class="card-img-top img-fluid" src="img/700x400.png" alt=""></a>
									<div class="card-block">
										<h4 class="card-title"><a href="#">News Five</a></h4>
										<p class="card-text news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 news-item">
								<div class="card h-100">
									<a href="#"><img class="card-img-top img-fluid" src="img/700x400.png" alt=""></a>
									<div class="card-block">
										<h4 class="card-title"><a href="#">News Six</a></h4>
										<p class="card-text news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
									</div>
								</div>
							</div>
						</div>
						<a href="#" class="float-right">Show All News..</a> 
					</div>
					<div class="col-lg-4">
						<h2>Agenda</h2><hr />
						 <div>
						  <ul class="agenda-items">
							<li>
							  <div class="agenda-item-date"> <span class="agenda-item-day">29</span> <span class="agenda-item-month">Aug</span> </div>
							  <div class="agenda-item-detail"> <a href="#" class="agenda-item-title"> Judul Agenda yang Pertama</a>
								<p class="agenda-item-preview">Klik Title untuk melihat lebih lengkap detail agenda yang akan berlangsung</p>
							  </div>
							</li>
							<li>
							  <div class="agenda-item-date"> <span class="agenda-item-day">15</span> <span class="agenda-item-month">Jun</span> </div>
							  <div class="agenda-item-detail"> <a href="#" class="agenda-item-title">Judul Agenda yang Kedua</a>
								<p class="agenda-item-preview">Klik Title untuk melihat lebih lengkap detail agenda yang akan berlangsung</p>
							  </div>
							</li>
							<li>
							  <div class="agenda-item-date"> <span class="agenda-item-day">29</span> <span class="agenda-item-month">Oct</span> </div>
							  <div class="agenda-item-detail"> <a href="#" class="agenda-item-title">Judul Agenda yang Ke-Tiga</a>
								<p class="agenda-item-preview"> Klik Title untuk melihat lebih lengkap detail agenda yang akan berlangsung</p>
							  </div>
							</li>
							<li>
							  <div class="agenda-item-date"> <span class="agenda-item-day">15</span> <span class="agenda-item-month">Oct</span> </div>
							  <div class="agenda-item-detail"> <a href="#" class="agenda-item-title">Judul Agenda yang Ke-Empat</a>
								<p class="agenda-item-preview"> Klik Title untuk melihat lebih lengkap detail agenda yang akan berlangsung</p>
							  </div>
							</li>
							<li>
							  <div class="agenda-item-date"> <span class="agenda-item-day">11</span> <span class="agenda-item-month">Nov</span> </div>
							  <div class="agenda-item-detail"> <a href="#" class="agenda-item-title">Judul Agenda yang Ke-Lima</a>
								<p class="agenda-item-preview"> Klik Title untuk melihat lebih lengkap detail agenda yang akan berlangsung</p>
							  </div>
							</li>
						  </ul>
						</div>
						<div class="white-space"></div>
						<a href="#" class="float-right">Show All Agenda..</a> 
					</div>
				</div>
			</div>
        <!-- /.row -->
		    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; UPSI UKI 2017</p>
        </div>
        <!-- /.container -->
    </footer>
		
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery.js"></script>
    <script src="js/tether.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>