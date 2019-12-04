<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="img/logo/logo_white.png" alt="" class="tvoybox">

        Tvoy Box
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Мы рекомендуем</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#ищчуы">Наши боксики</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#process">Процесс</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Команда</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">О нас</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle color-yellow" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-shopping-cart color-yellow"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @include('layout.partial.cart')
                </div>
            </li>
        </ul>
      </div>
    </div>
</nav>
<!-- Header -->
<header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in text-uppercase">Добро пожаловать!</div>
        <div class="intro-heading">Сегодня вы найдете лучший подарок для своих близких</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Узнать больше</a>
      </div>
    </div>
</header>

<header id="header" class="awe-menubar-header">
            <nav class="awemenu-nav" data-responsive-width="1200">
                <div class="container">
                    <div class="awemenu-container">

                        <div class="navbar-header">
                            <ul class="navbar-icons">
                                
                                
                                <li class="menubar-cart">
                                    <a href="#" title="" class="awemenu-icon menu-shopping-cart">
                                        <i class="icon icon-shopping-bag"></i>
                                        <span class="awe-hidden-text">Cart</span>

                                        <span class="cart-number">2</span>
                                    </a>

                                    <ul class="submenu megamenu">
                                        @include('layout.partial.cart')
                                        <!-- <li>
                                            <div class="container-fluid">

                                                <ul class="whishlist">

                                                    <li>
                                                        <div class="whishlist-item">
                                                            <div class="product-image">
                                                                <a href="#" title="">
                                                                    <img src="html/hosoren/img/samples/products/cart/1.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="product-body">
                                                                <div class="whishlist-name">
                                                                    <h3><a href="#" title="">Gin Lane Greenport Cotton Shirt</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Price:</span>
                                                                    <strong>$120</strong>
                                                                </div>

                                                                <div class="whishlist-quantity">
                                                                    <span>Quantity:</span>
                                                                    <span>1</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" title="" class="remove">
                                                            <i class="icon icon-remove"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <div class="whishlist-item">
                                                            <div class="product-image">
                                                                <a href="#" title="">
                                                                    <img src="html/hosoren/img/samples/products/cart/2.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="product-body">
                                                                <div class="whishlist-name">
                                                                    <h3><a href="#" title="">Gin Lane Greenport Cotton Shirt</a></h3>
                                                                </div>

                                                                <div class="whishlist-price">
                                                                    <span>Price:</span>
                                                                    <strong>$120</strong>
                                                                </div>

                                                                <div class="whishlist-quantity">
                                                                    <span>Quantity:</span>
                                                                    <span>1</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" title="" class="remove">
                                                            <i class="icon icon-remove"></i>
                                                        </a>
                                                    </li>

                                                </ul>

                                                <div class="menu-cart-total">
                                                    <span>Total</span>
                                                    <span class="price">$180</span>
                                                </div>

                                                <div class="cart-action">
                                                    <a href="#" title="" class="btn btn-lg btn-dark btn-outline btn-block">View cart</a>
                                                    <a href="#" title="" class="btn btn-lg btn-primary btn-block">Proceed To Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                </li>


                            </ul>

                            
                        </div>

                        <div class="awe-logo logolayout">
                            <a href="#" title="" id="audio-logo">
                                <img src="html/hosoren/img/logo2.png" alt="" class="tvoybox" >
                            </a>
                        </div>
                        <!-- /.awe-logo -->
                        <span class="firstname"> ТВОЙ БОКС</span>
                        <ul class="awemenu awemenu-right">
                            <li class="awemenu-item">
                                <a href="#wereccomended" title="">
                                    <span>Мы рекомендуем</span>
                                </a>
                            </li>
                            <li class="awemenu-item">
                                <a href="#ourbox" title="">
                                    <span>Наши боксики</span>
                                </a>
                            </li>
                            <li class="awemenu-item">
                                <a href="#footer" title="">
                                    <span>О нас</span>
                                </a>
                            </li>
                        </ul>       
                    </div>
                </div>
                <!-- /.container -->

            </nav>
            <!-- /.awe-menubar -->
        </header>