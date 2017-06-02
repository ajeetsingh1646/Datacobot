<?php include 'database.php'; ?>

<?php

// create a variable
$first_name=$_POST['Name'];
$last_name=$_POST['Course'];
$department=$_POST['University'];
$job=$_POST['Job'];
$email=$_POST['Email'];

//Execute the query


mysqli_query($connect,"INSERT INTO Employees1 (name,course,university,job,email)
		        VALUES ('$first_name','$last_name','$department','$job','$email')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	print_r($_POST);
        echo "<center><br><br><a href='index.php'style='font-weight:700'>Go Back</a></center>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}