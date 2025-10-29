<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

		public function index()
		{
			$wh = array('tgl' => date('Y-m-d'));
			$this->db->where($wh);
			$data['agenda'] = $this->db->get('tbl_agenda')->result_array();
			$data['info'] = $this->db->get('tbl_info')->result_array();
			$wh = array('tgl >' => date('Y-m-d'));
			$this->db->where($wh);
			$this->db->limit(1);
			$data['agd'] = $this->db->get('tbl_agenda')->result_array();
			$this->db->limit(7);
			$this->db->order_by('id_rl', 'DESC');
			$this->db->where('status', 1);
			$data['relawan'] = $this->db->get('tbl_relawan')->result_array();

			$this->load->view('v_main',$data);
		}
		function agenda()
		{
			$dt = date('Y-m-d',strtotime('-15 days'));
			$dts = date('Y-m-d',strtotime('+15 days'));
			$this->db->where('tgl >=', $dt);
			$this->db->where('tgl <=', $dts);
			$this->db->order_by('tgl', 'ASC');
			$data['agenda'] = $this->db->get('tbl_agenda')->result_array();
			$this->load->view('user/header');
			$this->load->view('v_agd', $data);
			$this->load->view('user/footer');
		}
		function getlokev()
		{
			$lat= $this->input->post('lat');
			$lng= $this->input->post('lng');
			$query = "SELECT
			nama,lat,lng,( 6371 * acos( cos( radians(".$lat.") ) *
			cos( radians( lat ) ) * cos( radians( lng ) -
			radians( ".$lng." ) ) + sin( radians( ".$lat." ) ) *
			sin( radians( lat ) ) ) ) AS distance	FROM tbl_evakuasi
			HAVING distance < 25	ORDER BY distance ASC LIMIT 0 , 3";
			$data = $this->db->query($query)->result_array();
			echo json_encode($data);
		}
		function keluhan()
		{

			$secret = "6LfdV2AiAAAAAMYbmRz4o4amp03GyOsTJ0n-bf4G";
			$response = $_POST['g-recaptcha-response'];
			$remoteip = $_SERVER['REMOTE_ADDR'];
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response."&remoteip=".$remoteip;
			$data = file_get_contents($url);
			$row = json_decode($data, true);
			if($row['success'] == "true") {
				$data = $_POST;
			unset($data['g-recaptcha-response']);
			if (empty($data)) {
				$data = $_POST;
				header('Location: '.base_url());
			}else {
				$this->db->like('nik', $_POST['nik']);
				$this->db->or_like('nama', $_POST['nama']);
				$dat = $this->db->get("tbl_pengungsi")->num_rows();
				$ver = "";
				if ($dat == 0) {
					$ver = "Bukan Pengungsi";
				}else {
					$ver = "Termasuk Pengungsi";
				}
				$lok = explode(';', $this->input->post('lok'));
				unset($data['lok']);
				$data['lat'] = $lok[0];
				$data['lng'] = $lok[1];
				$this->db->insert('tbl_keluhan', $data);
				//print_r($data);
				$dt = date('l, d F Y H:i:s');
				$pesan = "--NOTIF KELUHAN-- \n$dt \n\nNama : ".$_POST['nama']."\nAlamat : ".$_POST['alamat']."\nTelp : ".$_POST['telp']."\nKeluhan : ".$_POST['kel']."\nVerif : ".$ver."\n https://www.google.com/maps?q=".$lok[0].",".$lok[1];
				$this->sendmc($pesan);
				$this->session->set_flashdata('msg', 'Data Telah Terkirim, Setelah verifikasi, Petugas akan segera menghubungi anda.');
					header('Location: '.base_url());
				}
			}else {
				$this->session->set_flashdata('msg', 'Anda terdeteksi robot');
					header('Location: '.base_url());
			}

		}

		function peduli()
		{

			$secret = "6LfdV2AiAAAAAMYbmRz4o4amp03GyOsTJ0n-bf4G";
			$response = $_POST['g-recaptcha-response'];
			$remoteip = $_SERVER['REMOTE_ADDR'];
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response."&remoteip=".$remoteip;
			$data = file_get_contents($url);
			$row = json_decode($data, true);
			if($row['success'] == "true") {
					$data = $_POST;
				unset($data['g-recaptcha-response']);
			if (empty($data)) {
				header('Location: '.base_url());
			}else {
				$lok = explode(';', $this->input->post('lok'));
				unset($data['lok']);
				$data['lat'] = $lok[0];
				$data['lng'] = $lok[1];
				$this->db->insert('tbl_peduli', $data);
				//print_r($data);
				$dt = date('l, d F Y H:i:s');
				$pesan = "--NOTIF PEDULI-- \n$dt \n\nNama : ".$_POST['nama']."\nAlamat : ".$_POST['alamat']."\nTelp : ".$_POST['telp']."\nInformasi : ".$_POST['info']."\n https://www.google.com/maps?q=".$lok[0].",".$lok[1];
				$this->sendmc($pesan);
				$this->session->set_flashdata('msg', 'Data Telah Terkirim, Petugas akan segera menghubungi anda.');
					header('Location: '.base_url());
			}
		}else {
			$this->session->set_flashdata('msg', 'Anda terdeteksi robot');
				header('Location: '.base_url());
		}
		}
		function relawan()
		{
		    $secret = "6LfdV2AiAAAAAMYbmRz4o4amp03GyOsTJ0n-bf4G";
		    $response = $_POST['g-recaptcha-response'];
		    $remoteip = $_SERVER['REMOTE_ADDR'];
		    $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response."&remoteip=".$remoteip;
		    $data = file_get_contents($url);
		    $row = json_decode($data, true);
		    if($row['success'] == "true") {
		        $data = $_POST;
		        unset($data['g-recaptcha-response']);
		        // print_r($_FILES["foto"]);
		        if (empty($data)) {
		            header('Location: '.base_url());
		        } else {
		            $target_dir = "asset/upload/relawan/";
		            $file = $_FILES["foto"];
		            $allowedMimeTypes = ['image/jpeg', 'image/png'];
		            $fileMimeType = mime_content_type($file['tmp_name']);

		            // Check MIME type
		            if (!in_array($fileMimeType, $allowedMimeTypes)) {
		                $this->session->set_flashdata('msg', 'Tipe file salah, pastikan jpg, jpeg, atau png');
		                header('Location: '.base_url());
		                exit();
		            }

		            $ex = explode('.', basename($file["name"]));
		            $cex = count($ex) - 1;
		            if ($ex[$cex] != "jpg" && $ex[$cex] != "png" && $ex[$cex] != "jpeg") {
		                $this->session->set_flashdata('msg', 'Tipe file salah, pastikan jpg, jpeg, atau png');
		                header('Location: '.base_url());
		                exit();
		            }

		            $ftfile = $target_dir . $this->RandomString() . "." . $ex[$cex];
		            $ftsize = $file['size'];
		            $fttmp = $file['tmp_name'];
		            if ($ftsize < 2097152) {
		                move_uploaded_file($fttmp, $ftfile);
		                $data["foto"] = $ftfile;
		            } else {
		                $this->session->set_flashdata('msg', 'File Terlalu Besar');
		                header('Location: '.base_url());
		                exit();
		            }

		            $this->db->insert('tbl_relawan', $data);
		            $dt = date('l, d F Y H:i:s');
		            $pesan = "--NOTIF RELAWAN-- \n$dt \n\nNama : " . $_POST['nama'] . "\nAlamat : " . $_POST['alamat'] . "\nTelp : " . $_POST['telp'] . "\nKeahlian : " . $_POST['jabatan'] . "\n";
		            $this->sendmc($pesan);
		            $this->session->set_flashdata('msg', 'Data Telah Terkirim, Petugas akan segera verifikasi data anda.');
		            header('Location: '.base_url());
		        }
		    } else {
		        $this->session->set_flashdata('msg', 'Anda terdeteksi robot');
		        header('Location: '.base_url());
		    }
		}

		function RandomString($length = 10) {
		 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			 $charactersLength = strlen($characters);
			 $randomString = '';
		 for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			 }
		 return $randomString;
		}


		function login() {
			print_r($_POST);
			$this->proses_login($_POST);
		//	header('Location: '.base_url());
			}

			public function proses_login($data)
  {
    $user = $data['username'];
    $pass = $data['password'];
			$pass = md5($pass);
			$wh = array('username' => $user, 'password' => $pass );
			$this->db->where($wh);
    $data= $this->db->get("tbl_login")->result_array();
    $d = count($data);
    if($d >= 1 ){
			foreach ($data as $key) {
				$newdata = array(
					'id_login'  => $key['id_login'],
					'username'  => $key['username'],
					'level' => $key['level'],
					'jenis'  => $key['jenis'],);
		    $this->session->set_userdata($newdata);
			}
			header("Location: ".base_url()."user");
      //echo json_encode($newdata);
    }
    else{
				$this->session->set_flashdata('msg', 'Username / Password Salah');
				header("Location: ".base_url());
    }
  }

		function scrap() {
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
   	 	 echo $yearMatch[0][0];
   	 	}
	    preg_match_all("'<p class=\"timeline-title\">(.*?)</p>'si", $item, $nameMatch);
   	 if(!empty($nameMatch[0][0])) {
   	 	 echo $nameMatch[0][0];
   	 	}
   	preg_match_all("'<p>(.*?)</p>'si", $item, $urMatch);
   		if(!empty($urMatch[0][0])) {
   	 	 echo $urMatch[0][0];
   	 	}
			if($k >= 1) {
   	 		break;
				}
					}
			}
          function sendmc($pesan){
            $token = "5701568158:AAG_7rTAD-QNrppwCtWnyg4HXJTDIXcgNMc";
            $id = "-1001692805720";
   		  $API = "https://api.telegram.org/bot".$token."/sendmessage?chat_id=".$id."&text=".urlencode($pesan);
   		  $ch = curl_init();
   		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    		  curl_setopt($ch, CURLOPT_URL, $API);
    		  $result = curl_exec($ch);
    		  curl_close($ch);
    		  return $result;
			}

			function scrapb() {
				$arr=array(
    		"ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    		),
				);
			$html = file_get_contents("https://pkmpenanggal.dinkesp2kb.lumajangkab.go.id/berita", false, stream_context_create($arr));
			$start = stripos($html, 'body');
			$end = stripos($html, '/body', $offset = $start);
			$length = $end - $start;
			$htmlSection = substr($html, $start, $length);
			preg_match_all("'<div class=\"media mb-3\">(.*?)</div>'si", $htmlSection, $matches);
			$listItems = $matches[0];
			print_r($listItems[0]);
			print_r($listItems[1]);
				}
				public function scrapa()
				{
					$arr=array(
			"ssl"=>array(
					"verify_peer"=>false,
					"verify_peer_name"=>false,
					),
					);
				$html = file_get_contents("https://pkmpenanggal.dinkesp2kb.lumajangkab.go.id", false, stream_context_create($arr));
				$start = stripos($html, 'body');
				$end = stripos($html, '/body', $offset = $start);
				$length = $end - $start;
				$htmlSection = substr($html, $start, $length);
				preg_match_all("'<div class=\"border-card\">(.*?)</div>'si", $htmlSection, $matches);
				$listItems = $matches[1];
					echo $listItems[1];
				}


				public function searchf()
			{
				$id = $this->uri->segment(3);
					$directory = $id.'/';

					$files = [];
					$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

					// Set timestamp untuk 1 Agustus 2024
					$targetDate = strtotime('2024-08-01');

					foreach ($iterator as $file) {
							if ($file->isFile()) {
									// Ambil waktu modifikasi file
									$fileModificationTime = filemtime($file->getPathname());

									// Periksa apakah waktu modifikasi lebih besar dari target date (setelah Juli 2024)
									if ($fileModificationTime >= $targetDate) {
											$files[] = $file->getPathname();
									}
							}
					}

					print_r($files);
			}

}
