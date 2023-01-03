<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- title of site -->
        <title>Zahida Painting</title>


        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('assets/logo/favicon.png')}}"/>
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

        <!--linear icon css-->
		<link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('assets/css/bootsnav.css')}}" >

        <!--style.css-->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->


        <!--checkout-->
        <link href="{{asset('icofont/icofont.min.css')}}" rel="stylesheet">


</head>

        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">
					<!-- .item -->
							<div class="container">
								<!-- gambar -->
										<div class="col-sm-7">
								<!-- /gambar -->
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>Tentang kami</h4>
													<h2>Zahida Painting</h2>
													<p>
													Zahida didirikan mulai tanggal 27 November 2007, Zahida sendiri bergerak dibidang fashion Lukis, bermula dari hobby melukis yang kemudian dikreasikan di lukisan dengan media kain, sehingga menciptakan sebuah fashion yang indah dengan sentuhan lukisan tangan atau handmade.
													</p>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#new-arrivals'">
														Lihat Katalog
													</button>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/slider/slider1.png" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">

				                <ul>
				                	<li >
                                        <a href="{{ route('login') }}">Login</a>
				                	</li><!--/.search-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="#home">Zahida Painting</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class="scroll active"><a href="#home">Tentang Kami</a></li>
				                    <li class="scroll"><a href="#new-arrivals">Katalog</a></li>
									<li class="scroll"><a href="#sofa-collection">Pelatihan</a></li>
				                    <li class="scroll"><a href="#contact">Kontak</a></li>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->


		</section><!--/.populer-products-->
		<!--populer-products end-->

		<!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Produk Kami</h2>
                </br></br></br>
                    @foreach($products->chunk(4) as $chunk)

                    <div class="row">

                            <!-- Produk -->
                            @foreach ($chunk as $produk)

                        <div class="col-md-3 col-sm-4">
                            <div class="single-new-arrival" >
                                <div class="single-new-arrival-bg" >
                                    <img src="{{asset('storage/img/'.$produk->image1)}}"  alt="new-arrivals images"/>
                                    <div class="single-new-arrival-bg-overlay"></div>
                                    <div class="sale bg-1">
                                        <p>Sale</p>
                                    </div>
                                    <div class="new-arrival-cart">

                                        <p style="margin-left: 10px;">

                                            <span class="lnr lnr-frame-expand"></span>
                                            <a href="{{ route('detailproduk', $produk->id) }}">Show</a>
                                        </p>

                                    </div>
                                </div>
                                <h4><a href="{{ route('detailproduk', $produk->id) }}">{{ $produk->name }}</a></h4>
                                <p class="arrival-product-price">{{ currency_IDR($produk->price) }}</p>
                            </div>
                        </div>

                        @endforeach


                             <!-- Produk -->

                    </div>
                    @endforeach

				</div>
			</div><!--/.container-->

		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->

		<!--sofa-collection start -->
		<section id="sofa-collection">
				<div class="sofa-collection collectionbg1">
					<div class="container">
						<div class="sofa-collection-txt">
							<h2>Pelatihan Painting</h2>
							<p>
								With a good sofa, it’s like a good dress or suit. It must appeal to you and in the end it has to fit you well, not too small, not too big. Therfore, UNLIMITED is available in so many sizes and designs. To fit you and your home.								</p>
							<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#new-arrivals'">
								info Pelatihan
							</button>
						</div>
					</div>
				</div><!--/.sofa-collection-->
				
		</section><br><!--/.sofa-collection-->
		<!--sofa-collection end -->



		<!--newsletter strat -->

        <section id="contact" class="contact">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Konta Kami</h2>
                <p>Lokasi Galeri Zahida Painting</p>
              </div>

              <div class="row no-gutters justify-content-center" data-aos="fade-up">

                <div class="col-lg-6 d-flex align-items-stretch">
                  <div class="info">
                    <div class="address">
                      <i class="icofont-google-map"></i>
                      <h4>Location:</h4>
                      <p>Jl. Kh. Mansyur No.58, Ledok Kulon Tiga, Ledok Wetan, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62112</p>
                    </div>

                    <div class="email mt-4">
                      <i class="icofont-envelope"></i>
                      <h4>Email:</h4>
                      <p>zahidapainting01@gmail.com</p>
                    </div>

                    <div class="phone mt-4">
                      <i class="icofont-phone"></i>
                      <h4>Whatsapp:</h4>
                      <p>082111128648</p>
                    </div>

                </div>

                </div>

                <div class="col-lg-6 d-flex align-items-stretch">
                  <iframe style="border:0; width: 100%; height: 320px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15835.31445568961!2d111.8779586!3d-7.1458074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77821f21074933%3A0x8c0c6aa573298ba1!2sZahida!5e0!3m2!1sid!2sid!4v1668341983623!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>

                </div>

            </div>
          </section><!-- End Contact Section -->
		<!--newsletter end -->


		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
				<div class="footer-social">
						<a href="https://www.facebook.com/kmsejahtera20"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/kms.interior.property/"><i class="fa fa-instagram"></i></a>
						<a href="https://api.whatsapp.com/send?phone=+62%20821-3112-5123&text=Saya%20ingin%20order/berkonsultasi%20di%20Karyamuda%20sejahtera"><i class="fa fa-whatsapp"></i></a>
						<a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=yudhaerian111@gmail.com"><i class="fa fa-envelope"></i></a>
						<a href="https://goo.gl/maps/QM6hntrKa77gpk1w5"><i class="fa fa-map-marker"></i></a>
					</div>
					<p>
						&copy;Copyright. designed and developed by <a href="#">Karyamuda Sejahtera</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>

			</div><!--/.scroll-Top-->

        </footer><!--/.footer-->
		<!--footer end-->

		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>

    </body>

</html>
