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
    <!-- fin header -->

    <!-- debut body -->
    <div class="body">
        <div class="imageFond">
            <img src="{{asset('img/bgAccueil.jpg')}}" alt="">
        </div>

        <div class="bienvenue">
            <h1>Bienvenu ! <br> sur <span class="title">NYUMBADEAL</span></h1><br>
            <div class="motBinevenue">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo esse quo obcaecati, ab repellat architecto 
                    magnam velit earum tempore corrupti molestias ullam, minima, dolor quis eos aspernatur voluptatem 
                    voluptatum eius. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore aliquid aliquam quis quae similique fugit adipisci incidunt 
                    a explicabo cupiditate odio beatae corrupti voluptatibus cum, natus enim facere aspernatur dolorem.
                </p>
            </div>

            <br>
            <br>

            <div class="exampleMaison">
                <div>
                    <img src="{{asset('img/maison1.jpeg')}}" alt="">
                </div>

                <div>
                    <img src="{{asset('img/maison2.jpeg')}}" alt="">
                </div>
                <div class="plus">
                    <a href=""><h1>+</h1></a>
                </div>
            </div>
        </div>

        <div class="bloc_instruction">
            <!-- instruction 1 -->
            <div class="bloc">
                <div class="numero" id="numero_1">
                    <h1>1</h1>
                </div>

                <div class="texte">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum eligendi asperiores alias modi neque 
                            eum excepturi nulla, quis deserunt sint corporis voluptatibus eius a nobis saepe maxime
                            consequuntur libero sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi 
                            nobis voluptate magni, culpa a modi ex molestiae 
                            in voluptatem sequi neque? Accusantium soluta in porro distinctio amet recusandae blanditiis.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione officiis libero quas dolor rem nulla 
                            
                    </p>
                </div>
            </div>

            <!-- instruction 2 -->
            <div class="bloc">
                <div class="numero" id="numero_2">
                    <h1>2</h1>
                </div>

                <div class="texte">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum eligendi asperiores alias modi neque 
                            eum excepturi nulla, quis deserunt sint corporis voluptatibus eius a nobis saepe maxime
                            consequuntur libero sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi 
                            nobis voluptate magni, culpa a modi ex molestiae 
                            in voluptatem sequi neque? Accusantium soluta in porro distinctio amet recusandae blanditiis.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione officiis libero quas dolor rem nulla 
                            
                    </p>
                </div>
            </div>

            <!-- instruction 3-->
            <div class="bloc">
                <div class="numero" id="numero_3">
                    <h1>3</h1>
                </div>
                <div class="texte">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum eligendi asperiores alias modi neque 
                            eum excepturi nulla, quis deserunt sint corporis voluptatibus eius a nobis saepe maxime
                            consequuntur libero sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi 
                            nobis voluptate magni, culpa a modi ex molestiae 
                            in voluptatem sequi neque? Accusantium soluta in porro distinctio amet recusandae blanditiis.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione officiis libero quas dolor rem nulla 
                            
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- fin body -->

    <div class="footer">
        
    </div>


    
</body>
</html>