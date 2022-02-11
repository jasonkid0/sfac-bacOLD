<?php
require ('../fpdf/fpdf.php');


class PDF extends FPDF
{

// Page header

}

$pdf = new PDF('P','mm','Legal');
//left top right
$pdf->SetRightMargin(10);
$pdf->SetAutoPageBreak(true, 8);
$pdf ->AddPage();

    // Logo(x axis, y axis, height, width)
    $pdf->Image('../../assets/img/logo.png',50,5,15,15);
    // text color
    $pdf->SetTextColor(255,0,0);
    // font(font type,style,font size)
    $pdf->SetFont('Arial','B',12);
    // Dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,5,'Saint Francis of Assisi College',0,0,'C');
    // Line break
    $pdf->Ln(4);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',8,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,3,'96 Bayanan, City of Bacoor, Cavite',0,0,'C');
    // Line break
    $pdf->Ln(6);
    $pdf->SetFont('Arial','B',8,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,3,'FOUR-YEAR CURRICULUM',0,1,'C');
    // Line break

    $pdf->SetFont('Arial','B',8,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,3,'FOR',0,1,'C');
    // Line break

    $pdf->SetFont('Arial','B',8,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,3,'BACHELOR OF SECONDARY EDUCATION',0,1,'C');
        $pdf->Cell(50);
    $pdf->Cell(90,3,'Major in Filipino',0,1,'C');
    // Line break


    // Line break

    $pdf->SetFont('Arial','',8,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,3,'(Effective Academic Year 2020-2021)',0,1,'C');
     // Line break
    $pdf->Ln(1);
   

//dummy cells
$pdf ->Cell(20 ,4,'',0,1);
$pdf ->Cell(20 ,4,'',0,0);

$pdf->SetFont('Arial','B','8');
$pdf ->Cell(20 ,6,'CODE',0,0);
$pdf ->Cell(90 ,6,'Description',0,0,'C');
$pdf ->Cell(34 ,6,'UNITS',0,0,'C');
$pdf ->Cell(60 ,6,'Pre-Requisites',0,1);


$pdf->SetFont('Arial','BI','9');
//YEAR , SEMESTER
$pdf ->Cell(10 ,4,'',0,0);
$pdf ->Cell(45 ,4,'First Year, First Semester',0,0);

$pdf->SetFont('Arial','','8');
// UNITS
$pdf ->Cell(78 ,4,'',0,0);
$pdf ->Cell(10 ,4,'LEC',0,0);
$pdf ->Cell(10 ,4,'LAB',0,0);
$pdf ->Cell(10 ,4,'TOTAL',0,1);
$pdf->SetFont('Arial','','8.5');
// SUBJECTS

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'Science, Technology and Society',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'Readings in Philippine History',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'103',0,0);
$pdf ->Cell(90 ,3.7,'Understanding the Self',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CHCL',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'Franciscan Orientation',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'1',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'TCED',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'The Child and Adolescent Learners and Learning Principles',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'Introduksyon sa Pag-aaral ng Wika',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'Panimulang Linggwistika',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

// LAST LINE PER SEM
$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PHED',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'Gymnastics',0,0);
$pdf ->Cell(10 ,3.7,'2',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'2',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'NSTP',0,0);
$pdf ->Cell(15 ,3.7,'1',0,0);
$pdf ->Cell(90 ,3.7,'National Service Training Program 1',0,0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(9 ,3.7,'0','B',0);
$pdf ->Cell(7 ,3.7,'(3)','B',1);



$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'21',0,0);
$pdf ->Cell(180 ,6,'',0,1);









$pdf->SetFont('Arial','BI','9');
//YEAR , SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'First Year, Second Semester',0,1);
$pdf ->SetLineWidth(.5);
$pdf -> Line(204, 89, 14, 89);//1st yr, 1st sem
$pdf -> Line(204, 133, 14, 133);//1st yr 2nd sem
$pdf -> Line(204, 177, 14, 177);//2nd yr 1st sem
$pdf -> Line(204, 225, 14, 225);//2nd yr 2nd sem
$pdf -> Line(204, 269, 14, 269);//3rd yr 1st sem
$pdf -> Line(204, 317, 14, 317);//3rd yr 2nd sem
$pdf -> Line(204, 363, 14, 363);//4th yr 1st sem
$pdf -> Line(204, 343, 14, 343);//4th yr 2nd sem
$pdf ->SetLineWidth(.1);
$pdf->SetFont('Arial','','8.5');


// SUBJECTS

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'104',0,0);
$pdf ->Cell(90 ,3.7,'Mathematics in the Modern World',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'105',0,0);
$pdf ->Cell(90 ,3.7,'The Contemporary World',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'ECGE',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'Living in the I.T. Era',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'CCGE 101',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CHCL',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'Franciscan Core Values and Culture',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(20, 3.7,'CHCL 101',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'TCED',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'The Teaching Profession',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PKED',0,0);
$pdf ->Cell(15 ,3.7,'105',0,0);
$pdf ->Cell(90 ,3.7,'Facilitating Learner-Centered Teaching',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'TCED 101',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'103',0,0);
$pdf ->Cell(90 ,3.7,'Ang Kurikulum sa Batayang Antas ng Edukasyon',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PHED',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'Individual / Dual Sports',0,0);
$pdf ->Cell(10 ,3.7,'2',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'2',0,0);
$pdf ->Cell(20, 3.7,'PHED 101',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'NSTP',0,0);
$pdf ->Cell(15 ,3.7,'2',0,0);
$pdf ->Cell(90 ,5,'National Service Program 2',0,0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(10 ,3.7,'0','B',0);
$pdf ->Cell(10 ,3.7,'(3)','B',0);
$pdf ->Cell(20 ,3.7,'NSTP 1',0,1);




$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'21',0,0);
$pdf ->Cell(180 ,6,'',0,1);








$pdf->SetFont('Arial','BI','9');
//YEAR , SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Second Year, First Semester ',0,1);

// SUBJECTS
$pdf->SetFont('Arial','','8.5');

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'106',0,0);
$pdf ->Cell(90 ,3.7,'Purposive Communication',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);


