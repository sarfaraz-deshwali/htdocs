<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>Learning.php</title>
</head>
<body>
  <h1>Hello, world!</h1>

  <?php 

  session_start();



  $var1= 5;

  if($var1 > 2 ){

    echo " greter than 2 ";

  }

  else{
    echo "small than 2";
  }

  echo "<br>";


  $var2 = " im a girl ";

  if ( $var2 == " im a boy") {

    echo "yes";
  }

  else{echo "no";}

  echo "<br>";


  $var3 = " dairy milk ";

  if($var3 == " dairy villy "

) { 

    echo "ha ";
}

else{  

  echo " nahi h ";

}

echo "<br>";


$var4 = "milk wali ";

if ($var4 == "milk wali ") {

  echo "ha";

}


else{

  echo "no";

}
echo "<br>";


$var5 = "my name is khan ";

if ($var5 == "my name is ayan ") {

  echo "yes i am khan";
}

else {

 echo "no i'm not";

}

echo "<br>";


$var6 = "sahil king";

if ($var6 == "sahil king") {

  echo " apka suwagat h jahapana ";
}

else{ echo "nakli jahapana";}


echo "<br>";


$var7 = " may i comming";
if ($var7 == " may i comming" ) {

  echo "yes comming";
}

else
  {   echo "no";}


echo "<br>";

$t = 4;

if ($t < 6) {

  echo "smaller than 6";

}

else
  { echo "greter than 6";}


echo "<br>";

$y = 5;

if ($y > 3 ) {

  echo "greter than 3";

}

else{

  echo "smaller than 3";  

}

echo "<br>";

$u = 6;
if ($u / 2) {

  echo "yes divisible";
}

else
{

  echo "not divisible";


}

echo "<br>";


$i = 7;

if ($i - 3) {

  echo "answer wil be 4";

}

else {


  echo "answer will be 3";

}



$var6 = null;

if($var6 != null)

{
  echo "the value is null";

}


echo "<br>";

$var8 = true;

if ($var8== true) {

  echo "yes true";

}

else{ "not true";}

echo "<br>";

$var9 = null;

if ($var9 == null) {

  echo "it's null"; 

}

echo "<br>";


$car = "toyota";

if ($car == "toyota") {

  echo "ok";

}

elseif ($car== "BMW") {

  echo "mangi hai ";

}

else{

  echo "pta nhi";
}

echo "<br>";


$coffe = "nescfe";

if ($coffe == "nescfe") {

  echo "mangi hai ";

}

elseif ($coffe== "pushpa") {

  echo "ok ";

}

else{

  echo "pta nhi";
}

echo "<br>";

$chai = "tapri wali";

if ($chai == "tapri wali") {

  echo "sahi pakre hai ";}

  elseif ($chai == "chafe wali") {

    echo "thik hai ";
  }

  else { echo "nahi chalenge";}

  echo "<br>";

  $t = 22;

  if($t <"10" )
    { echo " tu do  number";}

  elseif($t <"20")
    { echo " tu  number ";}

  else { echo "tu gno aage hai"; }

  echo "<br>";

  $i = "baraf paani";
  if ($i== "cricket") {

   echo "aaja khela";   
 }

 elseif ($i == "footboll") {

  echo "boll panchar hai";
}

else{

  echo "m to chala ghar ";
}



echo "<br>";

function adder($car){

  switch ($car)
  {
    case "toyota":
    echo "over price";

    break;

    case "tata":
    echo "desh ka loha";

    break;

    default:
    echo "sedan lelo";

    break;
  }
}
adder("maruti suzuki");



echo "<br>";

function ader($car) {
  echo $car;
}

ader("toyota <br>");
ader("maruti <br>");
ader("tata");


echo "<br>";

function my($paani){
  echo $paani;
}

my("bisleri <br>");
my("pani <br>");
my("kua water <br>");
my("river water <br>");




function well($match){
  echo $match;
}

well("cricket");
well("footboll <br>");
well("kabadi <br>");
well("baraf paani");

echo "<br>";

function sub($a){

  echo $a - 1000; 
}

