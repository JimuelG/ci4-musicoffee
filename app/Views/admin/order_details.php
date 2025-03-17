<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

        <div class="container">
                <div class="order-info">
                    <div class="details-header">
                        <h1>Order Detail</h1>
                    </div>
                    <div class="order-details">
                        <div class="left">
                            <div class="left-header">
                                <h1><?= $name ?></h1>
                                <h1 class="orderId" data-id="<?= $id['oId'] ?>">Order #<?= $id['oId'] ?></h1>
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
                                                    <img src="<?= $item['pictureUrl'] ?>" alt="">
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
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="right">
                            <div class="right-header">
                                <h1>Order Summary</h1>
                                <hr>
                                <div class="pricing">
                                    <p>Item(s) <?= $itemCount ?></p>
                                    <p><?= $total_price ?></p>
                                </div>
                            </div>
                            <div class="right-body">
                                <div class="body-top">
                                    <label for="status">Update status:</label>
                                    <select name="status" class="select-status" id="status">
                                        <option value="pending">pending</option>
                                        <option value="completed">completed</option>
                                        <option value="cancelled">cancelled</option>
                                    </select>
                                </div>
                                <div class="body-bottom">
                                    <input type="button" class="btn-back" value="back">
                                    <input type="button" class="btn-submit" value="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?= view('admin/admin-footer') ?>