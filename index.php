<?php
    if (isset($_POST['envoyer'])) {
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        $objet = $_POST['objet'];
        $message = $_POST['message'];

        $mail_to = "yanou.yehiel@yahoo.com";
    
        /* Création du header de l'e-mail */ 
        $header = "From: no-reply@oncheckcm.com\n";
        $header .= "MIME-version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\n";
        $header .= "Content-Transfer-ncoding: 8bit";

        /* Ajout du message au format HTML */					
        $contenu = "<h3>Bonjour Yehiel, un nouveau message concernant ton portofolio</h3>
            <div style='text-align: center; justify-content: center; margin-bottom: 20px;'>
                <p><b>Nom :</b> $nom</p>
                <p><b>Mail :</b> $mail</p>
                <p><b>Téléphone :</b> $tel</p>
                <p><b>Objet :</b> $objet</p>
                <p><b>Message :</b> $message</p>
            </div>
        ";

        mail($mail_to, 'Réponse à mon portofolio', $contenu, $header);
    }
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta keywords="logiciel, yehiel, yanou, yehiel yanou, création site internet, création logiciel, devis, portofolio, développeur web, développeur, programmeur, developer, programmer, cameroun">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mon, Portfolio - Personnel | Accueil</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
<body>
<!--header-->
<div class="header-gap">
  <?php include("includes/navbar.php"); ?>
</div>
<!--/header-->

<section id="home" class="w3l-banner pb-5">
    <div class="container pb-md-3">
        <div class="banner-wrapper text-center">
            <div class="">
                <span class="text">A propos de moi</span>
                <h1 class="mb-4 title">Hello, <span class="type-js"><span class="text-js">Je suis Yehiel Yanou</span></span><br>
                    Je suis un programmer/Developper Web.</h1>
                <p class="mx-lg-5">J'aime la <strong>conception graphique</strong>, l'<strong>analyse</strong> et la <strong>programmation</strong> passions qui me font faire naitre et concevoir des projets depuis quelques années déjà.
                    Je peux tout de suite donner à votre entreprise un nouveau départ créatif !
                </p>
            </div>
            <div class="row">
              <div class="col-lg-8 mx-lg-auto col-md-10">
                <img src="assets/images/banner.png" alt="" class="img-fluid mt-lg-5 mt-3">
              </div>
            </div>
            <ul class="follow-social">
                <li><p>Suivez-moi </p></li>
                <li><a href=" https://wa.me/237695707732" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
              <li><a href="https://www.linkedin.com/in/yehiel-yanou-150444221" target="_blank"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="https://m.facebook.com/yehiel.yanou" target="_blank"><span class="fa fa-facebook-official"></span></a></li>
              <li><a href="https://twitter.com/yanou_yehiel" target="_blank"><span class="fa fa-twitter"></span></a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Domain Modal -->
<?php include("includes/modal.php"); ?>
<!-- //Domain modal -->

<!-- banner section -->

<!-- //banner section -->
<!-- home page about section -->
<section class="w3l-homeblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6">
                    <span class="text">Mes Services</span>
                    <h3 class="title-big"><span>Construisez votre marque</span> et développez votre entreprise</h3>
                    <p class="mt-4">Vous pouvez télécharger mon CV afin d'apprendre les détails de ma vie professionelle en tant que designer et programmeur. </p>
                    <ul class="service-list mt-md-5 mt-4">
                        <li class="service-link"><a href="#">Conception et Developpement UI/UX</a></li>
                        <li class="service-link"><a href="#">Conception et identité de marque</a></li>
                        <li class="service-link"><a href="#">Conception d'applications mobiles</a></li>
                        <li class="service-link"><a href="#">Art, Logo, SVG et Illustration</a></li>
                        <li class="service-link"><a href="#">Conception Application Web</a></li>
                        <li class="service-link"><a href="#">Conception Logiciel Desktop</a></li>
                    </ul>
                    <a href="#url" class="btn btn-style btn-empty p-0">Voir tous mes services <span></span></a>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="position-relative">
                        <img src="assets/images/yehiel.jpeg" alt="" class="radius-image img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

<!-- home page about section -->
<section class="w3l-homeblock2" id="skills">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 align-self">
                    <div class="position-relative px-lg-5 mx-lg-0 mx-md-5 image-padding">
                        <img src="assets/images/skills.png" alt="" class="radius-image img-fluid">
                        <div class="position-absolute-images">
                            <img src="assets/images/file.png" class="img-fluid pos-img" alt="" />
                            <img src="assets/images/file1.png" class="img-fluid pos-img1" alt="" />
                            <img src="assets/images/file2.png" class="img-fluid pos-img2" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <span class="text">Mes compétences en vedette</span>
                    <h3 class="title-big">J'utilise les <span>principales</span>
                        méthodes de conception.</h3>
                    <p class="mt-4">Je me spécialise dans la nouveauté et la stratégie, et je suis passionné par la création de graphismes, d'application web et mobile et de logiciels desktop. Et je suis toujours pret à impressionner le public avec ma créativité. </p>
                    <div class="skills-bars mt-5">
                        <div class="progress-info">
                            <h6 class="progress-tittle">UI/UX Design</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">Méthodes d'analyse
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">Nouvelles technologies</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info mb-0">
                            <h6 class="progress-tittle">Responsive Web Design</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

