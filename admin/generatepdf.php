<?php

//Create Connnection with MYSQL Database
$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
	echo "Could not connect to mysql server";

//Select Databse
if(!mysqli_select_db($con, 'sign'))
{
	echo "Database Not Selected";
}

//Select Query
$sql = "SELECT * FROM user WHERE id = '".$_GET['id']."'";

//execute the SQL query
$records = mysqli_query($con,$sql);

require("library/fpdf.php");



$pdf = new FPDF('l' , 'mm' , 'A4');

$pdf->AddPage();

$pdf-> SetTitle("QuickSignTech",false);
$pdf->SetFont('Arial' , 'UBI' , 30);
$pdf->Ln(42);

//$pdf->Write(10,"lala",'C');

$pdf->cell(0, 0, "QuickSignTech UserList", 0, 1, 'C');
$pdf->SetFont('Arial' , 'B' , 14);
$pdf->Ln(20);
$pdf->cell(10, 10, "NO", 1, 0, 'C');
$pdf->cell(50, 10, "FULLNAME", 1, 0, 'C');
$pdf->cell(62, 10, "EMAIL", 1, 0, 'C');
$pdf->cell(48, 10, "PHONE NUMBER", 1, 0, 'C');
$pdf->cell(38, 10, "ADDRESS", 1, 0, 'C');
$pdf->cell(38, 10, "NATIONALITY", 1, 0, 'C');
$pdf->cell(30, 10, "STATUS", 1, 1, 'C');

$pdf->SetFont('Arial', '', 14);

while($row = mysqli_fetch_array($records))
{

$pdf->cell(10, 10, $row['id'], 1, 0, 'C');
$pdf->cell(50, 10, $row['fullname'], 1, 0, 'C');
$pdf->cell(62, 10, $row['email'], 1, 0, 'C');
$pdf->cell(48, 10, $row['phonenumber'], 1, 0, 'C');
$pdf->cell(38, 10, $row['address'], 1, 0, 'C');
$pdf->cell(38, 10, $row['nationality'], 1, 0, 'C');
$pdf->cell(30, 10, $row['status'], 1, 1, 'C');
}

$pdf->Image("qst.png", 0,0,70,60);
$pdf->cell(0,25, "Copyright 2019 QuickSignTech All Rights Reserved | Design by QuickSignTech", 0, 0, 'C');
$pdf->OutPut();

?>

