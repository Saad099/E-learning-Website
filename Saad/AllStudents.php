<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT * FROM `student_endrols`";
      $result=mysqli_query($conn,$sql) or die("Quert failed");  

      if(mysqli_num_rows($result)>0)
      {
        echo "Student Endrol";     
?>
<table cellpadding="7px" style="border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px auto; border: 1px solid #ddd;">
    <thead style="background-color: #f2f2f2;">
        <th style="border: 1px solid #ddd; padding: 10px;">ID</th>
        <th style="border: 1px solid #ddd; padding: 10px;">Name</th>
        <th style="border: 1px solid #ddd; padding: 10px;">Email</th>
        <th style="border: 1px solid #ddd; padding: 10px;">Password</th>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px;"> <?php echo $row['stu_nid']; ?> </td>
            <td style="border: 1px solid #ddd; padding: 10px;"> <?php echo $row['stu_name']; ?> </td>
            <td style="border: 1px solid #ddd; padding: 10px;"> <?php echo $row['stu_email']; ?> </td>
            <td style="border: 1px solid #ddd; padding: 10px;"> <?php echo $row['stu_password']; ?> </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
      }
?>
</body>
</html>