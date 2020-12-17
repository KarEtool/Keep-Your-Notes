<?php 
include 'connectUser.php';


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <link rel="stylesheet" href="syle.css"/>
</head>

<body>
<main>
    <section>
      <article id="ayarlarpanel"><table id="ayarlar">
  <tbody>
      <tr>
      <td height="40">Kullanıcı Adınızı Değiştirin</td>
      <td>:</td>
      <td align="center"><input type="text" maxlength="20" id="newkadi"></td>
    </tr>
      <tr>
      <td height="40">Mail Adresinizi Değiştirin</td>
      <td>:</td>
      <td align="center"><input id="mail" type="email"></td>
    </tr>
    
    <tr>
      <td width="200" height="40">Site Temanızı Özelleştirin</td>
      <td width="5">:</td>
      <td width="300" align="center"><select id="tema">
            <option>Tema seçin...</option>
            <option>Koyu Tema(gri,siyah)</option>
            <option>Açık Tema(beyaz,mavi)</option>
            <option>Renkli Tema(...)</option>
          </select>
      </td>
    </tr>
  
    <tr>
      <td height="40">Fotoğrafınızı Değiştirin</td>
      <td>:</td>
      <form enctype="multipart/form-data" action="addpp.php" method="POST">
      <td align="center"><input type="file" name="myfile" ></td>
      <td align="center" target="_top"><input type="submit" value="Yükle" name="submit"/></td>
    </form>
    </tr>
  
    <tr>
      <td height="40">Şifrenizi Değiştirin</td>
      <td>:</td>
      <td align="center"><input id="yenisife" type="password" placeholder="Yeni şifrenizi giriniz." maxlength="20"><input id="yenisife1" type="password" placeholder="Yeni şifreyi tekrar giriniz." maxlength="20"></td>
    </tr>
    <tr>
      <td height="40"></td>
      <td></td>
      <td align="center"><input id="save" type="submit" value="Kayıt et"><a id="exit" href="logout.php" target="_top"><input id="exit" value="Oturum Kapat"/></a></td>
    </tr>
  </tbody>
</table>
      </article>
    </section>
  
  </main>

</body>
</html>
