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
                            <tr class='table-item' data-id=<?= $order['oId']?>>
                                <td><?= "# " . $order['oId'] ?></td>
                                <td>
                                    <?php
                                        $date = date("F d, Y", strtotime($order['oCreated_at']));
                                        echo $date;
                                    ?>
                                </td>
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
            
        </div>
    </section>

    

<?= view('admin/admin-footer') ?>