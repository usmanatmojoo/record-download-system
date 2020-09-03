<!DOCTYPE html>
<html lang="en">

<head>
	<title>Digilab</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<!-- Modal -->
	<!-- <div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal</p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->
 <!-- <img src="images/project-1.jpg" alt="" class="img-responsive" width="20px"> -->
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
	    <div class="modal-content">
		  <div class="modal-header">
        <h5 class="modal-title">Isi Data Diri untuk Download Brosur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <img class="card-img-top" src="./images/slide_4.jpg" alt="Card image cap"/>
				<form class="p-3 bg-white" method="post" action="simpan.php">
						<p>Form ini berguna untuk pendataan data diri sebelum melakukan download terhadap brosur dan
							juga sebagai tanda bukti kunjungan anda. Harap diisi dengan benar dan penuh tanggung jawab.
							Terima kasih.</p>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="name">Nama Lengkap</label>
								<input type="text" id="name" class="form-control rounded-0" name="nama" required>
							</div>
						</div>

						<div class="row form-group">

							<div class="col-md-12">
								<label class="text-black" for="email">Email</label>
								<input type="email" id="email" class="form-control rounded-0" name="email">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Alamat</label>
								<input type="text" id="subject" class="form-control rounded-0" name="alamat" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">No HP</label>
								<input type="number" id="subject" class="form-control rounded-0" name="no_hp">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Asal Sekolah</label>
								<input type="text" id="subject" class="form-control rounded-0" name="asal_sekolah" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Jurusan Sekolah</label>
								<input type="text" id="subject" class="form-control rounded-0" name="jurusan_sekolah" required>
							</div>
						</div>
						<!-- <div class="row form-group">
							<div class="col-md-12">
								<input type="submit" value="Submit" class="btn btn-primary mr-2 mb-2">
							</div>
						</div> -->
				</form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-info">Download Brosur</button>
      </div>
	    </div>
	  </div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
		id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Digi<span>Lab</span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#explore-section" class="nav-link"><span>Explore</span></a></li>
					<li class="nav-item"><a href="#gallery-section" class="nav-link"><span>Gallery</span></a></li>
					<li class="nav-item"><a href="#faq-section" class="nav-link"><span>FAQ</span></a></li>
					<li class="nav-item"><a href="#staff-section" class="nav-link"><span>Staff</span></a></li>
					<li class="nav-item"><a href="#brosur-section" class="nav-link"><span>Download Brosur</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="home-section" class="hero">
		<h3 class="vr">Welcome to DigiLab</h3>
		<div class="home-slider js-fullheight owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third order-md-last img js-fullheight"
							style="background-image:url(images/bg_1.jpg);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Welcome to the digilab</span>
								<h1 class="mb-4 mt-3">Small Details Make A Big <span>Impression</span></h1>
								<p>A small river named Duden flows by their place and supplies it with the necessary
									regelialia. It is a paradisematic country.</p>

								<p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third order-md-last img js-fullheight"
							style="background-image:url(images/bg_2.jpg);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Welcome to the digilab</span>
								<h1 class="mb-4 mt-3"><span>Strategic</span> Design And <span>Technology</span> Agency
								</h1>
								<p>A small river named Duden flows by their place and supplies it with the necessary
									regelialia. It is a paradisematic country.</p>

								<p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img d-flex align-self-stretch align-items-center"
						style="background-image:url(images/about.jpg);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">Welcome to digilab</span>
								<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">We Are Digital
									Agency</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary
									regelialia. It is a paradisematic country, in which roasted parts of sentences fly
									into your mouth.</p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
									unorthographic life One day however a small line of blind text by the name of Lorem
									Ipsum decided to leave for the far World of Grammar.</p>
								<p>A small river named Duden flows by their place and supplies it with the necessary
									regelialia. It is a paradisematic country, in which roasted parts of sentences fly
									into your mouth.</p>
							</div>
						</div>
						<div class="counter-wrap ftco-animate d-flex mt-md-3">
							<div class="text p-4 bg-primary">
								<p class="mb-0">
									<span class="number" data-number="20">0</span>
									<span>Years of experience</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light" id="explore-section">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-4 ftco-animate py-5 nav-link-wrap">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
							role="tab" aria-controls="v-pills-1" aria-selected="true"><span
								class="mr-3 flaticon-ideas"></span> Business Strategy</a>

						<a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
							aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span>
							Research</a>

						<a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
							aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span>
							Data Analysis</a>

						<a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
							aria-controls="v-pills-4" aria-selected="false"><span
								class="mr-3 flaticon-web-design"></span> UI Design</a>

						<a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
							aria-controls="v-pills-4" aria-selected="false"><span
								class="mr-3 flaticon-ux-design"></span> Ux Design</a>

						<a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
							aria-controls="v-pills-5" aria-selected="false"><span
								class="mr-3 flaticon-innovation"></span> Technology</a>

						<a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab"
							aria-controls="v-pills-6" aria-selected="false"><span class="mr-3 flaticon-idea"></span>
							Creative</a>
					</div>
				</div>
				<div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

					<div class="tab-content pl-md-5" id="v-pills-tabContent">

						<div class="tab-pane fade show active py-5" id="v-pills-1" role="tabpanel"
							aria-labelledby="v-pills-1-tab">
							<span class="icon mb-3 d-block flaticon-ideas"></span>
							<h2 class="mb-4">Business Strategy</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam
								sunt iste dolores consequatur</p>
							<p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
								facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
								exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.
							</p>
							<p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
							<span class="icon mb-3 d-block flaticon-flasks"></span>
							<h2 class="mb-4">Research</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam
								sunt iste dolores consequatur</p>
							<p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
								facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
								exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.
							</p>
							<p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
							<span class="icon mb-3 d-block flaticon-analysis"></span>
							<h2 class="mb-4">Data Analysis</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam
								sunt iste dolores consequatur</p>
							<p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
								facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
								exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.
							</p>
							<p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
							<span class="icon mb-3 d-block flaticon-web-design"></span>
							<h2 class="mb-4">UI Design</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam
								sunt iste dolores consequatur</p>
							<p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
								facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
								exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.
							</p>
							<p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
							<span class="icon mb-3 d-block flaticon-ux-design"></span>
							<h2 class="mb-4">Ux Design</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam
								sunt iste dolores consequatur</p>
							<p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
								facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
								exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.
							</p>
							<p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
							<span class="icon mb-3 d-block flaticon-innovation"></span>
							<h2 class="mb-4">Technology</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam
								sunt iste dolores consequatur</p>
							<p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
								facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
								exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.
							</p>
							<p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>

						<div class="tab-pane fade py-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
							<span class="icon mb-3 d-block flaticon-idea"></span>
							<h2 class="mb-4">Creative Solution</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam
								sunt iste dolores consequatur</p>
							<p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
								facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
								exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.
							</p>
							<p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section-2 img" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row d-md-flex justify-content-end">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<a href="#" class="services-wrap ftco-animate">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="ion-ios-arrow-back"></span>
									<span class="ion-ios-arrow-forward"></span>
								</div>
								<h2>Market Research</h2>
								<p>Even the all-powerful Pointing has no control about the blind.</p>
							</a>
							<a href="#" class="services-wrap ftco-animate">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="ion-ios-arrow-back"></span>
									<span class="ion-ios-arrow-forward"></span>
								</div>
								<h2>Financial Services</h2>
								<p>Even the all-powerful Pointing has no control about the blind.</p>
							</a>
							<a href="#" class="services-wrap ftco-animate">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="ion-ios-arrow-back"></span>
									<span class="ion-ios-arrow-forward"></span>
								</div>
								<h2>Online Marketing</h2>
								<p>Even the all-powerful Pointing has no control about the blind.</p>
							</a>
							<a href="#" class="services-wrap ftco-animate">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="ion-ios-arrow-back"></span>
									<span class="ion-ios-arrow-forward"></span>
								</div>
								<h2>24/7 Help &amp; Support</h2>
								<p>Even the all-powerful Pointing has no control about the blind.</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="ftco-section ftco-project bg-light" id="projects-section">
		<div class="container px-md-5">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Accomplishments</span>
					<h2 class="mb-4">Our Projects</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 testimonial">
					<div class="carousel-project owl-carousel">
						<div class="item">
							<div class="project">
								<div class="img">
									<img src="images/project-1.jpg" class="img-fluid" alt="Colorlib Template">
									<div class="text px-4">
										<h3><a href="#">Work Name</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="project">
								<div class="img">
									<img src="images/project-2.jpg" class="img-fluid" alt="Colorlib Template">
									<div class="text px-4">
										<h3><a href="#">Work Name</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="project">
								<div class="img">
									<img src="images/project-3.jpg" class="img-fluid" alt="Colorlib Template">
									<div class="text px-4">
										<h3><a href="#">Work Name</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="project">
								<div class="img">
									<img src="images/project-4.jpg" class="img-fluid" alt="Colorlib Template">
									<div class="text px-4">
										<h3><a href="#">Work Name</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="project">
								<div class="img">
									<img src="images/project-5.jpg" class="img-fluid" alt="Colorlib Template">
									<div class="text px-4">
										<h3><a href="#">Work Name</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="project">
								<div class="img">
									<img src="images/project-6.jpg" class="img-fluid" alt="Colorlib Template">
									<div class="text px-4">
										<h3><a href="#">Work Name</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section class="site-section" id="gallery-section">
		<!--  portfolio-section-->
		<div class="container">
			<div class="row mb-3">
				<div class="col-12 text-center" data-aos="fade">
					<h2 class="section-title mb-3">Gallery</h2>
				</div>
			</div>

			<div class="row justify-content-center mb-5" data-aos="fade-up">
				<div id="filters" class="filters text-center button-group col-md-7">
					<button class="btn btn-primary active" data-filter="*">All</button>
					<button class="btn btn-primary" data-filter=".web">Web</button>
					<button class="btn btn-primary" data-filter=".design">Design</button>
					<button class="btn btn-primary" data-filter=".brand">Brand</button>
				</div>
			</div>

			<div id="posts" class="row no-gutter">
				<div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_1.jpg">
					</a>
				</div>
				<div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_2.jpg">
					</a>
				</div>

				<div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_3.jpg">
					</a>
				</div>

				<div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">

					<a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_4.jpg">
					</a>

				</div>

				<div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_5.jpg">
					</a>
				</div>

				<div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_6.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_6.jpg">
					</a>
				</div>

				<div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_7.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_7.jpg">
					</a>
				</div>

				<div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_8.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_8.jpg">
					</a>
				</div>

				<div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_9.jpg">
					</a>
				</div>

				<div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_10.jpg">
					</a>
				</div>

				<div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_11.jpg">
					</a>
				</div>

				<div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_12.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_12.jpg">
					</a>
				</div>

				<div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
					<a href="images/img_13.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
						<span class="icon-search2"></span>
						<img class="img-fluid" src="images/img_13.jpg">
					</a>
				</div>

			</div>
		</div>
	</section>

	<!-- <section class="ftco-section bg-light" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Our Blog</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one mr-2">
									<span class="day">12</span>
								</div>
								<div class="two">
									<span class="yr">2019</span>
									<span class="mos">March</span>
								</div>
							</div>
							<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
							</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
											class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one mr-2">
									<span class="day">10</span>
								</div>
								<div class="two">
									<span class="yr">2019</span>
									<span class="mos">March</span>
								</div>
							</div>
							<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
							</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
											class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one mr-2">
									<span class="day">05</span>
								</div>
								<div class="two">
									<span class="yr">2019</span>
									<span class="mos">March</span>
								</div>
							</div>
							<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
							</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
											class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section class="ftco-section testimony-section ftco-no-pb" id="testimonial-section">
		<div class="img img-bg border" style="background-image: url(images/bg_5.jpg);"></div>
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-3">Kinds Words From Customers</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
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

	<section class="faq-section" id="faq-section">
		<div class="container">
			<h4 class="mt-5 mb-5 text-center">FAQ - FREQUENTLY ASKED QUESTIONS</h4>
			<div class="accordion">
				<div class="accordion-item" id="question1">
					<a class="accordion-link" href="#question1">
						Question 1 : Apakah saya perlu mengkonfirmasi pembayaran saya?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>Kamu tidak perlu mengkonfirmasi pembayaran yang kamu lakukan, system kami yang akan
							memverifikasi pembayaran kamu.</p>
					</div>
				</div>

				<div class="accordion-item" id="question2">
					<a class="accordion-link" href="#question2">
						Question 2 : Dapatkah saya mengirimkan pesanan saya kepada orang lain atau ke alamat yang
						berbeda?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>Ya, pesanan bisa dikirimkan ke alamat yang berbeda dari alamat penagihan. Setelah kamu
							memasukkan alamat penagihan sebelum checkout, kamu akan punya pilihan untuk memasukkan
							alamat pengiriman baru (berbeda dari alamat penagihan).</p>
					</div>
				</div>

				<div class="accordion-item" id="question3">
					<a class="accordion-link" href="#question3">
						Question 3 : Berapa lama barang pesanan saya sampai, termasuk pengepakan dan pengiriman?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>
							Kami berusaha sebaik mungkin untuk memproses pesanan dalam satu hari kerja. Untuk perkiraan
							waktu pengiriman, silakan lihat waktu di bawah ini:
							Metode pengiriman: pengiriman stkamur perkiraan kedatangan: 3 – 14 hari kerja.
							Allbrands Preloved menggunakan jasa pengiriman SiCepat untuk ekspedisi pengiriman dan kami
							mengikuti syarat dan ketentuan mereka untuk pengiriman.
						</p>
					</div>
				</div>

				<div class="accordion-item" id="question4">
					<a class="accordion-link" href="#question4">
						Question 4 : Bagaimana caranya memeriksa status pengiriman saya?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>Kamu dapat memeriksanya melalui email yang kami kirimkan. Klik “Lihat Status Pesanan Saya”,
							setelah itu kamu akan diarahkan ke halaman rekapan pesananmu. Kamu bisa melacak pesananmu
							dari nomor resi di halaman tersebut.</p>
					</div>
				</div>

				<div class="accordion-item" id="question5">
					<a class="accordion-link" href="#question5">
						Question 5 : Bagaimana jika barang yang saya pesan, saya terima dalam keadaan rusak?
						<i class="fa fa-plus"></i>
						<i class="fa fa-minus"></i>
					</a>
					<div class="answer">
						<p>Jika pesananmu kamu terima dalam keadaan rusak, kamu bisa menukarnya dengan yang baru ataupun
							melakukan refund. Jika kamu ingin menukar item yang kamu pesan, kamu bisa menghubungi kami
							melaui email di allbrandsgroup@gmail.com.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="staff-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-6 heading-section text-center ftco-animate">
					<h2 class="mb-4">Our Staff</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/staff-1.jpg);">
							</div>
						</div>
						<div class="text d-flex align-items-center pt-3 text-center">
							<div>
								<h3 class="mb-2">Lloyd Wilson</h3>
								<span class="position mb-4">CEO, Founder</span>
								<div class="faded">
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/staff-2.jpg);">
							</div>
						</div>
						<div class="text d-flex align-items-center pt-3 text-center">
							<div>
								<h3 class="mb-2">Rachel Parker</h3>
								<span class="position mb-4">Web Designer</span>
								<div class="faded">
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/staff-3.jpg);">
							</div>
						</div>
						<div class="text d-flex align-items-center pt-3 text-center">
							<div>
								<h3 class="mb-2">Ian Smith</h3>
								<span class="position mb-4">Web Developer</span>
								<div class="faded">
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/staff-4.jpg);">
							</div>
						</div>
						<div class="text d-flex align-items-center pt-3 text-center">
							<div>
								<h3 class="mb-2">Alicia Henderson</h3>
								<span class="position mb-4">Graphic Designer</span>
								<div class="faded">
									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
										</li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="site-section bg-image2 overlay" id="brosur-section" style="background-image: url('images/hero_3.jpg');">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12 text-center">
					<h2 class="section-title mb-3 text-white">Form Download Brosur</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-7 mb-5">
					<form class="p-5 bg-white" method="post" action="simpan.php">
						<h2 class="h4 text-black mb-5">Isi Data Diri</h2>
						<p>Form ini berguna untuk pendataan data diri sebelum melakukan download terhadap brosur dan
							juga sebagai tanda bukti kunjungan anda. Harap diisi dengan benar dan penuh tanggung jawab.
							Terima kasih.</p>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="name">Nama Lengkap</label>
								<input type="text" id="name" class="form-control rounded-0" name="nama" required>
							</div>
						</div>

						<div class="row form-group">

							<div class="col-md-12">
								<label class="text-black" for="email">Email</label>
								<input type="email" id="email" class="form-control rounded-0" name="email">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Alamat</label>
								<input type="text" id="subject" class="form-control rounded-0" name="alamat" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">No HP</label>
								<input type="number" id="subject" class="form-control rounded-0" name="no_hp">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Asal Sekolah</label>
								<input type="text" id="subject" class="form-control rounded-0" name="asal_sekolah" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="subject">Jurusan Sekolah</label>
								<input type="text" id="subject" class="form-control rounded-0" name="jurusan_sekolah" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" value="Download Brosur" class="btn btn-info mr-2 mb-2" style="float:right;">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer py-5 text-center">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<p class="mb-0">
						<a href="#" class="p-3"><span class="icon-facebook"></span></a>
						<a href="#" class="p-3"><span class="icon-twitter"></span></a>
						<a href="https://www.instagram.com/univmercubuana/" class="p-3"><span class="icon-instagram"></span></a>
						<a href="#" class="p-3"><span class="icon-linkedin"></span></a>
						<a href="https://api.whatsapp.com/send?phone=6285311321124&text=Halo%20Saya%20ingin%20bertanya%20tanya%20lebih%20lanjut%20dengan%20anda.%20Terima%20Kasih" class="p-3"><span class="icon-whatsapp"></span></a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-0">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart text-danger"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</div>
	</div> <!-- .site-wrap -->



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	$('#myModal').modal('show');
	</script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
	<!-- </script> -->
	<!-- <script src="js/google-map.js"></script> -->

	<script src="js/main.js"></script>

</body>
	<script src="js/main.js"></script>

</html>
