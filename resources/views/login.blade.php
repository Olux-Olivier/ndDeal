<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="POST">
        @csrf
        <input type="email" name="email">
        <br><br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="Se connecter">
        <br><br>
        <a href="/auth/google">Se connecter avec google</a>
    </form>
    <a href="/nDeal/createAccount"> Creer un compte ?</a>
</body>
</html>