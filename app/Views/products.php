<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

    <section class="products">
        <div class="container">
            <div class="dashboard">
                <h1>Products</h1>
                <div class="toolbar">
                    <div class="dropdown">
                        <p>Category</p>
                        <select name="category" id="category">
                            <option value="All">All</option>
                            <option value="Coffee">Coffee</option>
                        </select>
                    </div>
                    <input class="add-item" type="button" value="ADD ITEM">
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Base Price</th>
                            <th></th>
                        </tr>
                        <?php foreach ($pr as $p): ?>
                        <tr class="table-items">
                            <td class="item-img"><img src="<?= base_url("assets/images/products/".$p['pictureUrl']) ?>" alt="item1"></td>
                            <td><?= $p['name'] ?></td>
                            <td>
                                <div class="item-des">
                                    <?= $p['description'] ?>
                                </div>
                            </td>
                            <td><?= "P " . $p['price'] . ".00"?></td>
                            <td><a href="<?= base_url('/admin/product/edit/') . $p['pId'] ?>">edit</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <form action="<?= base_url("/admin/add") ?>" method="POST" enctype="multipart/form-data">
            <div class="item-modal hidden">
                <img class="exit" src="<?= base_url("assets/images/exit.png") ?>" alt="exit">
                <div class="form">
                    <div class="form-head">
                        <p>Add Product</p>
                    </div>
                    <div class="form-input">
                        <input type="text" name="name" class="name" placeholder="Name">
                        <input type="text" name="description" class="description" placeholder="Description">
                        <p class="item-category">Category: 
                            <select name="item-category" id="item-category">
                                <option value="Coffee">Coffee</option>
                                <option value="Coffee-hot">Coffee(hot)</option>
                                <option value="Non-Coffee">Non-coffee</option>
                                <option value="Fruit-soda">Fruit Soda</option>
                                <option value="Milktea">Milktea</option>
                            </select>
                        </p>
                        <input type="text" name="price" class="price" placeholder="Price">
                        <p class="item-status">Status: 
                            <select name="item-status" id="item-status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </p>
                        <input class="file" type="file" name="file">
                        <input class="submit" type="submit" value="ADD">
                    </div>
                </div>
            </div>
        </form>
        
    </section>
    
    
    <?= view('admin/admin-footer') ?>