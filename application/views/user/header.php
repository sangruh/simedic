<!DOCTYPE html>
<html>
<head>
<title>SI MEDIC - Pusmesmas Candipuro Kab. Lumajang</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="<?php  echo base_url('asset/');?>w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="/asset/simedic.png" type="image/icon type">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
a {
	color: #000;
	}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 130px;background: #fff;}
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


 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

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
</head>
<body class="w3-white">
<div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
<hr>
<?php
$level = $this->session->level;
	if ($level != "") {
		?>
		<a href="/user/pasien" onclick="w3_open()" class="w3-bar-item w3-button" style="width:100% !important;line-height: 3em;"><i class="fa fa-group"></i>&nbsp;&nbsp; DATA PASIEN</a>
		<a href="/user/pengungsi" onclick="w3_open()" class="w3-bar-item w3-button" style="width:100% !important;line-height: 3em;"><i class="fa fa-group"></i>&nbsp;&nbsp; DATA PENGUNGSI</a>
		<a href="/user/pekerja" onclick="w3_open()" class="w3-bar-item w3-button" style="width:100% !important;line-height: 3em;"><i class="fa fa-group"></i>&nbsp;&nbsp; DATA PEKERJA</a>
		<a href="/user/keluhan" onclick="w3_open()" class="w3-bar-item w3-button" style="width:100% !important;line-height: 3em;"><i class="fa fa-heartbeat"></i>&nbsp;&nbsp; KELUHAN</a>
		<a href="/user/peduli" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-smile-o"></i>&nbsp;&nbsp; PEDULI PENGUNGSI</a>
		<a href="/user/agenda" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-calendar"></i>&nbsp;&nbsp;AGENDA KESEHATAN</a>
		<a href="/user/relawan" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-users"></i>&nbsp;&nbsp;DATA RELAWAN</a>
		<a href="/user/evakuasi" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;LOKASI EVAKUASI</a>
		<a href="/user/info" onclick="w3_open()" class="w3-bar-item w3-button" style="line-height: 3em;width:100% !important"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;INFORMASI UMUM</a>
		<a href="/user/logout" onclick="w3_open()" class="w3-bar-item w3-button" style="width:100% !important;line-height: 3em;"><i class="fa fa-sign-out"></i>&nbsp;&nbsp; LOG OUT</a>
		<?php
	}
		?>
</div>
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="/" ><img src="/asset/simedic.png" loading="lazy" style="width:100%"></a>
<?php
	if ($level != "") {
		?>
		<a href="/user/pasien" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
	    <i class="fa fa-group w3-xxlarge"></i>
	    <p>DATA PASIEN</p>
	  </a>
		<a href="/user/pengungsi" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
			<i class="fa fa-group w3-xxlarge"></i>
			<p>DATA TERDAMPAK BENCANA</p>
		</a>
		<a href="/user/pekerja" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
			<i class="fa fa-group w3-xxlarge"></i>
			<p>DATA PEKERJA TAMBANG</p>
		</a>
		<a href="/user/keluhan" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
	    <i class="fa fa-heartbeat w3-xxlarge"></i>
	    <p>KELUHAN</p>
	  </a>
		<a href="/user/peduli" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
			 <i class="fa fa-smile-o w3-xxlarge"></i>
			 <p>PEDULI PENGUNGSI</p>
		 </a>
		 <a href="/user/agenda" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
	     <i class="fa fa-calendar w3-xxlarge"></i>
	     <p>AGENDA KESEHATAN</p>
	   </a>
		 <a href="/user/relawan" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
			 <i class="fa fa-users w3-xxlarge"></i>
			 <p>DATA RELAWAN</p>
		 </a>
		 <a href="/user/evakuasi" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
			 <i class="fa fa-map-marker w3-xxlarge"></i>
			 <p>LOKASI EVAKUASI</p>
		 </a>
		  <a href="/user/info" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
			 <i class="fa fa-info-circle w3-xxlarge"></i>
			 <p>INFORMASI UMUM</p>
		 </a>
	    <a href="/user/logout" class="w3-bar-item w3-button w3-padding-large w3-hover-white">
	    <i class="fa fa-sign-out w3-xxlarge"></i>
	    <p>LOG OUT</p>
	  </a>

		<?php
	}
?>
</nav>

<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-white  w3-center w3-small">
    <button onclick="w3_open()" class="w3-bar-item w3-button "  style="width:25% !important; float: right;"> <i class="fa fa-navicon w3-large"></i></button>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
