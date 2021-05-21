<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejb || Driving Training</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../../tk.png">
	<link rel="stylesheet" href="assets/styles/style8.css">

	<!-- STYLES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #cb2027;
  color: white;
  border-radius: 70px;

}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #cb2027;
  color: white;
  border-radius: 70px;

}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>
	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}
		header .logo {
			float: left;
			height: 80px;
			width: 80px;

			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
			h2 {
   color: #00a2c6
}
 
h3 {
   color: #00a2c6
}
h4 {
   color: #00a2c6;
   position: center;
}
.card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   border-radius: 5px;
   padding: 20px;
   margin-top: 20px;
}
.cardmap {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  padding: 20px;
  margin-top: 20px;
}
.cardview {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
  }
.bayangan
	{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		width: 1310px;
        height: 350px;
        padding: 20px;
        margin-top: 20px;
        border-radius: 5px;
    }

    .bayangan2
	{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		width: 300px;
        height: 350px;
        padding: 20px;
        margin-top: 30px;
        margin-left: 20px;
        border-radius: 10px;

	}

 
 
nav li {
   display: inline;
   list-style-type: none;
   margin-right: 20px;
}

nav {
  background-color: #00a2c6;
  padding: 5px;
  position: sticky;
  top: 0;
  text-align: left;

}
nav a {
   font-size: 18px;
   font-weight: 400;
   text-decoration: none;
   color: white;
}
main {
   padding: 20px;
   overflow: auto;
}
.jumbotron {
   font-size: 20px;
   padding: 60px;
   background-color: #00a2c6;
   text-align: center;
   color: white;
}
.jumbotrond {
  font-size: 20px;
  text-align: center;
  color: white;
}
footer {
   padding: 20px;
   color: white;
   background-color: #00a2c6;
   text-align: center;
   font-weight: bold;
}
nav a:hover {
   font-weight: bold;
}
.profile header {
   text-align: center;
}
.featured-image {
   width: 100%;
   max-height: 300px;
   object-fit: cover;
   object-position: center;
}
.featured-header {
  width: 100%;
  max-height: 670px;
  object-fit: cover;
  object-position: center;
}
.profile img {
   width: 200px;
   border-radius:100em;

}
#content {
   float: left;
   width: 75%;
}
aside {
   float: right;
   width: 70%;
   padding-left: 20px;
}
* {
   box-sizing: border-box;
}



input, textarea { 
  padding: 9px; 
  border: solid 1px #E5E5E5; 
  outline: 0; 
  font: normal 13px/100% Verdana, Tahoma, sans-serif; 
  width: 300px; 
  background: #FFFFFF url('bg_form.png') left top repeat-x; 
  background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF)); 
  background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px); 
  box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
  -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
  -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
  
  } 
 
textarea { 
  width: 1050px; 
  max-width: 1050px; 
  height: 150px; 
  line-height: 150%; 
  } 
 
input:hover, textarea:hover, 
input:focus, textarea:focus { 
  border-color: #C9C9C9; 
  -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px; 
  } 
 
.form label { 
  margin-left: 10px; 
  color: #999999; 
  object-position: center;

  } 
 
.submit input { 
  width: auto; 
  padding: 9px 15px; 
  background: #617798; 
  border: 0; 
  font-size: 14px; 
  color: #FFFFFF; 
  -moz-border-radius: 5px; 
  -webkit-border-radius: 5px; 
  }

		}
	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
	<div class="menu">
		<ul>
		<img class="logo"  src="img/korlantas.png">

			</li>
			<li class="menu-toggle">
				<button onclick="toggleMenu();">&#9776;</button>
			</li>
			<li class="menu-item hidden"><a href="/dashboard">Home</a></li>
			<li class="menu-item hidden"><a href="/dashboard">About</a></li>
			<li class="menu-item hidden"><a href="/dashboard">Contact</a></li>

<?php if (logged_in()) : ?>
	<li class="menu-item hidden"><a	href="/dashboard"><?= user()->name; ?> / Dashboard</a></li>

<?php else : ?>
	<li class="menu-item hidden"><a	href="/login">Login</a></li>

<?php endif ; ?>
		</ul>
	</div>

	<!-- <div class="heroe">
	
	</div> -->

</header>

