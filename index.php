<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - Bérets</title>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap-grid.min.css" crossorigin="anonymous"> -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Roboto+Slab:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- nav -->
    <nav>
        <!-- logo to home -->
        <div class="upper-nav">
            <a class="nav-logo" href="">LOGO</a>
            <div class="nav-icons">
                <a href="#"><i class="fas fa-user-friends"></i></a>
                <a href="#"> <i class="fas fa-shopping-bag"></i></a>
                <a href="#"><i class="fas fa-search"></i></a>
                <!-- <i class="fas fa-sign-out-alt"></i> -->
            </div>
        </div>
        <ul class="">
            <li class="no-dot"><a class="nav-link active-link" href="#">Accueil</a></li>
            <li class="no-dot"><a class="nav-link" href="#">Nos produits</a></li>
            <li class="no-dot"><a class="nav-link" href="#">Contact</a></li>
        </ul>
    </nav>
    <!-- /nav -->


    <div class="container-wrap">
        <!-- aside  -->
        <aside>
            <div class="sticky">
                <!-- Categories -->
                <div class="categories">
                    <p class="aside-title">Catégories</p>
                    <a class="cat-list-item">Vin</a>
                    <a class="cat-list-item">Bières</a>
                </div>
                <!-- /Categories -->
                <!-- Filtre prix -->
                <div class="">
                    <p class="aside-title">Filtrer par prix</p>
                    <div class="slidecontainer">
                        <input type="range" min="1" max="500" value="50" class="slider" id="myRange">
                        <p>Prix max. <span id="price-value"></span> €</p>
                    </div>
                </div>
                <!-- /Filtre prix -->
                <!-- Keyword Tag -->
                <div class="">
                    <p class="aside-title">Mots-clés</p>
                    <div class="keywords">
                        <a class="cat-list-item">Rouge</a>
                        <a class="cat-list-item">Blanc</a>
                        <a class="cat-list-item">Bordeaux</a>
                    </div>
                </div>
                <!-- /Keyword Tag -->
                <!--  -->
                <div class="aside-list">
                    <p class="aside-title">Meilleurs ventes</p>
                    <a href="#">
                        <img src="img/bouteille.png" alt="">
                        <div class="details">
                            <p>Nom de la bouteille</p>
                            <span class="best-price">220 €</span>
                        </div>
                    </a>
                </div>
            </div>
        </aside>

        <section id="catalogue" class="">

            <div class="catalogue-header">
                <span>Affichage 1-9 sur 265 résultats</span>
                <div class="custom-select">
                    <select name="tri" id="tri">
                        <option value="default">Tri par défaut</option>
                        <option value="">Prix</option>
                        <option value="">Degrés</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="item-card">
                    <a href="" class="card-body">
                        <span class="hover-detail">Voir les détails</span>
                        <img src="img/bouteille.png" alt="">
                        <p>Nom de la bouteille</p>
                        <span class="price">220 €</span>
                    </a>
                    <div class="card-footer" id="add-art">
                        <button><i class="fas fa-shopping-bag"></i>
                            <span>Ajouter</span></button>
                    </div>
                </div>
                <div class="item-card">
                    <a href="" class="card-body">
                        <span class="hover-detail">Voir les détails</span>
                        <img src="img/bouteille.png" alt="">
                        <p>Nom de la bouteille</p>
                        <span class="price">220 €</span>
                    </a>
                    <div class="card-footer" id="add-art">
                        <button><i class="fas fa-shopping-bag"></i>
                            <span>Ajouter</span></button>
                    </div>
                </div>
                <div class="item-card">
                    <a href="" class="card-body">
                        <span class="hover-detail">Voir les détails</span>
                        <img src="img/bouteille.png" alt="">
                        <p>Nom de la bouteille</p>
                        <span class="price">220 €</span>
                    </a>
                    <div class="card-footer" id="add-art">
                        <button><i class="fas fa-shopping-bag"></i>
                            <span>Ajouter</span></button>
                    </div>
                </div>
                <div class="item-card">
                    <a href="" class="card-body">
                        <span class="hover-detail">Voir les détails</span>
                        <img src="img/bouteille.png" alt="">
                        <p>Nom de la bouteille</p>
                        <span class="price">220 €</span>
                    </a>
                    <div class="card-footer" id="add-art">
                        <button><i class="fas fa-shopping-bag"></i>
                            <span>Ajouter</span></button>
                    </div>
                </div>
                <div class="item-card">
                    <a href="" class="card-body">
                        <span class="hover-detail">Voir les détails</span>
                        <img src="img/bouteille.png" alt="">
                        <p>Nom de la bouteille</p>
                        <span class="price">220 €</span>
                    </a>
                    <div class="card-footer" id="add-art">
                        <button><i class="fas fa-shopping-bag"></i>
                            <span>Ajouter</span></button>
                    </div>
                </div>
                <div class="item-card">
                    <a href="" class="card-body">
                        <span class="hover-detail">Voir les détails</span>
                        <img src="img/bouteille.png" alt="">
                        <p>Nom de la bouteille</p>
                        <span class="price">220 €</span>
                    </a>
                    <div class="card-footer" id="add-art">
                        <button><i class="fas fa-shopping-bag"></i>
                            <span>Ajouter</span></button>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /row -->

    <footer>
        <div class="newsletter">
            <div>
                <p><i class="fas fa-paper-plane"></i>Recevez notre newsletter</p>
                <p>Inscrivez-vous pour recevoir nos dernieres offres, nos derniers arrivages et plus</p>
            </div>
            <form action="">
                <input type="text">
                <input type="submit" value="S'abonner">
            </form>
        </div>
        <hr>
        <div class="footer-body">
            <div class="informations">
                <p class="address">
                    <i class="fas fa-map-marker-alt"></i>
                    Adresse<br>
                    Adresse</p>
                <p><i class="fas fa-phone-alt"></i>Numéro de tél</p>
                <p><i class="fas fa-envelope"></i>Mail</p>
            </div>
            <div class="produits">
                <a href="#">Promotions</a>
                <a href="#">Nouveaux produits</a>
                <a href="#">Meilleures ventes</a>
                <a href="#">Contactez-nous</a>
            </div>
            <div class="account">
                <a href="#">Votre compte</a>
                <a href="#">Vos commandes</a>
                <a href="#">Informations personnelles</a>
            </div>
        </div>
        <hr>
        <div class="mentions">
            <a href="#">Mentions légales </a> | <p>2020</p>
        </div>
    </footer>

<script src="js/slider.js"></script>
<script src="js/select.js"></script>




</body>

</html>