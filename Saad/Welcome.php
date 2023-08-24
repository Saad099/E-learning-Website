<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["stu_email"])) {
    header("Location: Login.php"); // Redirect to login page if not logged in
    exit;
}

// Get the user's email from the session
$userEmail = $_SESSION["stu_email"];

// Store additional data in session variables
if (!isset($_SESSION["temp_data"])) {
    $_SESSION["temp_data"] = array(
        "course" => "Web Development",
        "price" => 10
    );
}
$tempData = $_SESSION["temp_data"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="My.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h4 class="heading">KnowNow</h4>
        <div class="header">
            <ul class="ul">
                <li class="li">
                <a href="Logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <h1>Welcome, <?php echo $userEmail; ?>!</h1>
    <p>You have successfully log in.</p>
    <p>Enroll Course display here Soon</p>
    <hr>
    <p style="text-align: center;">Course: <?php echo $tempData["course"]; ?></p>
    <p style="text-align: center;">Price: $<?php echo $tempData["price"]; ?></p>
    
</body>
</html>
