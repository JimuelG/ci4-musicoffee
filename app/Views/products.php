<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

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
                <tr class="table-item">
                    <td><img src="" alt="item1"></td>
                    <td>Cafe Latte</td>
                    <td>Cafe Latte</td>
                    <td>P 89.00</td>
                    <td><a href="">edit</a></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="modal">
        <img class="exit" src="<?= base_url("assets/images/exit.png") ?>" alt="exit">
        <div class="form">
            <div class="form-head">
                <p>Add Product</p>
            </div>
            <div class="form-input">
                <input type="text" class="name" placeholder="Name">
                <input type="text" class="description" placeholder="Description">
                <p class="item-category">Category: 
                    <select name="item-category" id="item-category">
                        <option value="Coffee">Coffee</option>
                    </select>
                </p>
                <input type="text" class="price" placeholder="Price">
                <p class="item-status">Status: 
                    <select name="item-status" id="item-status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </p>
                <input class="file" type="file" name="" id="">
                <input class="submit" type="submit" value="ADD">
            </div>
        </div>
    </div>

<?= view('admin/admin-footer') ?>