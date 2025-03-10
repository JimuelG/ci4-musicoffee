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
                            <tr>
                                <td>#000010</td>
                                <td>March 3, 2025</td>
                                <td>Jimuel Gaas</td>
                                <td>P 178.00</td>
                                <td>pending</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?= view('admin/admin-footer') ?>