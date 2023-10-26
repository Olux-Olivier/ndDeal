<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Creation d'un compte </h2>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nom">
        <br><br>
        
        <input type="text" name="last_name" placeholder="Post nom" required>
        <br><br>
        <input type="text" name="first_name" placeholder="Prenm" required>
        <br><br>
        <input type="date" name="birthday" placeholder="Date de naissance" required>
        <br><br>
        <input type="text" name="phone" placeholder="Tel (+243)" required>
        <br><br>
        <input type="email" name="email" placeholder="email " >
        <br><br>
        <input type="text" name="adress" placeholder="Adresse complet " required>
        <br><br>
        <input type="password" name="password" placeholder="password" required>
        <br><br>

        <input type="submit" value="Creer">
    </form>
</body>
</html>