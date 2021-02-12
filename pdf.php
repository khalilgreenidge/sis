<?php

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
	$pdf->Write(5,'HAVE YOU PREVIOUSLY APPLIED TO THE COLLEGE?             YES[]             NO[]                                                  ARE YOU A PAST STUDENT OF THE COLLEGE?       YES[]    NO[]   IF YES, STATE YEAR .........                  
	SEX: Female[]    Male[]                         MARITAL STATUS: Single[]   Married[]                                                                    BARBADOS I.D. NUMBER ...............(if applicable)                                                                                                       LEGAL NAME:Mr/Mrs/Miss ............................/.........................../.............................../.............................                                                                             LAST NAME      FIRST NAME        MIDDLE NAMES      MAIDEN NAME                            ADDRESS: ..................................
	E-MAIL ADDRESS:..................................
	TELEPHONE NO:      (Home)...........(Work)............Ext............(Cell).............	                                                              MAILING ADDRESS .............................................	                                                                                                               date of birth: ____/____/____    COUNTRY OF BIRTH: ................ NATIONALITY: .................. ');  
	$pdf->Ln(10);
	$pdf->Write(5, 'B                                                                                                                                                                                   EMERGENCY CONTACT: .....................................................                                                                                               TELEPHONE: ...............................................................................................                                                                                                         HOME                   WORK                CELL');
	$pdf->Ln(10);
	$pdf->Write(5, 'C                                                             PERSONAL HISTORY                                                                                        PLEASE INDICATE ANY PHYSICAL/MENTAL DISABILITIES WHICH MAY AFFECT YOUR STUDIES AND LIST ANY SPECIAL REQUIREMENTS:                                                                                                                                            DISABILITY: .......................                                    DETAILS: .......................                                                          DISABILITY: ....................                                       DETAILS: .....................  
	DISABILITY: .................                                          DETAILS: ....................');
	$pdf->Ln(10);
	$pdf->Write(5,'D                                  MATRICULATION STATUS                                                                                                              []REGULAR        - Applicants satisfying the minimum academic qualifications requirement.                                               []MATURE          - Applicant over 25 years of age who do not possess the minimum academic qualifications.                 []TRANSFER      - Applicants transferring from another tertiary level educational institution. ');

	$pdf->Ln(10);
	$pdf->Write(5, 'E                                                         WORK EXPERIENCE(if applicable)');
	$pdf->Ln();
	$pdf->Cell(0,10,"PERIOD EMPLOYED " ,1,1,"R");
	$pdf->Cell(0,10,"FROM      TO " ,1,1,"R");
	$pdf->Cell(0,10,"EMPLOYER                                                         POSITION" ,1,1,"L");
	$pdf->Cell(0,10,"" ,1,1,"R");
	$pdf->Cell(0,10,"" ,1,1,"R");
	$pdf->Ln(10);
	$pdf->Write(5, 'F                                                         APPLICATION INFORMATION                                                                                   A. Applicants are allowed TWO CHOICES ONLY.                                                                                                                B. Applicants who choose majors, can only choose one programme.                                                                                   C. Applicants should indicate clearly their FIRST and SECOND choices by placing 1st or 2nd in the boxes provided.');

	$pdf->Ln(10);
	$pdf->Cell(0,10,"FULL TIME   CHOICE" ,1,1,"R");
	$pdf->Cell(0,10,"                                       MAJORS - FULL-TIME " ,1,1,"L");
	$pdf->Cell(0,10,"       N.B. Applicants will be required to pursue either two or three of these majors." ,1,1,"L");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Ln(10);
	$pdf->Cell(0,10,"FULL TIME  PART TIME  CHOICE" ,1,1,"R");
	$pdf->Cell(0,10,"                                       PROGRAMMES " ,1,1,"L");
	$pdf->Cell(0,10,"" ,1,1,"L");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Ln(10);
	$pdf->Cell(0,10,"FULL TIME  PART TIME  CHOICE" ,1,1,"R");
	$pdf->Cell(0,10,"                                       PROGRAMMES " ,1,1,"L");
	$pdf->Cell(0,10,"" ,1,1,"L");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Ln(10);
	$pdf->Cell(0,10," PART TIME  CHOICE" ,1,1,"R");
	$pdf->Cell(0,10,"           SET COMBINATION MAJORS - PART-TIME " ,1,1,"L");
	$pdf->Cell(0,10,"             N.B. Applicants will be required to pursue only one set combination" ,1,1,"L");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R"); 
	$pdf->Ln(20);
	$pdf->Write(5, 'G                                          EDUCATIONAL HISTORY');
	$pdf->Ln(10);
	$pdf->Cell(0,10," PERIOD ENROLLED" ,1,1,"R");
	$pdf->Cell(0,10,"FROM     TO" ,1,1,"R");
	$pdf->Cell(0,10,"     SECONDARY SCHOOL/ COLLEGES/ UNVIVERSITIES ATTENDED" ,1,1,"L");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Write(5, 'G                                          EDUCATIONAL HISTORY');
	$pdf->Ln(10);
	$pdf->Write(5, 'H                                          ACADEMIC QUALIFICATIONS                                     (Also indicate those subjects which you will be taking OR have taken, and are awaiting results, by entering a Grade of "AR")                                   CXC,GCE OR EQUIVALENT & HIGHER LEVEL/PROFESSIONAL QUALIFICATIONS');
	$pdf->Ln(10);
	$pdf->Cell(0,10,"YEAR                      EXAM BODY                   LEVEL                      SUBJECT                 GRADE" ,1,1,"L");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R"); 
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R"); 
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R"); 
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R");
	$pdf->Cell(0,10, "",1,1,"R"); 
	$pdf->Ln(20);
	$pdf->Write(5, 'I hearby certify that the above particulars are true and correct. If I am accepted, I agree to abide by the rules and regulations of the College.');
	$pdf->Ln(10);
	$pdf->Write(5, '......................                                                                                                                                  ......................');
	$pdf->Write(5, 'APPLICANT                                                                                                                                        DATE');


	$pdf->Output();


?>