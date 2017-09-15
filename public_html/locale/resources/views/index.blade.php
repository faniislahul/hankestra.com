<html>
<head>
<title>HANKESTRA</title>

<script src="js/jquery.min.js"></script>
 <script src="js/jquery-1.11.1.js"></script>
 <script src="js/jquery.fullPage.js"></script>
<script src="js/amplitude.js"></script>

<link href="css/jquery.fullPage.css" rel="stylesheet" />
<link href="css/css.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<link href="css/animate.css" rel="stylesheet" />
<script src="js/bootstrap.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" />


</head>
<body>
<div id="fullpage">
<div class="section" id="home">
	
	<p class="mainH animated fadeInDown" style="z-index:11;">HANKESTRA</p>
	<p class="tagline animated fadeInDown" style="z-index:11;">Brotherhood, dream, and luck!</p>
	

</div>
<div class="section" id="section1">
	<div class="centerbox animated fadeInDown">
		<p class="subhead">HANKESTRA</p>
		<p class="subtext">
			Secara formal HANKESTRA terbentuk bulan November 2014.
			Sebuah kelompok musik yang kini beranggotakan: 
			Han Farhani pada vokal dan gitar, Feri H. Said pada gitar, 
			Hamdan Arrasyid (Kucing) pada bass, dan Leon Nauval Lolang pada 
			perkusi dan harmonika. Saat ini berkibar di dunia permusikan akustik 
			di Kota Malang. Musik yang dibawakan adalah sejenis akustik yang 
			beberapa terpengaruh dari musik ballad, blues, dan sejenisnya. 
			HANKESTRA lebih setuju untuk disebut sebagai sebuah keluarga 
			karena yang menjadi core value dalam bermusiknya adalah 
			“Persaudaraan, cita-cita, dan keberuntungan!” yang siapa saja 
			dapat mengartikannya secara luas dan mudah. Sehari-hari 
			HANKESTRA aktif berlatih, bermusik, dan ngopi di Galeri Teratai</p>

	</div>
	

</div>

