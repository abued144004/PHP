<?php

$con=mysqli_connect('localhost:3307','root','','reg_db');


function escape($string){
	global $con;
	return mysqli_real_escape_stirng($con,$string);
}


function query($query){
	global $con;
	return mysqli_query($con,$query);
}

function fetch_array($result){
	global $con;
	return mysqli_fetch_array($result);
}

function confirm($result){
	global $con;
	if(!$result)
	{
		die("Your Query is Failed" . mysqli_error($con));
	}
}

function row_count($result){
	return mysqli_num_rows($result);
}

?>