$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'107',0,0);
$pdf ->Cell(90 ,3.7,'Art Appreciation',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'ECGE',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'The Entrepreneurial Mind',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->SetFont('Arial','',8);
$pdf ->Cell(20, 3.7,'CCGE 104, CCGE 105',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'TCED',0,0);
$pdf ->Cell(15 ,3.7,'103',0,0);
$pdf ->Cell(90 ,3.7,'The Teacher and the Community, School Culture and Org. Leadership',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf->SetFont('Arial','','8.5');
$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PKED',0,0);
$pdf ->Cell(15 ,3.7,'106',0,0);
$pdf ->Cell(90 ,3.7,'Assessment in Learning 1',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'104',0,0);
$pdf ->Cell(90 ,3.7,'Estruktura ng Wikang Filipino',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'105',0,0);
$pdf ->Cell(90 ,3.7,'Pagtuturo at Pagtataya ng Makrong Kasanayang Pangwika',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'106',0,0);
$pdf ->Cell(90 ,3.7,'Ugnayan ng Wika, Kultura at Lipunan',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PHED',0,0);
$pdf ->Cell(15 ,3.7,'103',0,0);
$pdf ->Cell(90 ,3.7,'Team Sports',0,0);
$pdf ->Cell(10 ,3.7,'2','B',0);
$pdf ->Cell(10 ,3.7,'0','B',0);
$pdf ->Cell(10 ,3.7,'2','B',0);
$pdf ->Cell(20 ,3.7,'PHED 101',0,1);


$pdf ->Cell(20 ,5,'',0,0);


$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'26',0,0);
$pdf ->Cell(180 ,6,'',0,1);








$pdf->SetFont('Arial','BI','9');
//YEAR , SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Second Year, Second Semester',0,1);
$pdf->SetFont('Arial','','8.5');

// SUBJECTS

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'CCGE',0,0);
$pdf ->Cell(15 ,3.7,'108',0,0);
$pdf ->Cell(90 ,3.7,'Ethics',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20 ,3.7,'CCGE 103',0,1);



$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'ECGE',0,0);
$pdf ->Cell(15 ,3.7,'103',0,0);
$pdf ->Cell(90 ,3.7,'Reading Visual Art',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->SetFont('Arial','','8');
$pdf ->Cell(20, 3.7,'CCGE 106, CCGE 107',0,1);

$pdf->SetFont('Arial','','8.5');
$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'RIZL',0,0);
$pdf ->Cell(15 ,3.7,'100',0,0);
$pdf ->Cell(90 ,3.7,'Rizal\'s Life, Works & Writings',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'CCGE 102',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'TCED',0,0);
$pdf ->Cell(15 ,3.7,'104',0,0);
$pdf ->Cell(90 ,3.7,'Foundation of Special and Inclusive Education',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf->SetFont('Arial','','8.5');
$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PKED',0,0);
$pdf ->Cell(15 ,3.7,'107',0,0);
$pdf ->Cell(90 ,3.7,'Assessment in Learning 2',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'PKED 106',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'107',0,0);
$pdf ->Cell(90 ,3.7,'Paghahanda at Ebalwasyon ng Kagamitang Panturo',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'108',0,0);
$pdf ->Cell(90 ,3.7,'Introduksyon sa Pagsasalingwika',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'109',0,0);
$pdf ->Cell(90 ,3.7,'Introduksyon sa Pamamahayag',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'RESE',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'Introduction to Research',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PHED',0,0);
$pdf ->Cell(15 ,3.7,'104',0,0);
$pdf ->Cell(90 ,5,'Sports Management',0,0);
$pdf ->Cell(10 ,3.7,'2','B',0);
$pdf ->Cell(10 ,3.7,'0','B',0);
$pdf ->Cell(10 ,3.7,'2','B',0);
$pdf ->Cell(20 ,3.7,'PHED 101',0,1);


$pdf ->Cell(20 ,5,'',0,0);


$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'27',0,0);
$pdf ->Cell(180 ,6,'',0,1);



$pdf->SetFont('Arial','BI','9');
//YEAR, SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Third Year, First Semester',0,1);


// SUBJECTS
$pdf->SetFont('Arial','','8.5');

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PKED',0,0);
$pdf ->Cell(15 ,3.7,'108',0,0);
$pdf ->Cell(90 ,3.7,'Technology for Teaching and Learning',0,0);
$pdf ->Cell(10 ,3.7,'2',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PKED',0,0);
$pdf ->Cell(15 ,3.7,'109',0,0);
$pdf ->Cell(90 ,3.7,'The Teacher and the School Curriculum',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'PKED',0,0);
$pdf ->Cell(15 ,3.7,'110',0,0);
$pdf ->Cell(90 ,3.7,'Building and Enhancing New Literacies Across the Curriculum',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);


$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'GEED',0,0);
$pdf ->Cell(15 ,3.7,'',0,0);
$pdf ->Cell(90 ,3.7,'General Elective 1',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20 ,3.7,'Third Year Standing',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'110',0,0);
$pdf ->Cell(90 ,3.7,'Barayti at Baryasyon ng Wika',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'111',0,0);
$pdf ->Cell(90 ,3.7,'Mga Natatanging Diskurso sa Wika at Panitikan',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'112',0,0);
$pdf ->Cell(90 ,3.7,'Panitikan ng Rehiyon',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'113',0,0);
$pdf ->Cell(90 ,3.7,'Kulturang Popular',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'114',0,0);
$pdf ->Cell(90 ,5,'Sanaysay at Talumpati',0,0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(10 ,3.7,'0','B',0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(20 ,3.7,'',0,1);


$pdf ->Cell(20 ,5,'',0,0);


$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'27',0,0);
$pdf ->Cell(180 ,6,'',0,1);




$pdf->SetFont('Arial','BI','9');
//YEAR, SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Third Year, Second Semester',0,1);

$pdf->SetFont('Arial','','8');
// SUBJECTS

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'LEMA',0,0);
$pdf ->Cell(15 ,3.7,'100',0,0);
$pdf ->Cell(90 ,3.7,'Fundamentals of Leadership and Management',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'RESE',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'Pagsasaliksik sa Wika at Panitikan',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20 ,3.7,'RESE 101',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'FRED',0,0);
$pdf ->Cell(15 ,3.7,'101',0,0);
$pdf ->Cell(90 ,3.7,'The Franciscan Educator 1',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'GEED',0,0);
$pdf ->Cell(15 ,3.7,'',0,0);
$pdf ->Cell(90 ,3.7,'General Elective 2',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20 ,3.7,'Third Year Standing',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'115',0,0);
$pdf ->Cell(90 ,3.7,'Panunuring Pampanitikan',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'116',0,0);
$pdf ->Cell(90 ,3.7,'Maikling Kwento at Nobelang Filipino',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'117',0,0);
$pdf ->Cell(90 ,3.7,'Panulaang Filipino',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'118',0,0);
$pdf ->Cell(90 ,3.7,'Dulaang Filipino',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20, 3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'119',0,0);
$pdf ->Cell(90 ,3.7,'Technology for Teaching and Learning 2',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20 ,3.7,'PKED 108, 105, 107',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'MCFL',0,0);
$pdf ->Cell(15 ,3.7,'120',0,0);
$pdf ->Cell(90 ,3.7,'Malikhaing Pagsulat',0,0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(10 ,3.7,'0','B',0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(20 ,3.7,'',0,1);



$pdf ->Cell(20 ,5,'',0,0);


$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'28',0,0);
$pdf ->Cell(180 ,6,'',0,1);









$pdf->SetFont('Arial','BI','9');
//YEAR, SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Fourth Year, First Semester',0,1);

$pdf->SetFont('Arial','','8');

// SUBJECTS

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'FRED',0,0);
$pdf ->Cell(15 ,3.7,'102',0,0);
$pdf ->Cell(90 ,3.7,'The Franciscan Educator 2',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'1',0,0);
$pdf ->Cell(20, 3.7,'',0,1);


$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'ELED',0,0);
$pdf ->Cell(15 ,3.7,'111',0,0);
$pdf ->Cell(90 ,3.7,'Field study 1 (Observation of Teaching-Learning in Actual School',0,0);
$pdf ->Cell(10 ,3.7,'0',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(10 ,3.7,'3',0,0);
$pdf ->Cell(20 ,3.7,'',0,1);

$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','',0);
$pdf ->Cell(15 ,3.7,'',0,0);
$pdf ->Cell(15 ,3.7,'',0,0);
$pdf ->Cell(90 ,3.7,'    Environment)',0,0);
$pdf ->Cell(10 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'',0,0);
$pdf ->Cell(20 ,3.7,'',0,1);


$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'ELED',0,0);
$pdf ->Cell(15 ,3.7,'112',0,0);
$pdf ->Cell(90 ,3.7,'Field Study 2 (Participation and Teaching Assistantship',0,0);
$pdf ->Cell(10 ,3.7,'0','B',0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(10 ,3.7,'3','B',0);
$pdf ->Cell(20 ,3.7,'',0,1);





$pdf ->Cell(20 ,5,'',0,0);


$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'7',0,0);
$pdf ->Cell(180 ,6,'',0,1);






