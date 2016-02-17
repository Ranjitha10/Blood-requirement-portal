<?php
var_dump($_FILES);

	$con=mysqli_connect("localhost","root","root","bloodbank");
	$fname=$_FILES['file']['name'];
	if(!isset($fname))
	{
		echo "File not able to upload!Please try again!";
	}
	else if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	} 
	else 
	{
	include 'classes/PHPExcel/IOFactory.php';
	$inputFileType='Excel2007';//always it doesn't support newer versions and newer versions are compatible with 2007, so 
	$objReader=PHPExcel_IOFactory::createReader($inputFileType);
	$objPHPExcel=$objReader->load($_FILES['file']['tmp_name']);
	$sheet1=$objPHPExcel->setActiveSheetIndex(0);
	$lastRow=$sheet1->getHighestRow();
	for($i=2;$i<=$lastRow;$i++)
	{
	$valA=$sheet1->getcell("A".$i)->getvalue();
	$valB=$sheet1->getcell("B".$i)->getvalue();
	$valC=$sheet1->getcell("C".$i)->getvalue();
	$valD=$sheet1->getcell("D".$i)->getvalue();
	$valE=$sheet1->getcell("E".$i)->getvalue();
	$valF=$sheet1->getcell("F".$i)->getvalue();
	$valG=$sheet1->getcell("G".$i)->getvalue();
	$valH=$sheet1->getcell("H".$i)->getvalue();
	$valI=$sheet1->getcell("I".$i)->getvalue();
	$valJ=$sheet1->getcell("J".$i)->getvalue();
	$valK=$sheet1->getcell("K".$i)->getvalue();
	$valL=$sheet1->getcell("L".$i)->getvalue();
	$valM=$sheet1->getcell("M".$i)->getvalue();
	$valN=$sheet1->getcell("N".$i)->getvalue();
	$valO=$sheet1->getcell("O".$i)->getvalue();
	$valP=$sheet1->getcell("P".$i)->getvalue();
	$valQ=$sheet1->getcell("Q".$i)->getvalue();
	$valR=$sheet1->getcell("R".$i)->getvalue();
	$valS=$sheet1->getcell("S".$i)->getvalue();
	$valT=$sheet1->getcell("T".$i)->getvalue();
	$valE=date("y-m-d",strtotime($valE));
	$sql1="insert into donor (d_id,name,ph_number,email_id,dob,gender,age,blood_group,area,a_id) 
			values ('$valA','$valB','$valC','$valD','$valE','$valF','$valG','$valH','$valI','$valT')";
			
	 $sql2="insert into donor_details (d_id,height,weight,bmi) 
			values ('$valA','$valJ','$valK','$valL')";
	$sql3="insert into blood (b_code,d_id,date_of_donation) 
			values ('$valM','$valA','$valN')";
	$sql4="insert into address (d_no,address_d,d_id,pincode,state_no) 
			values ('$valO','$valP','$valA','$valQ','$valR')";
	$sql5="insert into state (state_no,state) 
			values ('$valR','$valS')";
	
	
	$res1=mysqli_query($con,$sql1);
	
	 $res2=mysqli_query($con,$sql2);
	$res3=mysqli_query($con,$sql3);
	$res4=mysqli_query($con,$sql4);
	$res5=mysqli_query($con,$sql5);
	
		
}
	}
		
	
?>