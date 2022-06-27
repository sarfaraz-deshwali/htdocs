<?php

session_start();

if($_POST['email'] == "ayan@gmail.com" && $_POST["pass"] == "ss123"){

	echo "welcome";
	$_SESSION["email"] = $_POST['email'];
}

else{
	echo "incorect information";
}

?>



<?php

if ($_POST['email'] == "sarfaraz@gmail.com" && $_POST['pass'] == "ss123") {
echo "aaja bhai";
$_SESSION['email'] = $_POST['email'];}

else{ echo "wprnge info";}

?>



<?php

if ($_POST['email'] == "sarfaraz@gmail.com" && $_POST['pass'] == "ss123") {
echo "welcome bhai";
$_SESSION['email'] = $_POST['email'];}

else{echo "galt";}
?>











<?php

if ($_POST['email'] == "sarfaraz@gmail.com" && $_POST['pass'] == '123') {
echo "badiya ho gya ";
$_SESSION['email'] = $_POST['email'];}

else{echo " nakli item";}
?>







<?php

if ($_POST['email'] == "sarfaraz@gmial.com" && $_POST['pass'] == "ss123") {
echo "thikh ";
$_SESSION['email'] = $_POST['email;'];}
else{echo "nikal ja ";}

?>




<?php

if ($_POST['email'] == "sarfaraz@gmail.com" && $_POST['pass'] == "123ss") {
echo "ho gya tera";
$_SESSION['email'] = $_POST['email'];}

else {
echo "furrr furrrr";}

?>
