<?php
require ("functions/init.php");
if (isset($_SESSION['staffid'])) {

require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{

    //line break
    $this->Ln(20);
}
}

// Instanciation of inherited class
$pdf = new PDF();
// Begin with regular font
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

    $sql ="SELECT * FROM staff WHERE `staffid` = '".$_SESSION["staffid"]."'";
    $result = query($sql);
    if(row_count($result) == 1) {
    $row = mysqli_fetch_array($result);
    if ($row['category'] == "Teaching Staff") {
        $a = date("Y");
    $b = date("M");
    $c = date("d");
    $d = "$a" + 1;
    $e = $a."/".$d;
    $ad = $row['staffid'];
    $add = str_replace('/', '', $ad);

 {

        $pdf->Write(40,$c. " " .$b. ", " .$a);
        $pdf->Ln(10);
        $pdf->SetFont('times','B',12);
        $pdf->Write(40,'Dear'." ".$row['surname']. " " .$row['firstname']. " " .$row['othername']);
        $pdf->Rect(145, 38, 40, 40);
        $pdf->Image('upload/staffDP/'."".$row['passport'],145,38,40,40);
        $pdf->SetFont('times','',12);
        $pdf->Ln(6);
        $pdf->Write(40,$row['staffid']);
        $pdf->Ln(25);
        $pdf->SetFont('times','B',16);
        $pdf->Cell(10,10,'OFFER OF APPOINTMENT','C');
        $pdf->Ln(4);
        $pdf->SetFont('times','',11);
        $pdf->Write(15,'Sequel to your application and the subsequent interview and our discussion with you, we are hereby informing you');
         $pdf->Ln(5);
        $pdf->Write(15,'of your appointment as a'. " " .strtoupper($row['category']).' effective from '." ".$row['datereg'] );
        $pdf->Ln(10);
        
        $pdf->SetFont('times','B',12);
        $pdf->Cell(10,10,'Terms of Appointment','C');
        $pdf->SetFont('times','',11);
        $pdf->Ln(5);
        $pdf->Write(15,'1. You shall be on probation for one academic term (4 months) confirmation of your appointment thereafter will be');
        $pdf->Ln(3);
        $pdf->Write(19,'    subject to your achieving set of objectives with satisfactory conducts.'); 
        $pdf->Ln(8);
        $pdf->Write(19,'2. You are required to give a one-month notice for resignation of your appointment'); 
        $pdf->Ln(8);
        $pdf->Write(19,'3. The school reserves the right to dismiss staff summarily without notice for serious misconducts like fighting,');
        $pdf->Ln(5);
        $pdf->Write(19,'    insubordination, fraud, laziness, lateness, rudeness, absenteeism.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'4. Hours of work');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Monday - Friday.: 7:00am - 4:00pm');
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. You may be required to come for duty on Saturdays as the exigency of your job may demand from time to time.');
        $pdf->Ln(8);
        $pdf->Write(19,'5. You are entitled to half salary during the holiday of your probation period only when you come for duty as required');
        $pdf->Ln(8);
        $pdf->Write(19,'6. Salary during the holiday is paid only when you are required to come for duty the holiday periods.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'7. Salary and allowance');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    The salary attached to this offer are as follows;');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Basic Salary.: NGN '.number_format($row['salary']));
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. Transport allowance per month.: NGN '.number_format($row['transport']));
        $pdf->Ln(7);
        $pdf->Write(19,'    iii. Medical allowance per annum.: NGN '.number_format($row['medical']));
        $pdf->SetFont('times','B',11);
        $pdf->Ln(7);
        $pdf->Write(19,'    Gross Total.: NGN '.number_format($row['salary'] + $row['transport'] + $row['medical']));
        $pdf->SetFont('times','',11);
        $pdf->Ln(8);
        $pdf->Write(19,'8. School contribution policy: every staff shall participate in the contribution and repayment of such shall be from source');
        $pdf->Ln(5);
        $pdf->Write(19,'     as the monthly salary is paid. Staff who had collected a contribution cannot withdraw their appointment untill all the');
        $pdf->Ln(5);
        $pdf->Write(19,'     money owed is paid up.');
        $pdf->Ln(8);
        $pdf->Write(19,'9. Every staff is expected to be a member of the New Unique Staff Cooperative');
        $pdf->Ln(8);
        $pdf->Write(19,'10. Please note that this term is subject to change whenever the school management deem fits.');
        $pdf->Ln(8);
        $pdf->Write(19,'May you find grace to offer your duties to the best of your abilities.');
         $pdf->Ln(11);
        $pdf->SetFont('times','B',12);
        $pdf->Write(19,'The School Management');     
        
     
}
} else {

if ($row['category'] == "Non-Teaching Staff") {
    

        $pdf->Write(40,$c. " " .$b. ", " .$a);
        $pdf->Ln(10);
        $pdf->SetFont('times','B',12);
        $pdf->Write(40,'Dear'." ".$row['surname']. " " .$row['firstname']. " " .$row['othername']);
        $pdf->Rect(145, 38, 40, 40);
        $pdf->Image('upload/staffDP/'."".$row['passport'],145,38,40,40);
        $pdf->SetFont('times','',12);
        $pdf->Ln(6);
        $pdf->Write(40,$row['staffid']);
        $pdf->Ln(25);
        $pdf->SetFont('times','B',16);
        $pdf->Cell(10,10,'OFFER OF APPOINTMENT','C');
        $pdf->Ln(4);
        $pdf->SetFont('times','',11);
        $pdf->Write(15,'Sequel to your application and the subsequent interview and our discussion with you, we are hereby informing you');
         $pdf->Ln(5);
        $pdf->Write(15,'of your appointment as a'. " " .strtoupper($row['category']).' effective from '." ".$row['datereg'] );
        $pdf->Ln(10);
        
        $pdf->SetFont('times','B',12);
        $pdf->Cell(10,10,'Terms of Appointment','C');
        $pdf->SetFont('times','',11);
        $pdf->Ln(5);
        $pdf->Write(15,'1. You shall be on probation for one academic term (4 months) confirmation of your appointment thereafter will be');
        $pdf->Ln(3);
        $pdf->Write(19,'    subject to your achieving set of objectives with satisfactory conducts.'); 
        $pdf->Ln(8);
        $pdf->Write(19,'2. You are required to give a one-month notice for resignation of your appointment'); 
        $pdf->Ln(8);
        $pdf->Write(19,'3. The school reserves the right to dismiss staff summarily without notice for serious misconducts like fighting,');
        $pdf->Ln(5);
        $pdf->Write(19,'    insubordination, fraud, laziness, lateness, rudeness, absenteeism.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'4. Hours of work');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Monday - Friday.: 7:00am - 6:00pm');
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. You may be required to come for duty on Saturdays as the exigency of your job may demand from time to time.');
        $pdf->Ln(8);
        $pdf->Write(19,'5. Salary during the holiday is paid only when you are required to come for duty the holiday periods.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'6. Salary and allowance');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    The salary attached to this offer are as follows;');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Basic Salary.: NGN '.number_format($row['salary']));
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. Transport allowance per month.: NGN '.number_format($row['transport']));
        $pdf->Ln(7);
        $pdf->Write(19,'    iii. Medical allowance per annum.: NGN '.number_format($row['medical']));
        $pdf->SetFont('times','B',11);
        $pdf->Ln(7);
        $pdf->Write(19,'    Gross Total.: NGN '.number_format($row['salary'] + $row['transport'] + $row['medical']));
        $pdf->SetFont('times','',11);
        $pdf->Ln(8);
        $pdf->Write(19,'7. School contribution policy: every staff shall participate in the contribution and repayment of such shall be from source');
        $pdf->Ln(5);
        $pdf->Write(19,'     as the monthly salary is paid. Staff who had collected a contribution cannot withdraw their appointment untill all the');
        $pdf->Ln(5);
        $pdf->Write(19,'     money owed is paid up.');
        $pdf->Ln(8);
        $pdf->Write(19,'8. Every staff is expected to be a member of the New Unique Staff Cooperative');
        $pdf->Ln(8);
        $pdf->Write(19,'9. Please note that this term is subject to change whenever the school management deem fits.');
        $pdf->Ln(8);
        $pdf->Write(19,'May you find grace to offer your duties to the best of your abilities.');
         $pdf->Ln(11);
        $pdf->SetFont('times','B',12);
        $pdf->Write(19,'The School Management');   
} else  {

    if ($row['category'] == "Management Staff") {
        

        $pdf->Write(40,$c. " " .$b. ", " .$a);
        $pdf->Ln(10);
        $pdf->SetFont('times','B',12);
        $pdf->Write(40,'Dear'." ".$row['surname']. " " .$row['firstname']. " " .$row['othername']);
        $pdf->Rect(145, 38, 40, 40);
        $pdf->Image('upload/staffDP/'."".$row['passport'],145,38,40,40);
        $pdf->SetFont('times','',12);
        $pdf->Ln(6);
        $pdf->Write(40,$row['staffid']);
        $pdf->Ln(25);
        $pdf->SetFont('times','B',16);
        $pdf->Cell(10,10,'OFFER OF APPOINTMENT','C');
        $pdf->Ln(4);
        $pdf->SetFont('times','',11);
        $pdf->Write(15,'Sequel to your application and the subsequent interview and our discussion with you, we are hereby informing you');
         $pdf->Ln(5);
        $pdf->Write(15,'of your appointment as a'. " " .strtoupper($row['category']).' effective from '." ".$row['datereg'] );
        $pdf->Ln(10);
        
        $pdf->SetFont('times','B',12);
        $pdf->Cell(10,10,'Terms of Appointment','C');
        $pdf->SetFont('times','',11);
        $pdf->Ln(5);
        $pdf->Write(15,'1. You shall be on probation for one academic term (4 months) confirmation of your appointment thereafter will be');
        $pdf->Ln(3);
        $pdf->Write(19,'    subject to your achieving set of objectives with satisfactory conducts.'); 
        $pdf->Ln(8);
        $pdf->Write(19,'2. You are required to give a one-month notice for resignation of your appointment'); 
        $pdf->Ln(8);
        $pdf->Write(19,'3. The school reserves the right to dismiss staff summarily without notice for serious misconducts like fighting,');
        $pdf->Ln(5);
        $pdf->Write(19,'    insubordination, fraud, laziness, lateness, rudeness, absenteeism.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'4. Hours of work');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Monday - Friday.: 7:00am - 5:00pm');
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. You may be required to come for duty on Saturdays as the exigency of your job may demand from time to time.');
        $pdf->Ln(8);
        $pdf->Write(19,'5. Salary during the holiday is paid only when you are required to come for duty the holiday periods.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'6. Salary and allowance');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    The salary attached to this offer are as follows;');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Basic Salary.: NGN '.number_format($row['salary']));
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. Transport allowance per month.: NGN '.number_format($row['transport']));
        $pdf->Ln(7);
        $pdf->Write(19,'    iii. Medical allowance per annum.: NGN '.number_format($row['medical']));
        $pdf->SetFont('times','B',11);
        $pdf->Ln(7);
        $pdf->Write(19,'    Gross Total.: NGN '.number_format($row['salary'] + $row['transport'] + $row['medical']));
        $pdf->SetFont('times','',11);
        $pdf->Ln(8);
        $pdf->Write(19,'7. School contribution policy: every staff shall participate in the contribution and repayment of such shall be from source');
        $pdf->Ln(5);
        $pdf->Write(19,'     as the monthly salary is paid. Staff who had collected a contribution cannot withdraw their appointment untill all the');
        $pdf->Ln(5);
        $pdf->Write(19,'     money owed is paid up.');
        $pdf->Ln(8);
        $pdf->Write(19,'8. Every staff is expected to be a member of the New Unique Staff Cooperative');
        $pdf->Ln(8);
        $pdf->Write(19,'9. Please note that this term is subject to change whenever the school management deem fits.');
        $pdf->Ln(8);
        $pdf->Write(19,'May you find grace to offer your duties to the best of your abilities.');
         $pdf->Ln(11);
        $pdf->SetFont('times','B',12);
        $pdf->Write(19,'The School Management');   

    }
}

}
}
$pdf->Output();
$file = "$add.pdf";
$filename = "upload/employ/$file";
$pdf->Output($filename, 'F');

