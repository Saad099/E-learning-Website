
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "student_register") or die("Database Connection Failed");

    $email = $_POST["email"];
    $password = $_POST["password"];

    //  compare passwords
    $sql = "SELECT * FROM student_endrols WHERE stu_email='$email' AND stu_password='$password'";
    $result = mysqli_query($conn, $sql) or die("Query failed");

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION["stu_email"] = $email;
        header("Location: Welcome.php"); // Redirect to the welcome page after successful login
        exit;
    }

    mysqli_close($conn);
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
    <link rel="stylesheet" href="./My.css">
    <title>Login</title>
</head>
<body>

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
                <a a class="active" href="/Saad/Login.php">Login</a>
            </li>
        </ul>
    </div>
</div>
<hr>

<div class="login_container">
   <div class="login_from" style="padding:10px">
    <h1 class="cources_heading">Login Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <br>
        <p class="cources_heading">Don't have an account! <a href="/Saad/Sigin.php">Sign up</a></p>
        <br>
        <button class="bnt_summit" type="submit" value="submit">SUBMIT</button>
    </form>
   </div>
</div>
</body>
</html>
