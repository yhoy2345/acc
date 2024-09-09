<?php

require_once ('../fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->Ln(20);
        // Arial bold 15
        $this->SetFont('Arial','B',20);
        // Movernos a la derecha
        $this->Cell(60);
    
        // Título
        $this->Cell(70,10,'Tabla de usuarios ',0,0,'C');
        // Salto de línea
        $this->Ln(30);
        $this->SetFont('Arial','B',10);
        $this->SetX(8);
        $this->Cell(25,10,'Nombre',1,0,'C',0);
        $this->Cell(40,10,'Correo',1,0,'C',0,);
        $this->Cell(27,10,'Telefono',1,0,'C',0);
        $this->Cell(27,10,'Password',1,0,'C',0);
        $this->Cell(40,10,'Fecha',1,1,'C',0); // Cambiado el último parámetro a 1 para forzar un salto de línea
    }
    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
    }
}

$conexion=mysqli_connect("localhost","root","ellanoteama","persona");
$consulta = "SELECT usuarios.id, usuarios.nombre, usuarios.correo, usuarios.password, usuarios.telefono,
usuarios.fecha FROM usuarios"; 
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row=$resultado->fetch_assoc()) {
    $pdf->SetX(8);
    $pdf->Cell(25,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(40,10,$row['correo'],1,0,'C',0);
    $pdf->Cell(27,10,$row['telefono'],1,0,'C',0);
    $pdf->Cell(27,10,$row['password'],1,0,'C',0);
    $pdf->Cell(40,10,$row['fecha'],1,1,'C',0); // Cambiado el último parámetro a 1 para forzar un salto de línea
} 

$pdf->Output();
?>
