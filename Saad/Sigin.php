<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_register";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO student_endrols (stu_name, stu_email, stu_password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<script>
        $(document).ready(function(){
          $("form").submit(function(){
            alert("Great Job !");
          });
        });
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="My.css">
    <title>Signup</title>
</head>
<body>
     <!-- Header -->
     <div class="container">
     <h4 class="heading"><a href="index.html" class="logo">Know<span>Now</span></a></h4>
        <div class="header">
            <ul class="ul">
                <li class="li">
                    <a href="/Saad/index.html">Home</a>
                </li>
                <li class="li">
                    <a href="/Saad/Cources.html">Courses</a>
                </li>
                <li class="li">
                    <a href="/Saad/contact.php">Contact</a>
                </li>
                <li class="li">
                    <a href="/Saad/Login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <!-- Registration Form -->
    <div class="login_container">
       <div class="login_form">
        <h1 class="cources_heading">Register Form</h1>
        <form method="post" style="background-color:whitesmoke; padding:40px" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name</label>
            <input type="text" name="name" required>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <br>
            <button class="btn_submit" type="submit" value="submit" style="width:50%;width: 50%;display: flex;margin: auto;
            padding: 9px;
            margin-top: 2pc;
            justify-content: center;">SUBMIT</button>
        </form>
       </div>
    </div>
</body>
</html>
