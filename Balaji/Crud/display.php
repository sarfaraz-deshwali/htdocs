<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./style.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
	<title></title>
</head>
<body>
<?php
include 'conn.php';

?>
<div class="container">
	<button class="bg-gray-400 border-0 m-20 py-2 px-8 focus:outline-none hover:bg-gray-300 rounded text-lg "><a href="user.php">add user</a></button>
</div>

	<table class="table-fixed mx-auto border-separate border-spacing-2 border-spacing-x-20 border border-slate-100">
  <thead class=" ">
    <tr>
      <th class=" ">s.no</th>
      <th  class=" ">name</th>
      <th  class=" ">email</th>
      <th  class=" ">mobile</th>
      <th  class=" ">password</th>
      <th  class=" ">opration</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql = "SELECT * FROM `crud`  ";

$result = mysqli_query($conn,$sql);

if ($result) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   $id = $row['id'];
   $name = $row['name'];
   $email = $row['email'];
   $mobile = $row['mobile'];
   $password = $row['password'];
   
   echo '<tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td> <button class="  bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="update.php?updateid='.$id.'">update</a></button>
           <button class=" bg-red-500 border-0 py-2  px-5 focus:outline-none hover:bg-red-600 rounded text-lg"><a href="delete.php?deleteid='.$id.'">delete</a></button></td>
    </tr>';

  }

}
?>

  </tbody>
</table>


</body>
</html>