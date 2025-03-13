<?= view('header/header') ?>

<?= view('header/nav') ?>

    <section class="orders">
        <div class="container">
            <div class="left">
                <div class="left-header">
                    <h1>Shopping Cart</h1>
                    <h1 class="itemCount"></h1>
                </div>
                <hr>
                <div class="table-items">
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
                                        <img class="product-img" src="<?= $o['pictureUrl']?>" alt="">
                                        <div class="product-detail">
                                            <p><?= $o['item_name'] ?></p>
                                            <p><?= $o['size'] ?></p>
                                            <a href="" class="remove-item" data-id="<?= $o['cId'] ?>">remove</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-quantity">
                                        <img 
                                            class="subtract-qty" 
                                            data-id="<?= $o['cId'] ?>" 
                                            src="<?= base_url('assets/images/subtract.png') ?>" 
                                            alt="">
                                        <input 
                                            type="text" 
                                            class="quantity-input" 
                                            data-id="<?= $o['cId'] ?>"
                                            value="<?= $o['quantity'] ?>"
                                            disabled>
                                        <img 
                                            class="add-qty" 
                                            data-id="<?= $o['cId'] ?>" 
                                            src="<?= base_url('assets/images/add_black.png') ?>" 
                                            alt="">
                                    </div>
                                </td>
                                <td><label 
                                        data-basePrice="<?= $o['price'] ?>" 
                                        for="">
                                        <?= "P " . $o['price'] . ".00"?>
                                    </label>
                                </td>
                                <td>
                                    <label 
                                        class="priceTotal"
                                        data-name="<?= $o['customer_name'] ?>"
                                        data-price="<?= $o['price'] ?>"
                                        data-id="<?= $o['cId'] ?>"
                                        data-total="<?= $o['price'] * $o['quantity'] ?>" 
                                        for="">
                                        <?= "P " . $o['price'] * $o['quantity'] . ".00"?>
                                    </label>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="continue-shopping">
                    <img src="" alt="">
                    <label for="">Continue Shopping</label>
                </div>
            </div>
            
            <div class="right">
                <div class="right-top">
                    <div class="right-header">
                        <h1>Order Summary</h1>
                    </div>
                    <hr>
                    <div class="right-detail">
                        <p class="itemCount2"></p>
                        <p class="cart-total"></p>
                    </div>
                    <div class="right-option">
                        <input type="radio" name="tpye" id="dine-in">
                        <label for="dine-in">Dine-in</label>
                        <input type="radio" name="tpye" id="take-out">
                        <label for="take-out">Take-out</label>
                    </div>
                </div>
                <div class="right-bottom">
                    
                    <input type="button" id="checkout" value="CHECKOUT">
                </div>
            </div>
        </div>
    </section>



<?= view('footer') ?>