<?php 
include 'connectUser.php';
$nickname = $_SESSION['nickname'];

if($nickname == ""){
    echo '<script type="text/javascript">alert("LÜTFEN GİRİŞ YAPINIZ VEYA KAYDOLUNUZ!!!"); window.location.assign("http://localhost/BasitKayit/Not_Site/register.html")</script>';
}

$s = "SELECT * FROM pp WHERE nickname = '$nickname'";
$a = $conn->query($s);
$row = $a->fetch_array(MYSQLI_NUM);
$img = $row[4];

//var_dump($row);


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <link type="text/css" rel="stylesheet" href="syle.css">
    <link rel="shortcut icon" href="favicon_io/favicon.ico">
</head>

<body>
    <div class="container">
        <header>
            <aside>
                <a id="yeninot" href="not.html" target="main">Yeni Not</a>
                <a id="hazirnot" href="not.html" target="main">Hazır Not</a>
                <figure><img src="imageUsers/<?php echo $img?>" width="70" height="70"></figure>
            </aside>
        </header>
        <nav>
            <ul>
                <li><a href="" onClick="alert('devre dışı')">Anasayfa</a></li>
                <li><a href="" onClick="alert('devre dışı')">Paylaşımlar</a></li>
                <li><a href="" onClick="alert('devre dışı')">Hesap</a></li>
                <li><a href="ayarlar.php" target="main">Ayarlar</a></li>
                <li><a href="iletisim.html" target="main">İletişim</a></li>
            </ul>
        </nav>
        <aside>
        <ul>
                        <?php 
                    $nickname = $_SESSION['nickname'];
                    
                    $s2 = "SELECT * FROM notes WHERE nickname ='$nickname'"; 
                    $result = mysqli_query($conn,$s2);
                    $num = mysqli_num_rows($result);

                    if($num > 0){
                        while($row2 = $result->fetch_assoc()){?>
                            <ul>
                            <h1><?php echo $row2['title']?></h1>
                            <li style="color:<?php echo $row2['color'];?>"><?php echo $row2['note'];?></li>
                            </ul>


                <?php 
                        };


                    };?>
        </ul>
        </aside>
        <main>
            <iframe name="main" width="740" height="640" frameborder="0" scrolling="no">
            </iframe>
        </main>
        <footer>
            <address><small>&copy;2016 <mark>Web Odası</mark>. Tüm hakları saklıdır.</small></address>
        </footer>
    </div>
</body>
</html>
