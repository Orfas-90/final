<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center hd">
                    <h1>Автоновости</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <?foreach ($news as $arrNews):?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="post-entry-1 h-100">
                    <a href="single/index/<?=$arrNews['id']?>">
                        <img src="<?=$arrNews['img']?>" alt="Image"
                             class="img-fluid">
                    </a>
                    <div class="post-entry-1-contents">

                        <h2><?=$arrNews['title']?></h2>
                        <span class="meta d-inline-block mb-3"><?=$arrNews['date']?> <span class="mx-2">by</span> <a href="#"><?=$arrNews['author']?></a></span>
                        <p><?=$arrNews['text']?></p>
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