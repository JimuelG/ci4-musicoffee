<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

    <section class="message-section">
        <div class="container">
            <div class="message">
                <h1>Message</h1>
                <div class="message-detail">
                    <div id="name">
                        <label for="">Name</label>
                        <input type="text" name="" id="" value="<?= $message['name'] ?>" readonly>
                    </div>
                    <div id="eamil">
                        <label for="">Email</label>
                        <input type="text" name="" id="" value="<?= $message['email'] ?>" readonly>
                    </div>
                    <div id="number">
                        <label for="">Phone</label>
                        <input type="text" name="" id="" value="<?= $message['number'] ?>" readonly>
                    </div>
                    <div id="body">
                        <label for="">Message</label>
                        <textarea name="" id="" rows="6" readonly><?= $message['body'] ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= view('admin/admin-footer') ?>