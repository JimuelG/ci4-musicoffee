<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

        <section class="edit">
            <div class="container">
                <h1>Edit</h1>
                <div class="row">
                    <div class="edit-product">
                        <div class="edit-left">
                            <img src="<?= base_url("assets/images/products/" .$product['pictureUrl']) ?>" alt="">                            
                        </div>
                        <div class="edit-right">
                            <input type="text" class="name" value="<?= $product['name'] ?>">
                            <input type="text" class="description" value="<?= $product['description'] ?>">
                            <input type="text" class="price" value="<?= $product['price'] ?>">
                            <select name="category" id="category">
                                <option value="Coffee">Coffee</option>
                                <option value="Coffee/Hot">Coffee/Hot</option>
                            </select>
                            <select name="status" id="status">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                            <input class="file" type="file" name="file">
                            <input type="button" value="save">
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?= view('admin/admin-footer') ?>