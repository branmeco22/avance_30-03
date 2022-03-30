<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    public function header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Image('img/carlos_ramon.png', 20, 10, 20, 20, 'png');
        $this->Cell(0, 5, 'INSTITUCION EDICATIVA CARLOS RAMON REPIZO', 0, 0, 'C');
        $this->Image('img/Escudo_del_Huila.svg.png', 235, 10, 20, 20, 'png');
        $this->Ln(3);
        $this->SetFont('Helvetica', '', 7);
        $this->Cell(0, 5, utf8_decode('SAN AGUSTÍN - HUILA'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('Sede: Carlos Ramón Repizo Cabrera, San Martín, Siloé, Matanzas, El Playón, La Florida, Timanco, La Cuchilla, La Chaquira, Luis Carlos Galán, Purutal, Aguada'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('Reconocimiento Oficial Res. N° 2902 del 04 de abril de 2018'), 0, 0, 'C');
        $this->Ln(3);
        $this->Cell(0, 5, utf8_decode('DANE: 141668000552 Nit: 813.013.763-7'), 0, 0, 'C');
        $this->SetFont('Arial', 'B', 10);
        $this->Ln(10);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0, 5, 'REGISTRO ESCOLAR DE VALORACIONES 2021', 0, 0, 'C');
        $this->Ln(10);

        //Enmarcación del recuado
        $this->Cell(248, -35, '', 1, 0, 'C');

        $this->Ln(0.7);
        //Enmarcación del recuado
        $this->Cell(248, 16, '', 1, 0, 'C');
        $this->Ln(16.7);
    }

    public function subHeader()
    {
        $this->SetY(40);
        //sub-encabezado
        $this->SetTextColor(0, 0, 0);
        $this->Ln(5);
        $this->setFont('Arial', 'B', 10);
        $this->Cell(25, 5, 'Estudiante: ', 0, 0);
        $this->SetFont('Arial', '', 10);
        $this->Cell(100, 5, utf8_decode('ELIZABETH ARGOTE BOLAÑOS'), 0, 0);
        $this->Ln();
        $this->setFont('Arial', 'B', 10);
        $this->Cell(20, 5, 'Sede: ');
        $this->SetFont('Arial', '', 10);
        $this->Cell(70, 5, 'CARLOS RAMON REPIZO', 0, 0);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(15, 5, 'Grado: ');
        $this->SetFont('Arial', '', 10);
        $this->Cell(30, 5, 'PRIMERO', 0, 0);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(25, -5, utf8_decode('N° Matricula: '), 0, 0);
        $this->SetFont('Arial', '', 10);
        $this->Cell(20, -5, '2021000250', 0, 0);
        $this->Ln();
        $this->SetFont('Arial', 'B', 10);
        $this->SetX(145);
        $this->Cell(20, 15, 'Jornada: ', 0, 0);
        $this->SetFont('Arial', '', 10);
        $this->Cell(20, 15, 'COMPLETA', 0, 0);

        $this->SetFont('Arial', 'B', 10);
        $this->SetX(200);
        $this->Cell(20, 5, utf8_decode('Folio N°: '), 0, 0);
        $this->SetFont('Arial', '', 10);
        $this->Cell(20, 5, '000031', 0, 0);
        $this->Ln();
        $this->SetFont('Arial', 'B', 10);
        $this->SetX(200);
        $this->Cell(20, 5, 'Fecha: ', 0, 0);
        $this->SetFont('Arial', '', 10);
        $this->Cell(20, 5, utf8_decode('26/11/2021'));
        $this->Ln(7);
    }

    public function footer()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->SetY(-45);
        $this->Cell(45, 5, 'ESCALA NACIONAL', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '4.60 - 5.00 = Superior', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '4.00 - 4.50 = Alto', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '3.00 - 3.90 = Basico', 1, 0, 'L', 0);
        $this->Ln();
        $this->Cell(45, 5, '1.00 - 2.90 = Bajo', 1, 0, 'L', 0);


        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(90, -35);
        $this->Line(85, 180, 150, 180);
        $this->Cell(55, 5, 'EDITH MARIA CERPA JIMENEZ', 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(90, -30);
        $this->Cell(55, 5, 'RECTOR(A)', 0, 0, 'C', 0);

        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(180, -35);
        $this->Line(175, 180, 260, 180);
        $this->Cell(75, 5, utf8_decode('JACQUELINE MONTAÑEZ BOHORQUEZ'), 0, 0, 'C', 0);
        $this->Ln();
        $this->SetFont('Arial', '', 10);
        $this->SetXY(180, -30);
        $this->Cell(75, 5, utf8_decode('SECRETARÍA ACADEMICA'), 0, 0, 'C', 0);
    }

    // Cargar los datos
    function LoadData($file)
    {
        // Leer las líneas del fichero
        $lines = file($file);
        $data = array();
        foreach ($lines as $line)
            $data[] = explode(';', trim($line));
        return $data;
    }

    // Una tabla más completa
    function ImprovedTable($header, $data)
    {
        // Anchuras de las columnas
        $w = array(40, 20, 40, 8, 55, 45, 40);
        // Cabeceras
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
        $this->Ln();
        // Datos
        foreach ($data as $row) {
            $this->Cell($w[0], 5, $row[0], 'LR');
            $this->Cell($w[1], 5, $row[1], 'LR');
            $this->Cell($w[2], 5, number_format($row[2]), 'LR', 0, 'R');
            $this->Cell($w[3], 5, number_format($row[3]), 'LR', 0, 'R');
            $this->Ln();
        }
        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

$pdf = new PDF();
// Títulos de las columnas
$header = array('COMPETENCIA', 'DEF. ÁREA', 'PENSAMIENTOS', 'IHS', 'VALORACIONES POR PERÍODO', 'DEFINITIVA ASIGNATURA', 'RECUPERACIONES');
// Carga de datos
$data = $pdf->LoadData('paises.txt');
$pdf->SetFont('Arial', '', 10);
$pdf->AddPage('LANDSCAPE', 'LETTER');
$pdf->ImprovedTable($header, $data);
$pdf->subHeader();

$pdf->Output();
