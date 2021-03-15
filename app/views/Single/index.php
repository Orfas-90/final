<?if(!empty($detail)):?>
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 innerpage overlay" style="background-image: url('/images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <span class="d-block mb-3 text-white"><?=$detail['date']?> <span class="mx-2 text-primary">&bullet;</span> <?=$detail['author']?></span>
                    <h1 class="mb-4"><?=$detail['title']?></h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 blog-content">
                <p class="lead"><?=$detail['text']?></p>
                <p><?=$detail['detail']?></p>



                <div class="pt-5">

                    <ul class="comment-list">
                        <?foreach ($com as $arrCom):?>
                        <li class="comment">
                            <div class="comment-body">
                                <h3><?=$arrCom['name']?></h3>
                                <div class="meta"><?=$arrCom['date']?></div>
                                <p><?=$arrCom['text']?></p>

                            </div>
                        </li>
                        <?endforeach;?>
                    </ul>


                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Оставьте комментарий</h3>
                        <div class="mess"></div>
                        <form action="#" class="" method="post" id="commentForm">
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="message">Сообщение</label>
                                <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input name="sub" id="sub" type="button" value="Оставить комментарий" class="btn btn-primary btn-md text-white">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?else:?>
    <p>
        Такой новости не существует
    </p>
<?endif;?>

