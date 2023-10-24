<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <link rel="stylesheet" href="{{asset('css/styleAccueil.css')}}">
</head>
<body>
    <section class="header">
        <div class="logo">
            <h1>NYUMB<span class="ad">AD</span>EAL</h1>
        </div>

        <div class="recherche">
            <div class="icon">
                <img src="{{asset('img/search.png')}}" alt="Rehercher">
            </div>
            <form action="">
                <input type="text" name="" id="">
                <input type="submit" value="Rechercher">
            </form>
        </div>

        <div class="liens">
            <!-- lien 1 -->
            <div class="lien">
                <div>
                    <img src="{{asset('img/home.png')}}" alt="">
                </div>
                <a href="">Accueil</a>
            </div>
            
            <!-- lien 2 -->
            <div class="lien">
                <div>
                    <img src="{{asset('img/collection.png')}}" alt="">
                </div>
                <a href="">Collection</a>
            </div>

            <!-- lien 3 -->
            <div class="lien">
                <div>
                    <img src="{{asset('img/user.png')}}" alt="">
                </div>
                <a href="">Connexion</a>
            </div>

            <!-- lien 4 -->
            <div class="lien">
                <div>
                    <img src="{{asset('img/notification.png')}}" alt="">
                </div>
                <a href="">Alerte</a>
            </div>
        </div>
    </section>



    <!-- <img src="{{asset('img/logo.png')}}" alt=""> -->
</body>
</html>