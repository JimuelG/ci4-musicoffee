<?= view('admin/admin-header') ?>

<form method="POST" action="<?= base_url('/loginPost') ?>">
    <section class="login">
        <div class="login-container">
            <div class="login-form">
                <h1>Sign in</h1>
                <hr>
                <div class="text_field">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="text_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <input id="submit" type="submit" value="Login">
            </div>        
        </div>
    </section>
</form>