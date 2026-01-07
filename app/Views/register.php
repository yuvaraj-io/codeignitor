<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>User Registration</h2>

<?php if (session()->getFlashdata('success')) : ?>
    <div style="color: green;">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<?php if (isset($validation)) : ?>
    <div style="color: red;">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>

<form method="post" action="/register">
    <?= csrf_field() ?>

    <p>
        <label>Name</label><br>
        <input type="text" name="name" value="<?= old('name') ?>">
    </p>

    <p>
        <label>Email</label><br>
        <input type="email" name="email" value="<?= old('email') ?>">
    </p>

    <p>
        <label>Password</label><br>
        <input type="password" name="password">
    </p>

    <button type="submit">Register</button>
</form>

</body>
</html>
