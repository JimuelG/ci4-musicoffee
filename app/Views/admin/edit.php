<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

        <section class="edit">
            <div class="container">
                <div class="edit-container">
                    <h1>Edit</h1>
                    <div class="row">
                        <div class="row-inner">
                                <h2 class="prod-details">Product Details</h2>
                                <div class="edit-product">
                                    <div class="edit-left">
                                        <img src="<?= base_url("assets/images/products/" .$product['pictureUrl']) ?>" alt="">                            
                                    </div>
                                    <div class="edit-right">
                                        
                                        <div class="input-forms">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="name" value="<?= $product['name'] ?>">
                                            <label for="price">Price</label>
                                            <input type="text" class="price" value="<?= $product['price'] ?>">
                                            <label for="description">Description</label>
                                            <textarea class="description" rows="4" cols="50"><?php
                                                    echo $product['description'] ?></textarea>
                                            <label for="category">Category</label>
                                            <select name="category" id="category">
                                                <option value="Coffee">Coffee</option>
                                                <option value="Coffee/Hot">Coffee/Hot</option>
                                            </select>
                                            <label for="status">Status</label>
                                            <select name="status" id="status">
                                                <option value="active">active</option>
                                                <option value="inactive">inactive</option>
                                            </select>
                                            <br>
                                            <label for="file">Upload Product Image</label>
                                            <input class="file" type="file" name="file">
                                        </div>
                                        <div class="btn">
                                            <input class="edit-btn-back" type="button" value="back">
                                            <input class="edit-btn-save" type="button" value="save">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?= view('admin/admin-footer') ?>