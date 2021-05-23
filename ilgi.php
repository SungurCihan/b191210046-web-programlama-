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
<?php $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/kripto.json'), true);?>
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
    <h2 class="heading-medium text-center">Yatırım Yaptığım Krpito Paralar</h2>

    <table class="table table-striped" id="table-selecter">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Krpito Para</th>
            <th scope="col">Fiyat</th>
            <th scope="col">Değişim</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Bitcoin</td>
            <td><?php echo $JSON['BTC']['satis']; ?></td>
            <td><?php echo $JSON['BTC']['degisim']; ?></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Ethereum</td>
            <td><?php echo $JSON['ETH']['satis']; ?></td>
            <td><?php echo $JSON['ETH']['degisim']; ?></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ripple</td>
            <td><?php echo $JSON['XRP']['satis']; ?></td>
            <td><?php echo $JSON['XRP']['degisim']; ?></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Bitcoin Cash</td>
            <td><?php echo $JSON['BCH']['satis']; ?></td>
            <td><?php echo $JSON['BCH']['degisim']; ?></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Litecoin</td>
            <td><?php echo $JSON['LTC']['satis']; ?></td>
            <td><?php echo $JSON['LTC']['degisim']; ?></td>
          </tr>
        </tbody>
      </table>

    <footer class="py-5 bg-dark-blue text-white text-center" id="footer-ilgi">
        Web-Teknolojileri-Projesi © Necat Sungur Cihan 2021
      </footer>
  
      <script src="app.js"></script>
      <script src="book.js"></script>
      <script src="ui.js"></script>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>