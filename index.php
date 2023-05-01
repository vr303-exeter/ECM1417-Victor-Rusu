<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Pairs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
include 'navbar.php';
?>




<div id = "main">
    <?php
    if(isset($_SESSION['username'])){
        echo "<h1>Welcome to Pairs</h1>";
        echo "<a href='pairs.php'><button>Click here to play</button></a>";
    }else{

        echo "<p>You're not using a registered session? <a href='registration.php'>Register now</a></p>";
    }
    ?>
</div>
</body>
</html>