<!-- CONTENT -->
  <?php $noprof=1; foreach($head as $head) { if($noprof==1) { ?>

<section>
<center>
<img src="<?php echo base_url('assets/images/'.$head['image']) ?>" class="img-profile rounded-circle" height="350" width="300">

            <!-- <img class="img-profile rounded-circle"  src="img/tk.png"  height="350" width="300"> -->
            </center>	
</div>

</section>

<div class="further">
	
  <main>
      <div id="content">
          <article id="Tentang" class="card">
              <h2>Kilas Jakarta</h2>
              <img src="assets/image/Jakarta.jpg" alt="sejarah" class="featured-image">
              <p>Jakarta berasal . </p>
                  <p class="button"> 
                      <input type="button" value="Selanjutnya" class="featured-image" /> 
                  </p> 
                </article>
          <article id="Fitur" class="card">
              <h2>Fitur</h2>
              <center><h2>Podcast<img src="assets/image/speech.png"></h2></center>
              <img src="assets/image/Podcast.jpg" alt="sejarah" class="featured-image">
              <p>Podcast-Special ulang tahun Jakarta 2019& cerita rakyat. </p>
              <p>Podcast kali ini, special ngomingon ulang tahun Jakarta yang ke-188 di tanggal 20-juli, banyak acara keren dan istimewa karna di adakan sampai sebulan penuh!!!!.</p>
              <p class="button"> 
                  <input type="button" value="Selanjutnya" class="featured-image"/> 
              </p> 
              <center><h2>Agriculture<img src="assets/image/watering.png"></h2></center>
              <img src="assets/image/agr.jpg" alt="sejarah" class="featured-image">
              <p>Agriculture Jakarta 2020.</p>
              <p>DINAS PANGAN DAN PERTANIAN KABUPATEN Jakarta BERHASIL MENDATANGKAN 1.500 PETANI 
                DARI SELURUH KECAMATAN DI KABUPATEN Jakarta DALAM RANGKA DIALOG UMUM PENINGKATAN MUTU PERTANIAN.
                 BERTEMPAT DI AREA TAJUG GEDE CILODONG BUNGURSARI. TUJUAN DILAKSANAKAN ACARA INI ADALAH DIHARAPKAN PETANI KABUPATEN
                  Jakarta HARUS LEBIH MAJU DAN SEJAHTERA DARI SEKARANG MELALUI BANTUAN YANG SUDAH BANYAK DIBERIKAN OLEH PEMERINTAH.</p>
              <p class="button"> 
                  <input type="button" value="Selanjutnya" class="featured-image"/> 
              </p> 
            </article>
         
               
               
             
            
        <article id="Lokasi" class="cardview">
                <center><h2>Lokasi<img src="assets/image/maps.jpg"></h2></center>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15854.88206057335!2d107.43735631966463!3d-6.556922906684327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e4e4dbaca3d%3A0x9f5e1e5795568d31!2sSitu%20Buleud!5e0!3m2!1sen!2sid!4v1586091355280!5m2!1sen!2sid" width="1050" height="450" frameborder="0" style="border:0;" class="featured-image" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>          
          <center><h2>Kirim Komentar</h2>
                          <form class="form"> 
                          <p class="name"> 
                              <input type="text" class="featured-image" name="name" id="name" placeholder="Your Name" /> 

                            </p> 
                            <p class="email"> 
                                <input type="text" class="featured-image" name="email" id="email" placeholder="Your email" /> 
  
                              </p> 
                                                                                                 
                          <p class="text"> 
                              <textarea name="text" class="featured-image"></textarea> 
                          </p>                          
                          <p class="submit"> 
                              <input type="submit" value="Send"  /> 
                          </p>                          
                      </form></center>
                    </article>

      </div>    
    <aside>
        <article class="profile card">
           <header>
               <h2>Ejb</h2>
               <figure>
                  <img src="assets/image/b.jpg"  >
                  <figcaption></figcaption>
                </figure>
           </header>
           
           <section>
            <h3>Informasi Lainnya</h3>
            <table>
               <tr>
                  <th>Tanggal Lahir</th>
                  <td>September 1995</td>
               </tr>
               <tr>
                  <th>Email</th>
                  <td>asep.rayana09@gmail.com</td>
               </tr>
               <tr>
                  <th>Alamat</th>
                  <td>Jakarta</td>
               </tr>
              
                  <tr>
                  <th>Kode Telepon</th>
                  <td>+62 8212391XXX</td>
               </tr>
           </table>
         </section>
      </article>
  </aside>
  <aside>
      <article class="profile card">
         <header>
             <h2>Login</h2>
             <form class="form"> 
                <p class="name"> 
                    <input type="text" class="featured-image" name="name" id="name" placeholder="Your Name" /> 

                  </p> 
                  <p class="email"> 
                      <input type="text" class="featured-image" name="email" id="email" placeholder="Your email" /> 

                    </p> 
                                                                                       
                <p class="text"> 
                    <textarea name="text" class="featured-image"></textarea> 
                </p>                          
                <p class="submit"> 
                    <input type="submit" value="Send" /> 
                </p>                          
            </form></center>
             
              <header>
                  <h2>Berita Hoax Covid19</h2>
                  <figure>
                     <img src="assets/image/hoax.jpg"  >
                     <figcaption></figcaption>
                   </figure>
                   <p>Kemunculan virus korona SARS-CoV-2 yang mengakibatkan pandemi COVID-19 masih menyedot sebagian besar perhatian warga di seluruh dunia termasuk Indonesia. Kejadian ini, sayangnya, ikut dimanfaatkan ... </p>
                   <p class="button"> 
                      <input type="button" value="Selanjutnya" class="featured-image"/> 
                  </p> 
              </header>
              <header>
                  <h2>Update Covid-19 Jakarta, PDP 7 dan ODP 202</h2>
                  <figure>
                      <img src="assets/image/co.jpeg"  >
                    </figure>
                  </header>
                  <p>Upaya yang dilakukan adalah melakukan rapid testing (pemeriksaan) dan tracing (pelacakan) bagi warga yang kontak erat dengan PDP. "Kemarin sudah kami lakukan kepada 91 orang, dan hasilnya cukup memuaskan, hasilnya negatif," kata dia. Selain itu, ia menyebut kesadaran masyarakat akan pencegahan virus corona dinilai masih minim, terbukti masih saja terjadi kerumunan di sejumlah titik. Masyarakat yang tidak menggunakan masker juga  masih banyak.
                         
                    </p>
                    <p class="button"> 
                        <input type="button" value="Selanjutnya" class="featured-image" /> 
                    </p> 
                 
       </section>
    </article>
</aside>
<aside>
    <article class="profile card">
       <header>
          <h2>Submission Dasar Pemrograman Web</h2>
          <h2>Tentang</h2>
           
       </header>
       
       <p>Konsep blablablablablablablablablablablabla 
       blablablablablablablablablablablablablablablabla
      </p>
     </section>
  </article>
</aside>
</main>

</div>
            
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
 
<footer>
<p>&copy; <?= date('Y') ?><?php echo $head['app_name'] ?></p>
<?php }$noprof++; } ?>
</footer>



<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
