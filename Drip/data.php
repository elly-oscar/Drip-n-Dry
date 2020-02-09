<?php
include ("connect.php");
?>

<?php
   // header("Location:add.php"); 
 $result = mysqli_query($conn, "SELECT * FROM tasks");

 

?>
<html lang="en">
<head>
  
 

  <title>Posts</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <link href="../js/bootstrap.js" rel="javascript">
</head>
<div class = "container">
    <button class="btn  pull-right btn-danger hidden-print" onclick="myFunction()">Print this page</button>

    <script>
      function myFunction() {
        window.print();
      }
    </script>
  <table class = "table table-striped table-hover table-bordered " data-toggle="table">
      
      <h2 class="text text-center">LIST OF POSTS</h2>
      <tr>
        <th>Employee Id</th>
        <th>Employee Email</th>
      <th>Task Assigned</th>
        
      </tr>


      <?php 
        
      while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['id']."</td>";
        echo "<td>".$res['email']."</td>";
		 echo "<td>".$res['password']."</td>";
    
      
      }
      ?>


    </table>