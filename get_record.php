<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>



<?php

    include("config/settings.php");
    //include('includes/sessions.php');
    $sql = "SELECT * FROM student_record ";
    $result = mysqli_query($conn,$sql);

    echo "<h2>Students Record. <a href='index.php'>Home</a></h2>  ";
    echo "<table class='atable'>
	<tr>
	   <th>Name</th>
	   <th>Surname</th>
	   <th>Student Number</th>
	   <th>Email</th>
       <th>Course</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
	{
		//$date = strtotime($row['vol_date']);

		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['surname'] . "</td>";
		//echo "<td>" .  date( 'd-M-Y', $date) . "</td>";
		echo "<td>" . $row['student_number'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "<td>" . $row['course'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";	

?>

</body>
</html>