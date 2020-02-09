<?php
session_start();
$message="";
if (isset($_POST["email"]))
{
    require "connect.php";
    extract($_POST);
    $query="select * from users WHERE email='$email' AND password='$password' AND type!=3";
    $result=mysqli_query($conn, $query) or die(mysqli_error($conn));

    $count= mysqli_num_rows($result);
    if ($count==1)
    {
        //success
        $row= mysqli_fetch_assoc($result);
        extract($row);
        session_start();
        $_SESSION["names"]=$names;
        $_SESSION["type"]=$type;
        header("location:home.php");

    }
    else
    {
        $message="<p class='text-primary'>Wrong email or password";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<style>
        body{
            width: 100%;
            height: 100%;
            background:url(clean.jpg);
			background-size:1500px;
        }
        .container{
            height: 80vh;
            display: flex;
            align-content: center;
            align-items: center;
		

        }
        .n{
          color: #fff;
        }
        .form-group {
            margin: auto;
			color:#EDF1FE;
			
        }

        .btn-success{
           background-color:rgb(171, 35, 250);
        }
        .glyphicon{
            font-size: 50px;

        }
    </style>


</head>
<body>
    <div class="container">
        <div class="col-sm-4 col-sm-offset-4">
            <p class="text-center">
                <img src="logo.png" background-color="grey">
				
            </p>
          
            <form role="form" method="post" action="login.php">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" required class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" required class="form-control" id="pwd">
                </div>
				<br>

                <button type="submit" class="btn btn-success">Log in</button>
            </form>
            <?=$message?>
        </div>
    </div>
</body>
</html>