$sqll = "UPDATE staff SET `admletter` = '$file' WHERE `staffid` = '".$_SESSION["staffid"]."'";
$re   = query($sqll);
} else {

    if (!isset($_GET['id'])) {
        
        redirect("./appoint");
    }

    require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{

    //line break
    $this->Ln(20);
}
}

// Instanciation of inherited class
$pdf = new PDF();
// Begin with regular font
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

    $sql ="SELECT * FROM staff WHERE `staffid` = '".$_GET["id"]."'";
    $result = query($sql);
    if(row_count($result) == 1) {
    $row = mysqli_fetch_array($result);
    if ($row['category'] == "Teaching Staff") {
        $a = date("Y");
    $b = date("M");
    $c = date("d");
    $d = "$a" + 1;
    $e = $a."/".$d;
    $ad = $row['staffid'];
    $add = str_replace('/', '', $ad);

 {

        $pdf->Write(40,$c. " " .$b. ", " .$a);
        $pdf->Ln(10);
        $pdf->SetFont('times','B',12);
        $pdf->Write(40,'Dear'." ".$row['surname']. " " .$row['firstname']. " " .$row['othername']);
        $pdf->Rect(145, 38, 40, 40);
        $pdf->Image('upload/staffDP/'."".$row['passport'],145,38,40,40);
        $pdf->SetFont('times','',12);
        $pdf->Ln(6);
        $pdf->Write(40,$row['staffid']);
        $pdf->Ln(25);
        $pdf->SetFont('times','B',16);
        $pdf->Cell(10,10,'OFFER OF APPOINTMENT','C');
        $pdf->Ln(4);
        $pdf->SetFont('times','',11);
        $pdf->Write(15,'Sequel to your application and the subsequent interview and our discussion with you, we are hereby informing you');
         $pdf->Ln(5);
        $pdf->Write(15,'of your appointment as a'. " " .strtoupper($row['category']).' effective from '." ".$row['datereg'] );
        $pdf->Ln(10);
        
        $pdf->SetFont('times','B',12);
        $pdf->Cell(10,10,'Terms of Appointment','C');
        $pdf->SetFont('times','',11);
        $pdf->Ln(5);
        $pdf->Write(15,'1. You shall be on probation for one academic term (4 months) confirmation of your appointment thereafter will be');
        $pdf->Ln(3);
        $pdf->Write(19,'    subject to your achieving set of objectives with satisfactory conducts.'); 
        $pdf->Ln(8);
        $pdf->Write(19,'2. You are required to give a one-month notice for resignation of your appointment'); 
        $pdf->Ln(8);
        $pdf->Write(19,'3. The school reserves the right to dismiss staff summarily without notice for serious misconducts like fighting,');
        $pdf->Ln(5);
        $pdf->Write(19,'    insubordination, fraud, laziness, lateness, rudeness, absenteeism.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'4. Hours of work');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Monday - Friday.: 7:00am - 4:00pm');
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. You may be required to come for duty on Saturdays as the exigency of your job may demand from time to time.');
        $pdf->Ln(8);
        $pdf->Write(19,'5. Salary during the holiday is paid only when you are required to come for duty the holiday periods.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'6. Salary and allowance');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    The salary attached to this offer are as follows;');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Basic Salary.: NGN '.number_format($row['salary']));
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. Transport allowance per month.: NGN '.number_format($row['transport']));
        $pdf->Ln(7);
        $pdf->Write(19,'    iii. Medical allowance per annum.: NGN '.number_format($row['medical']));
        $pdf->SetFont('times','B',11);
        $pdf->Ln(7);
        $pdf->Write(19,'    Gross Total.: NGN '.number_format($row['salary'] + $row['transport'] + $row['medical']));
        $pdf->SetFont('times','',11);
        $pdf->Ln(8);
        $pdf->Write(19,'7. School contribution policy: every staff shall participate in the contribution and repayment of such shall be from source');
        $pdf->Ln(5);
        $pdf->Write(19,'     as the monthly salary is paid. Staff who had collected a contribution cannot withdraw their appointment untill all the');
        $pdf->Ln(5);
        $pdf->Write(19,'     money owed is paid up.');
        $pdf->Ln(8);
        $pdf->Write(19,'8. Every staff is expected to be a member of the New Unique Staff Cooperative');
        $pdf->Ln(8);
        $pdf->Write(19,'9. Please note that this term is subject to change whenever the school management deem fits.');
        $pdf->Ln(8);
        $pdf->Write(19,'May you find grace to offer your duties to the best of your abilities.');
         $pdf->Ln(11);
        $pdf->SetFont('times','B',12);
        $pdf->Write(19,'The School Management');     
        
     
}
} else {

if ($row['category'] == "Non-Teaching Staff") {
    

        $pdf->Write(40,$c. " " .$b. ", " .$a);
        $pdf->Ln(10);
        $pdf->SetFont('times','B',12);
        $pdf->Write(40,'Dear'." ".$row['surname']. " " .$row['firstname']. " " .$row['othername']);
        $pdf->Rect(145, 38, 40, 40);
        $pdf->Image('upload/staffDP/'."".$row['passport'],145,38,40,40);
        $pdf->SetFont('times','',12);
        $pdf->Ln(6);
        $pdf->Write(40,$row['staffid']);
        $pdf->Ln(25);
        $pdf->SetFont('times','B',16);
        $pdf->Cell(10,10,'OFFER OF APPOINTMENT','C');
        $pdf->Ln(4);
        $pdf->SetFont('times','',11);
        $pdf->Write(15,'Sequel to your application and the subsequent interview and our discussion with you, we are hereby informing you');
         $pdf->Ln(5);
        $pdf->Write(15,'of your appointment as a'. " " .strtoupper($row['category']).' effective from '." ".$row['datereg'] );
        $pdf->Ln(10);
        
        $pdf->SetFont('times','B',12);
        $pdf->Cell(10,10,'Terms of Appointment','C');
        $pdf->SetFont('times','',11);
        $pdf->Ln(5);
        $pdf->Write(15,'1. You shall be on probation for one academic term (4 months) confirmation of your appointment thereafter will be');
        $pdf->Ln(3);
        $pdf->Write(19,'    subject to your achieving set of objectives with satisfactory conducts.'); 
        $pdf->Ln(8);
        $pdf->Write(19,'2. You are required to give a one-month notice for resignation of your appointment'); 
        $pdf->Ln(8);
        $pdf->Write(19,'3. The school reserves the right to dismiss staff summarily without notice for serious misconducts like fighting,');
        $pdf->Ln(5);
        $pdf->Write(19,'    insubordination, fraud, laziness, lateness, rudeness, absenteeism.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'4. Hours of work');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Monday - Friday.: 7:00am - 6:00pm');
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. You may be required to come for duty on Saturdays as the exigency of your job may demand from time to time.');
        $pdf->Ln(8);
        $pdf->Write(19,'5. Salary during the holiday is paid only when you are required to come for duty the holiday periods.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'6. Salary and allowance');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    The salary attached to this offer are as follows;');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Basic Salary.: NGN '.number_format($row['salary']));
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. Transport allowance per month.: NGN '.number_format($row['transport']));
        $pdf->Ln(7);
        $pdf->Write(19,'    iii. Medical allowance per annum.: NGN '.number_format($row['medical']));
        $pdf->SetFont('times','B',11);
        $pdf->Ln(7);
        $pdf->Write(19,'    Gross Total.: NGN '.number_format($row['salary'] + $row['transport'] + $row['medical']));
        $pdf->SetFont('times','',11);
        $pdf->Ln(8);
        $pdf->Write(19,'7. School contribution policy: every staff shall participate in the contribution and repayment of such shall be from source');
        $pdf->Ln(5);
        $pdf->Write(19,'     as the monthly salary is paid. Staff who had collected a contribution cannot withdraw their appointment untill all the');
        $pdf->Ln(5);
        $pdf->Write(19,'     money owed is paid up.');
        $pdf->Ln(8);
        $pdf->Write(19,'8. Every staff is expected to be a member of the New Unique Staff Cooperative');
        $pdf->Ln(8);
        $pdf->Write(19,'9. Please note that this term is subject to change whenever the school management deem fits.');
        $pdf->Ln(8);
        $pdf->Write(19,'May you find grace to offer your duties to the best of your abilities.');
         $pdf->Ln(11);
        $pdf->SetFont('times','B',12);
        $pdf->Write(19,'The School Management');   
} else  {

    if ($row['category'] == "Management Staff") {
        

        $pdf->Write(40,$c. " " .$b. ", " .$a);
        $pdf->Ln(10);
        $pdf->SetFont('times','B',12);
        $pdf->Write(40,'Dear'." ".$row['surname']. " " .$row['firstname']. " " .$row['othername']);
        $pdf->Rect(145, 38, 40, 40);
        $pdf->Image('upload/staffDP/'."".$row['passport'],145,38,40,40);
        $pdf->SetFont('times','',12);
        $pdf->Ln(6);
        $pdf->Write(40,$row['staffid']);
        $pdf->Ln(25);
        $pdf->SetFont('times','B',16);
        $pdf->Cell(10,10,'OFFER OF APPOINTMENT','C');
        $pdf->Ln(4);
        $pdf->SetFont('times','',11);
        $pdf->Write(15,'Sequel to your application and the subsequent interview and our discussion with you, we are hereby informing you');
         $pdf->Ln(5);
        $pdf->Write(15,'of your appointment as a'. " " .strtoupper($row['category']).' effective from '." ".$row['datereg'] );
        $pdf->Ln(10);
        
        $pdf->SetFont('times','B',12);
        $pdf->Cell(10,10,'Terms of Appointment','C');
        $pdf->SetFont('times','',11);
        $pdf->Ln(5);
        $pdf->Write(15,'1. You shall be on probation for one academic term (4 months) confirmation of your appointment thereafter will be');
        $pdf->Ln(3);
        $pdf->Write(19,'    subject to your achieving set of objectives with satisfactory conducts.'); 
        $pdf->Ln(8);
        $pdf->Write(19,'2. You are required to give a one-month notice for resignation of your appointment'); 
        $pdf->Ln(8);
        $pdf->Write(19,'3. The school reserves the right to dismiss staff summarily without notice for serious misconducts like fighting,');
        $pdf->Ln(5);
        $pdf->Write(19,'    insubordination, fraud, laziness, lateness, rudeness, absenteeism.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'4. Hours of work');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Monday - Friday.: 7:00am - 5:00pm');
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. You may be required to come for duty on Saturdays as the exigency of your job may demand from time to time.');
        $pdf->Ln(8);
        $pdf->Write(19,'5. Salary during the holiday is paid only when you are required to come for duty the holiday periods.');
        $pdf->Ln(8);
        $pdf->SetFont('times','B',11);
        $pdf->Write(19,'6. Salary and allowance');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    The salary attached to this offer are as follows;');
        $pdf->Ln(7);
        $pdf->SetFont('times','',11);
        $pdf->Write(19,'    i. Basic Salary.: NGN '.number_format($row['salary']));
        $pdf->Ln(7);
        $pdf->Write(19,'    ii. Transport allowance per month.: NGN '.number_format($row['transport']));
        $pdf->Ln(7);
        $pdf->Write(19,'    iii. Medical allowance per annum.: NGN '.number_format($row['medical']));
        $pdf->SetFont('times','B',11);
        $pdf->Ln(7);
        $pdf->Write(19,'    Gross Total.: NGN '.number_format($row['salary'] + $row['transport'] + $row['medical']));
        $pdf->SetFont('times','',11);
        $pdf->Ln(8);
        $pdf->Write(19,'7. School contribution policy: every staff shall participate in the contribution and repayment of such shall be from source');
        $pdf->Ln(5);
        $pdf->Write(19,'     as the monthly salary is paid. Staff who had collected a contribution cannot withdraw their appointment untill all the');
        $pdf->Ln(5);
        $pdf->Write(19,'     money owed is paid up.');
        $pdf->Ln(8);
        $pdf->Write(19,'8. Every staff is expected to be a member of the New Unique Staff Cooperative');
        $pdf->Ln(8);
        $pdf->Write(19,'9. Please note that this term is subject to change whenever the school management deem fits.');
        $pdf->Ln(8);
        $pdf->Write(19,'May you find grace to offer your duties to the best of your abilities.');
         $pdf->Ln(11);
        $pdf->SetFont('times','B',12);
        $pdf->Write(19,'The School Management');   

    }
}

}
}
$pdf->Output();
$file = "$add.pdf";
$filename = "upload/employ/$file";
$pdf->Output($filename, 'F');

$sqll = "UPDATE staff SET `admletter` = '$file' WHERE `staffid` = '".$_GET["id"]."'";
$re   = query($sqll);
}
?>