<div class="section" id="album" >
<div class="big-player">
			<div id="player">
				<div id="player-top">
					<div id="now-playing-title" amplitude-song-info="name"></div>
					<div class="album-information"><span amplitude-song-info="artist"></span> - <span amplitude-song-info="album"></span></div>
				</div>
				<table >
						<tr>
							<td style="width:39%;">
							<img id="amplitude-album-art" class="amplitude-album-art" amplitude-song-info="cover"/>	
							</td>

							<td style="width:61%; vertical-align:top;background-color:#fff;">
								<div id="player-playlist">
					<div class="playlist-item" id="up-next-header">
						Ops. Bismika
					</div>

					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="0">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Selamat Pagi Ian Osah</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="1">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Aku Ingin</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="2">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Di Magribmu</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="3">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Lelah Mengekang Otak</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="4">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Selamat Tidur</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="5">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Hujan dan Kota</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
			</div>

							</td>
						</tr>

				</table>
				
					
			
				<div id="player-bottom">
					<div id="control-container">
						<div class="amplitude-prev"></div>
						<div class="amplitude-play-pause amplitude-paused" amplitude-main-play-pause="true"></div>
						<div class="amplitude-next"></div>
					</div>
					<div id="toggle-playlist" onclick="toggle_playlist()">
						<img src="img/player/black-playlist.png"/>
					</div>
					<div id="current-song-information">
						<span id="current-time">
							<span class="amplitude-current-minutes" amplitude-single-current-minutes="true">0</span>:<span class="amplitude-current-seconds" amplitude-single-current-seconds="true">00</span>
						</span>
						<input type="range" id="song-time-slider" class="amplitude-song-slider" amplitude-singular-song-slider="true" value="0"/>
						<span id="audio-duration">
							<span class="amplitude-duration-minutes" amplitude-single-duration-minutes="true">0</span>:<span class="amplitude-duration-minutes" amplitude-single-duration-seconds="true">00</span>
						</span>
					</div>
					</div>
	<div style="text-align:center;padding-top:20px;">
	<span ><a href="https://www.amazon.co.uk/gp/product/B0162G0YM4?ie=UTF8&keywords=Hankestra&qid=1452979796&ref_=sr_1_1&s=dmusic&sr=1-1-mp3-albums-bar-strip-0">
	<img src="../img/player/amazon.png" class="promotion">	
	</a>
	<a href="https://itunes.apple.com/id/album/ops.-bismika/id1045034608"><img src="../img/player/itunes.svg" class="promotion"></a>
	</span>	
	</div>
				</div>
	</div>
	<div class="small-player">
		<div id="player">
				<div id="player-top">
					<div id="now-playing-title" amplitude-song-info="name"></div>
					<div class="album-information"><span amplitude-song-info="artist"></span> - <span amplitude-song-info="album"></span></div>
				</div>
				<img id="amplitude-album-art" class="amplitude-album-art" amplitude-song-info="cover"/>				
					
			
				<div id="player-bottom">
					<div id="control-container">
						<div class="amplitude-prev"></div>
						<div class="amplitude-play-pause amplitude-paused" amplitude-main-play-pause="true"></div>
						<div class="amplitude-next"></div>
					</div>
					<div id="toggle-playlist" onclick="toggle_playlist()">
						<img src="img/player/black-playlist.png"/>
					</div>
					<div id="current-song-information">
						<span id="current-time">
							<span class="amplitude-current-minutes" amplitude-single-current-minutes="true">0</span>:<span class="amplitude-current-seconds" amplitude-single-current-seconds="true">00</span>
						</span>
						<input type="range" id="song-time-slider" class="amplitude-song-slider" amplitude-singular-song-slider="true" value="0"/>
						<span id="audio-duration">
							<span class="amplitude-duration-minutes" amplitude-single-duration-minutes="true">0</span>:<span class="amplitude-duration-minutes" amplitude-single-duration-seconds="true">00</span>
						</span>
					</div>
					</div>
	
		<div id="player-playlist">
					<div class="playlist-item" id="up-next-header">
						Ops. Bismika
					</div>

					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="0">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Selamat Pagi Ian Osah</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="1">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Aku Ingin</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="2">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Di Magribmu</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="3">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Lelah Mengekang Otak</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="4">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Selamat Tidur</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="amplitude-play-pause playlist-item amplitude-song-container" amplitude-song-index="5">
						<div class="playlist-image-container">
							<img src="img/player/bismika.jpeg"/>
						</div>
						<div class="playlist-song-information-container">
							<div class="playlist-song-title">Hujan dan Kota</div>
							<div class="playlist-album-information">Ops. Bismika</div>
						</div>
						<div style="clear: both;"></div>
					</div>
			</div>

			<div style="text-align:center;padding-top:20px;">
	<span ><a href="https://www.amazon.co.uk/gp/product/B0162G0YM4?ie=UTF8&keywords=Hankestra&qid=1452979796&ref_=sr_1_1&s=dmusic&sr=1-1-mp3-albums-bar-strip-0">
	<img src="../img/player/amazon.png" class="promotion">	
	</a>
	<a href="https://itunes.apple.com/id/album/ops.-bismika/id1045034608"><img src="../img/player/itunes.svg" class="promotion"></a>
	</span>	
	</div>
				</div>

	</div>	
		
		
			
	
	
	
	
	
	



</div>



<div class="section" id="han">
<div class="wrapbox">
<p class="subhead">Han Farhani</p>
<p class="subtext">Han Farhani lahir di Ketapang, 1 Oktober 1993. 
	Dibesarkan di Kota Mataram dan bermusik sejak duduk di bangku SMP. 
	Mengidolakan John Lennon. Di sela bermusik menggeluti dunia akuntansi.</p>
</div>

</div>

<div class="section" id="feri">
<div class="rightbox" >
<p class="subhead">Feri H. Said </p>
<p class="subtext">Feri H. Said lahir di Malang, 10 Maret 1979. 
	Menyukai jenis musik klasik. Pemilik Galeri Teratai di Taman Rekreasi Kota Malang. 
	Keinginan untuk jujur dan sederhana. Aktif berkarya dalam musik dan seni rupa. 
	</br>Motto hidup: “Urip sampai mati berkesenian”</p>
</div>
</div>

<div class="section" id="kucing">
<div class="rightbox">
<p class="subhead">Hamdan Arrasyid (Kucing) </p>
<p class="subtext">Hamdan Arrasyid lahir di Batu, 13 Oktober 1994. 
	Dibesarkan di Banyuwangi. 

	Menempuh pendidikan jurusan Psikologi di UIN Maliki Malang. 
	Menyukai jenis musik rock dan dangdut, influence musik: 
	The Police, Float, Dialog Dini Hari. Bermusik sejak SMP dan 
	akrab dengan instrumen bass sejak tahun 2006. Semangat hidup indie.
	 </br>Motto hidup: “Life to lives and love to loves”</p>
