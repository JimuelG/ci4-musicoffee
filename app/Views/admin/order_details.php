<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

        <div class="container">
            <div class="">
                <p>back</p>
            </div>
            <div class="order-info">
                    
                <div class="left">
                    <div class="left-header">
                        <h1><?= $name ?></h1>
                        <p></p>
                    </div>
                    <div class="left-table">
                        
                        <table>
                            <thead>
                                <tr>
                                <th>Product Details</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                </tr>
                            </thead>
                            <?php if (!empty($items) && is_array($items)): ?>
                                <tbody>
                                    <?php
                                    $itemCount = 0;
                                    foreach($items as $item): 
                                        $itemCount++;    
                                        ?>
                                <tr>
                                    <td>
                                        <div class="item-details">
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                            <div class="item-name">
                                                <p><?= $item['item_name'] ?></p>
                                                <p><?= $item['size']?> </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p><?= $item['quantity'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $item['price'] ?></p>
                                    </td>
                                    <td>
                                        <p><?= $item['price'] ?></p>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4">No items found</td>
                                    </tr>
                                </tbody>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right-header">
                            <h1>Order Summary</h1>
                            <hr>
                        </div>
                        <div class="right-body">
                            <div class="body-top">
                                <p>Item(s) <?= $itemCount ?></p>
                                <p><?= $total_price ?></p>
                            </div>
                            <div class="body-bottom">
                                <input type="button" value="OK">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
<?= view('admin/admin-footer') ?>