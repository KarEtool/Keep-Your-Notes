<?php 
function sef_link($dosya)//Dosya adını düzeltme
{
    $bul=array('Ç','Ş','Ğ','İ','Ö','Ü','ç','ş','ğ','ü','ı','-');
    $degistir=array('c','s','g','i','o','u','c','s','g','u','i',' ');
    $dosya=strtolower(str_replace($bul,$degistir,$dosya));
    $dosya=preg_replace("@[^A-Za-z0-9-]@i"," ",$dosya);
    $dosya=trim(preg_replace('/\s+/'," ",$dosya));
    $dosya=str_replace(" ","-",$dosya);
    return $dosya;
}

include 'connectUser.php';

if(!empty($_FILES)){
    $dizin = 'C:/xampp/htdocs/BasitKayit/Not_Site/imageUsers/';
    $pptype = $_FILES['myfile']['type'];
    $nickname = $_SESSION['nickname'];
    $ppname =$_FILES['myfile']['name'];
    
    $dosyaTur1=pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION);
    $yuklenecek_dosya1=sef_link(basename($_FILES['myfile']['name'])).'.'.$dosyaTur1;
    $rand1=rand(1,1000000);
    $myfile=$_FILES["myfile"]["name"]==''?'':$rand1.'-'.$yuklenecek_dosya1;
    move_uploaded_file($_FILES["myfile"]["tmp_name"],$dizin.$rand1.'-'.$yuklenecek_dosya1);
    
    $reg = "INSERT INTO pp(nickname,namee,typee,pp) VALUES ('$nickname','$ppname','$pptype','$myfile')";
    mysqli_query($conn,$reg);
    
    header("Location: http://localhost/BasitKayit/Not_Site/index.php");
    }else{};


?>