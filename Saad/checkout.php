<?php
session_start();

if (isset($_SESSION["stu_email"])) {
    $user_name = "Ali Raza"; 

    if (isset($_GET["course"]) && isset($_GET["price"])) {
        $_SESSION["temp_course_title"] = $_GET["course"];
        $_SESSION["temp_price"] = $_GET["price"];
    }
} else {
    header("Location: Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; padding: 20px;">

    <h1>Checkout</h1>
    
    <?php
    if (isset($_SESSION["temp_course_title"])) {
        echo "<div style='border: 1px solid #ccc; padding: 20px; background-color: #f9f9f9;'>";
        echo "<h2>Order Summary</h2>";
        echo "<p><strong>Course:</strong> " . $_SESSION["temp_course_title"] . "</p>";
        echo "<p><strong>Price:</strong> $" . $_SESSION["temp_price"] . "</p>";
        echo "<p><strong>Buyer Name:</strong> " . $user_name . "</p>";
        echo "</div>";

        echo "<br>";
        
        // Display a "Confirm Order" button
        echo "<button style='padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer;' id='confirmBtn'>Confirm Order</button>";
        
        // Display order confirmation message (initially hidden)
        echo "<p id='orderPlacedMessage' style='display: none; color: green; font-weight: bold; margin-top: 10px;'>Order Placed Successfully!</p>";
    }
    ?>

    <script>
        document.getElementById("confirmBtn").addEventListener("click", function() {
            document.getElementById("orderPlacedMessage").style.display = "block";
        });
    </script>
    
</body>
</html>
