<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Layout Website</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="header">
    <div class="logoamazon"><img src="logoamazon.png" alt="logo" /></div>
    <div class="search-map"><p>Deliver To Indonesia</p></div>
    <div class="search">
      <input type="text" placeholder="amazon" />
      <button class="search"></button>
    </div>
    <div class="search-country"><p>IN</p></div>
    <div class="login">
        <a href="admin/login.php">
            <i class="fa fa-user-lock"></i>
            <p>Hello, sign in</p>
            <p>Account & Lists</p>
        </a>
    </div>

    <div class="returns-orders"><p>Returns & Orders</p></div>
    <div class="cart"><p>Cart</p></div>
    </div>

  <nav class="navigasi">
    <ul class="list-menu">
      <li>
        <select name="select-all" id="select-all">
          <option value="-">-</option>
          <option value="-">-</option>
          <option value="-">-</option>
        </select>
      </li>
      <li><a href="#">All</a></li>
      <li><a href="#">Today's Deals</a></li>
      <li><a href="#">Customer Service</a></li>
      <li><a href="#">Registry</a></li>
      <li><a href="#">Gift Cards</a></li>
      <li><a href="#">Sell</a></li>
    </ul>
  </nav>

  
  <div class="main">
    <article class="article">
      <!-- Rekomendasi Produk dengan Panah -->
      <div class="slider-wrapper">
        <button class="arrow left" onclick="scrollSlider('slider1', -200)">←</button>
        <div class="slider-container">
          <div class="slider" id="slider1">
            <img src="aset/items(1)(1).png" alt="rekomendasi" />
            <img src="aset/items(1)2.png" alt="rekomendasi" />
            <img src="aset/items(1)3.png" alt="rekomendasi" />
            <img src="aset/items(1)4.png" alt="rekomendasi" />
            <img src="aset/items(1)5.png" alt="rekomendasi" />
            <img src="aset/items(1)6.png" alt="rekomendasi" />
          </div>
        </div>
        <button class="arrow right" onclick="scrollSlider('slider1', 200)">→</button>
      </div>

      <!-- Produk Populer -->
      <div class="produkpopular">
        <div class="produkpopular-item">
          <h3>Popular product ranking</h3>
          <h4 class="tanggal">February 19th (Wed) 23:38</h4>
        </div>
        <div class="produkpopular-next">
          <ul>
            <li><a href="#">View the overall ranking &gt;</a></li>
            <li><a href="#">View the annual ranking &gt;</a></li>
          </ul>
        </div>

        <div class="slider-wrapper">
  <button class="arrow left" onclick="scrollSlider('ranking-slider', -250)">←</button>
  <div class="slider-container">
    <div class="ranking-slider" id="ranking-slider">
      <div class="ranking-card">
        <span class="rank-badge">1st place</span>
        <img src="aset2/rakutenbottom(1)(1).png" alt="Product 1">
        <p class="product-title">¥Super special deal!</p>
        <p class="price">3,550 yen</p>
        <p class="rating">★ ★ ★ ★ ☆ (502 items)</p>
      </div>
      <div class="ranking-card">
        <span class="rank-badge">2nd place</span>
        <img src="aset2/rakutenbottom2.png" alt="Product 2">
        <p class="product-title">Limited time only!</p>
        <p class="price">From 3,795 yen</p>
        <p class="rating">★ ★ ★ ★ ☆ (2012 items)</p>
      </div>
      <div class="ranking-card">
        <span class="rank-badge">3rd place</span>
        <img src="aset2/rakutenbottom3.png" alt="Product 3">
        <p class="product-title">Entry required!</p>
        <p class="price">5,980 yen</p>
        <p class="rating">★ ★ ★ ★ ☆ (6 items)</p>
      </div>
      <div class="ranking-card">
        <span class="rank-badge">4th place</span>
        <img src="aset2/rakutenbottom4.png" alt="Product 4">
        <p class="product-title">Smartphone</p>
        <p class="price">54,800 yen</p>
        <p class="rating">★ ★ ★ ★ ★ (4 items)</p>
      </div>
      <div class="ranking-card">
        <span class="rank-badge">5th place</span>
        <img src="aset2/rakutenbottom5.png" alt="Product 5">
        <p class="product-title">Xbox Series S</p>
        <p class="price">44,570 yen</p>
        <p class="rating">★ ★ ★ ★ ☆ (60 items)</p>
      </div>
      <div class="ranking-card">
        <span class="rank-badge">6th place</span>
        <img src="aset2/rakutenbottom6.png" alt="Product 6">
        <p class="product-title">E-mart Deal</p>
        <p class="price">8,536 yen</p>
        <p class="rating">★ ★ ★ ★ ☆ (6522 items)</p>
      </div>
      <div class="ranking-card">
        <span class="rank-badge">7th place</span>
        <img src="aset2/rakutenbottom7.png" alt="Product 7">
        <p class="product-title">Mummy Food</p>
        <p class="price">From 5,174 yen</p>
        <p class="rating">★ ★ ★ ★ ☆</p>
      </div>
    </div>
  </div>
  <button class="arrow right" onclick="scrollSlider('ranking-slider', 250)">→</button>
