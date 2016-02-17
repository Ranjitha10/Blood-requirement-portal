<table border="1">
    <tr>
    	<th>Donor ID</th>
		<th>NAME</th>
		<th>Ph_Number</th>
		<th>Email</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Blood Group</th>
		<th>Area</th>
		<th>Admin_ID</th>
	</tr>
	<?php
	//connection to mysql
	$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="bloodbank";
  
$con=mysqli_connect($hostname,$username,$password,$database);
	
	//query get data
	$sql = mysqli_query($con,"SELECT * FROM donor");
	$no = 1;
	while($data = mysqli_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$data['d_id'].'</td>
			<td>'.$data['name'].'</td>
			<td>'.$data['ph_number'].'</td>
			<td>'.$data['email_id'].'</td>
			<td>'.$data['dob'].'</td>
			<td>'.$data['gender'].'</td>
			<td>'.$data['age'].'</td>
			<td>'.$data['blood_group'].'</td>
			<td>'.$data['area'].'</td>
			<td>'.$data['a_id'].'</td>
			
		</tr>
		';
		$no++;
	}
	?>
</table>