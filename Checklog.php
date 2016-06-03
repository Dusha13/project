<?php
if(isset($_POST['email']))
	$email = $_POST['email'];
if(isset($_POST['password']))
	$password = $_POST['password'];
	$password1 = md5($password);

	require_once 'php/connection.php';

	$link = mysqli_connect($host, $user, $password, $database) 
		or die("Ошибка " . mysqli_error($link)); 

	$query ="SELECT email FROM users";
	 
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
		$i=0;
		while ($row = mysqli_fetch_row($result)) {
			$rez[$i] = $row[0];
			$i += 1;
		}
	}

	mysqli_free_result($result);

	if(Checkmail($rez) != -1)
		Checkpass($email, $link, $password1);

mysqli_close($link);

function Checkmail($rez)
{	
    foreach ($rez as $s) {
    	if($email = $s)
			return i;
    }
	return -1;
}
function Checkpass($email, $link, $password)
{
	$query ="SELECT pass FROM users WHERE `users`.`email` = '" . $email . "'";

	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if($result)
		$row = mysqli_fetch_row($result);

	if($row[0] === $password)
		echo "true";
	mysqli_free_result($result);
}

header("");
?>