</div>

      </div>
    </article>

    <aside class="aside">
      <div class="jenis-jenis">
        <ul>
          <li><a href="#">PCs, smartphone, and communications</a></li>
          <li><a href="#">Sports & Golf</a></li>
          <li><a href="#">Cars and Motorcycle</a></li>
          <li><a href="#">Interior and bedding</a></li>
          <li><a href="#">Pets, flowers, DIY tools</a></li>
          <li><a href="#">Service Renovation</a></li>
          <li><a href="#">Games, Hobbies, and Musical</a></li>
          <li><a href="#">Books, e-books, and music</a></li>
        </ul>
      </div>
      <div class="addition-aside">
        <h3>Rakuten Services</h3>
        <ul>
          <li><a href="#">Travel and Lifestyle</a></li>
          <li><a href="#">Books and Entertainment</a></li>
          <li><a href="#">Finance and Money</a></li>
        </ul>
      </div>
      <div class="addition-aside">
        <h3>Seasonal Features</h3>
        <ul>
          <li><a href="#">White Day Special</a></li>
          <li><a href="#">New Life Fair</a></li>
        </ul>
      </div>
      <div class="addition-aside">
        <h3>Shop Brand</h3>
        <ul>
          <li><a href="#">Famous brand shops</a></li>
          <li><a href="#">Official brand shops</a></li>
        </ul>
      </div>
    </aside>
  </div>

  <div class="footer">
    <div class="items-footer">
      <div class="Customer-Service">
        <h3>Customer Service & Dispute Settlement</h3>
        <p>
          9F Toona Building, 223, Buil-ro, Bucheon-si, Gyeonggi-do, Rep. of Korea |
          Customer Inquiry: Click here <br />
          Tel: +82-2-1566-5701 (only in Korean/chargable call) | Fax: +82-2-5869-8844
          (Only in Korean) | Mail: global@corp.gmarket.co.kr
        </p>
      </div>
      <div class="Gmarket-inc">
        <h3>Gmarket Inc</h3>
        <p>
          Gangnam Finance Center, 152, Teheran-ro, Gangnam-gu, Seoul, Rep. of Korea
          | CEO: Hwang Won Chung <br />
          Business Registration No.: 220-81-83676 | E-Commerce Registration: Gangnam
          No. 10630
        </p>
      </div>
      <div class="disclaimer">
        <p>
          Gmarket Inc. will not be held responsible for any liabilities arising in
          connection with any transactions between buyers and sellers on this
          website. <br />
          Copyright Gmarket. Inc. All rights reserved.
        </p>
      </div>
    </div>
    <img src="/logogmarket.png" alt="logogmarket" class="logogmarket" />
  </div>

  <!-- SCRIPT UNTUK SLIDER -->
  <script>
    function scrollSlider(id, amount) {
      const slider = document.getElementById(id);
      slider.scrollBy({ left: amount, behavior: "smooth" });
    }
  </script>
</body>
</html>
