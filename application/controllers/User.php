<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
		 public function __construct()
     {
             parent::__construct();
             $level = $this->session->level;
             $jenis = $this->session->jenis;
             if ($level == 1) {
             }elseif ($level == 2) {
                 header("Location: ".base_url(), true, 301);

             }else {
                header("Location: ".base_url(), true, 301);
             }
     }
		public function index()
		{
				$this->load->view('user/header');
				$this->load->view('user/v_user');
				$this->load->view('user/footer');
		}
		public function pengungsi()
		{
			$data['judul'] = "Terdampak Bencana";
			$data['jenis'] = "1";
			$this->db->order_by("nik", "ASC");
			$data['pengungsi'] = $this->db->get('tbl_pengungsi')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_png', $data);
			$this->load->view('user/footer');
		}
		public function pasien()
		{
			$data['judul'] = "Pasien Jiwa";
			$data['jenis'] = "2";
			$this->db->order_by("nik", "ASC");
			$data['pengungsi'] = $this->db->get('tbl_pasien')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_png', $data);
			$this->load->view('user/footer');
		}
		public function pekerja()
		{
			$data['judul'] = "Pekerja Tambang";
			$data['jenis'] = "3";
			$this->db->order_by("nik", "ASC");
			$data['pengungsi'] = $this->db->get('tbl_pekerja')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_png', $data);
			$this->load->view('user/footer');
		}
		public function modpng()
		{
			 $id = $this->session->id_login;
			$data = $_POST;
			if ($data['id_png'] == 0) {
						$data['login'] = $id;
						$this->db->insert('tbl_pengungsi', $data);
				}else {
						$this->db->where("id_png", $data['id_png']);
						unset($data['id_png']);
						$data['login'] = $id;
						$this->db->update('tbl_pengungsi', $data);
				}
			header("Location: ".base_url()."/user/pengungsi");
		}
		public function modpas()
		{
			 $id = $this->session->id_login;
			$data = $_POST;
			if ($data['id_png'] == 0) {
						$data['login'] = $id;
						$this->db->insert('tbl_pasien', $data);
				}else {
						$this->db->where("id_png", $data['id_png']);
						unset($data['id_png']);
						$data['login'] = $id;
						$this->db->update('tbl_pasien', $data);
				}
			header("Location: ".base_url()."/user/pasien");
		}
		public function modpkr()
		{
			 $id = $this->session->id_login;
			$data = $_POST;
			if ($data['id_png'] == 0) {
						$data['login'] = $id;
						$this->db->insert('tbl_pekerja', $data);
				}else {
						$this->db->where("id_png", $data['id_png']);
						unset($data['id_png']);
						$data['login'] = $id;
						$this->db->update('tbl_pekerja', $data);
				}
			header("Location: ".base_url()."/user/pekerja");
		}
		public function modinfo()
		{
			 $id = $this->session->id_login;
			$data = $_POST;
						$this->db->where("id_inf", $data['id_inf']);
						unset($data['id_inf']);
						unset($data['img_inf']);
						$data['login'] = $id;
						$this->db->update('tbl_info', $data);
			header("Location: ".base_url()."/user/info");
		}
		public function modagd()
		{
			 $id = $this->session->id_login;
			$data = $_POST;
			if ($data['id_ag'] == 0) {
				$data['login'] = $id;
						$this->db->insert('tbl_agenda', $data);
				}else {
						$this->db->where("id_ag", $data['id_ag']);
						$data['login'] = $id;
						unset($data['id_ag']);
						$this->db->update('tbl_agenda', $data);
				}
			header("Location: ".base_url()."/user/agenda");
		}
		public function modrla()
		{
			$id = $this->session->id_login;
			$data = $_POST;
			if ($data['id_rl'] == 0) {
						$data['login'] = $id;
						$this->db->insert('tbl_relawan', $data);
				}else {
						$this->db->where("id_rl", $data['id_rl']);
						$data['login'] = $id;
						unset($data['id_rl']);
						$this->db->update('tbl_relawan', $data);
				}
			header("Location: ".base_url()."/user/relawan");
		}
                public function modev()
                {
                         $id = $this->session->id_login;
                        $data = $_POST;
                        if ($data['id_ev'] == 0) {
                                                $data['login'] = $id;
                                                $this->db->insert('tbl_evakuasi', $data);
                                }else {
                                                $this->db->where("id_ev", $data['id_ev']);
                                                unset($data['id_ev']);
                                                $data['login'] = $id;
                                                $this->db->update('tbl_evakuasi', $data);
                                }
                        header("Location: ".base_url()."/user/evakuasi");
                }
                public function hapus($jenis, $id)
                {
                        $opsi = [
                                'pengungsi' => ['tabel' => 'tbl_pengungsi', 'id' => 'id_png', 'redirect' => '/user/pengungsi'],
                                'pasien' => ['tabel' => 'tbl_pasien', 'id' => 'id_png', 'redirect' => '/user/pasien'],
                                'pekerja' => ['tabel' => 'tbl_pekerja', 'id' => 'id_png', 'redirect' => '/user/pekerja'],
                        ];

                        if (!isset($opsi[$jenis])) {
                                show_404();
                        }

                        $this->db->where($opsi[$jenis]['id'], $id);
                        $this->db->delete($opsi[$jenis]['tabel']);

                        header("Location: " . base_url() . $opsi[$jenis]['redirect']);
                }
                public function modkelst()
                {
                    $id = $this->session->id_login;
                    $data = $_POST;
		    if ($_FILES['bukti']['size'] != 0 )
		    {
		        $target_dir = "asset/upload/tlkeluhan/";
		        $ex = explode('.', basename($_FILES["bukti"]["name"]));
		        $cex = count($ex) - 1;

		        $mimeType = mime_content_type($_FILES['bukti']['tmp_name']);
		        if (!in_array($mimeType, ['image/jpeg', 'image/png'])) {
		            echo "tipe file salah, pastikan jpg, jpeg atau png";
		            exit;
		        }

		        $ftfile = $target_dir . $this->RandomString() . "." . $ex[$cex];
		        $ftsize = $_FILES['bukti']['size'];
		        $fttmp = $_FILES['bukti']['tmp_name'];

		        if ($ftsize < 2097152) {
		            move_uploaded_file($fttmp, $ftfile);
		            $data["bukti"] = $ftfile;
		        } else {
		            echo "file terlalu besar";
		            exit;
		        }
		    }

		    if ($data['id_tkl'] == 0) {
		        $data['login'] = $id;
		        $this->db->insert('tbl_tlkeluhan', $data);
		        $this->db->where("id_klh", $data['id_klh']);
		        $this->db->update('tbl_keluhan', ['status' => 1]);
		        $dt = date('l, d F Y H:i:s');
		        $pesan = "--NOTIF TL KELUHAN-- \n$dt \n\nNama Petugas : " . $_POST['petugas'] . "\nKeterangan : " . $_POST['ket'] . "\n\nBukti TL bisa lewat login di website.";
		        $this->sendmc($pesan);
		    } else {
		        $this->db->where("id_tkl", $data['id_tkl']);
		        $data['login'] = $id;
		        unset($data['id_tkl']);
		        $this->db->update('tbl_tlkeluhan', $data);
		    }

		    header("Location: " . base_url() . "/user/keluhan");
		}

		public function modpdlst()
		{
		    $id = $this->session->id_login;
		    $data = $_POST;
		    if ($_FILES['bukti']['size'] != 0) {
		        $target_dir = "asset/upload/tlpeduli/";
		        $ex = explode('.', basename($_FILES["bukti"]["name"]));
		        $cex = count($ex) - 1;
		        $mime = mime_content_type($_FILES['bukti']['tmp_name']);

		        // Cek MIME type
		        if ($mime != 'image/jpeg' && $mime != 'image/png') {
		            echo "tipe file salah, pastikan jpg,jpeg atau png";
		            exit;
		        }

		        $ftfile = $target_dir . $this->RandomString() . "." . $ex[$cex];
		        $ftsize = $_FILES['bukti']['size'];
		        $fttmp = $_FILES['bukti']['tmp_name'];

		        if ($ftsize < 2097152) {
		            move_uploaded_file($fttmp, $ftfile);
		            $data["bukti"] = $ftfile;
		        } else {
		            echo "file terlalu besar";
		            exit;
		        }
		    }

		    if ($data['id_tpd'] == 0) {
		        $data['login'] = $id;
		        $this->db->insert('tbl_tlpeduli', $data);
		        $this->db->where("id_pdl", $data['id_pdl']);
		        $this->db->update('tbl_peduli', array('status' => 1));
		        $dt = date('l, d F Y H:i:s');
		        $pesan = "--NOTIF TL PEDULI-- \n$dt \n\nNama Petugas : " . $_POST['petugas'] . "\nKeterangan : " . $_POST['ket'] . "\n\nBukti TL bisa lewat login di website.";
		        $this->sendmc($pesan);
		    } else {
		        $this->db->where("id_tpd", $data['id_tpd']);
		        $data['login'] = $id;
		        unset($data['id_tpd']);
		        $this->db->update('tbl_tlpeduli', $data);
		    }
		    header("Location: " . base_url() . "/user/peduli");
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

		function verifrelawan()
		{
			$id = $this->input->post('id');
			$where = array('id_rl' => $id);
			$data = $this->db->get_where('tbl_relawan',$where)->result_array();
				$this->db->where("id_rl", $id);
			$txt ="";
			if ($data[0]['status'] == 1) {
				$this->db->update('tbl_relawan', array('status' => 0 ));
				$txt = "Relawan Dinonaktifkan";
			}else {
				$this->db->update('tbl_relawan', array('status' => 1 ));
				$txt = "Relawan Diaktifkan";
			}
			$dt = date('l, d F Y H:i:s');
			$pesan = "--NOTIF VERIF RELAWAN-- \n$dt \n\nNama Relawan : ".$data[0]['nama']."\nKeahlian : ".$data[0]['jabatan']."\n$txt \nData Selengkapnya bisa login di website";
			$this->sendmc($pesan);
			header("Location: ".base_url()."/user/relawan");
		}

		public function keluhan()
		{
			$this->db->order_by("nik", "ASC");
			$data['keluhan'] = $this->db->get('tbl_keluhan')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_keluhan', $data);
			$this->load->view('user/footer');
		}
		public function peduli()
		{
			$this->db->order_by("nik", "ASC");
			$data['peduli'] = $this->db->get('tbl_peduli')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_pdl', $data);
			$this->load->view('user/footer');
		}
		public function agenda()
		{
			$this->db->order_by("tgl", "ASC");
			$data['agenda'] = $this->db->get('tbl_agenda')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_agenda', $data);
			$this->load->view('user/footer');
		}
		public function relawan()
		{
			$this->db->order_by("id_rl", "ASC");
			$data['relawan'] = $this->db->get('tbl_relawan')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_relawan',$data);
			$this->load->view('user/footer');
		}

		public function info()
		{
			$this->db->order_by("id_inf", "ASC");
			$data['info'] = $this->db->get('tbl_info')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_info',$data);
			$this->load->view('user/footer');
		}

		public function evakuasi()
		{
			$this->db->order_by("id_ev", "ASC");
			$data['evakuasi'] = $this->db->get('tbl_evakuasi')->result_array();
			$this->load->view('user/header');
			$this->load->view('user/v_evakuasi',$data);
			$this->load->view('user/footer');
		}
		function logout()
		{
				session_destroy();
				$this->session->set_flashdata('msg', 'Log Out Berhasil');
				header("Location: ".base_url());
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
}