<!-- home page about section -->
<section class="w3l-homeblock3" id="awards">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6">
                    <span class="text">Mes recompenses et archives </span>
                    <h3 class="title-big">Prix et honneurs
                        professonnels <span> J'ai atteint.</span></h3>
                    <p class="mt-4">Récompenses et projets personnels. Expérience motivée par le désir de réussir. </p>
                    <div class="reward-list mt-5">
                        <div class="reward-item">
                            <div class="reward-item-photo"><img src="assets/images/banner.png" alt="" class="img-fluid"></div>
                            <div class="reward-item-detail">
                                <span class="reward-item-title">Récompense pour un projet web</span>
                                <p class="reward-item-descr">Pour meillleur Application Web pour étudiants</p>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-item-photo"><img src="assets/images/skills.png" alt="" class="img-fluid"></div>
                            <div class="reward-item-detail">
                                <span class="reward-item-title">Projet innovant</span>
                                <p class="reward-item-descr">Pour application web </p>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-item-photo"><img src="assets/images/banner.png" alt="" class="img-fluid"></div>
                            <div class="reward-item-detail">
                                <span class="reward-item-title">Création d'un logiciel desktop de gestion</span>
                                <p class="reward-item-descr">Pour une bibliothèque</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self mt-lg-0 mt-md-5 mt-4">
                    <div class="position-relative px-lg-5 mx-lg-0 mx-md-5 image-padding">
                        <img src="assets/images/awards.png" alt="" class="radius-image img-fluid">
                        <div class="position-absolute-images">
                            <img src="assets/images/award.png" class="img-fluid pos-img" alt="" />
                            <img src="assets/images/award1.png" class="img-fluid pos-img1" alt="" />
                            <img src="assets/images/award2.png" class="img-fluid pos-img2" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

<!-- home page about section -->
<section class="w3l-clients" id="skills">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 align-self">
                    <div class="position-relative px-lg-5">
                        <img src="assets/images/clients.png" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <span class="text">Témoignages</span>
                    <h3 class="title-big">Ce que mes <span>clients pensent</span> de Moi</h3>
                    <div id="owl-demo1" class="owl-carousel owl-theme mt-4 py-2 mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/guillaume.jpeg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Guillaume EBOA</h3>
                                            <p class="indentity">Douala, Cameroun</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/profile.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Armel Tonmbiack</h3>
                                            <p class="indentity">Douala, Cameroun</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/profile.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Péres Diepton</h3>
                                            <p class="indentity">Douala, Cameroun</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

<!-- home page about section -->
<section class="w3l-homeblock3" id="clients">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6">
                    <span class="text">Myes Clients et Partenaires </span>
                    <h3 class="title-big">Clients / Partenaires et
                        <span> Collaborations.</span></h3>
                    <p class="mt-4">Au cours des deux dernières années, j'ai eu la chance de travailler avec et pour des personnes de certaines entreprises.</p>
                    <div class="reward-list mt-5">
                        <div class="reward-item">
                            <div class="reward-item-photo">5
                            </div>
                            <div class="reward-item-detail">
                                <span class="reward-item-title">Total CLients</span>
                                <p class="reward-item-descr">2 pays</p>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-item-photo">95%
                            </div>
                            <div class="reward-item-detail">
                                <span class="reward-item-title">Rétroaction sensible</span>
                                <p class="reward-item-descr">Pour la qualité de conception</p>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-item-photo">1
                            </div>
                            <div class="reward-item-detail">
                                <span class="reward-item-title">Sponsors de confiance</span>
                                <p class="reward-item-descr">Présenté par les meileurs rankers camerounais</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="col-lg-6 align-self text-center mt-lg-0 mt-md-5 mt-4">
                    <div class="images">
                        <img src="assets/images/client1.png" class="img-fluid" alt="" />
                        <img src="assets/images/client2.png" class="img-fluid" alt="" />
                        <img src="assets/images/client3.png" class="img-fluid" alt="" />
                        <img src="assets/images/client4.png" class="img-fluid" alt="" />
                        <img src="assets/images/client5.png" class="img-fluid" alt="" />
                        <img src="assets/images/client6.png" class="img-fluid" alt="" />
                        <img src="assets/images/client2.png" class="img-fluid" alt="" />
                        <img src="assets/images/client3.png" class="img-fluid" alt="" />
                        <img src="assets/images/client4.png" class="img-fluid" alt="" />
                    </div>
                </div-->
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

<!-- home page contact section -->
<?php include("includes/content-contact.php");?>
<!-- //home page contact section -->

<?php include("includes/footer.php"); ?>

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Aller en haut">
  <span class="fa fa-angle-up"></span>
</button>

<?php include("includes/scripts.php"); ?>

</body>

</html>