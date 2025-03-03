<?= view('header/header') ?>

<?= view('header/nav') ?>

    <section class="orders">
        <div class="container">
            <div class="left">
                <div class="left-header">
                    <h1>Shopping Cart</h1>
                    <h1>3 items(s)</h1>
                </div>
                <hr>
                <div class="table-item">
                    <table>
                        <thead>
                            <tr>
                                <th>Product Details</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $total_price = 0;
                                foreach($or as $o): 
                                    $total_price += $o['price'];
                                ?>
                            <tr class="product-item">
                                <td>
                                    <div class="product-container">
                                        <img class="product-img" src="" alt="">
                                        <div class="product-detail">
                                            <p><?= $o['item_name'] ?></p>
                                            <p><?= $o['size'] ?></p>
                                            <a href="">remove</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-quantity">
                                        <img src="<?= base_url('assets/images/add_black.png') ?>" alt="">
                                        <input type="text" name="" id="" value="<?= $o['quantity'] ?>">
                                        <img src="<?= base_url('assets/images/subtract.png') ?>" alt="">
                                    </div>
                                </td>
                                <td><?= "P " . $o['price']?></td>
                                <td><?= "P " . $o['price'] * $o['quantity'] . ".00"?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="continue-shopping">
                <img src="" alt="">
                </div>
            </div>
            
            <div class="right">
                <div class="right-top">
                    <div class="right-header">
                        <h1>Order Summary</h1>
                    </div>
                    <hr>
                    <div class="right-detail">
                        <p>ITEMS(3)</p>
                        <p>P 356.00</p>
                    </div>
                    <div class="right-option">
                        <input type="radio" name="tpye" id="dine-in">
                        <label for="dine-in">Dine-in</label>
                        <input type="radio" name="tpye" id="take-out">
                        <label for="take-out">Take-out</label>
                    </div>
                </div>
                <div class="right-bottom">    
                    <input type="button" value="CHECKOUT">
                </div>
            </div>
        </div>
    </section>



<?= view('footer') ?>