<?php

require_once APPPATH.'/third_party/fpdf/fpdf.php';

class pdf extends FPDF{

	function Header(){ 
		$this->SetFont('Times','B',13); 
		$this->Cell(205,5,'KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI',0,1,'C');
		$this->Cell(205,5,'TEKNOLOGI INFORMASI - FASILKOM TI',0,1,'C');
		$this->Cell(205,5,'UNIVERSITAS SUMATERA UTARA',0,1,'C');
		$this->Image('assets/img/logousu.png',12,5,25);
		$this->Ln(2);
		$this->SetFont('Arial','B',9);
		$this->Cell(215,7,'Jalan Alumni No. 3 Kampus USU Medan 20155, Sumatera Utara. Website: www.it.usu.ac.id',0,1,'C');
		$this->Cell(0,4,'Telp. Office:  +62 61 8222129, +62 61 8222129',0,1,'C');
		$this->Ln(1);
		// $this->MultiCell(0,4,'------------------------------------------------------------------------',0,1,'C');
		$this->Cell(0,1," ","B");
	}

	function Footer(){
	    $this->SetY(-15);
	    $this->SetFont('Arial','I',8);
	    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
	}

}
