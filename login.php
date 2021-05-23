<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necat Sungur Cihan | B191210046</title>
    <meta name="keyword" content="Necat Sungur Cihan | B191210046"> 
    <!-- Css links -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Tablet -->
    <link rel="stylesheet" media="(max-width:768px)" href="css/tablet.css">
    <!-- Mobile -->
    <link rel="stylesheet" media="(max-width:768px)" href="css/mobile.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark-blue">
        <div class="nav-box">
          <nav id="navbar">
            <a href="index.html"><h1 class="heading-small">Necat Sungur Cihan</h1></a>
    
            <ul>
            <li><a href="index.html">Hakkında</a></li>
            <li><a href="city.html">Şehir</a></li>
            <li><a href="mirasimiz.html">Mirasımız</a></li>
            <li><a href="ilgi.php">İlgi Alanlarım</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
            <li><a href="login.php">Giriş Yap</a></li>
            </ul>
        </nav>
        </div>
    </header>

    <div class="container">
        <form class="iletisim" action="?" method="POST">
            <h3>Giriş Yap</h3>
            <hr>
            <div class="form-group">
                <label for="name">Kullanıcı Adı</label>
                <input type="email" name="username" required placeholder="Kullanıcı adınızı giriniz" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Şifre</label>
                <input type="text" id="password" name="password" required placeholder="Şifrenizi giriniz" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary mt-3"  id="auth">Gönder</button>

        </form>
        <?php
        if ($_POST) {
            $username= $_POST['username'];
			$password = $_POST['password'];
			$real_username="b191210046@sakarya.edu.tr";
            $real_password="b191210046";
             if ($username==$real_username) {
                    if($password==$real_password){
                        echo "Giriş Başarılı ";                       
                        echo "Hoşgeldiniz Sayın ";
                        echo $password;
                    }                                  
                }
                else{
                    echo "Kullanıcı Adı veya Şifre Hatalı";
                }
            }       
    ?>       
    </div>
  

    <footer class="py-5 bg-dark-blue text-white text-center" id="footer-ilgi">
        Web-Teknolojileri-Projesi © Necat Sungur Cihan 2021
      </footer>
  
      <script src="app.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>