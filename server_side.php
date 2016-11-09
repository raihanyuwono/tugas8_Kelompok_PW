<?php
	session_start();
	$json = json_decode(file_get_contents('data.json'));
	$ans = "Not Found";
	foreach($json as $value){
		if(substr($value->nim, strlen($value->nim)-5, 5)==$_POST['nim'] || substr($value->nim, 3, 6)==$_POST['nim']){
			$ans = "Name : " . $value->name . "<br>" .
			"Student ID : " . $value->nim . "<br>" .
			"Gender : " . $value->gender . "<br>" .
			"Religion : " . $value->religion . "<br>" .
			"Birthday : " . $value->birthday . "<br>" .
			"Address : " . $value->address . "<br>" . 
			"Phone : " . $value->phone . "<br>" .
			"Email : " . $value->email . "<br>" .
			"Father : " . $value->name_father . "<br>" .
			"Mother : " . $value->name_mother . "<br>";
			break;
		}
	}
	$_SESSION['data'] = $ans;
	header('location:/');
?>