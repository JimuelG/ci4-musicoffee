<?= view('header/header') ?>

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
                            <img src="<?= base_url("assets/images/products/") . $p['pictureUrl'] ?>" alt="">
                        </div>
                        <div class="menu-des">
                            <form action="<?= base_url('menu') ?>" method="POST">
                                <input type="hidden" name="product_id" value="<?= $p['pId'] ?>">
                                <input type="hidden" name="name" value="<?= $p['name'] ?>">
                                <input type="hidden" name="price" value="<?= $p['price'] ?>">
                                <input type="hidden" name="img" value="<?= base_url("assets/images/hero.png") ?>">
                                <button type="submit" class="add-to-cart">
                                    <img src="<?= base_url("assets/images/add.png") ?>" alt="Add to cart">
                                </button>
                            </form>
                            <p class="menu-name"><?= $p['name'] ?></p>
                            <p class="menu-price"><?= "P " . $p['price'] . ".00" ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="cart-modal hidden">
        <div class="container">
            <div class="modal">
                <img class="exit" src="<?= base_url("assets/images/exit.png") ?>" alt="exit">
                <div class="left-modal">
                    <img class="modal-img" src="<?= base_url("assets/images/hero.png") ?>" alt="product">
                    <p class="modal-name"><?= "Cafe Latte" ?></p>
                </div>
                <div class="right-modal">
                    <div class="size">
                        <p>Size</p>
                        <div class="size-opt">
                            <div class="16oz">
                                <input type="radio" name="size" id="16oz">
                                <label for="16oz">16oz - P <?= 89?>.00</label>
                            </div>
                            <div class="22oz">
                                <input type="radio" name="size" id="22oz" >
                                <label for="22oz">22oz - P <?= 89 + 20 ?>.00</label>
                            </div>
                        </div>
                    </div>
                    <div class="quantity">
                        <p>Quantity</p>
                        <div class="quantity-opt">
                            <img class="subtract" src="<?= base_url("assets/images/subtract.png") ?>" alt="">
                            <input class="quantity-val" type="text" value="1" disabled>
                            <img class="add" src="<?= base_url("assets/images/add_black.png") ?>" alt="">
                        </div>
                    </div>
                    <hr>
                    <div class="total">
                        <input class="total-price" type="text" value="">
                        <input class="total-add" type="submit" value="ADD">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= view('footer') ?>