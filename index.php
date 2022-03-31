<?php
include_once('reporte.php');
$pdf = new PDF();

$pdf->AddPage('LANDSCAPE', 'LETTER');

$pdf->SetFont('Arial', '', 10);
$miCabecera = array('COMPETENCIA', 'DEF. ÁREA', 'PENSAMIENTO', 'IHS', 'VALORACIONES POR PERÍODO', 'DEFINITIVA ASIGNATURA', 'RECUPERACIÓN');

$misDatos = array(
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LÓGICO', 'ihs' => '1', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO FINANCIERO (CONTABILIDAD Y', 'ihs' => '2', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO CIENTÍFICO', 'ihs' => '2', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO A PENSAR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO TECNOLOGICO', 'ihs' => '1', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO A COMUNICAR (SIE)', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO LINGUISTICO (LENGUA', 'ihs' => '1', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO A COMUNICAR (SIE)', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO FILOSÓFICO', 'ihs' => '2', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO A COMUNICAR (SIE)', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO ESTÉTICO (ARTISTICO', 'ihs' => '2', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO A COMUNICAR (SIE)', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO INTERCULTURAL', 'ihs' => '1', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO EL BUEN VIVIR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO SOSTENIBLE', 'ihs' => '1', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO EL BUEN VIVIR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO GLOBAL (CATEDRA', 'ihs' => '2', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO EL BUEN VIVIR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO SOCIOLOGICO', 'ihs' => '2', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
    array('competencia' => 'APRENDIENDO EL BUEN VIVIR', 'defArea' => '0.0', 'pensamiento' => 'PENSAMIENTO SALUDABLE', 'ihs' => '2', 'valoracionPeriodo' => '0.0', 'definitivaAsignatura' => '4.0', 'recuperacion' => '3.0'),
);

$pdf->tablaHorizontal($miCabecera, $misDatos);

$pdf->Output(); //Salida al navegador
