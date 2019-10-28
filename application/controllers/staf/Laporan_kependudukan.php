<?php
Class Laporan_kependudukan extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('M_kependudukan');
    }

    public function index(){
        $pdf = new FPDF("P","cm","A4");

        $pdf->SetMargins(1.5,1,1);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','B',11);
        $pdf->Image('http://1.bp.blogspot.com/-NDXYc5wtYUE/TyvuZ-pY59I/AAAAAAAAEvw/WRbu3n4OWV8/s1600/LOGO+KABUPATEN+BOYOLALI.png',1,0.5,2,2.3);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetX(6.5);            
        $pdf->MultiCell(20.5,0.5,'PEMERINTAH KABUPATEN BOYOLALI',0,'L');
        $pdf->SetFont('Arial','B',12);
        $pdf->SetX(7.9);
        $pdf->MultiCell(21.5,0.5,'KECAMATAN SAMBI  ',0,'L');    
        $pdf->SetFont('Arial','B',10);
        $pdf->SetX(4);
        $pdf->MultiCell(21.5,0.5,'Jl. Bangak-Simo, Dusun I, Sambi, Kabupaten Boyolali, Jawa Tengah 57376',0,'L');
        $pdf->SetFont('Arial','',10);
        $pdf->SetX(6.9);
        $pdf->MultiCell(20,0.5,'website : sambi-kecamatan.coffee.web.id',0,'L');
        $pdf->Line(0,3.1,28.5,3.1);  
        $pdf->SetLineWidth(0.1);      
        $pdf->Line(0,3.2,28.5,3.2);   
        $pdf->SetLineWidth(0);
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(18,0.7,"Laporan Pengelolaan Kependudukan",0,10,'C');
        $pdf->Cell(18.5,0.7,"Kecamatan Sambi Tahun 2018",0,10,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',8);


        $pdf->Cell(1.8, 0.8, 'ID Desa', 1, 0, 'C');
        $pdf->Cell(3, 0.8, 'Laki - Laki', 1, 0, 'C');
        $pdf->Cell(3, 0.8, 'Perempuan', 1, 0, 'C');
        $pdf->Cell(3, 0.8, 'Tahun', 1, 0, 'C');

        $pdf->SetFont('Arial','',8);


        $dataWilayah = $this->db->get('tb_kependudukan')->result();
        foreach ($dataWilayah as $row){
          $pdf->ln();



          $pdf->Cell(1.8,0.8,$row->id_desa,1,0, 'C');
          $pdf->Cell(3,0.8,$row->laki_laki,1,0, 'C');
          $pdf->Cell(3,0.8,$row->perempuan,1,0, 'C');
          $pdf->Cell(3,0.8,$row->tahun,1,0, 'C');
      }

      $pdf->Output();

  }}