</div>
</div>

<div class="section" id="leon">
<div class="leftbox" style="width:40%;">
<p class="subhead">Leon Nauval Lolang </p>
<p class="subtext">Leon Nauval Lolang lahir di Jakarta, 25 September 1994. 
	Menempuh pendidikan jurusan sosiologi di Universitas Brawijaya. 
	Influence berkarya: Keluarga, John Bonham (Led Zeppelin), 
	Keith Moon (The Who), Mitch Mitchell (The Jimi Hendrix Experience), 
	Kantata Takwa, Bob Dylan, Homicide, Wiji Tukul, 
	Joko Pinurbo. Menyukai puisi, filsafat, ilmu sosial, olahraga, dan traveling. 
</br>Motto hidup: “Saat kemungkinan itu sudah mati, berarti manusia itu mati. Karena kelahiran manusia itu sendiri dipenuhi dengan kemungkinan”</p>
</div>
</div>

<div class="section" id="gallery" style="text-align:center;">
<p class="subhead">News and Timeline</p>
<div class="cont">
<div>
@foreach ($data as $post)
<div class="card col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="c-head">
		<h3>{{date('j/M', strtotime($post['date']))}}</h3>
	</div>
	<div class="c-body">
	<p style="font-weight:bold;">{!!$post['title']!!}</p>
	<hr>
	<p>{!!$post['shortd']!!}</p>
	<a href="{{url('/')}}/showpost/{{$post['id']}}"><div class="btn btn-xs btn-primary" style="margin-top:10px; ">Read more</div></a>
	</div>
</div>
@endforeach

</div>
</div>

<div style="postion:absolute;margin-top:470px;">
	<a href="allpost">Show all posts</a>
<!-- INSTANSIVE WIDGET --><!-- <script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/62a653499bb55bfebb3f4239a6d651176b98bd57.html" id="instansive_62a653499b" name="instansive_62a653499b"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
 -->
 </div>
</div>


<div class="section" id="tl" style="text-align:center">
<div style="margin-top:50px;">
<p class="subhead">Keep in Touch</p>
<p class="subtext">
Contact Person<br>
082230565956<br>
hankestra [at] gmail [dot] com<br>
Galeri Tratai<br>
Malang, Indonesia</div>
<div style="margin-top:20px;"> 
<div style="float:bottom;position:fixed;bottom:0;"></div>
<span >
<a href="https://www.facebook.com/keluarga.hankestra"><img class="icon" src="img/icon/facebook.png"></a>
<a href="https://plus.google.com/105815905956359718465/about"><img class="icon" src="img/icon/googleplus.png"></a>
<a href="https://www.instagram.com/hankestra/"><img class="icon" src="img/icon/instagram.png"></a>
<a href="https://soundcloud.com/hankestra"><img class="icon" src="img/icon/soundcloud.png"></a>
<a href="https://twitter.com/_hankestra"><img class="icon" src="img/icon/twitter.png"></a>
<a href="https://www.youtube.com/channel/UCJa1T5s5o-_mnCz7FvhuJlw/videos"><img class="icon" src="img/icon/youtube.png"></a>
	
 </span>
 </div>
 
<div style="margin-top:20px; ">
 <!-- <iframe src="//users.instush.com/accordion-zoom/?w=800&size=80&border=6&shadow=true&crowded=false&sl=true&bg_item=ffffff&bg=transparent&lpc=ffffff&hc=e72476&ltc=3f3f3f&user_id=2011028165&username=hankestra&sid=-1&susername=-1&tag=-1&stype=mine&t=999999wcnM7H7NFaiW8-pOubjp8a2jYya9l6-RUnfTpmge20PaZcIO4wIoqvb6G67vlH9hISreAzmP3K8" allowtransparency="true" frameborder="0" scrolling="no"  style="display:block;width:800px;height:224px;border:none;overflow:visible;margin:auto;" ></iframe> -->
 <iframe src="//users.instush.com/h-slider/?cols=5&round=true&circle=false&pin=true&user_id=2011028165&username=hankestra&sid=-1&susername=-1&tag=-1&stype=mine&t=999999wcnM7H7NFaiW8-pOubjp8a2jYya9l6-RUnfTpmge20PaZcIO4wIoqvb6G67vlH9hISreAzmP3K8" allowtransparency="true" frameborder="0" scrolling="no"  style="display:block;width:850px;height:190px;border:none;overflow:visible;margin:auto;" ></iframe>
 </div>
 <!-- 
	<div class="col-lg-2 col-md-4 col-sm-6" >
		
	</div>
	<div class="col-lg-2 col-md-4 col-sm-6" >
	</div>
	<div class="col-lg-2 col-md-4 col-sm-6" >
		</div>
	<div class="col-lg-2 col-md-4 col-sm-6" >
		</div>
	<div class="col-lg-2 col-md-4 col-sm-6" >
		</div>
	<div class="col-lg-2 col-md-4 col-sm-6" >
		</div>
 -->	
