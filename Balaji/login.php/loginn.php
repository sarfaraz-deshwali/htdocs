<?php
include 'conn.php';
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./style.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>login.php</title>
</head>
<body>

<?php
session_start();

echo "hello";
echo $_SESSION['name'];


if($_SERVER['REQUEST_METHOD']=="POST") {

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


$sql="SELECT * FROM `sinlog` WHERE email='".$email."' AND password='".$password."'";
$result=mysqli_query($conn,$sql);

if ($result) {
while ($row = mysqli_fetch_assoc($result)) {
$_SESSION['id'] = $row['id'];
$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];
$_SESSION['password'] = $row['password'];


 }}

}
 

?>


  <div class="container">

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep.</p>
        </div>
    <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>"> 
        <div class=" lg:w-2/3 w-full  mx-auto px-8 items-end">
      
        <div class="relative flex-grow w-full">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative flex-grow w-full">
          <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
          <input type="text" id="password" name="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button name="sumit" class="text-white bg-indigo-500 border-0 py-2 my-7 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">sumit</button>
      </div>
      </form>
    </div>
  </section>




</div>



</body>
</html>