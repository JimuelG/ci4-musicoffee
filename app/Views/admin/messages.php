<?= view('admin/admin-header') ?>

    <?= view('admin/side-bar') ?>

    <section class="message-section">
        <div class="container">
            <div class="messages">
                <h1>Messages</h1>
                <div class="table">
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact no.</th>
                            <th>Message</th>
                        </thead>
                        <tbody>
                            <?php foreach($messages as $message): ?>
                            <tr class="message_item" data-id="<?= $message['id'] ?>" >
                                <td><?= $message['name'] ?></td>
                                <td><?= $message['email'] ?></td>
                                <td><?= $message['number'] ?></td>
                                <td><?= $message['body'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?= view('admin/admin-footer') ?>