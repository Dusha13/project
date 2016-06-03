<?php
function Chpass($idx)
{	
	require_once 'php/connection.php';

	$link1 = mysqli_connect($host, $user, $password, $database) 
		or die("Ошибка " . mysqli_error($link1)); 
	   
	$query ="SELECT pass FROM users WHERE users.email = '$idx'";
	 
	//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	// if($result)
	// {
	// 	$i=0;
	//     while ($row = mysqli_fetch_row($result)) {
	//         $rez[$i] = $row[0];
	//         $i += 1;
	//     }
	//     mysqli_free_result($result);
	// }
	mysqli_close($link1);
	// echo("$result");
	return "result";
}
?>