<?php
include "fpdf185/fpdf.php";
include 'connect.php';
include 'num2word.php';
if(isset($_POST['generate'])){
    $id = $_POST['id'];
    $get_month = date('m');
    $month_name = date("F",mktime(0,0,0,$get_month,10));
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $days = $_POST['days'];
    $hours = $_POST['hours'];
    $leaves =$_POST['leaves'];
    $total_pay_hours_based = $hours * 120;
    $leave_deduction = $leaves * 120;
    $incentives = 1000;
    $others = 300;
    $tax = 200;

    $deductions = $tax + $others + $leave_deduction; //total deductions
    $total_pay =  $total_pay_hours_based + $incentives + $others ; // total pay


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','BIU',14);
$pdf->Image('img\Exciteon.png',10,7,25);
$pdf->Cell(120,15,'',0,0);

$pdf->Cell(40,5,'PAYSLIP',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(120,5,'No 110A, 9th cross East,',0,0);
$pdf->Cell(25,5,'Employee ID  :',0,0); $pdf->Cell(10,5,$id,0,1); 




$pdf->Cell(120,5,'Thillainagar,Tiruchirappalli,',0,0);
$pdf->Cell(25,5,'Name             :',0,0);
$pdf->Cell(25,5,$name,0,1);


$pdf->Cell(120,5,'Tamilnadu, India.',0,0);
$pdf->Cell(25,5,'Email             :',0,0);
$pdf->Cell(40,5,$email,0,1);



$pdf->Cell(120,5,'Pincode - 620018.',0,0);
$pdf->Cell(25,5,'Pay Period     :',0,0);
$pdf->Cell(25,5,$month_name,0,1);



$pdf->Cell(120,5,'',0,0);
$pdf->Cell(25,5,'Days Worked :',0,0);
$pdf->Cell(25,5,$days,0,1);


$pdf->Line(10,45,200,45);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(60,10,'Earnings',0,0);
$pdf->Cell(50,10,'Amount',0,0);
$pdf->Cell(60,10,'Deductions',0,0);
$pdf->Cell(50,10,'Amount',0,0);
$pdf->Line(10,55,200,55);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(65,17,'Basic',0,0);
$pdf->Cell(45,17, $total_pay_hours_based,0,0,'L');
$pdf->Cell(67,17,'Leave Deduction',0,0);
$pdf->Cell(50,17,$leave_deduction,0,0,'L');
$pdf->Line(10,61,200,61);



$pdf->Ln(5);

$pdf->SetFont('Arial','',10);
$pdf->Cell(67,20,'Incentive Pay',0,0);
$pdf->Cell(43,20, $incentives,0,0);
$pdf->Cell(67,20,'Pre - Fund',0,0);
$pdf->Cell(50,20,$others,0,0);
$pdf->Line(10,68,200,68);

$pdf->Ln(5);

$pdf->SetFont('Arial','',10);
$pdf->Cell(69,22.5,'Overtime',0,0);
$pdf->Cell(41,22.5,$others,0,0);
$pdf->Cell(67,22.5,'Tax',0,0);
$pdf->Cell(50,23,$tax,0,0);
$pdf->Line(10,73.5,200,73.5);

$pdf->Ln(5);
$pdf->Line(10,80,200,80);
$pdf->Ln(10);
$pdf->SetFont('Arial','B');
$pdf->Cell(65,22.5,'Total Earnings',0,0);
$pdf->Cell(45,22.5,$total_pay,0,0);
$pdf->Cell(67,22.5,'Total Deductions',0,0);
$pdf->Cell(69,22.5,$deductions,0,0);
$pdf->Line(10,90,200,90);

$pdf->Ln(10);
$pdf->SetFont('Arial');

$pdf->Cell(140,23,'Net Pay',0,0,'R');
$pdf->SetFont('Arial','B');
$pdf->Cell(45,23,$total_pay - $deductions,0,0,'R');

$pdf->Line(10,100,200,100);

$pdf->Ln(15);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(200,25,$total_pay - $deductions,0,0,'C');
$pdf->Ln(5);

$amt_words=($total_pay - $deductions); 
$get_amount= numberTowords($amt_words); 
$pdf->Cell(200,25, $get_amount,0,0,'C');

$pdf->Ln(50);

$pdf->SetFont('Arial','');
$pdf->Cell(150,25,"Manager's Signature",0,0,'');
$pdf->Cell(150,25,'Employee Signature',0,0,'');

$pdf->Ln(70);
$pdf->Cell(200,25,'This is a system generated payslip',0,0,'C');
$pdf->Output();
}
?>