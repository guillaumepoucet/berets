<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - Bérets</title>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap-grid.min.css" crossorigin="anonymous"> -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto+Slab:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> <!-- Fotorama -->
    <!-- Fotorama -->
    <link href="css/fotorama.css" rel="stylesheet">
    <script src="js/fotorama.js"></script>
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



    <div id="product-wrap">
        <div class="ariane">
            <p>
                <a href="#">Produits</a> >
                <a href="#">Vins</a> >
                <a href="#">Rouges</a> >
                <a href="#">Bordeaux</a>
            </p>
        </div>
        <!-- Gallerie photo -->
        <div id="product-img">
            <!-- Fotorama -->
            <div class="fotorama" data-width="100%" data-height="300px" data-ratio="200/400" data-nav="thumbs" data-arrows="true" data-click="true" data-swipe="true" data-trackpad="true">
                <a href="img/bouteille.png"><img src="img/bouteille-th.png"></a>
                <a href="img/bouteille.png"><img src="img/bouteille-th.png"></a>
            </div>
        </div>
        <!-- /Gallerie photo -->
        <!-- Header produit -->
        <div id="product">
            <h3>Nom du produit</h3>
            <p class="price-tag">220 €</p>
            <!-- note produit -->
            <div class="product-note">
                <p>Note : </p>
                <span><i class="fas fa-wine-bottle"></i>
                    <i class="fas fa-wine-bottle"></i>
                    <i class="fas fa-wine-bottle"></i>
                    <i class="fas fa-wine-bottle"></i>
                    <i class="fas fa-wine-bottle"></i></span>
            </div>
            <!-- /note produit -->
            <p class="item-caption">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus provident suscipit laudantium totam, enim velit nemo rerum eligendi eaque corrupti molestias? Molestias id, ea quidem iste adipisci reiciendis voluptatibus assumenda.</p>
            <!-- bouttons et selections -->
            <div class="item-btn-wrap">
                <!-- selections des quantites -->
                <div class="number-input mg-right">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">-</button>
                    <input type="number" min="1" max="5" name="quantity" id="quantity" value="1">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                </div>
                <!-- /selections des quantites -->
                <div id="add-art" class="mg-right">
                    <button><i class="fas fa-shopping-bag"></i>
                        <span>Ajouter</span></button>
                </div>
                <button id="fav-item" class="mg-none mg-right"><i class="far fa-heart"></i></button>
                <button id="share-item" class="mg-none mg-right"><i class="fas fa-share-alt"></i></button>
            </div>
            <div class="info">
                <p>Disponibilté : </p>
                <span class="stock-ok">En stock</span>
                <span class="stock-none">Indisponible</span>
            </div>
            <!-- /bouttons et selections -->

            <!-- produit footer -->
            <div class="item-body">
                <!-- onglets -->
                <ul class="tab">
                    <li><a class="tablinks" onclick="openCity(event, 'item-detail')" id="defaultOpen">Descriptions</a></li>
                    <li><a class="tablinks" onclick="openCity(event, 'item-comments')">Commentaires</a> <span>(07)</span></li>
                </ul>
                <!-- /onglets -->
                <!-- contenu des onglets -->
                <!-- detail du produit -->
                <div id="item-detail" class="tab-content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic dolorem qui quod magni magnam rem laboriosam cupiditate voluptatum, quisquam, quam tenetur alias vitae non nesciunt facilis laudantium amet eligendi? Ex.Sunt amet quis maiores officia fugit cumque recusandae fugiat repellat corporis expedita odit soluta modi eligendi itaque praesentium tempore voluptas doloribus laborum illo, vel tenetur. Ducimus facilis explicabo labore. Voluptatem.</p>
                </div>
                <!-- /detail du produit -->
                <!-- commentaires liees au produit -->
                <div id="item-comments" class="tab-content">
                    <p>Listes commentaires produit</p>
                </div>
                <!-- /commentaires liees au produit -->
                <!-- /contenu des onglets -->
            </div>
            <!-- /produit footer -->
        </div>
        <!-- /header produit -->
    </div>
    <!-- /produit wrap -->
    <!-- produits similaires -->
    <div id="similar-item">
        <h4>Vous aimerez sans doute...</h4>
        <!-- debut de la liste -->
        <div class="similar-list">
            <!-- carte pour une boisson -->
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
            <!-- /carte pour une boisson -->
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
        <!-- /debut de la liste -->

    </div>
    <!-- /produits similaires -->
    
    <!-- apercu du catalogue -->
    <div id="preview-catalog">
        <div class="popular-items">
            <h4 class="aside-title">Les plus populaires</h4>
            <div class="aside-list">
                <a href="#">
                    <img src="img/bouteille.png" alt="">
                    <div class="details">
                        <p>Nom de la bouteille</p>
                        <span class="best-price">220 €</span>
                    </div>
                </a>
                <a href="#">
                    <img src="img/bouteille.png" alt="">
                    <div class="details">
                        <p>Nom de la bouteille</p>
                        <span class="best-price">220 €</span>
                    </div>
                </a>
            </div>

        </div>
        <div class="best-sellers">
            <h4 class="aside-title">Les plus vendus</h4>
            <div class="aside-list">
                <a href="#">
                    <img src="img/bouteille.png" alt="">
                    <div class="details">
                        <p>Nom de la bouteille</p>
                        <span class="best-price">220 €</span>
                    </div>
                </a>
                <a href="#">
                    <img src="img/bouteille.png" alt="">
                    <div class="details">
                        <p>Nom de la bouteille</p>
                        <span class="best-price">220 €</span>
                    </div>
                </a>
            </div>

        </div>
        <div class="new-items">
            <h4 class="aside-title">Derniers arrivages</h4>
            <div class="aside-list">
                <a href="#">
                    <img src="img/bouteille.png" alt="">
                    <div class="details">
                        <p>Nom de la bouteille</p>
                        <span class="best-price">220 €</span>
                    </div>
                </a>
                <a href="#">
                    <img src="img/bouteille.png" alt="">
                    <div class="details">
                        <p>Nom de la bouteille</p>
                        <span class="best-price">220 €</span>
                    </div>
                </a>
            </div>


        </div>
    </div>
    <!-- /apercu du catalogue -->

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


    <script src="js/tab.js"></script>




</body>

</html>