<html>
   <link rel="icon" href="images/favicon.ico" type="image/x-icon">
   <?php 
error_reporting(0);
require_once 'excel_reader2.php';


$data = new Spreadsheet_Excel_Reader('book1.xls');
$row = $data->rowcount($sheet_index=0);
$col = $data->colcount($sheet_index=0);

$col=10;
  $con = mysqli_connect("localhost", "root","root","bloodbank"); 
  	
$query = "INSERT INTO `donor`(`d_id`, `name`, `ph_number`, `email_id`, `dob`, `gender`, `age`, `blood_group`, `area`, `a_id`) VALUES";
$i=1;
while($i<=$row){
	$j=1;
		$query .= "(";
	while($j<=$col){
		//echo $data->val(1,$i);
		
		$query .= "'".$data->val($i,$j)."' ";
		if($j==$col )
			$query.=")";
		else if($j<$col )
			$query .= ", ";
		$j=$j+1;
	}
	if($i==$row)
		$query.=";";
	else
		$query.=",";
	$i=$i+1;
	
}
//echo $query."<br/><br/>";
$result=mysqli_query($con,$query);
//echo $result;
if($result)
echo "<script>alert('Successful')</script>"; else
echo "<script>alert('UnSuccessful')</script>";
header("location:index.php");

?>
</html>
