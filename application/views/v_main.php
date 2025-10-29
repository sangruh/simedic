<!DOCTYPE html>
<html>
<head>
<title>SI MEDIC - Puskesmas Candipuro Kab. Lumajang</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="SI MEDIC Online - Sistem Informasi Manajemen Mental, Economic & Disaster Puskesmas Candipuro Kab. Lumajang " />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="og:image" content="<?php echo base_url('/asset/smimg.jpg'); ?>" />
<meta name="description" content="SIMEDIC (Sistem Informasi Manajemen Mental, Economic & Disaster) merupakan inisiatif yang dirancang untuk meningkatkan manajemen dan respons Puskesmas Candipuro dalam menghadapi tantangan ekonomi, bencana, dan kesehatan jiwa.">
<link rel="stylesheet" href="<?php  echo base_url('asset/');?>w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="<?php echo base_url('/asset/simedic.png'); ?>" type="image/icon type">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
a {
	color: #000;
	}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 130px;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

	.zoom-img {
  width: auto;
  height:auto;
  overflow: hidden;
}

.zoom-img  img {
  width: 100%;
  transition: all .3s ease-in-out;
}

.zoom-img img:hover   {
  transform: scale(2);
}
</style>
<script type="text/javascript" >



	function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  $('#mySidebar').toggle();
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

$(document).ready(function() {
<?php if($this->session->flashdata('msg')){ ?>
alert('<?php echo $this->session->flashdata('msg'); ?>');
<?php } ?>
});



</script>


</script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body  style="/*background-image: url('/asset/smdc.png'); background-position: top; background-size: 27%;*/">
<div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
<hr>
   <a href="#profil" onclick="w3_open()" class="w3-bar-item w3-button" style="width:100% !important;line-height: 3em;"><i class="fa fa-user"></i>&nbsp;&nbsp; PROFIL</a>
    <a href="#call" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-phone"></i>&nbsp;&nbsp;CALL CENTER</a>
    <a href="#bencana" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;INFO</a>
<!--    <a href="#kesehatan" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-medkit"></i>&nbsp;&nbsp;PEDULI KESEHATAN</a>-->
    <a href="#keluhan" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-heartbeat"></i>&nbsp;&nbsp;KELUHAN</a>
    <a href="#peduli" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-smile-o"></i>&nbsp;&nbsp;PEDULI PENGUNGSI</a>
    <a href="#agenda" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-calendar"></i>&nbsp;&nbsp;AGENDA KESEHATAN</a>
    <a href="#relawan" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-users"></i>&nbsp;&nbsp;RELAWAN</a>
    <button onclick="w3_open()" data-toggle="modal" data-target="#exampleModal" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;LOGIN</button>
</div>
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="" ><img loading="lazy" src="/asset/simedic.png" loading="lazy" style="width:100%"></a>
  <!--<a href="#profil" class="w3-bar-item w3-button w3-padding-large w3-white">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>-->
  <a href="#profil" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>PROFIL</p>
  </a>
   <a href="#call" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-phone w3-xxlarge"></i>
    <p>CALL CENTER</p>
  </a>
   <a href="#bencana" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-exclamation-triangle w3-xxlarge"></i>
    <p>INFORMASI</p>
  </a>
<!--  <a href="#kesehatan" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-medkit w3-xxlarge"></i>
    <p>PEDULI KESEHATAN</p>
  </a>-->
  <a href="#keluhan" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-heartbeat w3-xxlarge"></i>
    <p>KELUHAN</p>
  </a>
   <a href="#peduli" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-smile-o w3-xxlarge"></i>
    <p>PEDULI PENGUNGSI</p>
  </a>
  <a href="#agenda" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-calendar w3-xxlarge"></i>
    <p>AGENDA KESEHATAN</p>
  </a>
  <a href="#relawan" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
    <i class="fa fa-users w3-xxlarge"></i>
    <p>RELAWAN</p>
  </a>
 <button class="w3-bar-item w3-button w3-padding-large w3-hover-white" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-sign-in w3-xxlarge"></i>
    <p>LOGIN</p>
  </button>

