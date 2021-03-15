
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('/images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
                <img src="/images/post_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-4 mr-auto">
				<h1>Вход</h1>
                <p>Авторизируйтесь чтобы продолжить</p>
				<?if(isset($_SESSION['error']) && $_SESSION['error'] != ''):?>
				<p style="color: red;"><?=$_SESSION['error']?></p>
				<?unset($_SESSION['error']);?>
				<?endif;?>
                <form action="/admin/main/login" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="login" class="form-control" placeholder="Login">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



 
