<?php
session_start();
include("./connection.php");
header('location: ../../index.php');
$username = $_POST['uname'];
$phoneNo = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['psw'];
$address = $_POST['addr'];
$con_pass=$_POST['con_psw'];
//*********fetech data from data and check data for duplicate data*/
$q1 = " select * from signup";
$result1 = mysqli_query($con, $q1);

if(!empty($username) && !empty($phoneNo) && !empty($pass) && !empty($con_pass)){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {	
				if( $pass==$con_pass){
						while($row = mysqli_fetch_array($result1)){
							if($phoneNo==$row['phoneNumber']){
								echo "Duplicate data";
							}else{
								$qy= " insert  into signup(username , phoneNumber, emailid, password, address) values ('$username' , '$phoneNo' , '$email' , '$pass' , '$address') ";
								mysqli_query($con, $qy);
							}
						}
				}
				else{
					echo"pass must be same";
				}
		}
		else{
			echo"enter valid email id";
		}
	}
	else{
		echo "please fill all detail";
	}
?>