<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Creation d'un compte </h2>
    <form action="">
        @csrf
        <input type="text" name="name" placeholder="Nom">
        <br><br>
        
        <input type="text" name="last_name" placeholder="Post nom">
        <br><br>
        <input type="text" name="first_name" placeholder="Prenm">
        <br><br>
        <input type="text" name="birthday" placeholder="Date de naissance">
        <br><br>
        <input type="text" name="phone" placeholder="Tel (+243)">
        <br><br>
        <input type="text" name="adress" placeholder="Adresse complet ">
        <br><br>
        <input type="submit" value="Creer">
    </form>
</body>
</html>