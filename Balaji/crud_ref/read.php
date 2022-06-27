 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>



  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php

include 'conn.php';

?>
<!-- component -->
<?php

$sql = "SELECT * FROM `user_data` WHERE email = 'sarfaraz@gmail.com' AND password = '123321' ";

$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " Name: " . $row["name"]. " email: " . $row["email"]. " pass: " . $row["password"].  "<br>";
  }

}
?>




</body>
</html> 