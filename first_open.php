<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Note_House</title>
    <link rel="shortcut icon" href="favicon_io/favicon.ico">
    <style type="text/css">
        div{
            height: 400px;
            width: 400px;
            background: #E8D0D1;
            margin: 50px auto;
            border-radius: 10px;
            padding: 100px 0 0 0;
            border: 2px solid white;
            text-align: center;
        }
        .bgAnimObj {
            background-color: red;
            position: relative;
            animation-name: example;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
        @keyframes example {
            0%   {background-color:grey;}
            25%  {background-color:red;}
            50%  {background-color:green;}
            75%  {background-color:blue;}
            100% {background-color:grey;}
        }
        div form input{
            width: 200px;
            height: 30px;
            margin: 10px 100px;
            border-radius: 10px;
            border: none;
        }
        div a#giris:hover,a#kayit:hover{
            background: #f0a5b4;
            cursor: pointer;
            color: white;
        }
        header{
            margin: 0 auto;
            font: bold 14px "Comic Sans MS";
            text-align: center;
        }
        figure{
            widows: 100px;
            height: 100px;
        }
        div a#giris,a#kayit{
            display: block;
            width: 200px;
            height: 20px;
            margin: 10px 100px;
            border-radius: 10px;
            border: none;
            text-align: center;
            padding: 5px 0;
            background: white;
            color: black;
            text-decoration: none;
            font: bold 13px "Comic Sans MS";
        }
        div a#guess
        {
            color: mediumpurple;
            text-decoration: none;
        }
    </style>
</head>

<body class="bgAnimObj">
    <div>
        <header>
            <figure><img style="border-radius: 50px;" src="image/misafir.png" width="100" height="100"></figure>
            <p><blockquote>Deneme Aşamasında olan sitemize hoşgeldiniz. Lütfen istek ve görüşlerinizi belirtiniz.</blockquote></p>
        </header>
    <a id="giris" href="login.html">Giriş Yap</a>
    <a id="kayit" href="register.html">Kayıt Ol</a>
    <font color="white" face="Comic Sans MS">Misafir olarak <a id="guess" href="guest.html">gir</a>.</font> 
    </div>
</body>
</html>
