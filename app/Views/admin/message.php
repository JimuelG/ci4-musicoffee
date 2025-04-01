<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

    <section class="message-section">
        <div class="container">
            <div class="messages">
                <h1>Message</h1>
                <div class="message-detail">
                    <div class="name">
                        <label for="">Name:</label>
                        <input type="text" name="" id="" value="<?= $message['name'] ?>" readonly>
                    </div>
                    <div class="eamil">
                        <label for="">Email:</label>
                        <input type="text" name="" id="" value="<?= $message['email'] ?>" readonly>
                    </div>
                    <div class="number">
                        <label for="">Phone:</label>
                        <input type="text" name="" id="" value="<?= $message['number'] ?>" readonly>
                    </div>
                    <div class="body">
                        <label for="">Message:</label>
                        <textarea name="" id="" readonly><?= $message['body'] ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?= view('admin/admin-footer') ?>