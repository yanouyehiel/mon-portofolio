<?php
    
  if (isset($_POST['envoyer'])){
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta keywords="logiciel, yehiel, yanou, yehiel yanou, création site internet, création logiciel, devis, portofolio, développeur web, développeur, programmeur, developer, programmer, cameroun">

    <title>Contactez-moi | Portofolio</title>

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
<div class="header-gap">

</div>


<!-- Domain Modal -->
<?php include("includes/modal.php"); ?>
<!-- //Domain modal -->

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