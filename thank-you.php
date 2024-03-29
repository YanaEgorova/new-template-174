<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>


  <div class="wrapper">
  <div class="header__wrapper">
          <div class="header__wrapper-top">
            <div class="container header__top">
              <button class="header__btn js_menu-btn"></button>
              <nav class="nav js_menu">
                <ul class="nav__list">
                  <li class="nav__item">
                    <a href="./contacts.html" class="nav__link">Contact Us</a>
                  </li>
                  <li class="nav__item">
                    <a href="./return.html" class="nav__link">Return Policy</a>
                  </li>
                  <li class="nav__item">
                    <a href="./purchase.html" class="nav__link">Terms of Purchase</a>
                  </li>
                  <li class="nav__item">
                    <a href="./privacy.html" class="nav__link">Privacy Notice</a>
                  </li>
                  <li class="nav__item">
                    <a href="./shipping.html" class="nav__link">Shipping Policy</a>
                  </li>
                  <li class="nav__item">
                    <a href="./use.html" class="nav__link">Terms of Use</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="container">
            <header class="header">
     
              <a href="./index.html" class="header__logo logo js_website-name">website name</a>
              <a href="./shop.html" class="cart__btn">
                Cart
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 424.449 424.449" style="enable-background:new 0 0 424.449 424.449;" xml:space="preserve">
                  <g>
                    <g>
                      <g>
                        <circle cx="170.241" cy="374.273" r="50.176"></circle>
                        <path d="M316.673,324.098L316.673,324.098c-27.711,0-50.176,22.465-50.176,50.176s22.465,50.176,50.176,50.176
                     c27.711,0,50.176-22.465,50.176-50.176S344.384,324.098,316.673,324.098z"></path>
                        <path d="M402.177,272.897H140.545l-5.12-29.696h215.04c6.326,0.019,12.017-3.843,14.336-9.728l51.2-129.024
                     c3.111-7.892-0.766-16.812-8.658-19.922c-1.808-0.713-3.735-1.076-5.678-1.07H108.801L96.513,12.801
                     c-1.262-7.471-7.784-12.906-15.36-12.8h-58.88c-8.483,0-15.36,6.877-15.36,15.36s6.877,15.36,15.36,15.36h46.08l44.032,260.096
                     c1.262,7.471,7.784,12.906,15.36,12.8h274.432c8.483,0,15.36-6.877,15.36-15.36C417.537,279.774,410.66,272.897,402.177,272.897z
                     "></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <span class="cart__span js_cart__span">0</span>
              </a>
    
            </header>
          </div>
        </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
          <?php if($_GET["order_id"]){ ?> 
  <h1 class="title">Thank you</h1>
  <p class="text">Your order was completed successfully!</p>
  <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
<?php } else { ?>
  <h1 class="title">We're sorry</h1>
  <p class="text" style="font-size: 3rem">There was an error processing your order</p>
<?php } ?>
          </div>
        </section>
    </div>
    </main>

    
    <div class="footer__wrapper">
      <footer class="footer">
        <div class="footer__top">
          <div class="container">
            <div class="footer__policies">
            <div class="footer__block">
              <p class="footer__subtitle">Policies</p>
              <ul class="sub-list list-col">
                <li class="item">
                  <a href="./contacts.html" class="footer__link">Contact Us</a>
                </li>
                <li class="item">
                  <a href="./return.html" class="footer__link">Return Policy</a>
                </li>
                <li class="item">
                  <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                </li>
                <li class="item">
                  <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                </li>
                <li class="item">
                  <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                </li>
                <li class="item">
                  <a href="./use.html" class="footer__link">Terms of Use</a>
                </li>
           
          
              </ul>
            </div>
            <div class="footer__block footer__block--jus">
              <p class="footer__subtitle">Contact us</p>
              <ul class="sub-list">
                <li class="item item--df">
               
                  <a href="" class="footer__link js_website-email"></a>
                </li>
                <li class="item item--df">
                 
                  <a href="" class="footer__link js_website-phone"></a>
                </li>
                <li class="item item--df">
                  
                  <p class="text js_website-address"></p>
                </li>
              </ul>
       
            </div>
        
          </div>
          <div class="footer__block footer__block--df">
            <a href="./index.html" class="footer__logo logo js_website-name"></a>
            <p class="text text--mb js_website-corp"></p>
            <span class="footer__span">© All rights reserved</span>
          </div>
          </div>
        </div>
      

       
  
      </footer>
  
  </div> 
  </div>
  <script src="./js/jquery-3.7.1.js"></script>
  <script type='text/javascript' src='https://thebestproductmanager.com/products/prices-nxg-object'></script>
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>