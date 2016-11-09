<?php
	session_start();
	$json = json_decode(file_get_contents('data.json'));
	$ans = "";
	foreach($json as $value){
		if($_GET['religion']==$value->religion){
			$ans .= "Name : " . $value->name . " - Student ID : " . $value->nim . "<br>";
		}
	}
	$_SESSION['data'] = $ans;
	header('location:/');
?>