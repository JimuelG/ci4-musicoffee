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
                                    <form action="<?= base_url('/admin/edit/save') ?>" method="POST">
                                    <div class="edit-right">
                                        <div class="input-forms">
                                            <input name="edit_id" value="<?= $product['pId'] ?>" type="text" hidden>
                                            <label for="name">Name</label>
                                            <input name="edit_name" type="text" class="name" value="<?= $product['name'] ?>">
                                            <label for="price">Price</label>
                                            <input name="edit_price" type="text" class="price" value="<?= $product['price'] ?>">
                                            <label for="description">Description</label>
                                            <textarea name="edit_description" class="description" rows="4" cols="50"><?php
                                                    echo $product['description'] ?></textarea>
                                            <label for="category">Category</label>
                                            <select name="edit_category" id="category">
                                                <option value="Coffee">Coffee</option>
                                                <option value="Coffee/Hot">Coffee/Hot</option>
                                            </select>
                                            <label for="status">Status</label>
                                            <select name="edit_status" id="status">
                                                <option value="active">active</option>
                                                <option value="inactive">inactive</option>
                                            </select>
                                            <br>
                                            <label for="file">Upload Product Image</label>
                                            <input class="file" type="file" name="edit_file">
                                        </div>
                                        <div class="btn">
                                            <input class="edit-btn-back" type="button" value="back">
                                            <input class="edit-btn-save" type="submit" value="save">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?= view('admin/admin-footer') ?>