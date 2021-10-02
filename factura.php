<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

    require('fpdf183/fpdf.php'); 

    class PDF extends fpdf

    {
        
        function Header()
        {
            // Logo
            $this->Image('./images/logo.png',10,8,50);
            $this->SetFont('Arial','B',20);
            // Movernos a la derecha
            $this->Cell(80);
            // Título
            $this->Cell(100,60,utf8_decode('Factura'),0,0,'C');
            // Salto de línea
            $this->Ln(10);
            $this->SetFont('Arial','B',10);
            $this->Cell(280,60,utf8_decode('Motivos: MaerskOficial'),0,0,'C');
            $this->Ln(20);
            $this->Line(20, 60, 210-20, 60);
            
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            
            // Número de página
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    //datos
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $codigo = $_SESSION['codigo'];
    $totalFactura = $_SESSION['total-factura'];
    $hoy = date("d-m-Y"); 
    $pdf = new PDF(); 
    $pdf->AddPage();
    $pdf->AliasNBPages();
    $pdf->SetFont('Arial','B',10);
    $pdf->Ln(40);
    $pdf->Cell(80,10,"Nombre: ".$nombre,0,0,"C");
    $pdf->Cell(140,10,"Fecha: ".$hoy,0,0,"C");
    $pdf->Ln();
    $pdf->Cell(80,10,"Apellido: ".$apellido,0,0,"C");
    $pdf->Cell(140,10,utf8_decode("Código: ".$codigo),0,0,"C");


    $pdf->Ln(40);
    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(15,10,'No.',1,0,'C');
    $pdf->Cell(135,10,'Detalles de Contenedor',1,0,'C');
    $pdf->Cell(40,10,'$',1,0,'C');
    $pdf->Ln();
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(15,10,'1',1,0,'C');
    $pdf->Cell(135,10,'Total de facturacion por contenedor',1,0,'C');
    $pdf->Cell(40,10, $totalFactura ,1,0,'C');
    $pdf->Ln();
    $pdf->Cell(150,10,utf8_decode('TOTAL'),1,0,'C');
    $pdf->SetFillColor(255,233,0); 
    $pdf->SetFont('Times','b',16);

    $pdf->Cell(40,10,'$'.$totalFactura ,1,1,'C');
    
        
    $pdf->Output();
?>