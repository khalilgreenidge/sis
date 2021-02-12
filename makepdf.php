<?php
$today = date("Y-m-d");
require('fpdf17/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","","10");
$pdf->Image('imgs/bcclogo.gif');
$pdf->Ln(10);
$pdf->Write(1,'                                                            PLEASE READ THIS SECTION CAREFULLY',"C");
$pdf->Ln(10);
$pdf->Cell(0,10,"APPLICATION PERIOD",1,1,"C");
$pdf->Cell(0,10,"EARLY APPLICATION                                                                                             LATE APPLICATION",1,1,"L");
$pdf->Multicell(0,7,"Date: January 5,2015 - February 27, 2015                                                               Date: March 2, 2015 - March 27,2015 \nFees: Bds$10.00                                                          						                                       Fees: Bds$60.00",1,"L");
$pdf->Cell(0,10,"														                                                        Application Fee is Non-Refundable",1,1,"L");
$pdf->Ln();
$pdf->Cell(0,10,"                                                                               ENTRY REQUIREMENTS",1,1,"L");
$pdf->Multicell(0,10,"The minimum qualifications for entry to the College are: \n   A. four(4) passes at CXC General Proficiency Level with Grades 1,2 and 3 as of June 1998. \n   B. four (4) passes at GCE Ordinary Level with Grade A, B, or C. \n   C. any qualifications considered by the College to be equivalent. \n N.B. English Language Must be included in the four passes.",1);
$pdf->Multicell(0,10,"Persons 25 years or older who do not possess the minimum qualifications may be admitted as Mature Students, but may be required to attend an interview to determine their eligibility.",1);
$pdf->Ln();
$pdf->Cell(0,10,"         REQUIRED DOCUMENTS",1,1,"C");
$pdf->Cell(0,10,"       ONLY ORIGINAL DOCUMENTS OR CERTIFIED COPIES WILL BE ACCEPTED.",1,1,"C");
$pdf->Multicell(0,10,"The minimum qualifications for entry to the College are: \n   1. Barbados Identification Card AND Birth Certificate (OR a Valid Passport) \n   2. Where applicable, documented evidence of a change in name must be submitted (E.g. Marriage Certificate, Deed Poll, Affidavit) \n   3. Persons not born in Barbados should provide evidence of their status (if any) in Barbados (E.g. Permanent Resident, Immigrant). \n 5. Transcripts from Colleges & Universities should be sent directly to the College from the institution in signed, sealed envelopes.",1);
$pdf->Cell(0,10," Applications, which are not accompanied by these documents, WILL NOT be processed",1,1,"C");
$pdf->Cell(0,10,"APPLICATION FEE IS NON-REFUNDABLE",1,1,"C");
$pdf->Ln();
$pdf->Write(5,"HAVE YOU PREVIOUSLY APPLIED TO THE COLLEGE?             			{$Applied}   
Student's ID: {$newid}
                                                  
SEX: 					{$Sex}                         MARITAL STATUS:  		{$Status}     
                                                              
BARBADOS I.D. NUMBER 	{$RegistrationNumber}(if applicable)                 
                                                                                      
LEGAL NAME:   	{$abbr}  {$Name}                                                                                                                                                                FIRST NAME   MIDDLE NAMES  LAST NAME       

ADDRESS:  			{$Address}

E-MAIL ADDRESS: 	{$Email}

TELEPHONE NO: (Home){$HomeNumber} (Work){$WorkNumber} 		(Ext){$ext} 		(Cell){$CellNumber}	                                                              

MAILING ADDRESS: {$MailingAddress}	                                                                     

Date of Birth: {$Dob}  							      COUNTRY OF BIRTH: {$CountryofBirth}  						           NATIONALITY: {$Nationality} ");  

$pdf->Ln(10);
$pdf->Ln(10);

$pdf->Write(5, "I hearby certify that the above particulars are true and correct. If I am accepted, I agree to abide by the rules and regulations of the College.");

$pdf->Ln(10);
$pdf->Ln(10);

$pdf->Write(5, "{$Name}                                                                                               							    {$today}");
$pdf->Ln(10);
$pdf->Write(5, "APPLICANT                                                                                                                              DATE");

$content = $pdf->Output('', 'S');
require('PHPMailer-master/class.phpmailer.php');
$email = new PHPMailer();
$email->From      = 'khalilgreenidge16@gmail.com';
$email->FromName  = 'BCC Web Portal';
$email->Subject   = 'BCC Web Portal | New Application';
$email->Body      = 'Please see the attached file';
$email->AddAddress( "khalilgreenidge16@gmail.com " );
$email->AddAddress( $Email );

$email->AddStringAttachment($content, 'application_'.$newid.'.pdf', 'base64', 'application/pdf');
$email->Send();
$location = 'apply.php';
echo '<META HTTP-EQUIV="Refresh"  Content="0; URL='.$location.'" />';
?>