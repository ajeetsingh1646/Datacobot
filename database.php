<?php
$connect=mysqli_connect('localhost','root','','Employees1');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>