</nav>

<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-white  w3-center w3-small">
    <button onclick="w3_open()" class="w3-bar-item w3-button "  style="width:25% !important; float: right;"> <i class="fa fa-navicon w3-large"></i></button>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center" id="home">
  <center> <a href="" ><img src="/asset/simedic.png" loading="lazy" class="img-fluid" width="20%"></a></center>
    <h1 class="w3-jumbo"><span class="w3-hide-small">SI MEDIC</span></h1>
    <h2>Selamat Datang di <b>SI MEDIC</b> Kab. Lumajang.</h2>
     <center>
		 <img  src="/asset/logolmj.png" loading="lazy" class="img-fluid" width="20%">
     <img src="/asset/logopkmp.png" loading="lazy" class="img-fluid" width="20%">
     <!-- <img src="/asset/logopkm.png" loading="lazy" class="img-fluid" width="20%"> -->
   </center>
  </header>

  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="profil" style="background-color: aliceblue;    border-radius: 15px;    padding: 20px;">
    <h2 class="w3-text-dark-grey"><?php echo $info[0]['judul_inf']; ?></h2>
    <hr style="width:200px" class="w3-opacity">
		<?php echo $info[0]['urai_inf']; ?>
   <!-- <img src="<?php echo $info[0]['img_inf']; ?>  " loading="lazy" alt="boy" style="  border-radius: 17px;" class="w3-image" width="992" height="1108"> -->
	</div>


  <div class="w3-padding-64 w3-content w3-text-grey w3-white" id="call" style="    padding: 20px;">
    <h2 class="w3-text-dark-grey"><?php echo $info[1]['judul_inf']; ?></h2>
    <hr style="width:200px" class="w3-opacity">
    <div class="w3-section">
     <?php echo $info[1]['urai_inf']; ?>
      </div>
</div>

	  <div class="w3-content w3-justify w3-text-grey w3-padding-64 w3-white" id="bencana" style="    padding: 20px;">
    <h2 class="w3-text-dark-grey">Informasi Kebencanaan dan Titik Rawan</h2>
    <hr style="width:200px" class="w3-opacity">
