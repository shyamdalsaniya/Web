<?php
include("./User/Php/connection.php");
/*****************************login-validation************************************************* */
$errormsg='';
 if(isset($_POST['submit1'])){

$unamephone = $_POST['uname_phone'];
$pass = $_POST['psw'];

$q = " SELECT * FROM signup WHERE (phoneNumber || username = '$unamephone') && password = '$pass'";//checking for phonenumber

$result = mysqli_query($con, $q);//storing quary

$num = mysqli_fetch_array($result,MYSQLI_ASSOC);//firing quiry

$user = $num['username'];
$phone = $num['phoneNumber'];
$password = $num['password'];

if (!empty($unamephone) && !empty($pass)) {
    if($unamephone == $user || $unamephone == $phone){//if result found in phnumber no need to go for username
			if($pass == $password){
				// session_start();
				// $_SESSION['sid'] = $num['id'];
				// $_SESSION['uname'] = $num['username'];
			header('location:./User/Php/home.php');
			}
			else{
				 $errormsg="invalid";
			}
		}else{
      $errormsg="invalid";
				
		}
    }
    else {
      $errormsg="enter valid detail";
	}
}
////////////////////////////signup-validation///////////////////////////////////////////////////////

$errormsg1="";
if(isset($_POST['submit2'])){

    $username = $_POST['uname'];
    $phoneNo = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $address = $_POST['addr'];
    $con_pass=$_POST['con_psw'];
    
    $q1 = " select * from signup";
    $result1 = mysqli_query($con, $q1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(!empty($username) && !empty($phoneNo) && !empty($pass) && !empty($con_pass)){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {	
				if( $pass==$con_pass && strlen($phoneNo)<=10){
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
					$errormsg1="password is not valid";
				}
		    }
		else{
			$errormsg1="enter valid email id";
		}
	}
	else{
		$errormsg1="please fill all detail";
    }
}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../Project/User/Css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Project</title>
</head>

<body>

    <!------------------------------- Login ------------------------------------------>
    <div id="id01" class="main_login">

        <form class="login_Content animate" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <div>
                <div id="login" class="error">Invalid Username or Password</div>
                <input type="text" name="uname_phone" required>
                <label>Enter Username/PhoneNumber</label>
            </div>

            <div>
                <input type="password" name="psw" required>
                <label>Password</label>
            </div>

            <div class="chk">
                <input class="q2" type="checkbox" checked="checked" name="remember">
                <span class="qw">Remember me</span>
                <p><?php echo $errormsg; ?></p>
            </div>

            <div class="btn">
                <button type="submit" name="submit1">Login</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                class="cancelbtn">Cancel</button>
            </div>
            <div class="container" style="background-color:#f1f1f1;border-radius:5px">
                <span class="psw"><a href="#">Forgot password?</a></span><br>
                <a href="https://www.gmail.com" target="_blank"><img src="../Project/User/image/google_login.png"
                        alt=""></a>
            </div>
        </form>
    </div>

    <!------------------------- Sign UP ------------------------------->

    <div id="id02" class="main_login">

        <form class="login_Content login_Content2 animate" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"
            onsubmit="return signupvalidation()">
            <div>
                <div id="namechk" class="error">*Requried</div>
                <input type="text" name="uname" id="uname" required>
                <label for="uname" id="name_error">Username</label>
            </div>

            <div>
                <div id="phonechk" class="error">*Invalid</div>
                <input type="tel" name="phone" id="phone" required minlength="10" maxlength="10">
                <label id="phone1" for="phone_no">PhoneNumber</label>
            </div>

            <div>
                <div id="emailchk" class="error">*Invalid</div>
                <input type="email" name="email" id="email" required>
                <label for="Email_id" id="email_error">Email Id</label>
            </div>

            <div>
                <input type="password" name="psw" id="password" required>
                <label for="psw" id="password_error">Password</label>
            </div>

            <div>
                <div id="chk" class="error">*password should be same</div>
                <input type="password" name="con_psw" id="confirm_pasword" required>
                <label for="Con_psw" id="confirm_password_error">Conform Password</label>
            </div>

            <div>
                <textarea type="Address" name="addr" placeholder="Enter Address (Opitional)"></textarea>
                <p><?php echo $errormsg1; ?></p>
            </div>

            <div class="chk">
                <input type="checkbox" checked="checked" name="remember">
                <span class="qw">I confirm that I have read and agree to ****<br> <a href="#">Terms and Privacy
                        Policy.</a></span>
            </div>

            <div class="btn">
                <button type="submit" name="submit2">Submit</button>
                <button type="button" onclick="document.getElementById('id02').style.display='none'"
                    class="cancelbtn">Cancel</button>
            </div>

            <a href="https://www.gmail.com" target="_blank"><img src="../Project/User/image/google_login.png"
                    alt=""></a>
        </form>
    </div>

    <!-- ************************Main-Page************************ -->

    <main>
        <div class="search_bar">
            <div class="qwe">
                <div class="heading">
                    <h1>Your Favorite Food are at your Place.</h1>
                </div>
                <div class="icon_search">
                    <a href="#"><i class="material-icons search" title="Locate Me">location_on</i></a>
                    <input type="search" name="search" placeholder="Search Your City">
                </div>
            </div>
        </div>
        <div class="left-section">
            <ul>
                <li><a href="#" onclick="document.getElementById('id01').style.display='block'">Login</a></li>
                <li><a class="active" href="#" onclick="document.getElementById('id02').style.display='block'">Sign
                        Up</a></li>
            </ul>
        </div>
        <h1 class="thought">" People who love to Eat <br /> are always the Best People "</h1>
    </main>

    <!--******************************advertisement*********************-->
    <section>
        <div class="advertisement">
            <div class="box">
                <div class="icon"><i class="material-icons adv">fastfood</i></div>
                <div class="advtext1">
                    <h3>Healthy Food</h3>
                </div>
            </div>
            <div class="box">
                <div class="icon"> <i class="material-icons adv">location_city</i> </div>
                <div class="advtext2">
                    <h3>Favorite Restaurants.</h3>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="material-icons adv">directions_bike</i> </div>
                <div class="advtext3">
                    <h3>Rapid Delivery</h3>
                </div>
            </div>
        </div>
    </section>

    <!---*******************************option_location***************-->
    <section>
        <div class="option_loc">
            <ul class="loc_list">
                <li><a href="#">Agra</a></li>
                <li><a href="#">Ahmedabad</a></li>
                <li><a href="#">Amritsar</a></li>
                <li><a href="#">Bangalore</a></li>
                <li><a href="#">Bhopal</a></li>
                <li><a href="#">Chandigarth</a></li>
                <li><a href="#">Chennai</a></li>
                <li><a href="#">Delhi</a></li>
                <li><a href="#">Goa</a></li>
                <li><a href="#">Gurgaon</a></li>
                <li><a href="#">Hyderabad</a></li>
                <li><a href="#">Indore</a></li>
                <li><a href="#">Jaipur</a></li>
                <li><a href="#">Kolkata</a></li>
                <li><a href="#">Lucknow</a></li>
                <li><a href="#">Manipal</a></li>
                <li><a href="#">Mumbai</a></li>
                <li><a href="#">Nagpur</a></li>
                <li><a href="#">Patna</a></a></li>
                <li><a href="#">Pune</a></li>
                <li><a href="#">Raipur</a></li>
                <li><a href="#">Rajkot</a></li>
                <li><a href="#">Surat</a></li>
                <li><a href="#">Trupati</a></li>
                <li><a href="#">Udaipur</a></li>
                <li><a href="#">Vadodara</a></li>
                <li><a href="#">Varansi</a></li>
            </ul>
        </div>
    </section>

    <!---***************************<footer></footer>**********************-->

    <footer>
        <div class="bottom-bar">
            <p>All Rights Reserved © 2019 | Privacy Policy | Terms of Services</p>
        </div>
    </footer>


    <!---***********************JavaScript********************-->

    <script type="text/javascript" src="../Project/User/JS/main.js">

    </script>
</body>

</html>