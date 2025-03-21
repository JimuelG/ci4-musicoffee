<?= view('admin/admin-header') ?>

<form method="POST" action="<?= base_url('/loginPost') ?>">
    <section class="login">
        <div class="login-container">
            <div class="login-form">
                <h1>Login</h1>
                <input type="text" class="username" name="name" placeholder="username">
                <input type="password" class="password" name="password" placeholder="password">
                <input type="submit" value="Login">
            </div>        
        </div>
    </section>
</form>