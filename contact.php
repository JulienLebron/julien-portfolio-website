<?php 
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', 'f419b4af177f78f43f9cb4a0711223d7');
    define('API_PRIVATE_KEY', 'a583b753a79ea74f9da75e09770d8f04');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


    if(!empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['type']) && !empty($_POST['phone'])){
        $surname = htmlspecialchars($_POST['surname']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $site = htmlspecialchars($_POST['site']);
        $type = htmlspecialchars($_POST['type']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $body = [
                'Messages' => [
                [
                    'From' => [
                    'Email' => "lebron.pro.77@gmail.com",
                    'Name' => "Julien Lebron"
                    ],
                    'To' => [
                    [
                        'Email' => "lebron.pro.77@gmail.com",
                        'Name' => "Julien Lebron"
                    ]
                    ],
                    'Subject' => "Demande de renseignement",
                    'HTMLPart' => "<h3>Nom / Prénom : $surname</h3> <h4>Adresse E-mail : $email</h4><h4>Numéro de téléphone : $phone</h4><h4>Type de projet : $type</h4><h4>Site Actuel : $site</h4><h5>$message</h5>"
                ]
                ]
            ];
                $response = $mj->post(Resources::$Email, ['body' => $body]);
                $response->success();
                $success = "<div class='contact__validation-message'>✅ Votre E-mail à bien été envoyé.</div>";
        }
        else{
            $error = "<div class='contact__validation-message'>🛑 Votre E-mail est invalide.</div>";
        }
    }
    else
    {
        header('location: index.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Julien LEBRON - Page Message envoyé</title>
    <meta name="description"
        content="Je conçois et réalise des sites web du cahier des charges à la mise en ligne. Je propose également mes services de formateur pour les écoles du web. Création de sites internet ergonomiques. Voici mon portfolio où vous retrouverez tous mes projets, ainsi qu'un formulaire pour me contacter.">
    <meta name="author" content="JULIEN LEBRON">
    <meta name="google-site-verification" content="UEBXnW8aGS0Zv7rKr3nrniTLtg-8-7b25Q9GJobVvrk" />
    <meta name="author" content="Julien Lebron, julienlebron">
    <meta name="Keywords"
        content="portfolio, julienlebron, Referencement web, Julien Lebron, Developpeur web, Symfony, Développeur PHP, Mobile, Informatique, chef de projet Digital">
    <meta name="Robots" content="all">
    <meta property="og:title"
        content="Julien LEBRON développeur web et formateur | PHP | Mobile à Bruxelles. Création de sites internet responsive.">
    <meta property="og:type" content="Portfolio Julien LEBRON développeur web et formateur">
    <meta property="og:url" content="https://www.julien-lebron.com">
    <meta property="og:image" content="https://www.julien-lebron.com/favicon.ico">
    <!--========== UNICONS ==========-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!--========== BOXICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--========== FONTAWESOME ==========-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--========== SWIPER CSS ==========-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--========== MAIN CSS ==========-->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" type="image/x-icon" sizes="32x32" href="/favicon.ico">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X9TP2TETV7"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-X9TP2TETV7');
</script>

<body>
    <!--========== STYLE SWITCHER ==========-->
    <input type="radio" name="color" id="color-1">
    <input type="radio" name="color" id="color-2">
    <input type="radio" name="color" id="color-3">
    <input type="radio" name="color" id="color-4">
    <input type="radio" name="color" id="color-5">
    <input type="radio" name="color" id="color-6">
    <input type="radio" name="color" id="color-7">
    <input type="radio" name="color" id="color-8">
    <input type="radio" name="color" id="color-9">
    <input type="radio" name="color" id="color-10">
    <input type="checkbox" id="toggler">
    <input type="checkbox" id="day-night">

    <div class="style__switcher">
        <label for="toggler" class="style__switcher-toggler">
            <i class="fa-solid fa-gear fa-spin"></i>
        </label>
        <label for="day-night" class="style__switcher-theme">
            <i class="fa-solid fa-sun"></i>
            <i class="fa-solid fa-moon"></i>
        </label>

        <h3 class="style__switcher-title">Theme Colors</h3>
        <div class="style__switcher-colors">
            <label for="color-1" class="color-1 color"></label>
            <label for="color-2" class="color-2 color"></label>
            <label for="color-3" class="color-3 color"></label>
            <label for="color-4" class="color-4 color"></label>
            <label for="color-5" class="color-5 color"></label>
            <label for="color-6" class="color-6 color"></label>
            <label for="color-7" class="color-7 color"></label>
            <label for="color-8" class="color-8 color"></label>
            <label for="color-9" class="color-9 color"></label>
            <label for="color-10" class="color-10 color"></label>
        </div>
    </div>
    <!--========== SIDEBAR ==========-->
    <div class="nav__toggle" id="nav-toggle">
        <i class="uil uil-bars"></i>
    </div>
    <aside class="sidebar" id="sidebar">
        <nav class="nav">
            <div class="nav__logo">
                <a href="index.html" class="nav__logo-text">J</a>
            </div>
            <div class="nav__menu">
                <div class="menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php#home" class="nav__link active-link">Accueil</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#about" class="nav__link">À Propos</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#skills" class="nav__link">Skills</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#work" class="nav__link">Portfolio</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#services" class="nav__link">Services</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#prices" class="nav__link">Tarifs</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#contact" class="nav__link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btn__share">
                <i class="uil uil-share-alt social__share"></i>
            </div>

            <div class="nav__close" id="nav-close">
                <i class="uil uil-times"></i>
            </div>
        </nav>
    </aside>
    <!--========== MAIN ==========-->
    <main class="main contact__page">
        <div class="center">
            <i class="fa-regular fa-envelope fa-bounce letter__contact-icon"></i>
            <?php
            if(!empty($success))
            {
                echo $success;
            }
            if(!empty($error))
            {
                echo $error;
            }
            ?>
        </div>
    </main>
    <!--========== SCROLL UP ==========-->


    <!--========== MIXITUP FILTER ==========-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--========== SWIPER JS ==========-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>

</html>