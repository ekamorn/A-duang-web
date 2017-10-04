<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Chrome theme -->
	<meta name="theme-color" content="#2b3143">
	<!-- Windowphone theme -->
	<meta name="msapplication-navbutton-color" content="#2b3143">
	<!-- iOS safari -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-status-bar-style" content="black-translucent">

	<!-- Tab icon -->
	<link rel="icon" type="image/png" href="image/tab_icon_2.png" sizes="32*32">

	<title>a ดวง</title>

	<!-- Bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta-dist/css/bootstrap.min.css">

	<!-- Owl Carousel core css -->
	<link rel="stylesheet" type="text/css" href="OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css">

	<!-- DB Airy font style -->
	<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/all-article-custom.css">
	<!-- navbar css -->
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!-- footer css -->
	<link rel="stylesheet" type="text/css" href="css/footer.css">

	<!-- Font icon -->
	<link rel="stylesheet" type="text/css" href="icomoon/style.css">
</head>
<body>
	<div id="all-wrap">
		<!-- Preloader Wrapper -->
		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>

		<!-- Navigation -->
		<?php
		include 'allPage-navbar.php';
		?>

		<!-- all wraps data -->
		<div class="all-wrapping-data">
			<div class="container-fluid my-container">
				
				<!--cover collection part for ads or anythings -->
				<div class="cover-content--collection">
					<div class="owl-carousel owl-theme" id="cover-box--collection">
						<div class="each-cover-box item">
							<img src="image/v02/cover-2.png" class="img-responsive img-cover">
						</div>
						<div class="each-cover-box item">
							<img src="image/v02/cover-2.png" class="img-responsive img-cover">
						</div>
						<div class="each-cover-box item">
							<img src="image/v02/cover-2.png" class="img-responsive img-cover">
						</div>
					</div>
				</div>


				<!-- second content part -->
				<div class="second-content--collection">

					<!-- Top Teller collection header -->
					<div class="row top-teller-header--collection" id="top-teller-header">
						<div class="col-lg-12 col-md-12 col-md-12 col-12 col-xl-12 top-teller-head--collection">
							<p class="recommend-head">แม่หมอยอดนิยม</p>
							<a class="more-link" href="#">More ></a>
						</div>
					</div>

					<!-- Top Teller collection body -->
					<div class="row top-teller-body--collection" id="top-teller-body">
						
						<!-- Each top teller here -->
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 col-xl-2 top-teller-box--collection">
							<a class="top-teller-links" href="#">
								<img src="image/v02/fon.png" class="img-responsive img-top-teller">
								<p class="top-teller-name">แม่หมอหน้าฝน</p>
							</a>
						</div>
					</div>
					
					<!-- Top Chart article collection header -->
					<div class="row top-chart-header--collection" id="top-chart-header">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 col-xl-12 article-header-head--collection">
							<p class="recommend-head">
								บทความยอดนิยม
							</p>
							<a class="more-link" href="#">More ></a>
						</div>
					</div>

					<!-- Top Chart article collection body -->
					<div class="row top-chart-body--collection" id="top-chart-body">
						
						<!-- Each Top Chart article... -->
					</div>

					<!-- Favorite article collection header -->
					<div class="row favorite-article-header--collection" id="favorite-article-header">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12 favorite-article-header-head--collection">
							<p class="recommend-head">บทความโปรด</p>
							<a class="more-link" href="#">More ></a>
						</div>
					</div>

					<!-- Favorite article collection body -->
					<div class="row favorite-article-body--collection" id="favorite-ariticle-body">
						
						<!-- Each Favorite article -->
					</div>

					<!-- All article collection header -->
					<div class="row all-article-header--collection" id="all-article-header">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 col-xl-12 all-article-header-head--collection">
							<p class="recommend-head">บทความทั้งหมด</p>
						</div>
					</div>

					<!-- All artile collection body -->
					<div class="row all-article-body--collection" id="all-article-body">
						
						<!-- Each all article... -->
					</div>

				</div>
			</div>
		</div>

	</div>

	<!-- Footer -->
	<?php
	include 'footer.php';
	?>


	<!-- jQuery Core Js -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Core Js -->
	<script src="vendor/popper/popper.min.js"></script>
	<!-- Bootstrap Core Js -->
	<script src="bootstrap-4.0.0-beta-dist/js/bootstrap.min.js"></script>

	<!-- Owl Carousel Core js -->
	<script src="OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				center:true,
				autoplay:true,
				autoplayTimeout:10000,
				items:1,
				loop:true
			})
		});
	</script>

	<!-- Add loaded class preload -->
	<script type="text/javascript">
		$(document).ready(function(){

			setTimeout(function(){
				$('body').addClass('loaded');
			}, 2000);


			for(var i = 0; i<6; i++) {
				var createTest = document.createElement('div');
				createTest.className = 'col-lg-2 col-md-2 col-sm-2 col-2 col-xl-2 article-box--collection';

				createTest.innerHTML = 
				'<a class="each-article-body-collection" href="article?id=1">' +
				'<div class="each-pic-article-collection">' + '<img src="image/v02/article.png" class="img-responsive article-pic">' + 
				'</div>' + 
				'<div class="each-name-article-collection">' + 
				'<p class="each-name-article">' + 'ดวงดีก็ดี ดวงไม่ดี ก็ไม่ดี...' + '</p>' +
				'<p class="creator-article-name">' +'ใครสักคน' + '</p>' +
				'</div>' +
				'</a>';

				var createTest2 = document.createElement('div');
				createTest2.className = 'col-lg-2 col-md-2 col-sm-2 col-2 col-xl-2 article-box--collection';

				createTest2.innerHTML = 
				'<a class="each-article-body-collection" href="article?id=1">' +
				'<div class="each-pic-article-collection">' + '<img src="image/v02/article.png" class="img-responsive article-pic">' + 
				'</div>' + 
				'<div class="each-name-article-collection">' + 
				'<p class="each-name-article">' + 'ดวงดีก็ดี ดวงไม่ดี ก็ไม่ดี...' + '</p>' +
				'<p class="creator-article-name">' +'ใครสักคน' + '</p>' +
				'</div>' +
				'</a>';

				document.getElementById('top-chart-body').appendChild(createTest);

				document.getElementById('favorite-ariticle-body').appendChild(createTest2);
			}

			for(var j = 0; j<24; j++) {
				var createTest3 = document.createElement('div');
				createTest3.className = 'col-lg-2 col-md-2 col-sm-2 col-2 col-xl-2 article-box--collection';

				createTest3.innerHTML =
				'<a class="each-article-body-collection" href="#">' +
				'<div class="each-pic-article-collection">' + '<img src="image/v02/article.png" class="img-responsive article-pic">' + 
				'</div>' + 
				'<div class="each-name-article-collection">' + 
				'<p class="each-name-article">' + 'ดวงดีก็ดี ดวงไม่ดี ก็ไม่ดี...' + '</p>' +
				'<p class="creator-article-name">' +'ใครสักคน' + '</p>' +
				'</div>' +
				'</a>';

				document.getElementById('all-article-body').appendChild(createTest3);

			}
		});
	</script>

</body>
</html>