<!--    <p>Informasi titik kumpul / titik aman terdekat.</p>-->
    <p><b>Peta Dampak Bencana Gunung Semeru</b></p>
			<div class="container" style="height: 30em">
			<iframe width="100%" height="100%" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/en/map/jaga-semeru_710005?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
			<p><a href="//umap.openstreetmap.fr/en/map/jaga-semeru_710005">See full screen</a></p>
    	</div>
			<br><br>
    	<?php
			if(!empty($info[2]['urai_inf'])) {
					?>
					<h3><?php echo $info[2]['judul_inf'] ?></h3>
					  <hr style="width:200px" class="w3-opacity">
					<?php
					echo $info[2]['urai_inf'];
				}
    	?>
    <h3>Informasi status Gunung Semeru saat ini</h3>
		<style media="screen">
			.timeline-title a {
				color: #000;
			}
			.badge{
				color : #fff;
				background-color: #fc8f1b;
			}
		</style>
    	<div class="container" style="background-color: aliceblue;    border-radius: 15px;    padding: 20px;">
		<!-- <img src="/asset/status.png" loading="lazy" alt="boy" style="  border-radius: 17px;" class="w3-image" > -->
    	<?php
    				$dt = date('Y-m-d',strtotime('-1 months'));
    	$html = file_get_contents("https://magma.esdm.go.id/v1/gunung-api/laporan/search/q?code=SMR&start=".$dt."&end=".date('Y-m-d')."");
		$start = stripos($html, 'body');
		$end = stripos($html, '/body', $offset = $start);
		$length = $end - $start;
		$htmlSection = substr($html, $start, $length);
		preg_match_all("'<div class=\"timeline-body\">(.*?)</div>'si", $htmlSection, $matches);
		$listItems = $matches[1];
		foreach ($listItems as $k => $item) {
    	 preg_match_all("'<p class=\"timeline-date\">(.*?)</p>'si", $item, $yearMatch);
   	 if(!empty($yearMatch[0][0])) {
   	 	 echo "<p><b>".$yearMatch[0][0]."</b></p>";
   	 	}
	    preg_match_all("'<p class=\"timeline-title\">(.*?)</p>'si", $item, $nameMatch);
   	 if(!empty($nameMatch[0][0])) {
   	 	 echo "<h3>".$nameMatch[0][0]."</h3>";
   	 	}
   	preg_match_all("'<p>(.*?)</p>'si", $item, $urMatch);
   		if(!empty($urMatch[0][0])) {
   	 	 echo "<p>".$urMatch[0][0]."</p>";
   	 	}
			if($k >= 1) {
   	 		break;
				}
					}
    	?>
			Sumber : <a href="https://magma.esdm.go.id/">magma.esdm.go.id</a>
    	</div>
			<br>
    	<h4><b>Informasi Lokasi Evakuasi Pengungsi Terdekat</b></h4>
    	<div class="zoom-img">
					<div id="lokev">

					</div>
				<br>
    	  <!-- <img id="myimage" loading="lazy" src="/asset/rawan.jpg" class="img-fluid" > -->
    	</div>
			<hr>
			<style media="screen">
				.media{
					display: block !important;
				}
			</style>
					<!--p>Informasi Penyakit yang banyak muncul di pengungsian.</p>
					<img id="myimage" loading="lazy" src="/asset/pny.jpg" class="img-fluid" !-->
					<hr>
			    <p><h3><?php echo $info[4]['judul_inf'] ?></h3></p>
						<?php echo $info[4]['urai_inf'] ?>
				<!-- <p>Informasi Tempat Ibadah, Sekolah, Kantor, Dapur Umum dll. (Segera) </p> -->
				 <hr>
					<p><h3><?php echo $info[3]['judul_inf'] ?></h3></p>
							<?php echo $info[3]['urai_inf'] ?>
                    <!-- <div class="row">
                        <div class="col">
                             <a href="asset/hunta/1.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/1.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
                        <div class="col">
                             <a href="asset/hunta/2.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/2.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
                        <div class="col">
                             <a href="asset/hunta/3.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/3.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
                        <div class="col">
                             <a href="asset/hunta/4.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/4.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
										</div>
  <div class="row">
    <div class="col">
                             <a href="asset/hunta/7.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/7.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
    <div class="col">
                             <a href="asset/hunta/8.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/8.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
    <div class="col">
                             <a href="asset/hunta/9.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/9.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
    <div class="col">
                             <a href="asset/hunta/10.jpeg" target="_blank">  <img loading="lazy" src="asset/hunta/10.jpeg" class="img-thumbnail" width="100%" alt="huntap"> </a>
                        </div>
                    </div> -->
                <br>
			<p><b>Video & Artikel</b></p>
				<div class="container" style="padding:0px">
					<div class="row">
							<div class="col">
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ORX2ZrrI2vM" title="Zona Integrasi Puskesmas Candipuro 2021" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
					</div>
					</div><br>
				<div class="container" style="padding:0px">
					<?php
					$arr=array(
					"ssl"=>array(
					"verify_peer"=>false,
					"verify_peer_name"=>false,
					),
					);
				$html = file_get_contents("https://pkmcandipuro.dinkesp2kb.lumajangkab.go.id/berita", false, stream_context_create($arr));
				$start = stripos($html, 'body');
				$end = stripos($html, '/body', $offset = $start);
				$length = $end - $start;
				$htmlSection = substr($html, $start, $length);
				preg_match_all("'<div class=\"media mb-3\">(.*?)</div>'si", $htmlSection, $matches);
				$listItems = $matches[0];

					 ?>
					 <div class="row">
					 		<div class="col">
					 			<?php echo $listItems[0]; ?>
					 		</div>
						</div>
					 </div>

					 <div class="row">
							<div class="col">
								<?php echo $listItems[1]; ?>
							</div>
					 </div>


					</div>
					<a target='_blank' href="https://pkmcandipuro.dinkesp2kb.lumajangkab.go.id/berita" class="btn btn-light" style="float: right;">Berita Lainnya</a>
					<br>
						<br>
		</div>


	 <!--<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="kesehatan">
    <h2 class="w3-text-dark-grey">Peduli Kesehatan Pengungsi APG Semeru</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Masyarakat memberi informasi.</p>
	</div>-->
	<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="keluhan" style="background-color: aliceblue;    border-radius: 15px;    padding: 20px;">
	<script type="text/javascript" >

