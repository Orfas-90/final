<!DOCTYPE html>
<html lang="ru">

  <head>
    <title><?=$active?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">
            <nav class="navbar navbar-expand-lg navbar-dark nav_vrap">
              <div class="container-fluid">
                <a class="navbar-brand fntsz" href="/admin">CarRent</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item fntsz <?if($active == 'main'):?> active <?endif;?>">
                      <a class="nav-link" href="/admin">Заказы</a>
                    </li>
                    <li class="nav-item fntsz <?if($active == 'cars'):?> active <?endif;?>">
                      <a class="nav-link" href="/admin/cars">Автомобили</a>
                    </li>
                    <li class="nav-item fntsz <?if($active == 'news'):?> active <?endif;?>">
                      <a class="nav-link" href="/admin/news">Новости</a>
                    </li>
					<li class="nav-item fntsz">
                    <form method="post" class="nav-link"><input name="ex" id="exx" type="submit" value="Выход" class="btn btn-md text-white my men"></form>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <div class="col-3 ">
              <div class="site-logo d-none d-lg-block">
                <a href="/admin">CarRent</a>
              </div>
            </div>
            <div class="col-9  text-right">
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li <?if($active == 'main'):?> class="active" <?endif;?>><a href="/admin" class="nav-link">Заказы</a></li>
                 
                  <li <?if($active == 'cars'):?> class="active" <?endif;?>><a href="/admin/cars" class="nav-link">Автомобили</a></li>
            
                  <li <?if($active == 'news'):?> class="active" <?endif;?>><a href="/admin/news" class="nav-link">Новости</a></li>
				  
				  <li><form method="post" class="nav-link"><input name="ex" id="ex" type="submit" value="Выход" class="btn btn-md text-white my"></form></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <?=$content;?>

    <footer class="site-footer">
      <div class="container">

        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
			<p>Контакты: телефон: +375(39)889-77-99, Email: test@test.com</p>
              <p><script>document.write(new Date().getFullYear());</script> Все права защищены</p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/main.js"></script>

  </body>

</html>



