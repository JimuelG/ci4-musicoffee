<?= view('header/header') ?>

<?= view('header/nav') ?>

    <section class="cart">
        <div class="container">
            <div class="cart-table">
                <h2>Customer name: <?= $cr[0]['customer_name'] ?></h2>
                <table>
                    <tr>
                        <th>Item name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                        $total_price = 0;
                        foreach($cr as $c): 
                            $total_price += $c['price'];
                     ?>
                    <tr>
                        <td><?= $c['item_name'] ?></td>
                        <td><?= $c['size'] ?></td>
                        <td><?= $c['quantity'] ?></td>
                        <td><?= $c['price'] ?></td>
                        <td><a href="">edit</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?= "P " . $total_price . ".00" ?>
            </div>
            <div class="sumbit">
                <input type="submit" value="SUMBIT">
            </div>
        </div>
    </section>

<?= view('footer') ?>