sub(3232);

echo "<br>";

function fun($c){
  echo $c * 1000 ;}
  fun(465);


  echo "<br>";
  function run($m){
    echo $m / 1000;}
    run(9999);

    echo "<br>";

    function rui($p){

      echo $p + 1000;}

      rui(9999);

      echo "<br>";


      function tun($o){

        echo $o - 2000;
      }
      tun(1253);

      echo "<br>";
      function hun($b){
        echo $b - 2000;
      }
      hun(34);

      echo"<br>";


      $test = 1;
      while($test <= 5){
        echo "run<br>";
  //$test = $test+1;
        $test++;
      }




      $x = 1;

      while($x <= 5) {
        echo "i am king : $x <br>";
        $x++;
      } 


      $y= 2;
      while ($y <= 10) {
        echo "zxczxfz: $y <br>";
        $y++;}


        $p= 20;
        while ($p >= 10) {
          echo "gyreirywoi  tueriotyueoterugh5 : $p <br>";
          $p=$p - 2;}

          $o = 0;
          while ($o <= 10) {
            echo "ryghthgghgeuhhg,$o<br>";
            $o++;
          }

          $l = 4;
          while ($l <= 10) {
           echo "fewrgthhgg $l<br>";
           $l++;
         }

         $u=40;
         while ($u >= 10) {
          echo "ugrehgerguhuierg $u <br>";
          $u=$u-5;
        }


        $s=40;
        while ($s >= 10) {
          echo "sadodfsdhfsdufefwefudfefhefeufweunfef $s <br>";
          $s=$s-7;
        }

        $e = 50;
        while ( $e>= 10) {
          echo "dereretreyihytrjtyfytyr,...hh.h.gfhlty..ytul $e<br>";
          $e=$e-5;}


          for ($o=1; $o <=10 ; $o++) { 
            echo "dshfd civjfi  tirij uhuubhuhh$o <br>";
          }

          for ($a=20; $a >=2 ; $a=$a-4) { 
            echo "dfdfg ddsddh dgdf gdg $a<br>";}

            for ($x=0; $x <=29 ; $x=$x+4) { 
              echo "ha bhai thare kae ha imanne tha tu gno bolo hai $x <br>";}

              for ($w=0; $w <=3; $w++){
                echo "fbdfgfdgdg dde $w <br>";
              }

              for ($t=0; $t <=5; $t++){
                echo "dsddf=fdf=f=df= $t<br>";
              }


              $e=2;
              while ($e <= 10) {
                echo "ffwff e $e <br>";

                $e++;}

                for ($v=0; $v <=4 ; $v++) { 
                  echo "dgdugg fgg gdhg ng gg ggg g  g $v<br>";}

                  for ($r=10; $r >=4 ; $r--) { 
                    echo "ccvvfkkgfdkgfkg $r<br>";                }









                    for ($b=0; $b <=4 ; $b++) { 
                      echo "fggeigfdrh  $b <br>";}







                      for ($v = 5; $v<=9; $v++){
                        echo "sdfhdsjfhfhhghure tnrh ehuu gthhu $v <br>";
                      }

                      for ($m=0; $m <=3 ; $m++) { 

                        if ($m==2) {

                          break;}

                          echo "$m";
                        }

                        echo "<br>";
                        for ($c=0; $c <=6 ; $c++) { 

                          if ($c==4) {

                            break;}

                            echo "$c";
                          }

                          echo "<br>";


                          for ($h=0; $h <=10 ; $h++) { 

                            if ($h==5){

                              break;}echo "$h";}

                              echo "<br>";
                              for ($o=0; $o <=6 ; $o++) { 
                                if ($o==4) {
                                  break;}
                                  echo "$o";}

                                  echo "<br>";
                                  $a = array("ayan","pinty","aaina","adoptid aarifa","padyo" , "broken heart 2.0" , 342234,234,23423,234,234,2,34,234,234,234);

                                  foreach ($a as $var) {
                                    echo $var . "<br>";}


                                    $z = array("ha","na","kahan","jaha","uty" );
                                    echo $z[0];


                                    $w = array("hurran dawan","varun dhawan","srun dhawan","arun dhawan" );
                                    echo $w[0];

                                    echo "<br>";

                                    $g = array("lovely","chawagli","awlu","bawlu");
                                    foreach ($g as $key) {
                                      echo $key . "<br>";}


                                      for ($c=0; $c <=3 ; $c++) { 
                                        if ($c==2) {
                                          break;}
                                          echo "$c  <br>";
                                        }

                                        $t = array("fhghh" , "siggghg","suigregruggi","fhfgsrjfgsr","gfgjfg");
                                        print_r($t);

                                        echo "<br>";echo "<br>";

                                        $l =["ha bhai","ja bhai","chak bhau","au bhai"];

                                        

                                        print_r($l);


                                        $table = array("fhfrr","fgyre","uyguy","fhggyug","xdh" );

                                        echo $table[2];

                                        echo "<br>";
                                        $yeah = array("iuuh","uiou","uuouo","uouu","ioioo","oiu");
                                        
                                        print_r($yeah);


                                        $b = 1;
                                        while ( $b<= 10) {
                                          echo "$b. turieiruererereuireuireireireuireeiruerueERirue56766767567767575688777577777irueirueirueiruer<br> ";
                                          $b++;}

                                          $n =2;
                                          while ( $n<= 10) {
                                            echo "dffjj d.$n <br>";
                                            $n=$n+2;}

                                            $t=0;
                                            while ($t <= 10) {
                                             echo "tttttttttttttttt$t.<br>"; 
                                             $t=$t+2;}


                                             $w=1;
                                             do {
                                               echo "djdjfjfssdf $w <br>";
                                               $w=$w+3;} while ($w <= 10);

                                               echo "<br>";
                                               $arr = array('tea' =>'chae' ,'coffe' =>'nescfe' ,'lassi' =>'amul lessi' ,'butter' =>'ghee' ,);
                                               foreach ($arr as $key) {
                                                echo "$key.<br>";}



                                                $y=0;
                                                while ($y <= 10) {
                                                  echo "fgjgurj.$y <br>";
                                                  $y=$y+2;}

                                                  $e=0;
                                                  do {
                                                    echo "retrttert.$e <br>";
                                                    $e=$e+2;} while ( $e<= 10);


                                                    function mycar($car){

                                                      echo $car . "<br>";
                                                    }

                                                    mycar("crossover");
                                                    mycar("suv");
                                                    mycar("micro");
                                                    mycar("hatchback");
                                                    mycar("sedan");



                                                    function myworld($world){echo $world."<br>";}

                                                    myworld("kanne");
                                                    myworld("gfh");
                                                    myworld("gfdgg");
                                                    myworld("tf");
                                                    myworld("hfhyu");

                                                    $x=60;
                                                    $y=30;
                                                    echo $x-$y;


                                                    echo "<br>";
                                                    function kun($k){
                                                      echo $k-2000;
                                                    }kun(590);

                                                    echo "<br>";
                                                    function yun($e){echo $e * 302;} yun(43);


                                                    echo "<br>";echo "<br>";
                                                    $t=0;
                                                    while ( $t<= 10) {
                                                      echo " $t. dfufeufuf<br> ";
                                                      $t++;}

                                                      
                                                      $food = array('o','b','a','y');

                                                      echo count($food);

                                                      echo "<br>";

                                                      $ame = array('you' => 'tum','me'=>'main', );
                                                      print_r($ame);
