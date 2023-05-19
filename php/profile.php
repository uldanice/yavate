<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>«Yavate»</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/slick.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/style-jr.css">
</head>
<body>
<!--Голова-->
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__top">
          <a class="logo" href="../index2.html">
            <img class="logo__img" src="../images/logo.png" alt="#">
          </a>
          <a href="https://www.instagram.com/yavatestore/">
            <button hidden id="mybutton"></button>
              <label for="mybutton">
                <img class="header__icon3" src="../images/instagram (1).png" alt="">
              </label>
          </a>
          <a href="https://t.me/yavate">
            <button hidden id="mybutton1"></button>
              <label for="mybutton1">
                <img class="header__icon4" src="../images/telegram.png" alt="">
              </label>
          </a>
          <form class="prof">
              <h2><?= $_SESSION['user']['full_name']?></h2>
              <a href="#"><?= $_SESSION['user']['email']?></a>
              <a href="../index2.html" class="logout">Выход</a>
          </form>
          <nav class="menu">
            <button class="menu__btn">
              <span class="row"></span>
            </button>
            <ul class="menu__list">
              <li class="menu__item">
                <a class="menu__link" href="../index-hits.html">Хиты продаж</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="../index-gallery.html">Галерея</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="../index-map.html">Контакты</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="../index-about.html">Наша миссия</a>
              </li>
            </ul>
          </nav>
        </div>
  </header>
   <!--Популярные предложения-->
   <section class="popular">
    <div class="container">
      <h2 class="popular__title title">Скидка 20% на популярное предложение</h2>
      <div class="popular__items">
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-1.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">CARGO PANTS & TEXAS TECH TEE</h4>
          <p class="popular__price">12000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-2.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">CARHATT JAMES JACKET</h4>
          <p class="popular__price">12800 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-3.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">HASLETT VIKINGS TEE</h4>
          <p class="popular__country">made in Haiti</p>
          <p class="popular__price">11600 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-4.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">CARHATT MARSHALL JOGGER & T-SHIRT MINNESOTA</h4>
          <p class="popular__price">12400 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-5.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">HOODI & CARGO PANTS & VANS</h4>
          <p class="popular__price">36000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-6.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">VINTAGE DENIM JACKET, CROSSBALL STREETWEAR</h4>
          <p class="popular__country">made in USA</p>
          <p class="popular__price">13000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-7.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">WOOLRICH HOODED BARN JACKET</h4>
          <p class="popular__price">10400 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-8.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">WISCONSIN TEE & POLO JEANS</h4>
          <p class="popular__price">10000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-9.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">VINTAGE EDDIE BAUER DENIM JACKET</h4>
          <p class="popular__price">10800 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-10.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">VINTAGE PATAGONIA JACKET</h4>
          <p class="popular__price">11600 ₸</p>
        </a>
      </div>
    </div>
  </section>
  <!--Подвал-->
  <footer class="footer">
    <div class="container">
      <div class="footer__logo">
        <a class="logo" href="./profile.php">
          <img class="logo__img" src="../images/logo.png" alt=" ">
        </a>
      </div>
      <div class="footer__box">
        <div class="footer__info">
          <p class="footer__box-title">Винтажный магазин одежды «Yavate»</p>
          <p class="footer__copy">© 2023. Все права защищены</p>
          <a class="footer__link" href="#">Политика конфиденциальности</a>
        </div>
        <div class="footer__address">
          <p class="footer__box-title">Адрес:</p>
          <a href="https://goo.gl/maps/pdE5gNYzvGvJ7xkw8">
            <p class="footer__address-text">
              г. Нур-Султан 020000, ул. Динмухамеда Кунаева 29/1
            </p>
          </a>
        </div>
        <div class="footer__contacts">
          <p class="footer__box-title">Свяжитесь с нами:</p>
          <a class="footer__phone" href="tel:87027312088">тел. 8-702-731-20-88</a>
          <a class="footer__phone" href="tel:87023017726">тел. 8-702-301-77-26</a>
          <a class="footer__mail" href="mailto: asujerkulov@gmail.com">yavate@gmail.kz</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>