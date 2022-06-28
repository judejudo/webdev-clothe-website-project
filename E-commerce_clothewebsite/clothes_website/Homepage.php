<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
  <title>Jude's Clothings</title>
</head>

<body>
  <header class="color">
    <nav>
      <img src="logo.png" alt="Logo" class="logo-image" />
      <ul>
        <li><a href="index02.php">Home </a></li>
        <li><a href="#">Fashion Categories<i class="fas fa-caret-down"></i></a>
          <div class="dropdown__menu">
            <ul>
              <li><a href="#">Men<i class="fas fa-caret-right"></i></a>
                <div class="dropdown__menu-1">
                  <ul>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Sports</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="#">Ladies<i class="fas fa-caret-right"></i></a>
                <div class="dropdown__menu-2">
                  <ul>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Sports</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="#">Kids<i class="fas fa-caret-right"></i></a>
                <div class="dropdown__menu-3">
                  <ul>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Sports</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="#">Pets<i class="fas fa-caret-left"></i></a>
                <div class="dropdown__menu-4">
                  <ul>
                    <li><a href="#">Dogs</a></li>
                    <li><a href="#">Cats</a></li>
                    <li><a href="#">Others</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div id="logcart">
        <img src="shopping-cart.png" class="share" alt="shoping logo" />
        <a href="register.php" title="Registration"><img src="user.png" class="share" alt="user logo"></a>
        <img src="share.png" alt="logo" class="share" />
        <h4><a href="admin_update.php">Admin </a></h4>
      </div>
    </nav>
  </header>
  <div id="search-container">
    <input type="text" id="searchbox" placeholder="Search the clothes of choice" />
    <img src="./search.png" alt="Search" />

  </div>

  <h1 id="weekly-heading">Weekly Fashion Trends</h1>

  <section id="weekly-trends">
    <div class="pomp">
      <h2>Pomp and Colour</h2>
      <img src="jude's.png" alt="" />
      <button>Buy Now</button>
    </div>
    <div class="mens-womens">
      <img src="./benjamin-rascoe-ZnI0c4RmUPA-unsplash.jpg" alt="mens" />
      <h3>MENS</h3>
    </div>
    <div class="mens-womens">
      <img src="./judeus-samson-0UECcInuCR4-unsplash.jpg" alt="womens" />
      <h3>WOMEN</h3>
    </div>
    <div class="mens-womens">
      <img src="./taylor-smith-Mw9TO8Wbz8A-unsplash.jpg" alt="men" />
      <h3>KIDS</h3>
    </div>
  </section>
  <section id="featured">
    <h2>Featured on offer</h2>

    <div id="featured-list">
      <div class="featured-card">
        <img src="./mens.jpg" alt="mens clothes" />
        <div class="featured-price">
          <p class="strike-through price">KES 8,000</p>
          <p class="price">KES 5,400</p>
        </div>
        <center>
          <button>Buy</button>
        </center>
      </div>
      <div class="featured-card">
        <img src="./yves-monrique-EylmovMiPaY-unsplash.jpg" alt="feartured products" />
        <div class="featured-price">
          <p class="strike-through price">KES 10,000</p>
          <p class="price">KES 7,400</p>
        </div>
        <center>
          <button>Buy</button>
        </center>
      </div>

      <div class="featured-card">
        <img src="./nimble-made-N0ke5zChVBU-unsplash.jpg" alt="feartured products" />
        <div class="featured-price">
          <p class="strike-through price">KES 5,000</p>
          <p class="price">KES 4,300</p>
        </div>
        <center>
          <button>Buy</button>
        </center>
      </div>
      <div class="featured-card">
        <img src="./mariabeatrice-alonzi-VyI0GBHSsJ8-unsplash.jpg" alt="feartured products" />
        <div class="featured-price">
          <p class="strike-through price">KES 6,000</p>
          <p class="price">KES 3,400</p>
        </div>
        <center>
          <button>Buy</button>
        </center>
      </div>
    </div>
  </section>
  <div id="wear">Dress "wear" ? At Jude's</div>
  <div id="test">
    Customers Love to dress at Jude's
    <h1>Testimonials</h1>
  </div>
  <div class="wrapper">


    <div class="team">
      <div class="team_member">
        <div class="team_img">
          <img class="team_img" src="albert-dera-ILip77SbmOE-unsplash.jpg" alt="team image">
        </div>
        <h3>Bryan Onill</h3>

        <p>
          Best product in the market ever
        </p>
      </div>

      <div class="team_member">
        <div class="team_img">
          <img class="team_img" src="jude.jpg" alt="team image">
        </div>
        <h3>Brandon Mills</h3>

        <p>
          I love the suits imported fomr Italy I fell confident when i dress at Jude's.
        </p>
      </div>
      <div class="team_member">
        <div class="team_img">
          <img class="team_img" src="petr-sevcovic-HzDF-rxlSeM-unsplash.jpg" alt="team image">
        </div>
        <h3>George Hanningtons</h3>

        <p>
          Long lasting clothings.I boutght suits form here and trust me, they do last and fading is not a matter of concern in at Jude's desingns hugely recommand
        </p>
      </div>
    </div>
  </div>
  </div>
  <div id="partners">
    <h2>Our Partners</h2>
    <div id="partners-list">
      <img class="king" src="./kings.jpg" alt="king">
      <img class="vers" src="./versaci.jpg" alt="versaci">
      <img class="versace" src="./gucci_PNG19.png" alt="gucci">
      <img class="jade" src="./jade.png" alt="jade">
      <img class="lv" src="./Louis_Vuitton_logo_and_wordmark.svg.png" alt="lv">
      <img class="nike" src="./Nike-Logo.jpg" alt="nike">
    </div>
  </div>
  <footer>
    <div class="company-details">
      <p>CONTACT</p>
      <p>54th Street,Nairobi CBD</p>
      <p>Nairobi Kenya</p>
      <p></p>
      <p>HELPLINE</p>
      <p>+254 7894 5498</p>
      <p>+254 9585 4458</p>
      <p>EMAIL</p>
      <p><span>Email Address: </span>info@info.com</p>
      <p>P.O Box 4893-00100</p>

    </div>
    <div id="minor-links">
      <a href="">Terms & Conditions</a>
      <a href="">Privacy Policy</a>
      <a href="">Contact Us</a>
      <a href="">Rate Us</a>
    </div>

  </footer>
</body>

</html>