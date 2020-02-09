<?php require "protect.php" ?>
<!doctype html>
<html lang="en">
<head>
    
    <title>Issue Tasks</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style>
        html, body {
            height: 100%;
            width: 100%;
        }


        .welcome{
            color: silver;
        }
        .jumbo {
            height: 100%;
            background:url(bc.jpg);

            display: flex;
            align-items: center;
            align-content: center;
        }

        .jumbotron{
			background:url(ba.jpg);
           
        }
        .jumbotron h2 {
            color: #505050;
        }

        .navbar{
            margin-bottom: 0px;
        }
    </style>

</head>
<body>
<?php require "navbar.php"; ?>
<div class="jumbo">
    <div class="container">
        <div class="jumbotron text-center">

 <h2>Tasks Issued.</h2><br>
		 <?php
$text = $_POST['text'];
echo $text;
?>

           

        </div>
    </div>
</div>
</head>

</body>
</html>