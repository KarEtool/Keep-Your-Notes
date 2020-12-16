<?php 
include 'connectUser.php';

$nickname = $_POST['nickname'];
$password = $_POST['password'];

$s = "SELECT * FROM users WHERE nickname = '$nickname'";
//$a = "SELECT * FROM users WHERE password = '$password'";
$results = mysqli_query($conn,$s);
//$resulta = mysqli_query($conn,$a);
//$numa = mysqli_num_rows($resulta);
$nums = mysqli_num_rows($results);



if($nums == 1){
    $_SESSION['nickname'] = $nickname;
    $_SESSION['password'] = $password;

    header("Location: http://localhost/BasitKayit/Not_Site/index.php");
    //echo "<h1>Hoşgeldin  ".$_SESSION['nickname']."  AMKCOCU</h1>";

    //echo $_SESSION['Username'];
   }else{
       echo "HERHANGİ BİR BİLGİ YANLIŞ";
   }
?>
