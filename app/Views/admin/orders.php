<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

    <section class="orders">
        <div class="container">
            <div class="order">
                <h1>Orders</h1>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Customer name</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($orders as $order):

                            ?>
                            <tr>
                                <td><?= "# " . $order['oId'] ?></td>
                                <td><?= $order['oCreated_at'] ?></td>
                                <td><?= $order['customer_name'] ?></td>
                                <td><?= $order['total_price'] ?></td>
                                <td>
                                    <div class="status" data-status=<?= $order['status'] ?>>
                                        <?= $order['status'] ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="orders-modal">
                <div class="order-info">
                    <div class="left">
                        <div class="left-header">
                            <h1><?= $order['customer_name'] ?></h1>
                            <p></p>
                        </div>
                        <div class="left-table">
                            <thead>
                                <tr>
                                    <th>Product Details</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="item-details">
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                            <div class="item-name">
                                                <p>Spanish Latte</p>
                                                <p>16oz</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p>1</p>
                                    </td>
                                    <td>
                                        <p>P 89.00</p>
                                    </td>
                                    <td>
                                        <p>P 89.00</p>
                                    </td>
                                </tr>
                            </tbody>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right-header">
                            <h1>Order Summary</h1>
                            <hr>
                        </div>
                        <div class="right-body">
                            <div class="body-top">
                                <p>ITEM(s) 3</p>
                                <p>P 356.00</p>
                            </div>
                            <div class="body-bottom">
                                <input type="button" value="OK">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

<?= view('admin/admin-footer') ?>