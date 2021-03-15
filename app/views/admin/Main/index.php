<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('/images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center hd">
                    <h1>Заказы</h1>
                    <p>Обаботка заказов на аренду автомобилей</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <h3 class="mb-5">Все заказы</h3>
            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="width: 20%">Имя</th>
                    <th scope="col" style="width: 10%">Email</th>
                    <th scope="col" style="width: 25%">Текст</th>
                    <th scope="col" style="width: 10%">Дата</th>
                    <th scope="col" style="width: 10%">Автомобиль</th>
                    <th scope="col" style="width: 10%">Статус</th>
                    <th scope="col" style="width: 10%">Опции</th>
                </tr>
                </thead>
                <tbody>
                <?foreach ($con as $arrCon):?>
                <tr>
                    <td><?=$arrCon['name']?></td>
                    <td><?=$arrCon['email']?></td>
                    <td><?=$arrCon['text']?></td>
                    <td><?=$arrCon['date']?></td>
                    <td><?=$arrCon['id_car']?></td>
                    <td><?=$arrCon['status']?></td>
                    <td>
						<form method="post" <?if($arrCon['status'] == 'исполнен'):?> class="hidenn" <?endif;?>>
							<input type="hidden" name="st" value="<?=$arrCon['id']?>">
							<input name="change" id="ch" type="submit" value="Изменить статус" class="btn btn-md text-white btn-primary">
						</form>
					</td>
                </tr>
                <?endforeach;?>
                </tbody>
            </table>
			
			<div class="col-12">
                <?=$pagination;?>
            </div>
			
        </div>
    </div>
</div>
