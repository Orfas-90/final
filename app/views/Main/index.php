<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 d-none d-lg-block">
              <div class="feature-car-rent-box-1">
                <h3><?=$title['name']?></h3>
                <ul class="list-unstyled">
                  <li>
                    <span>Дверей</span>
                    <span class="spec"><?=$title['doors']?></span>
                  </li>
                  <li>
                    <span>Мест</span>
                    <span class="spec"><?=$title['seets']?></span>
                  </li>
                  <li>
                    <span>Трансмиссия</span>
                    <span class="spec"><?=$title['transm']?></span>
                  </li>
                  <li>
                    <span>Год выпуска</span>
                    <span class="spec"><?=$title['year']?></span>
                  </li>
                </ul>
                <div class="d-flex align-items-center bg-light p-3">
                  <span><?=$title['prise']?>/в день</span>
                  <a href="contact/index/<?=$title['id']?>" class="ml-auto btn btn-primary">Арендовать сейчас</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h3>Наши предложения</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
            <p>
              <a href="#" class="btn btn-primary custom-prev">Назад</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next">Вперед</a>
            </p>
          </div>
          <div class="col-lg-9">




            <div class="nonloop-block-13 owl-carousel">
                <?foreach ($car as $arrCar):?>
              <div class="item-1">
                <a href="#"><img src="<?=$arrCar['img']?>" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3><a href="#"><?=$arrCar['name']?></a></h3>
                  <div class="rent-price"><span>$<?=$arrCar['prise']?>/</span>в день</div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Дверей</span>
                      <span class="spec"><?=$arrCar['doors']?></span>
                    </li>
                    <li>
                      <span>Мест</span>
                      <span class="spec"><?=$arrCar['seets']?></span>
                    </li>
                    <li>
                      <span>Трансмиссия</span>
                      <span class="spec"><?=$arrCar['transm']?></span>
                    </li>
                    <li>
                      <span>Год выпуска</span>
                      <span class="spec"><?=$arrCar['year']?></span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="contact/index/<?=$arrCar['id']?>" class="btn btn-primary">Арендовать</a>
                  </div>
                </div>
              </div>
                <?endforeach;?>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-white">Наши услуги</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                 <img src="icons/ic2.svg" alt="Image" class="ic">
              </span>
              <div class="service-1-contents">
                <h3>Ремонт</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                 <img src="icons/ic7.svg" alt="Image" class="ic">
              </span>
              <div class="service-1-contents">
                <h3>Автоаксессуары</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                 <img src="icons/ic1.svg" alt="Image" class="ic">
              </span>
              <div class="service-1-contents">
                <h3>Аренда авто</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Как это работает</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
        <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Свяжитесь с нами</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Выберите машину</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">Согласуйте детали</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Получите автомобиль</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Пользуйтесь на здоровье</span>
        </div>

      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2>Отзывы довольных клиентов</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Егор Прусаков</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Сорокина Яна</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Воронова Анастасия</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
