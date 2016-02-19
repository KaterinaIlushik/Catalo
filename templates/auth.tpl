<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Auth</title>
</head>
<body>

<form method="post" action="auth.php">
    <input type="text" name='login' value="Имя">
    <input type="password" name='password' value="пароль">
    <input type="submit" value="send">
</form>
{$message}
<a href="reg.php">Пройти регистрацию</a>

</body>
</html>