</div> 


</div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				
				sectionsColor: ['#000','#000','#000', '#000', '#000', '#000', '#000', '#000', '#000'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Home','Profil-HANKESTRA','Preview Album','Profil-Han Farhani', 'Profil-Feri H Said', 'Profil-Kucing', 'Profil-Leon Lolang', 'News & Timeline', 'Contact Us'],
				showActiveTooltip: false,
				scrollingSpeed: 1200,
				css3: true,
				easing: 'ease',
        		easingcss3: 'ease', 
				resize: false,
				verticalCentered: true,
				responsive: 900,
				touchSensitivity:15,

				



			});
			//amplitude
		Amplitude.init({
			"songs": [
				{
					"name": "Selamat Pagi Ian Osah",
					"artist": "HANKESTRA",
					"album": "Ops. Bismika",
					"url": "sample/01.mp3",
					"live": false,
					"cover_art_url": "img/player/bismika.jpeg"
				},
				{
					"name": "Aku Ingin",
					"artist": "HANKESTRA",
					"album": "Ops. Bismika",
					"url": "sample/02.mp3",
					"live": false,
					"cover_art_url": "img/player/bismika.jpeg"
				},
				{
					"name": "Di Magribmu",
					"artist": "HANKESTRA",
					"album": "Ops. Bismika",
					"url": "sample/03.mp3",
					"live": false,
					"cover_art_url": "img/player/bismika.jpeg"
				},
				{
					"name": "Lelah Mengekang Otak",
					"artist": "HANKESTRA",
					"album": "Ops. Bismika",
					"url": "sample/04.mp3",
					"live": false,
					"cover_art_url": "img/player/bismika.jpeg"
				},
				{
					"name": "Selamat Tidur",
					"artist": "HANKESTRA",
					"album": "Ops. Bismika",
					"url": "sample/05.mp3",
					"live": false,
					"cover_art_url": "img/player/bismika.jpeg"
				},
				{
					"name": "Hujan dan Kota",
					"artist": "HANKESTRA",
					"album": "Ops. Bismika",
					"url": "sample/06.mp3",
					"live": false,
					"cover_art_url": "img/player/bismika.jpeg"
				},
				]
		});
		

		var expanded =true;
		var playlistEpxanded = true;
		/*
			jQuery Visual Helpers
		*/
		

		$('#top-header').hover(function(){
			$('#top-header').show();
			$('#small-player').show();
		}, function(){

		});

		/*
			Toggles Album Art
		*/
		$('#small-player-playlist').show();
		$('#small-player-toggle').click(function(){
			$('.hidden-on-collapse').show();
			$('.hidden-on-expanded').hide();
			/*
				Is expanded
			*/
			expanded = false;

			$('#small-player').css('border-top-left-radius', '0px');
			$('#small-player').css('border-top-right-radius', '0px');
		});

		$('#top-header-toggle').click(function(){
			$('.hidden-on-collapse').hide();
			$('.hidden-on-expanded').show();
			/*
				Is collapsed
			*/
			expanded = true;

			$('#small-player').css('border-top-left-radius', '5px');
			$('#small-player').css('border-top-right-radius', '5px');
		});

		$('.playlist-toggle').click(function(){
			if( playlistEpxanded ){
				$('#small-player-playlist').show();

				$('#small-player').css('border-bottom-left-radius', '5px');
				$('#small-player').css('border-bottom-right-radius', '5px');

				$('#large-album-art').css('border-bottom-left-radius', '5px');
				$('#large-album-art').css('border-bottom-right-radius', '5px');

				playlistEpxanded = false;
			}else{
				$('#small-player-playlist').show();

				$('#small-player').css('border-bottom-left-radius', '0px');
				$('#small-player').css('border-bottom-right-radius', '0px');

				$('#large-album-art').css('border-bottom-left-radius', '0px');
				$('#large-album-art').css('border-bottom-right-radius', '0px');

				playlistEpxanded = false;
			}
				});

		});
	</script>
</body>

</html>