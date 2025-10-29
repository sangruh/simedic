<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
    public function Header() {
     $image_file = K_PATH_IMAGES.'logo.png';
         $this->Ln(3);
         $this->SetFont('times', '', 15);
         $this->Image($image_file, 21, 5, 21, 32, 'PNG', '', '', false, 400, '', false, false, 0, false, false, false);
         $this->Cell(0, 0, 'PEMERINTAH KABUPATEN LUMAJANG', 0, 1, 'C', 0, '', 0);
         $this->SetFont('times', 'B', 25);
         $this->Cell(0, 0, 'INSPEKTORAT DAERAH', 0, 1, 'C', 0, '', 1);
         $this->SetFont('helvetica', '', 9);
         $this->Cell(0, 0, 'Jalan Arif Rahman Hakim No. 1 Telp. (0334) 881 485; Fax (0334) 894 126', 0, 1, 'C', 0, '', 0);
         $this->SetFont('helvetica', '', 9);
         $this->Cell(0, 0, 'e-mail : inspektorat@lumajangkab.go.id', 0, 1, 'C', 0, '', 0);
         $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
         $this->Line(400, 39, 0, 39, $style);
         $this->SetFont('helvetica', '', 12);
         $this->Cell(0, 0, 'L U M A J A N G', 0, 1, 'C', 0, '', 0);
         //$this->Cell(0, 0, '', 0, 1, 'C', 0, '', 0);
         $this->SetFont('helvetica', 'U', 20);
         $this->Cell(0, 0, 'BUKTI PENGADUAN', 0, 1, 'C', 0, '', 0);
         $this->Ln(6);
 }
}
