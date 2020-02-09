<?php
require "protect.php";
if ($_SESSION["type"] !=1)
{
    echo "<h2 class='text-success'>You are not allowed to see this page</h2>";
    die();
}
$message = '';
if (isset($_POST["names"])) {
    require "connect.php";
    extract($_POST);

    if($password_1==$password_2)
    {
        $query = "insert into users VALUES (NULL, '$names', '$email', '$password_1', 2)";
        $result = mysqli_query($conn, $query);//or die(mysqli_error($conn));
        if ($result)
            $message = "<h4 class='text-primary text-center'>User Registered successfully</h4>";
        else
            $message = "<h4 class='text-danger text-center'>This user $names already exists</h4> ";

    }else{
        $message = "<h4 class='text-danger text-center'>Passwords do not match</h4> ";


    }



}
?>
<!doctype html>
<html lang="en">
<head>
   
		  <script defer src="https://www.gstatic.com/firebasejs/6.3.1/firebase-app.js"></script>

<script defer src="https://www.gstatic.com/firebasejs/6.3.1/firebase-auth.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/6.3.1/firebase-firestore.js"></script>

// ...

<script defer src="./init-firebase.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            height: 100vh;
            display: flex;
            align-content: center;
            align-items: center;
        }

        .form-group {
            margin: auto;
        }

        .glyphicon {
            font-size: 80px;
            color: #000047;
        }
    </style>
</head>
<body>
<?php require "navbar.php"; ?>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <p class="text-center">
              <img src ="logo.png">
        </p>
        <p class="text-center">Register New User</p>
        <?= $message ?>
        <form role="form" method="post" action="register.php">
            <div class="form-group">
                <label for="email">Names:</label>
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

            <button type="submit" class="btn btn-success">Register Here</button>
            <p>
                Already a member? <a href="login.php">Log in</a>
            </p>
        </form>
    </div>
</div>
</body>
</html>