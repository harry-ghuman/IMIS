<?php

include "connection.php";

$country=$_REQUEST['country'];
$semester=$_REQUEST['semester'];
$year=$_REQUEST['year'];
$gender=$_REQUEST['gender'];
$job_status=$_REQUEST['job_status'];

require "fpdf.php";
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',15);
$pdf->Cell(0,30,"LIST OF STUDENTS",0,1,"C");
$pdf->Cell(50,10,"country= {$country}",0,0);
$pdf->Cell(50,10,"semester= {$semester}",0,0);
$pdf->Cell(50,10,"year= {$year}",0,0);
$pdf->Cell(50,10,"gender= {$gender}",0,1);
$pdf->Cell(50,30,"job status= {$job_status}",0,1);

$pdf->Cell(10,10,"#",1,0);
$pdf->Cell(30,10,"Student ID",1,0);
$pdf->Cell(90,10,"Student name",1,1);

$count=1;

if($job_status=="no job")
    $query = "SELECT student_id FROM `personal` where student_id not in (select student_id from assign_job) and country='$country' and semester='$semester' and year= '$year' and gender='$gender'";
else
    $query = "select distinct p.student_id from personal p, assign_job a where p.student_id=a.student_id and p.country='$country' and p.semester='$semester' and p.year='$year' and p.gender='$gender' and a.job_status='$job_status'";

$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)) {
    $query3 = "select * from personal where student_id='$row[0]'";
    $result3 = mysqli_query($conn, $query3);

    while ($row3 = mysqli_fetch_array($result3)) {
        $name = ucfirst($row3[3]) . " " . ucfirst($row3[4]) . " " . ucfirst($row3[5]);
        $pdf->Cell(10, 10, "{$count}", 1, 0);
        $pdf->Cell(30, 10, "{$row3[2]}", 1, 0);
        $pdf->Cell(90, 10, "{$name}", 1, 1);
        $count++;
    }
}
    $pdf->output();
