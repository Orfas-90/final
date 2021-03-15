<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center hd">
                    <h1>Автомобили для аренды</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <?foreach ($car as $arrCar):?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item-1">
                    <a href="contact/index/<?=$arrCar['id']?>"><img src="<?=$arrCar['img']?>" alt="Image" class="img-fluid"></a>
                    <div class="item-1-contents">
                        <div class="text-center">
                            <h3><a href="contact/index/<?=$arrCar['id']?>"><?=$arrCar['name']?></a></h3>
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
            </div>
            <?endforeach;?>



            <div class="col-12">
                <?=$pagination;?>
            </div>
        </div>
    </div>
</div>