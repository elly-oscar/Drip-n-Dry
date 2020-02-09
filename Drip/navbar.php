<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="login.php">Drip n Dry</a>
        </div>
		<div class="navbar-header">
            <a class="navbar-brand" href="dashboard.html">Dashboard</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <?php if ($_SESSION["type"]==1): ?>
            <li><a href="register.php">New Worker</a></li>
            <?php endif;?>
		
            <li><a href="index.php">Issue Tasks</a></li>
			 
        
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?=$_SESSION["names"]?></a></li>
            <li><a href="logout.php">Log out</a></li>

        </ul>
    </div>
</nav>