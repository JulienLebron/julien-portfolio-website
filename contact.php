<?php 
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', 'f419b4af177f78f43f9cb4a0711223d7');
    define('API_PRIVATE_KEY', 'a583b753a79ea74f9da75e09770d8f04');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


    if(!empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $surname = htmlspecialchars($_POST['surname']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
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
                    'HTMLPart' => "<h3>$surname</h3><h4>$email</h4><h4>$phone</h4><p>$message</p>"
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
    <title>Julien Lebron Portfolio</title>
    <!--========== UNICONS ==========-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!--========== BOXICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X9TP2TETV7');
</script>

<body>
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

            <img src="assets/img/about/about-normal.png" alt="" class="about__img">
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