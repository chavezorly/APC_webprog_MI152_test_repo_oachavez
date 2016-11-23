<?php

foreach($users as user){
	echo $user->lastName."<br>";
	echo $user->firstName."<br>";
	echo $user->middleName."<br>";
	echo $user->email."<br>";
	echo $user->gender."<br>";
	echo $user->nickname."<br>";
	echo $user->homeAddress."<br>";
	echo $user->cellphoneNo."<br>";
}
?>