//YEAR, SEMESTER
$pdf->SetFont('Arial','BI','9');
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Fourth Year, Second Semester',0,1);


// SUBJECTS

$pdf->SetFont('Arial','','8.5');
$pdf ->Cell(5 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'','B',0);
$pdf ->Cell(15 ,3.7,'TIED',0,0);
$pdf ->Cell(15 ,3.7,'113',0,0);
$pdf ->Cell(90 ,3.7,'Teaching Internship',0,0);
$pdf ->Cell(10 ,3.7,'0','B',0);
$pdf ->Cell(10 ,3.7,'6','B',0);
$pdf ->Cell(10 ,3.7,'6','B',0);
$pdf ->Cell(20 ,3.7,'ELED 111 & 112',0,1);


$pdf ->Cell(20 ,5,'',0,0);


$pdf->SetFont('Arial','','9');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(33 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','9');
$pdf ->Cell(10 ,6,'6',0,0);
$pdf ->Cell(180 ,6,'',0,1);



$pdf ->Cell(20 ,5,'',0,1);

$pdf->SetFont('Arial','B','9');
$pdf ->Cell(95 ,3.7,'',0,0);
$pdf ->Cell(34 ,3.7,'TOTAL NUMBER OF UNITS',0,0,'C');
$pdf ->Cell(16 ,3.7,'',0,0);
$pdf ->Cell(9 ,3.7,'',0,0);
$pdf ->Cell(10 ,3.7,'160','',1,0);


$pdf->SetFont('Arial','I','9');
$pdf ->Cell(95 ,3.5,'',0,0);
$pdf ->Cell(34 ,3.5,'(including NSTRP 6 units)',0,0,'C');



$pdf ->Output();
?>