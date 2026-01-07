<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>User Login</h2>

<?php if (session()->getFlashdata('error')) : ?>
    <div style="color: red;">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<?php if (isset($validation)) : ?>
    <div style="color: red;">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>

<form method="post" action="/login">
    <?= csrf_field() ?>

    <p>
        <label>Email</label><br>
        <input type="email" name="email" value="<?= old('email') ?>">
    </p>

    <p>
        <label>Password</label><br>
        <input type="password" name="password">
    </p>

    <button type="submit">Login</button>
</form>

</body>
</html>
