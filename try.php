<?php 

if(isset($_POST['submit'])){
    
    
    
    $user=$_POST['username'];
    $pass=$_POST['password'];
  
    
    
    $minimum=5;
    
    if(strlen($user) < $minimum)
    {
        echo "username must be graterthen 5";
    }
    
    
    $connection = mysqli_connect('localhost','root','','user');
    
    if($connection){
        echo "you are connected";
    }
    else{
        die("database connection failed");
    }
    
    $connect = "INSERT INTO user_detail(username,password) VALUES ('$user','$pass')";
    
    $result=mysqli_query($connection,$connect);
    
    if(!$result){
        die('query failed .mysqli_error');
    }
 
}

?>


<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title></title>
</head>

<body>
    <div class="containre">
        <div class="col-sm-6">
            <form action="try.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>

            </form>
        </div>

    </div>


</body>

</html>