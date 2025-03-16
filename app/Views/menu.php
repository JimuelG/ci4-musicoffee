<?= view('header/header') ?>

<?= view('header/nav') ?>

    <section class="menu">
        <div class="container">
            <div class="crumbs">
                <h2 class="menu-crumbs">Menu</h2>
                <div class="cart">
                    <a href="<?= base_url("/orders") ?>">
                        <img src="<?= base_url("assets/images/cart.png") ?>" alt="cart">
                        <p class="cart-item1"><?= $cart_count ?></p>
                    </a>
                </div>
            </div>
            <div class="menu-item-container">
                <?php foreach ($pr as $p): ?>
                    <div class="menu-item">
                        <div class="menu-img">
                            <img src="<?= base_url("assets/images/products/") . $p['pictureUrl'] ?>" alt="">
                        </div>
                        <div class="menu-des">
                                <button type="submit" class="add-to-cart"
                                    data-id="<?= $p['pId'] ?>"
                                    data-name="<?= $p['name'] ?>"
                                    data-price="<?= $p['price'] ?>"
                                    data-img="<?= base_url("assets/images/products/"). $p['pictureUrl'] ?>">
                                    <img src="<?= base_url("assets/images/add.png") ?>" alt="Add to cart">
                                </button>
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
                        <img class="modal-img" src="" alt="product">
                        <p class="modal-name"></p>
                    </div>
                    <div class="right-modal">
                        <div class="size">
                            <p>Size</p>
                            <div class="size-opt">
                                <div class="16oz">
                                    <input type="radio" name="size" id="16oz" data-price="89" checked>
                                    <label class="size-16oz" for="16oz" data-price="89"></label>
                                </div>
                                <div class="22oz">
                                    <input type="radio" name="size" id="22oz" data-price="109">
                                    <label class="size-22oz" for="22oz" data-price="109"></label>
                                </div>
                            </div>
                        </div>
                        <div class="quantity">
                            <p>Quantity</p>
                            <div class="quantity-opt">
                                <img class="decrease-qty" src="<?= base_url("assets/images/subtract.png") ?>" alt="">
                                <input class="quantity-val" type="text" value="1" disabled>
                                <img class="increase-qty" src="<?= base_url("assets/images/add_black.png") ?>" alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="total">
                            <p class="total-price"></p>
                            <input class="total-add" type="submit" value="ADD">
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="customer-modal">
        <div class="container">
            <div class="c-modal">
                <img src="<?= base_url("assets/images/exit.png") ?>" alt="" class="exit">
                
            </div>
        </div>
    </section>
    
<?= view('footer') ?>