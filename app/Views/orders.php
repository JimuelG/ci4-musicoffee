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
                        <tr>
                            <th>Product Details</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="" alt="">
                                <div class="product-detail">
                                    <p>Spanish Latte</p>
                                    <p>16oz</p>
                                </div>
                            </td>
                            <td>
                                <img src="" alt="">
                                <input type="text" name="" id="">
                                <img src="" alt="">
                            </td>
                            <td>P 89.00</td>
                            <td>P 89.00</td>
                        </tr>
                    </table>
                </div>
                <div class="continue-shopping">
                <img src="" alt="">
                </div>
            </div>
            
            <div class="right">
                <h1>Order Summary</h1>
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
                <input type="button" value="CHECKOUT">
            </div>
        </div>
    </section>



<?= view('footer') ?>