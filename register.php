<?php
    include('config.php');
    session_start();
    if(isset($_POST['submit1']))
    {
                    
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

    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $college=$_POST['college'];
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
            echo "<script> alert('You  have already registered.');
                  </script>";
        }
        else
        {
            $sql="insert into registeration(first_name,last_name,email,password,college) values('{$first_name}','{$last_name}','{$email}','{$password}','{$college}')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "<script> alert('Congrats, you registered successfully!');
                            window.location='index.php'; 
                    </script>";               
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
    <title>Login</title>
    <style>
        body{
            background-color: #fab1a0;
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

            <!--Login form-->
            <form method="post" id="login" class="input-group-login">
                <input type="text" class="input-field" placeholder="Email Id" name="email" required>
                <input type="password" class="input-field" placeholder="Enter password" name="password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="submit1">Log In</button>
            </form>
            <!--Login form end-->

            <!--Register form-->
            <form method="post" id="register" class="input-group-register">
                <input type="text" class="input-field" placeholder="First Name" name="first_name" required>
                <input type="text" class="input-field" placeholder="Last Name" name="last_name" required>
                <input type="email" class="input-field" placeholder="Email Id" name="email" required>
                <input type="password" class="input-field" placeholder="Enter password" name="password" required>
                <input type="text" class="input-field" placeholder="Enter College Name" name="college" required>
                <button type="submit" class="submit-btn" name="submit">Register</button>
            </form>
            <!--Register form end -->

        </div>
    </div>
    
    <?php include 'footer.php';?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>