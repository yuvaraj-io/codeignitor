<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<p>Welcome, <?= session()->get('user_email') ?></p>

<a href="/logout">Logout</a>

</body>
</html>
