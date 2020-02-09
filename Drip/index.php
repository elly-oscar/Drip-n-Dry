
<?php
require "protect.php";
if ($_SESSION["type"] !=2)
{
    echo "<h2 class='text-success'>This page is for users.</h2>";
    die();
}
$message = '';
if (isset($_POST["names"])) {
    require "connect.php";
    extract($_POST);
	
    if($password_1==$password_2)
    {
        $query = "insert into tasks VALUES (NULL, '$duty', '$email', '$password_1', 2)";
        $result = mysqli_query($conn, $query);//or die(mysqli_error($conn));
        if ($result)
            $message = "<h4 class='text-primary text-center'>Task submitted successfully</h4>";
        else
            $message = "<h4 class='text-danger text-center'>This task $names already exists</h4> ";

    }else{
        $message = "<h4 class='text-danger text-center'>Passwords do not match</h4> ";


    }


}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Register New Customer</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body {
            width: 100%;
            height: 100%;
      background:url(clean.jpg);
	  	background-size:1500px;
        }

        .navbar-header{
            background-color: #000047;
        }
        .container {
            height: 90vh;
			width:120vh;
            display: flex;
            align-content: center;
            align-items: center;
			   background:url(ba.jpg);
        }

        .form-group {
            margin: auto;
        }

        .glyphicon {
            font-size: 80px;
            color: #000047;
        }
		        .con {
            height: 100vh;
			width:120vh;
            display: flex;
            align-content: center;
            align-items: center;
			 
        }

    </style>
</head>
<body>
<?php require "navbar.php"; ?>
 
<div class="con">
<div class="col-sm-4 col-sm-offset-4">
<img src="dc.png" width="800px">
</div>
</div>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <p class="text-center">
              <img src ="logo.png">
        </p>
        <p class="text-center">Assign Task</p>
        <?= $message ?>
        <form role="form" method="post" action="index.php">
             <div class="form-group">
                <label for="email">Task assigned:</label>
                <input type="text" name="names" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" name="email" required class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="password_1" required class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" name="password_2" required class="form-control" id="pwd">
            </div>

            <button type="submit" class="btn btn-success">Submitt Task</button>
        </form>
    </div>
</div>
</body>
</html>