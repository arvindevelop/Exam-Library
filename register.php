<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/join.css">
    <title>Login</title>
    <style>
        body{
            background-color: rgb(16, 233, 215);
        }
    </style>
</head>
<body>
    <div id="login-form" class="login-page">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick='login()' class="toggle-btn">Log In</button>
                <button type="button" onclick='register()' class="toggle-btn">Register</button>
            </div>
            <div class="submit-message" style="padding-bottom:10px;">
            <p style="color:red;text-align:center;">
            <?php
                session_start();
                if(isset($_POST['submit1']))
                {
                    include('config.php');
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                
                    $sql="SELECT * from registeration";
                    $result=mysqli_query($conn,$sql);
        
                    $flag = 0;
                    while($rows = mysqli_fetch_assoc($result)){
                        if($rows['email'] == $email && $rows['password'] == $password)
                        {
                            $flag = 1;
                            $_SESSION['first_name'] = $rows['first_name'];
                            $_SESSION['logged_in'] = 'true';
                            header("Location: index.php");
                        }
                    }
                    if(!$flag)
                    {
                        echo "<script>window.alert('Email or Password incorrect')</script>";
                    }
                }
            ?></p>
            </div>
            <form method="post" id="login" class="input-group-login">
                <input type="text" class="input-field" placeholder="Email Id" name="email" required>
                <input type="password" class="input-field" placeholder="Enter password" name="password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="submit1">Log In</button>
            </form>
            <p style="color:red;text-align:center;">
            <?php
                include 'config.php';
                if(isset($_POST['submit'])){
                    $first_name=$_POST['first_name'];
                    $last_name=$_POST['last_name'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $sql = "SELECT email FROM registeration";
                    $result = mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "<h2>There is some error</h2>";
                    }
                    $flag = 0;
                    while($rows = mysqli_fetch_assoc($result)){
                        if($rows['email'] == $email)
                        {
                            $flag = 1;
                            break;
                        }
                    }
                    if($flag)
                    {
                        echo "You have already registered";
                    }
                    else
                    {
                        $sql="insert into registeration(first_name,last_name,email,password) values('{$first_name}','{$last_name}','{$email}','{$password}')";
                        $result=mysqli_query($conn,$sql);
                        if($result){
                            echo "<script> alert('Congrats, you registered successfully!');
                                        window.location='index.php'; 
                                </script>";               
                        }
                    }
                }
            ?></p>
            <form method="post" id="register" class="input-group-register">
                <input type="text" class="input-field" placeholder="First Name" name="first_name" required>
                <input type="text" class="input-field" placeholder="Last Name" name="last_name" required>
                <input type="email" class="input-field" placeholder="Email Id" name="email" required>
                <input type="password" class="input-field" placeholder="Enter password" name="password" required>
                <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                <button type="submit" class="submit-btn" name="submit">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');
        function register()
        {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }
        function login()
        {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event)
        {
            if(event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>