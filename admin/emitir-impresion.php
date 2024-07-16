<?php
//poner en mayuscula el nombre de usuario
session_start();

// solo pueden ingresar los administradores
if ($_SESSION['tipo'] = 'A') {


switch ($_POST['tabla']) {
    case 'conejo_productor':
        require('fpdf/fpdf.php');
        class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('Yudi.png',8,7,25);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(70);
        // Título
        $this->Cell(70,15,'La Granja de Judith',1,0,'C');
        
        // otra imagen
        //$this->Image('conejo-comiendo.png',90,7,25);
        
        // Salto de línea
        $this->Ln(30);
        
            // Arial bold 12
            $this->SetFont('Arial','B',12);
            $this->Cell(10,10,'Id',1,0,'C',0);
            $this->Cell(30,10,'Nombre',1,0,'C',0); 
            $this->Cell(30,10,'Madre',1,0,'C',0);
            $this->Cell(30,10,'Padre',1,0,'C',0);
            $this->Cell(20,10,'Genero',1,0,'C',0);
            $this->Cell(30,10,'Peso Inicial',1,0,'C',0);
            $this->Cell(25,10,'Criador',1,1,'C',0);
        }
        
        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,'Pag '.$this->PageNo().'/{nb}',0,0,'C');
        }
        }
        
        //conexion a la bd y lectura de la tabla conejoproductor
        include('../libreria/conexion.php');
        $conexion = conectar();
        $consulta = "SELECT * FROM conejo_productor";
        $resultado = mysqli_query ($conexion, $consulta);
        
        // Creación del objeto de la clase heredada
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','',12);
        while ($fila = mysqli_fetch_array($resultado)) {
            $cuidador=traer_cuidador($fila['id_cuidador']);
            $pdf->Cell(10,10,$fila['Id_conejo'],1,0,'C',0);
            $pdf->Cell(30,10,$fila['nombre'],1,0,'L',0);
            $pdf->Cell(30,10,$fila['madre'],1,0,'C',0);
            $pdf->Cell(30,10,$fila['padre'],1,0,'C',0);
            $pdf->Cell(20,10,$fila['genero'],1,0,'C',0);
            $pdf->Cell(30,10,$fila['peso_inicial'],1,0,'C',0);
            $pdf->Cell(25,10,$cuidador,1,1,'L',0);
        }     
        
        mysqli_close($conexion);
        $pdf->Output();
        
    break;

    case 'cuidador':
        require('fpdf/fpdf.php');
        class PDF extends FPDF
            {
            // Cabecera de página
            function Header()
            {
                // Logo
                $this->Image('Yudi.png',8,7,25);
                // Arial bold 15
                $this->SetFont('Arial','B',15);
                // Movernos a la derecha
                $this->Cell(70);
                // Título
                $this->Cell(70,15,'La Granja de Judith',1,0,'C');
                
                // otra imagen
                //$this->Image('conejo-comiendo.png',90,7,25);
                
                // Salto de línea
                $this->Ln(30);
                
        
            // Arial bold 12
            $this->SetFont('Arial','B',12);
            $this->Cell(10,10,'Id',1,0,'C',0);
            $this->Cell(30,10,'Nombre',1,0,'C',0);
            $this->Cell(40,10,'Contacto',1,0,'C',0);
            $this->Cell(30,10,'Usuario',1,0,'C',0);
            $this->Cell(25,10,'Pass',1,0,'C',0);
            $this->Cell(30,10,'Tipo',1,1,'C',0);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,'Pag '.$this->PageNo().'/{nb}',0,0,'C');
        }
        }

        //conexion a la bd y lectura de la tabla conejoproductor
        include('../libreria/conexion.php');
        $conexion = conectar();
        $consulta = "SELECT * FROM cuidador";
        $resultado = mysqli_query ($conexion, $consulta);

        // Creación del objeto de la clase heredada
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','',12);
        while ($fila = mysqli_fetch_array($resultado)) {
            $pdf->Cell(10,10,$fila['Id_cuidador'],1,0,'C',0);
            $pdf->Cell(30,10,$fila['nombre'],1,0,'L',0);
            $pdf->Cell(40,10,$fila['contacto'],1,0,'C',0);
            $pdf->Cell(30,10,$fila['usuario'],1,0,'C',0);
            $pdf->Cell(25,10,$fila['pass'],1,0,'C',0);
            $pdf->Cell(30,10,$fila['tipo'],1,1,'C',0);
        }     

        mysqli_close($conexion);
        $pdf->Output();

    break;
}
    
session_write_close();
//include('home-admin.php');
}
?>