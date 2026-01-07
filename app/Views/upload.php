<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<?php if (session()->getFlashdata('error')) : ?>
    <div style="color:red;">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')) : ?>
    <div style="color:green;">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('image')) : ?>
    <p>
        <img src="/<?= session()->getFlashdata('image') ?>" width="200">
    </p>
<?php endif; ?>

<form method="post" action="/upload" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <p>
        <input type="file" name="image">
    </p>

    <button type="submit">Upload</button>
</form>

</body>
</html>
