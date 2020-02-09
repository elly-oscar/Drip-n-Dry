<?php
require "protect.php";
$message="";
$names="";

if (isset($_GET["names"])){
    extract($_GET);
}

if (isset($_POST["amount"]))
{
    extract($_POST);
    require "connect.php";
    $query="select * from users WHERE customer_id=$customer_id&balance>0";
    $result=mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
   if ($count>0){
       $message="<h2 class='text-danger'>Customer still owes the bank</h2>";
   }
    else{
        $balance = $amount * 1.3;
        $date_borrowed = date("Y-m-d");
        $query = "insert into loans VALUES (NULL, $customer_id, $amount, '$date_borrowed', $balance)";

        $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
        header("location:issue.php");
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    
    <title>Process Loan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php require "navbar.php"; ?>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <p class="text-center">
            <span class="glyphicon glyphicon-user"></span>
        </p>
        <p class="text-center">Issue Loan To <?=$names?></p>
        <?=$message?>
        <form role="form" method="post" action="process.php">
            <div class="form-group">
                <label for="amount">Enter Loan Amount:</label>
                <input type="number" name="amount" required class="form-control" id="amount">
            </div>

            <input type="hidden" name="customer_id" value="<?=$customer_id?>">
            <button type="submit" class="btn btn-success">Issue Loan</button>
        </form>
    </div>
</div>
</body>
</html>