function getLocation() {
	var x = document.getElementById("lok");
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition,
	function() {
		alert("Aktifkan lokasi browser anda. Lokasi dibutuhkan untuk respond cepat kita dalam penanganan");
		$("#lok").val("Lokasi tidak aktif");
		$("#lokp").val("Lokasi tidak aktif");
		$("#atensi").html("Aktifkan lokasi browser anda. Lokasi dibutuhkan untuk respond cepat kita dalam penanganan");
		$("#atensii").html("Aktifkan lokasi browser anda. Lokasi dibutuhkan untuk respond cepat kita dalam penanganan");

           }
       );
  }
}
function getev(lat,lng) {
	var request = new XMLHttpRequest();
		var params = "lat="+lat+"&lng="+lng;
		request.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
						var obj = JSON.parse(this.responseText);
						obj.forEach(function(value, idx, array){
								$('#lokev').append("<br><div><h5><b>"+value.nama+"</b></h5><span style='color: #fff;   background-color: #1da39c;   padding: 8px; border-radius: 7px;' >	Jarak : "+numberWithCommas((value.distance*1000).toFixed(2))+" meter </span><a href='https://www.google.com/maps?q="+value.lat+","+value.lng+"' target='_blank' style='color: #fff;   background-color: #22aeff; margin-left: 5px;  padding: 8px; border-radius: 7px;'><i class='fa fa-map-marker' aria-hidden='true'></i> Map</a><div>");
						})

				}
		};
		request.open('POST', '<?php echo base_url()."main/getlokev" ?>', true);
		//request.setRequestHeader('api-key', 'your-api-key');
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		request.send(params);
}
function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}
getLocation();
function showPosition(position) {
	getev(position.coords.latitude, position.coords.longitude);
	var x = document.getElementById("lok");
	var xx = document.getElementById("lokp");
	var isi = position.coords.latitude +";"+ position.coords.longitude;
  x.value = isi;
	xx.value = isi;
}
		$(function(){
		function rescaleCaptcha(){
				var width = $('.g-recaptcha').parent().width();
				var scale;
				if (width < 302) {
					scale = width / 302;
				} else{
					scale = 1.0;
				}

				$('.g-recaptcha').css('transform', 'scale(' + scale + ')');
				$('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
				$('.g-recaptcha').css('transform-origin', '0 0');
				$('.g-recaptcha').css('-webkit-transform-origin', '0 0');
				}
				rescaleCaptcha();
				$( window ).resize(function() { rescaleCaptcha(); });

		});
	</script>
    <h2 class="w3-text-dark-grey">Keluhan Kesehatan Pengungsi APG Semeru</h2>
    <hr style="width:200px" class="w3-opacity">
    <form action="main/keluhan" method="post" >
    	NIK : <input name="nik" class="form-control" placeholder="Nomor KTP / Nomor Induk Kependudukan" required />
    	Nama : <input name="nama" class="form-control" placeholder="Nama Lengkap" required/>
    	Alamat : <input name="alamat" class="form-control" placeholder="Alamat Pengungsi" required/>
    	No. Telp / Whatsapp : <input name="telp" class="form-control" placeholder="No. Telp" required/>
    	Keluhan : <input name="kel" class="form-control" placeholder="Keluhan Kesehatan" required/>
    	Lokasi : <input name="lok" id="lok" class="form-control" readonly="true" required/>
    	<span id="atensi" style="color: #ff0000"></span><br>
				<!-- <div class="g-recaptcha" data-sitekey="6LfdV2AiAAAAADQb8vRvGKZET8sX57X8Bk4dUBqF"></div> -->
    	<button type="submit" style="margin-top: 5px"  class="btn btn-secondary">Kirim</button>
    </form>
	</div>

<br>
	<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="peduli" style="background-color: floralwhite;    border-radius: 15px;    padding: 20px;">
    <h2 class="w3-text-dark-grey">Peduli Pengungsi APG Semeru</h2>
    <hr style="width:200px" class="w3-opacity">
		<form action="main/peduli" method="post" >
			NIK : <input name="nik" class="form-control" placeholder="Nomor KTP / Nomor Induk Kependudukan"  />
			Nama : <input name="nama" class="form-control" placeholder="Nama Lengkap" required/>
			Alamat : <input name="alamat" class="form-control" placeholder="Alamat" required/>
			No. Telp / Whatsapp : <input name="telp" class="form-control" placeholder="No. Telp" required/>
			Jenis Informasi : <select name="jenis" class="form-control" placeholder="Jenis" required onchange="if(this.value == '2'){ $('#nilai').show(); } else{ $('#nilai').hide(); }">
				<option value="1">Informasi</option>
				<option value="2">Bantuan</option>
			</select>
			Informasi : <input name="info" class="form-control" placeholder="Informasi yang dapat diberikan" required/>
			<input type="text" name="nilai" id="nilai" class="form-control" placeholder="Nilai Bantuan" style="display: none;margin-top: 4px"/>
			Boleh di Publikasikan ? <input type="checkbox" name="pub" class="form-control" value="1" />
			Lokasi : <input name="lok" id="lokp" class="form-control" readonly="true" required/>
			<span id="atensii" style="color: #ff0000"></span><br>
<!-- <div class="g-recaptcha" data-sitekey="6LfdV2AiAAAAADQb8vRvGKZET8sX57X8Bk4dUBqF"></div> -->
			<button type="submit" style="margin-top: 5px"  class="btn btn-secondary">Kirim</button>
		</form>
	</div>

	<div class="w3-content w3-justify w3-text-grey w3-padding-64 w3-white" id="agenda" style="    padding: 20px;">
    <h2 class="w3-text-dark-grey">Agenda Kesehatan Masyarakat</h2>
    <hr style="width:200px" class="w3-opacity">
  			<?php
				setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID');
					date_default_timezone_set('Asia/Jakarta');
					echo "<b style='background-color: #0cbd00; padding: 6px; border-radius: 10px; color: #fff;'>Jadwal Hari ini</b> ".strftime("%A. %e %B %Y")."<br><br>";
					if (!empty($agenda)) {
						foreach ($agenda as $key => $v) {
							?>
						<div >
							<p><h4><b><?php echo $v['nama']; ?></b></h4> <span style="color: #fff;   background-color: #1da39c;   padding: 8px; border-radius: 7px;" ><?php echo  $v['lokasi']; ?></span></div></p>

							<?php
						}
					}else{
						echo "Tidak ada agenda hari ini ..";
						?>
					 <hr>
						<?php
					}
					//print_r($agd);
					if (!empty($agd)) {
						?>
                            <hr>
						<div >

							<h5><b><?php echo $agd[0]['nama']; ?></b></h5>
							<p><b style="background-color: #ef9a00; padding: 6px; border-radius: 10px; color: #fff;" >Segera</b>	<?php echo strftime("%A. %e %B %Y", strtotime($agd[0]['tgl'])); ?></p>
							<span style="color: #fff;   background-color: #1da39c;   padding: 8px; border-radius: 7px;" ><?php echo  $agd[0]['lokasi']; ?> </span></div>
						<?php
					}
			 ?>
			 	<br> <p> <a href="/main/agenda" target="_blank" class="btn btn-light" style="float: right">Jadwal Agenda</a></p>
	</div>
			<div class="w3-content w3-justify w3-text-grey w3-padding-64 w3-white" id="relawan" style="    padding: 20px;">
    <h2 class="w3-text-dark-grey">Pendaftaran Relawan</h2>
    <hr style="width:200px" class="w3-opacity">
		<form action="main/relawan" method="post" enctype="multipart/form-data" >
			NIK : <input name="nik" class="form-control" placeholder="Nomor KTP / Nomor Induk Kependudukan" required />
			Nama : <input name="nama" class="form-control" placeholder="Nama Lengkap" required/>
			Alamat : <input name="alamat" class="form-control" placeholder="Alamat Relawan" required />
			No. Telp / Whatsapp : <input name="telp" class="form-control" placeholder="No. Telp" required />
			Keahlian : <select name="jabatan" class="form-control" placeholder="Keahlian" required>
				<option value="Logistik">Logistik</option>
				<option value="Kesehatan">Kesehatan</option>
				<option value="Dapur Umum">Dapur Umum</option>
				<option value="Penanganan Pengungsi">Penanganan Pengungsi</option>
				<option value="SAR & Evakuasi">SAR & Evakuasi</option>
				<option value="Transportasi">Transportasi</option>
				<option value="Pendidikan">Pendidikan</option>
				<option value="Psikososial">Psikososial</option>
				<option value="Keamanan">Keamanan</option>
				<option value="Air dan Sanitasi">Air dan Sanitasi</option>
			</select>
			Jangkauan : <input name="jangkauan" class="form-control" placeholder="Lingkup Desa, Dusun, atau RW" required/>
			Foto : <input name="foto" type="file" class="form-control"   required/><br>
			<!-- <div class="g-recaptcha" data-sitekey="6LfdV2AiAAAAADQb8vRvGKZET8sX57X8Bk4dUBqF"></div> -->
			<button type="submit" style="margin-top: 5px"  class="btn btn-secondary">Kirim</button>
		</form>
    <!-- <p> Dermawan Potensial.</p> -->
			<!-- <table class="table">
					<thead>
						<th>No.</th>
						<th>Nama</th>
						<th>Unit</th>
						<th>Jangkauan</th>
					</thead>
					<tbody>
						<?php
							foreach ($relawan as $key => $v) {
								?>
								<tr>
									<td><?php echo $key+1; ?></td>
									<td><?php echo $v['nama']; ?></td>
									<td><?php echo $v['jabatan']; ?></td>
									<td><?php echo "Desa, Dusun dan RW"; ?></td>

								</tr>
								<?php
							}
						?>
					</tbody>
			</table> -->
	</div>

    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  <a href="https://instagram.com/puskesmas.candipuro" >
    <i class="fa fa-instagram w3-hover-opacity"> </i>
    </a>
    <p class="w3-medium">Puskesmas Candipuro Kab. Lumajang  <a href="<?php echo base_url(); ?>" class="w3-hover-text-green">SI MEDIC</a></p>
		<p class="w3-medium">V. 2024.1</p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>
<script type="text/javascript" >

</script>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <style type="text/css">
      	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
 /* width: 360px;*/
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  text-align: center;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #3e3e3e;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #4e4e4e;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.containerx {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.containerx:before, .containerx:after {
  content: "";
  display: block;
  clear: both;
}
.containerx .info {
  margin: 50px auto;
  text-align: center;
}
.containerx .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.containerx .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.containerx .info span a {
  color: #000000;
  text-decoration: none;
}
.containerx .info span .fa {
  color: #EF3B3A;
}
      </style>
 		<center>	<div class="login-page">
  <div class="form">
    <form class="login-form" action="main/login" method="post">
      <input type="text" name="username" placeholder="username" required />
      <input type="password" name="password" placeholder="password" required />
      <button type="submit">login</button>
    </form>
  </div>
	</div> </center>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
     </div>
  	 </div>
	</div>

</body>
</html>
