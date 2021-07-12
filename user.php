<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/join.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
      /*button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }*/
      h2{
        font-size: 40px;
        }
        table{
            letter-spacing: 1.2px;
        }
        td{
            text-align: center;
        }
        button{
            border:none;
            background: #d9d9d9;
            transition: 1s;
        }
        @media only screen and (orientation: portrait){
            *{
                letter-spacing: 1px;
            }
        }
    </style>
</head>

<body style="background-color : #fab1a0;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM registeration";
    $result = mysqli_query($conn,$sql);
?>

<div id="nav">
        <nav class="menubar">
            <div class="left-side">

                <img src="photo/logo.svg" width="90px" height="50px">
            </div>
            <div class="right-side" id="myTopnav">
                <a href="index.php"><b>Home</b></a>
                <a href="about.php"><b>About us</b></a>
                <a href="user.php"><b>Users</b></a>
                    <?php
                    session_start();

                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')
                    {
                        $name = $_SESSION['first_name'];
                        //echo "<a href='user.php?id=".$_SESSION["first_name"]."'><b> $name </b></a>";
                        echo "<a href='#'><b> $name </b></a>";
                    }
                    else
                    {
                        ?>
                        <a href="register.php"><b>LOGIN/SIGN UP</b></a>
                    <?php
                    }
                    ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>

<div class="container">
        <h2 class="text-center pt-4" style="color : indigo;">Users</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">College</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['first_name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['college']?></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer style=" 
            position:absolute;
            bottom:0;
            width:100%;
            height:50px;   
            background:#000;
            color: wheat;
            text-align: center;
            ">
                <p style="margin-top: 20px;"> Copyright &copy <a style="text-decoration:none; color: orangered;" href="#">Exam-Library</a> All Rights Reserved | Contact Us: +91 7631353674</p>
        </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>