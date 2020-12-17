<?php
include 'connectUser.php';
//header("Location http://localhost/Basit%20Kay%C4%B1t/index.php");

//$conn->set_charset("utf8");

$Pnickname = $_POST['nickname'];
$Pemail = $_POST['email'];
$Ppassword1 = $_POST['password1'];
$Ppassword2 = $_POST['password2'];
$code = $_POST['code'];
$codeCtrl = $_POST['codeCtrl'];


$s = "SELECT * FROM users WHERE nickname ='$Pnickname'";   
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    //header("Location http://localhost/Basit%20Kay%C4%B1t/register.html");
    
    echo '<script type="text/javascript">alert("BÖYLE BİR KULLANICI ADI ZATEN KAYITLI!!!"); window.location.assign("http://localhost/Basit%20Kay%C4%B1t/Not_Site/register.html");</script>';
    
    
    //header("Location https://www.google.com.tr/");
    
   }else if($Ppassword1!=$Ppassword2){

    echo '<script type="text/javascript">alert("ŞİFRELER EŞLEŞMİYOR!!!"); window.location.assign("http://localhost/Basit%20Kay%C4%B1t/Not_Site/register.html");</script>';

   }else if($code!=$codeCtrl){
    echo '<script type="text/javascript">alert("DOĞRULAMA KODUNU YANLIŞ GİRDİNİZ!!!"); window.location.assign("http://localhost/Basit%20Kay%C4%B1t/Not_Site/register.html");</script>';


   }else{
    $reg = "INSERT INTO users(nickname,email,password) VALUES ('$Pnickname','$Pemail','$Ppassword1')";
    mysqli_query($conn,$reg);
    $_SESSION['nickname'] = $Pnickname;
    
    $ppnick = "INSERT INTO pp(nickname,namee,typee,pp) VALUES ('$Pnickname','','','')";
    mysqli_query($conn,$ppnick);
    
    echo '<script type="text/javascript">window.location.assign("http://localhost/BasitKayit/Not_Site/index.php");</script>';


   }





/*if(!empty($Pname) || !empty($Psurname) || !empty($Pnickname) || !empty($Pemail) ||
 !empty($Ppassword) || !empty($Pphone)||){
    
   

    

 }*/

?>