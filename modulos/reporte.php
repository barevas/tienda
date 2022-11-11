<?php
    require 'Classes/PHPExcel.php';
    $link = mysql_connect('localhost', 'root', '','clientes')
    or die('No se pudo conectar: ' . mysql_error());
    
    

    $sql ="SELECT id, username, name, tipo_documento, numero documento, direccion1, direccion2, barrio, telefono, celular, correo FROM clientes";
    $resultado = $mysqli->query($sql);

    $fila = 2;

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()->setCreator("codigos de programacion")->setDEscription("Reporte de productos");

    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle("clientes");

    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'username');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'name');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'tipo_documento');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'numero_documento');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'direccion1');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'direccion2');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'barrio');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'telefono');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'celular');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'correo');
    

    while($row = $resultado->fetch_assoc())
    {

    	$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['id']);
    	$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['username']);
    	$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['name']);
    	$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['tipo_documento']);
    	$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['numero_documento']);
    	$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['direccion1']);
    	$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['direccion2']);
    	$objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row['barrio']);
    	$objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $row['telefono']);
    	$objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $row['celular']);
    	$objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $row['correo']);

    	$fila++;

    }
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");//exportar formato
    header('Content-Disposition: attachment;filename="Clientes.xlsx"');//formato de exportacion
    header('Cache-Control: max-age=0');//controlar el cache

    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $objWriter->save('php://output');//guardar documento
?>
