<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BigBoss EDM</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Schooling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery-ui.css" type='text/css' />
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' >
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script>
function showHint(str) {
	if (str.length == 0) {
	document.getElementById ("txtHint").innerHTML = "";
	return;
	}else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "gethint.php?q=" + str, true);
		xmlhttp.send();
	}
}
</script>
<script> function loadXMLDoc() {
	var xmlhttp;
	if (window.XMLHttpRequest){ //kode untuk IE7+, Firefox, Chrome, Opera
		xmlhttp = new XMLHttpRequest();
	} else { // code untuk IE5, IE6
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
		xmlhttp.onreadystatechange = function(){
	if (xmlhttp.readyState==4 && xmlhttp.status == 200) {
		document.getElementById("isi").innerHTML=xmlhttp.responseText;
		}}
		xmlhttp.open("GET", "text1.xml",true);
		xmlhttp.send();
		}
		</script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="video/galantis">
		<div class="center-container">
			<div class="navigation">
				<div class="container">
					<div class="logo">
						<h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="images/menu.png" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li class="active"><a data-hover="Home" href="index.html">Home</a></li>
								<li><a data-hover="About" href="#about" class="scroll">About</a></li>
								<!--<li><a data-hover="Team" href="#team" class="scroll">Team</a></li>-->
								<li><a data-hover="Gallery" href="auth.php" class="scroll">Gallery</a></li>
								<li><a data-hover="LOGIN" href="reza_google/index.php">LOGIN</a></li>
								<li><input type = "text" onkeyup ="showHint(this.value)" style = "width:80px" placeholder="Search"></li>
								<li>:<span id = "txtHint"></span></li>
							</ul>
						</nav>
							<!-- script-for-menu -->
								<script>
								   $( "span.menu" ).click(function() {
									 $( "ul.nav1" ).slideToggle( 300, function() {
									 // Animation complete.
									  });
									 });
								</script>
							<!-- /script-for-menu -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="w3ls_banner_info">
				<div class="container">
					<div class="w3l_banner_logo">
						<h2>S</h2>
					</div>
					<h3>Good Music</h3>
					<h3>Good Friends</h3>
					<h3>Good Vibes</h3>
					<p>EDM is the art of the soul.It is a true expression of how the music is supposed to feel.</p>
					<div class="more">
						<a href="#" class="hvr-underline-from-center" data-toggle="modal" data-target="#myModal">Learn More</a>
					</div>
					<!--modal-video-->
					<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									EDM
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<div id="isi"><p>EDM merupakan singkatan dari electronic dance music.
										EDM merupakan salah satu jenis genre musik yang saat ini banyak digandrungi anak muda dan berkaitan dengan budaya rave.
										Musik EDM sendiri sering digunakan di saat festival musik atau pengiring musik klub malam.
										Umumnya, musik EDM dihasilkan oleh DJ atau disc jockey yang menggunakan teknik remix atau playback untuk menghasilkan suatu irama baru.</p></div> 
											<button type ="button" onclick = "loadXMLDoc()" > Ubah Tulisan Diatas </button>
											<!--<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
												esse quam nihil molestiae consequatur.</i></p>-->
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- about -->
	<div class="about">
		<div class="container">
			<div class="agileits_about_grids">
				<div class="col-md-6 agileits_about_grid_left">
					<h3>Tujuan EDM</h3>
					<p>Tujuan EDM adalah untuk meningkatkan hubungan dengan membangun brand awareness (agar merek lebih dikenal), membangun kepercayaan dan loyalitas serta untuk mendorong bisnis agar bisa berulang, misalnya agar pelanggan selalu berminat untuk melakukan pembelian kepada mereka yang menawarkan tersebut.
</P><p>EDM juga digunakan ketika salah satu bisnis menambahkan sebuah iklan dengan pesan email yang dikirim oleh perusahaan lain untuk pelanggan mereka. Email yang dikirimkan biasanya langsung dikirimkan atau disebarkan kepada banyak orang/pelanggan sekaligus.
</p><p>EDM cukup efektif untuk menciptakan minat orang lain terhadap produk dan layanan yang ditawarkan, menjaga bisnis di depan para pelanggan potensial sehingga mereka tidak ragu dan siap untuk membeli, dan bahkan untuk membeli lagi secara berulang kali.
</p>
				</div>
				<div class="col-md-6 agileits_about_grid_right">
					<img src="images/16.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-4 wthree_banner_bottom_left">
				<img src="images/1.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-8 wthree_banner_bottom_right">
				<h3>Jenis Musik EDM </h3>
				<p>Jenis Musik EDM Secara umum, aliran musik EDM memiliki banyak jenis dan macam macam atau yang biasa disebut subgenre. 
				Berikut beberapa subgenre musik EDM yang terkenal.</p>
				<ol>
					<li>Dubstep</li>
					<li>House </li>
					<li>Electronica</li>
					<li>Drum and Bass  </li>
					<li>Downtempo</li>
					<li>DLL</li>
				</ol>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom-image-text -->
	<div id="about" class="banner-bottom-image-text">
		<div class="col-md-8 banner-bottom-image-text-left">
			<h3>Apa itu EDM?</h3>
			<centre><p>EDM banyak dikenal orang sebagai musiknya orang dugem, atau musik dance, atau juga diketahui sebagai musik yang diproduksi oleh para DJ (disc jockey). EDM atau kepanjangan dari electronic dance music memang berhubungan dengan kehidupan malam, lantai dansa, dan disc jockey (DJ) atau produser musik elektronik. Tapi, ada penjelasan lebih jauh tentang musik elektronik yang selalu menjamur di kalangan remaja di tiap zaman ini.

Electronic dance music adalah produksi musik melalui berbagai instrumen elektronik seperti synthesizer, midi keyboard, turntable, mixer, bass, dan sebagainya. Di masa kini, EDM bahkan bisa diproduksi melalui berbagai aplikasi komputer. Makanya, para DJ dan produser sering tampil dengan menggunakan laptop mereka. Musik-musik yang dihasilkan merupakan gabungan dari berbagai instrument elektronik tersebut.</p></centre>
		</div>
		<div class="col-md-4 banner-bottom-image-text-right">
			<img src="images/zzz.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom-image-text -->
<!-- team -->
	<!--<div class="team" id="team">
		<div class="container">
			<h3>Meet Our Team</h3>
			<p class="nostrud">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
								<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
								<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
							</div>
						</div>
					</div>
					<h4>John Doe</h4>
					<p>Teacher</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
								<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
								<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
							</div>
						</div>
					</div>
					<h4>Laura Carl</h4>
					<p>Teacher</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
								<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
								<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
							</div>
						</div>
					</div>
					<h4>James Cam</h4>
					<p>Teacher</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h5>quis nostrud</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
								<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
								<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
							</div>
						</div>
					</div>
					<h4>Luther</h4>
					<p>Teacher</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
<!-- //team -->
<!-- team-bottom -->
	<!--<div class="team-bottom">
		<div class="container">
			<h3>Reservation for school admission</h3>
			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
				suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
			<div class="reservation">
				<div class="w3_book_date">
					<form action="#" method="post">
						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						<input class="date" id="datepicker" type="text" name="Date" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date';}" required="">
					</form>
				</div>
				<div class="w3_working_time">
					<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Time</option>
						<option value="null">10:00 AM - 12:00 PM</option> 
						<option value="null">02:00 PM - 5:00 PM</option>							
					</select>
				</div>
				<div class="w3_working_time w3_working_time1">
					<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
					<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Classes</option>
						<option value="null">Play Class</option> 
						<option value="null">1st Class to 10th Class</option>							
					</select>
				</div>				
				<div class="clearfix"> </div>	
				<form action="#" method="post">
					<input type="submit" value="Submit">
				</form>
			</div>-->
			<!-- start-date-piker -->
				<!--<script src="js/jquery-ui.js"></script>
				  <script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
				  </script>-->
			<!-- //End-date-piker -->
		<!--</div>
	</div>
<!-- //team-bottom -->
<!-- gallery -->
	<div class="gallery" id="gallery">
		<h3>Photo Gallery</h3>
		<p class="nostrud">Beberapa DJ yang menggeluti EDM</p><br>
		
<div class="w3agile_gallery_grids">
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" href="images/m.jpg" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
						<figure>
							<img src="images/m.jpg" alt="" class="img-responsive" />
							<figcaption>
								<h4>MARSHMELLO</h4>
								<p>
									Marshmello adalah seorang Dj yang di kenal Misterius, karena di setiap penampilannya ia selalu mengenakan topeng putih. Marshmello di kenal oleh banyak orang di dunia pada tahun 2015 dengan mengeluarkan musik Instrument DJ. Awalnya banyak yang menduga bahwa Marshmello adalah Chris Comstock, atau lebih dikenal dengan nama dotcom. Karena mereka memiliki banyak sekali kesamaan. Namun anggapan tersebut salah besar.
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum" href="images/a.jpg">
						<figure>
							<img src="images/a.jpg" alt="" class="img-responsive" />
							<figcaption>
								<h4>AVICII</h4>
								<p>
									Dia mulai remixing dan memproduksi lagu di kamar tidurnya sendiri pada saat berusia 18. Teman-temannya meyakinkan dia untuk menempatkan karyanya pada berbagai blog musik online, dari hasil kerja kerasnya Avicii mendapat dukungan dari DJ dan produser Tiësto , yang mengundangnya untuk melakukan residensi mingguan di Privilege Ibiza. Ia juga mendapatkan dukungan dari Pete Tong yang merilis single pertama Manman nya melalui label Bedlam Bedroom. Pada bulan Mei 2008, Avicii menandatangani kontrak dengan At Night Management. 
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum" href="images/d.jpg">
						<figure>
							<img src="images/d.jpg" alt="" class="img-responsive" />
							<figcaption>
								<h4>DEADMAU5</h4>
								<p>
									Joel Thomas Zimmerman lahir pada tanggal 5 Januari 1981, di Toronto, Kanada. Dia memiliki bakat untuk elektronik dan membedah perangkat keras selama masa kecilnya, dan akhirnya mulai bekerja dalam animasi dan desain web. Dia memasuki dunia musik sebagai DJ, membuat jalannya ke Eropa dan Amerika Selatan untuk pertunjukan dengan sumber daya terbatas.
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum" href="images/h.jpg">
						<figure>
							<img src="images/h.jpg" alt="" class="img-responsive" />
							<figcaption>
								<h4>HARDWELL</h4>
								<p>
									Pada bulan April 2013 ia menggelar tur keliling dunia yang bertajuk “I Am Hardwell”. Di tur pertamanya tersebut, tiket pertunjukkannya terjual habis di Jakarta, Singapore, Bangalore, Mumbai, Lisbon dan London. Dilanjutkan dengan penampilannya di Tomorrowland 2012, ia kembali ke panggung utama festival musik ditahun 2013 tersebut.
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum" href="images/s.jpg">
						<figure>
							<img src="images/s.jpg" alt="" class="img-responsive" />
							<figcaption>
								<h4>SKRILLEX</h4>
								<p>
									Pada Maret 2015, Marshmello pertama kali mengupload musik pertamanya di situs Soundcloud, musik tersbeut di beri judul "WaVeZ", karena ia mengupload banyak lagi di Soundcloud, akhirnya ia mendapat dukungan dari DJ Terkenal Skrillex yang memposting lagu berjudul "Find ME" hasil remik dari Marshmello di akun Soundcloudnya.
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum" href="images/z.jpg">
						<figure>
							<img src="images/z.jpg" alt="" class="img-responsive" />
							<figcaption>
								<h4>ZEDD</h4>
								<p>
									Pada tahun 2015 pula iamendapat pengakuan Internasional, ketika dia menulis lagu yang berjudul ketika dia mulai merilis lagu secara online, termasuk remix Zedd "Beautiful Now", Jack Ü "Where Are Ü Now" dan lain-lain, serta singlenya yang berjudul "Alone".
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum" href="images/c.png">
						<figure>
							<img src="images/c.png" alt="" class="img-responsive" />
							<figcaption>
								<h4>THE CHAINSMOKERS</h4>
								<p>
									Pada tahun 2015 pula iamendapat pengakuan Internasional, ketika dia menulis lagu yang berjudul ketika dia mulai merilis lagu secara online, termasuk remix Zedd "Beautiful Now", Jack Ü "Where Are Ü Now" dan lain-lain, serta singlenya yang berjudul "Alone".
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="col-md-3 w3agile_gallery_grid">
				<div class="w3agile_gallery_image">
					<a class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum" href="images/dj.png">
						<figure>
							<img src="images/dj.png" alt="" class="img-responsive" />
							<figcaption>
								<h4>DJ SNAKE</h4>
								<p>
									Lahir di kota Paris, Perancis pada tangga 13 Juni 1986, ia memiliki nama asli yaitu WilliamSami Etienne Grigahcine. Ia sendiri mengusung genre Trap dan EDM dalam musiknya.DJ Snake merupakan co-
 produser terbaik dibalik lagu hits milik Lil Jon yang berjudul “TurnDown for What” di tahun 2013 
								</p>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
	</div>
<!-- //gallery -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Introduction</h3>
			<p class="nostrud">Suksesnya suatu project yaitu karena adanya kerjasama dalam team</p>
			<div class="testimonials-grids">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Chintia RR</a></li>
						<li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">M Reza Mustika</a></li>
						<li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab" aria-controls="james">Sofie In</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">
								<img src="images/C1.png" alt=" " class="img-responsive" />
								<h4>Chintia RR<span>D4-Teknik Informatika</span></h4>
								<p>Bersama sama adalah sebuah awal, menjaga kebersamaan adalah  sebuah perkembangan  dan bekerja adalah sebuah kesuksesan</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
							<div class="tabcontent-grids">
								<img src="images/c3.jpg" alt=" " class="img-responsive" />
								<h4>M Reza Mustika<span>D4-Teknik Informatika</span></h4>
								<p>Bersama sama adalah sebuah awal, menjaga kebersamaan adalah  sebuah perkembangan  dan bekerja adalah sebuah kesuksesan.</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
							<div class="tabcontent-grids">
								<img src="images/C2.png" alt=" " class="img-responsive" />
								<h4>Sofie In<span>D4-Teknik Informatika</span></h4>
								<p>Bersama sama adalah sebuah awal, menjaga kebersamaan adalah  sebuah perkembangan  dan bekerja adalah sebuah kesuksesan</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //testimonials -->

<!-- contact -->
	<!--<div class="contact" id="contact">
		<div class="col-md-6 w3agile_contact_left">
			<h3>Contact Us</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt 
				in culpa qui officia deserunt mollit anim id est laborum reprehenderit in voluptate velit esse 
				cillum dolore eu fugiat nulla pariatur.</p>
			<form action="#" method="post">
				<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
				<input type="submit" value="Send">
			</form>
		</div>
		<div class="col-md-6 w3agile_contact_right">
			<h3><a href="index.html">Schooling</a></h3>
			<div class="col-xs-6 w3agile_contact_right_agileinfo">
				<h4>Address</h4>
				<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>8921 California Long Beach <i>PO Box 8921 202 East Ocean.</i></p>
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+) 0983 010 823</p>
				<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
			<div class="col-xs-6 w3agile_contact_right_agileinfo">
				<h4>Follow Us</h4>
				<div class="agileits_social_icons">
					<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
					<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
					<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="w3_copy_right">
				<p>© 2016 Schooling. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //contact -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>