//foreach ($ame as $key) {
//echo $key.'<br>';}


                                                      echo "<br>";
                                                      $ree = array("bghghgh0gh","bghgh1ghgh","bghg2hghgh","bg3hghghgh","bg4hghghgh");
                                                      echo $ree[2];

                                                      ?>  


                                                      <?php

                                                      echo "<pre>";

                                                      echo "<br>";
                                                      $rt = array("ytrytt","trjtyuiot","grhrkhh" );
                                                      print_r($rt);

                                                      echo "</pre>";



                                                      echo "<br>";
                                                      $t = array("fhghh" , "siggghg","suigregruggi","fhfgsrjfgsr","gfgjfg");
                                                      print_r($t);




                                                      ?>




                                                  

                                                        <?php

                                                        $car = ['sedan','van','suv','micro'];
                                                        $name = ['manza','oni','crerta'];

                                                        $newarry = array_replace($name,$car);

                                                        echo "<pre>";

                                                        print_r($newarry);

                                                        echo "</pre>";

                                                        if(!isset($_SESSION['email'])){
                                                          echo "you are not logged in";

                                                        }

                                                        else{
                                                          echo "you are logged in as ".$_SESSION['email'];
                                                          echo '<a href="logout.php">Logout</a>';

                                                        }

                                                        ?>






                                                        <form method="post" action="handel.php">
                                                          
                                                          <input type="" name="email">
                                                          <input type="" name="pass">

                                                          <button type="submit">login</button>

                                                        </form>




                                                        <?php
                                                        if (!isset($_SESSION['email'])) {
                                                          echo "you are not login";}

                                                          else{ echo "you login as a". $_SESSION['email'];
                                                          echo '<a href="logout.php">Logout<a/>';
                                                        }
                                                        ?>

                                                        <form method="post" action="handel.php">
                                                          
                                                          <input type="" name="email">
                                                          <input type="" name="pass">

                                                          <button type="submit">login</button>

                                                        </form>

                                                        <?php
                                                        if (!isset($_SESSION['email'])) {
                                                          echo "you are not login";}

                                                          else  { echo  "you are as a ". $_SESSION['email'];
                                                          echo '<a href="logout.php">Logout<a/>';
                                                        }

                                                        ?>
                                                        <form method="post" action="handel.php">
                                                         <input type="" name="email">
                                                         <input type="" name="pass">
                                                         <button type="submit">login</button>
                                                       </form>


                                                       <?php

                                                       for($i = 0; $i < 5; $i++){

                                                        echo "string";
                                                      }




                                                      ?>

                                                      <br>


                                                      <?php
                                                      if (!isset($_SESSION['email'])) {
                                                        echo "you atre not login ";}

                                                        else{ echo "you are login as a". $_SESSION['email']; 
                                                        echo '<a href="logout.php">Logout<a/>';
                                                      }

                                                      ?>









                                                      <form method="post" action="handel.php">
                                                       <input type="" name="email">
                                                       <input type="" name="pass">
                                                       <button type="submit">login</button>
                                                     </form>

                                                     <?php
                                                     if (!isset($_SESSION['email'])) {
                                                      echo "you are not login";}
                                                      else {
                                                        echo "you are login as a" . $_SESSION['email'];
                                                        echo '<a href="logout.php">Logout<a/>';}

                                                        ?>


                                                        <form method="post" action="handel.php">
                                                         <input type="" name="email">
                                                         <input type="" name="pass">
                                                         <button type="submit">login</button>
                                                       </form>



                                                       <?php

                                                       if (!isset($_SESSION['email'])) {
                                                        echo "you are not login ";}

                                                        else{echo "you are login as a " . $_SESSION['email'];
                                                        echo '<a href="logout.php">Logout<a/>';}
                                                        ?>





                                                        <form method="post" action="handel.php">
                                                         <input type="" name="email">
                                                         <input type="" name="pass">
                                                         <button type="submit">login</button>
                                                       </form>

                                                       <?php
                                                       echo "<br>";
                                                        
                                                      $date = date_create(2003-05-05);
                                                      date_time_set($date, 11,12);
                                                       echo date_format($date, "d-m-Y H:i:s");
                                                       echo "<br>";


                                                       $date = date_create(2001-05-20);
                                                       date_time_set($date, 22,22);
                                                       echo date_format($date, "d-m-Y h:i:s");
                                                       ?>



<?php

function myname($pintu){

  echo $pintu . "<br>";
}

myname("tana");
myname("tttt");
myname("trett");
myname("fjsdfhuf");











?>

<?php include 'footer.php';?>




                                                     </body>
                                                     </html>
