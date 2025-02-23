<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicoffee</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/menu.css") ?>">
</head>
<body>
    <section class="nav">
        <div class="container">
            <div class="nav-bar">
            <div class="left-nav">
                        <a id="home" href="/">Home</a>
                        <a>About us</a>
                    </div>
                    <div class="center-nav">
                        <img class="logo" src="<?= base_url("assets/images/logo2.png") ?>" alt="logo">
                    </div>
                    <div class="right-nav">
                        <a id="menu" href="/menu">Menu</a>
                        <a>Contact Us</a>
                    </div>
            </div>
        </div>
    </section>
    <section class="menu">
        <div class="container">
            <div class="crumbs">
                <p class="menu-crumbs">Menu</p>
                <div class="cart">
                    <img src="<?= base_url("assets/images/cart.png") ?>" alt="cart">
                    <p class="cart-item">0</p>
                </div>
            </div>
            <div class="menu-item-container">
                <?php foreach ($pr as $p): ?>
                    <div class="menu-item">
                        <div class="menu-img">
                            <img src="" alt="">
                        </div>
                        <div class="menu-des">
                            <p class="add-to-cart"><img src="<?= base_url("assets/images/add.png") ?>" alt=""></p>
                            <p class="menu-name"><?= $p['name'] ?></p>
                            <p class="menu-price"><?= "P " . $p['price'] . ".00" ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
</html>