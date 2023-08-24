<?php
session_start();

// Check if the user is logged in as admin (you should implement appropriate admin authentication)

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Initialize variables
$courseName = "";
$coursePrice = "";
$message = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get course data from form
    $courseName = $_POST["course_name"];
    $coursePrice = $_POST["course_price"];
    $message = $_POST["course_dic"];
    // Perform database insertion (you need to set up your database connection)
    // Example: Insert data into a 'courses' table



    $query = "INSERT INTO courses (course_name, course_dic, course_price) VALUES ('$courseName', '$message', '$coursePrice')";

    if (mysqli_query($conn, $query)) {
        $message = "Course added successfully!";
    } else {
        $message = "Error adding course: " . mysqli_error($conn); // Display appropriate error message
    }

    // Close database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="My.css">
    <title>Add Course</title>
</head>
<body>
    <div class="admin_root">
    <div class="sidebar">
        <h2 style="text-align:center;">Admin Panel</h2>
        <ul>
            <li><a href="index.html">Dashboard</a></li>
            <!-- <li><a href="add_course.php">Add Course</a></li> -->
            <li><a href="AllStudents.php">All Students Endrols</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </div>

    <div class="content">
        <h1>Add Course</h1>
        <form method="post">
            <label for="course_name">Course Name:</label>
            <input type="text" name="course_name" required><br><br>
            
            <label for="course_price">Course Price:</label>
            <input type="number" name="course_price" required><br><br>

            <label for="course_price">Course Discrpition:</label>
            <input type="text" name="course_dic" required><br><br>
            
            <button type="submit">Add Course</button>
        </form>
        
        <p><?php echo $message; ?></p>
    </div>
    </div>
</body>
</html>
