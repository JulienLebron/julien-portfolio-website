<?php 
    if(isset($_GET['portfolio']))
    {
        setcookie('portfolio', 'true', time() + 365*24*3600);
        header('Location:./');
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Julien LEBRON - Développeur Web & Formateur Full Stack</title>
    <meta name="description"
        content="Je conçois et réalise des sites web du cahier des charges à la mise en ligne. Je propose également mes services de formateur pour les écoles du web. Création de sites internet ergonomiques. Voici mon portfolio où vous retrouverez tous mes projets, ainsi qu'un formulaire pour me contacter.">
    <meta name="author" content="JULIEN LEBRON">
    <meta name="google-site-verification" content="UEBXnW8aGS0Zv7rKr3nrniTLtg-8-7b25Q9GJobVvrk" />
    <meta name="author" content="Julien Lebron, julienlebron">
    <meta name="Keywords"
        content="portfolio, julienlebron, Referencement web, Julien Lebron, Developpeur web, Symfony, Développeur PHP, Mobile, Informatique, chef de projet Digital">
    <meta name="Robots" content="all">
    <meta property="og:title"
        content="Gael MANZOLA étudiant et développeur web | Java | Mobile à Paris. Création de sites internet responsive.">
    <meta property="og:type" content="Portfolio Julien LEBRON développeur web et formateur">
    <meta property="og:url" content="https://www.julien-lebron.com">
    <meta property="og:image" content="https://www.julien-lebron.com/favicon.ico">
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

    function gtag() {
        dataLayer.push(arguments);
    }
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
                            <a href="#home" class="nav__link active-link">Accueil</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">À Propos</a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">Skills</a>
                        </li>
                        <li class="nav__item">
                            <a href="#work" class="nav__link">Portfolio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">Services</a>
                        </li>
                        <li class="nav__item">
                            <a href="#prices" class="nav__link">Tarifs</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
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
    <main class="main">
        <!--===== Home =====-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__social">
                    <span class="home__social-follow">Me Suivre</span>
                    <div class="home__social-links">
                        <a href="https://github.com/JulienLebron" target="_blank" class="home__social-link">
                            <i class="uil uil-github"></i>
                        </a>
                        <a href="https://www.instagram.com/julien_lebron/" target="_blank" class="home__social-link">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/julien-lebron-24b154162/" target="_blank"
                            class="home__social-link">
                            <i class="uil uil-linkedin"></i>
                        </a>
                    </div>
                </div>

                <img src="assets/img/about/about-normal.png" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">Julien Lebron</h1>
                    <h3 class="home__subtitle">Développeur Full Stack et Formateur</h3>
                    <p class="home__description">Expérimenté dans la conception et le développement de sites Web,
                        produisant un travail de qualité</p>
                    <a href="#about" class="button"><i class="uil uil-user button__icon"></i>
                        À Propos De Moi</a>
                </div>

                <div class="my__info">
                    <div class="info__item">
                        <i class="uil uil-linkedin info__icon"></i>

                        <div>
                            <h3 class="info__title">LinkedIn</h3>
                            <span class="info__subtitle">Julien Lebron</span>
                        </div>
                    </div>

                    <div class="info__item">
                        <i class="uil uil-whatsapp info__icon"></i>

                        <div>
                            <h3 class="info__title">Whatsapp</h3>
                            <span class="info__subtitle">(+33) 6.66.84.29.26</span>
                        </div>
                    </div>

                    <div class="info__item">
                        <i class="uil uil-envelope-edit info__icon"></i>

                        <div>
                            <h3 class="info__title">E-mail</h3>
                            <span class="info__subtitle">lebron.pro.77@gmail.com</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--===== About =====-->
        <section class="about section" id="about">
            <h2 data-heading="Introduction" class="section__title">À Propos De Moi</h2>

            <div class="about__container container grid">
                <img src="assets/img/about/about-normal.png" alt="" class="about__img">

                <div class="about__data">
                    <h3 class="about__heading">Bonjour, Je suis Julien, Basé à Bruxelles</h3>
                    <p class="about__description">Développeur Web avec des connaissances approfondies et des années
                        d'expérience, travaillant dans les technologies du web et la formation au développement web,
                        délivrant un travail de qualité.</p>
                    <div class="about__info grid">
                        <div class="about__box">
                            <i class="uil uil-award about__icon"></i>
                            <h3 class="about__title">Experience</h3>
                            <span class="about__subtitle">3 + Années</span>
                        </div>
                        <div class="about__box">
                            <i class="uil uil-suitcase-alt about__icon"></i>
                            <h3 class="about__title">Compléter</h3>
                            <span class="about__subtitle">15 + Projets</span>
                        </div>
                        <div class="about__box">
                            <i class="uil uil-headphones about__icon"></i>
                            <h3 class="about__title">Support</h3>
                            <span class="about__subtitle">En Ligne 24/7</span>
                        </div>
                    </div>
                    <a href="#contact" class="button"><i class="uil uil-navigator button__icon"></i>
                        Contactez-Moi
                    </a>
                </div>
            </div>
        </section>

        <!--===== Qualification =====-->
        <section class="qualification section">
            <h2 data-heading="Mon Parcours" class="section__title">Qualification</h2>

            <div class="qualification__container container grid">
                <div class="education">
                    <h3 class="qualification__title">
                        <i class="uil uil-graduation-cap"></i> Education
                    </h3>

                    <div class="timeline">
                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">Doranco (Bagnolet, France)</h3>
                            <p class="timeline__text">Développeur web et web mobile</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                                2020 - 2021
                            </span>
                        </div>

                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">IFCV (Levallois-Perret , France)</h3>
                            <p class="timeline__text">BTS Banque</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                                2009-2011
                            </span>
                        </div>

                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">Institution St Marie (Meaux, France)</h3>
                            <p class="timeline__text">Bac Accueil et Service</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                                2007 - 2008
                            </span>
                        </div>

                    </div>
                </div>

                <div class="experience">
                    <h3 class="qualification__title">
                        <i class="uil uil-suitcase"></i> Experience
                    </h3>

                    <div class="timeline">
                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">Freelancer (Bruxelles, Belgique)</h3>
                            <p class="timeline__text">Dévelppeur Full Stack</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                                2021 - Aujourd'hui
                            </span>
                        </div>

                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">HSBC (Nanterre, France)</h3>
                            <p class="timeline__text">Conseiller Client</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                                2014 - 2018
                            </span>
                        </div>

                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">Société Générale (Paris, France)</h3>
                            <p class="timeline__text">Conseiller Client</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                                2009 - 2011
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--===== Skills =====-->
        <section class="section skills section" id="skills">
            <h2 data-heading="Mes Technologies" class="section__title">Mon Expérience</h2>

            <div class="skills__container container grid">
                <div class="skills__tabs">
                    <div class="skills__header skills__active" data-target="#frontend">
                        <i class="uil uil-brackets-curly skills__icon"></i>

                        <div>
                            <h3 class="skills__title">Développeur Frontend</h3>
                            <span class="skills__subtitle">Plus de 3 ans</span>
                        </div>

                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__header" data-target="#design">
                        <i class="uil uil-swatchbook skills__icon"></i>

                        <div>
                            <h3 class="skills__title">Développeur Backend</h3>
                            <span class="skills__subtitle">Plus de 3 ans</span>
                        </div>

                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__header" data-target="#backend">
                        <i class="uil uil-server-network skills__icon"></i>

                        <div>
                            <h3 class="skills__title">Formateur Full Stack</h3>
                            <span class="skills__subtitle">Plus de 2 ans</span>
                        </div>

                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                </div>

                <div class="skills__content">
                    <div class="skills__group skills__active" data-content id="frontend">
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 90%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">80%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 80%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">60%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 60%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Bootstrap</h3>
                                    <span class="skills__number">80%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 80%;"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="skills__group" data-content id="design">
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">MySQL</h3>
                                    <span class="skills__number">90%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 90%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">80%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 80%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Symfony</h3>
                                    <span class="skills__number">70%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 70%;"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="skills__group" data-content id="backend">
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML / CSS</h3>
                                    <span class="skills__number">90%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 90%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Bootstrap</h3>
                                    <span class="skills__number">100%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 100%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">70%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 70%;"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">90%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 90%;"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">MySQL</h3>
                                    <span class="skills__number">80%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 80%;"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Symfony</h3>
                                    <span class="skills__number">90%</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: 90%;"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== Work =====-->
        <section class="work section" id="work">
            <h2 data-heading="My Portfolio" class="section__title">Recent Works</h2>

            <div class="work__filters">
                <span class="work__item active-work" data-filter="all">All</span>
                <span class="work__item" data-filter=".web">HTML - CSS</span>
                <span class="work__item" data-filter=".git">Git & Github</span>
                <span class="work__item" data-filter=".app">PHP</span>
                <span class="work__item" data-filter=".design">Symfony</span>
                <span class="work__item" data-filter=".nft">NFT</span>
            </div>

            <div class="work__container container grid">
                <div class="work__card mix design">
                    <img src="assets/img/works/hotel-k.png" alt="" class="work__img">
                    <h3 class="work__title">Hôtel K</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Front & Back</h3>
                        <p class="details__description">L'Hôtel K est un établissement 5 étoiles sur Paris. Projet
                            réalisé dans le cadre de mon cours Symfony.</p>
                        <ul class="details__info">
                            <li>Crée le - <span>25 avril 2023</span></li>
                            <li>Technologies - <span>Symfony</span></li>
                            <li>Role - <span>Full Stack</span></li>
                            <li>Voir - <span><a href="https://khotel.julien-lebron.com"
                                        target="_blank">www.khotel.julien-lebron.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work__card mix design">
                    <img src="assets/img/works/myshop.png" alt="" class="work__img">
                    <h3 class="work__title">MyShop</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Front & Back</h3>
                        <p class="details__description">MyShop est un boutique en ligne qui propose la vente de
                            sneakers. Projet réalisé dans le cadre de mon cours Symfony.</p>
                        <ul class="details__info">
                            <li>Crée le - <span>5 mars 2023</span></li>
                            <li>Technologies - <span>Symfony</span></li>
                            <li>Role - <span>Full Stack</span></li>
                            <!-- <li>Voir - <span><a href="#">www.domain.com</a></span></li> -->
                        </ul>
                    </div>
                </div>

                <div class="work__card mix design">
                    <img src="assets/img/works/bestcar.png" alt="" class="work__img">
                    <h3 class="work__title">Best Cars</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Front & Back</h3>
                        <p class="details__description">Best Cars est une société proposant la location de véhicules à
                            ses internautes. Projet réalisé dans le cadre de mon cours Symfony.</p>
                        <ul class="details__info">
                            <li>Crée le - <span>10 janv 2023</span></li>
                            <li>Technologies - <span>Symfony</span></li>
                            <li>Role - <span>Full Stack</span></li>
                            <!-- <li>Voir - <span><a href="#">www.domain.com</a></span></li> -->
                        </ul>
                    </div>
                </div>

                <div class="work__card mix app">
                    <img src="assets/img/works/gameone.png" alt="" class="work__img">
                    <h3 class="work__title">Game One</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Front & Back</h3>
                        <p class="details__description">Game One est un site d'actualité PC et Jeux Vidéo. Projet
                            réalisé dans le cadre de mon cours PHP.</p>
                        <ul class="details__info">
                            <li>Crée le - <span>20 décembre 2022</span></li>
                            <li>Technologies - <span>PHP</span></li>
                            <li>Role - <span>Full Stack</span></li>
                            <!-- <li>Voir - <span><a href="#">www.domain.com</a></span></li> -->
                        </ul>
                    </div>
                </div>

                <div class="work__card mix web">
                    <img src="assets/img/works/TheFiasco.png" alt="" class="work__img">
                    <h3 class="work__title">The Fiasco</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Frontend</h3>
                        <p class="details__description">Site Vitrine du restaurant The Fiasco. Projet réalisé dans le
                            cadre de mon cours HTML - CSS</p>
                        <ul class="details__info">
                            <li>Created - <span>20 juin 2021</span></li>
                            <li>Technologies - <span>HTML - CSS</span></li>
                            <li>Role - <span>Frontend</span></li>
                            <li>Voir - <span><a href="https://thefiasco.julien-lebron.com"
                                        target="_blank">www.thefiasco.julien-lebron.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work__card mix web">
                    <img src="assets/img/works/JaneDoe.png" alt="" class="work__img">
                    <h3 class="work__title">Jane Doe Portfolio</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Frontend</h3>
                        <p class="details__description">Portfolio de Jane Doe. Projet réalisé dans le cadre de mon cours
                            HTML - CSS</p>
                        <ul class="details__info">
                            <li>Crée le - <span>10 avril 2021</span></li>
                            <li>Technologies - <span>HTML - CSS</span></li>
                            <li>Role - <span>Frontend</span></li>
                            <li>Voir - <span><a href="https://janedoe.julien-lebron.com"
                                        target="_blank">www.janedoe.julien-lebron.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work__card mix git">
                    <img src="assets/img/works/git.png" alt="" class="work__img">
                    <h3 class="work__title">Git & Github</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Frontend</h3>
                        <p class="details__description">Cours et exercice sur Git & Github</p>
                        <ul class="details__info">
                            <li>Crée le - <span>30 mai 2023</span></li>
                            <li>Technologies - <span>HTML - CSS - Bootstrap</span></li>
                            <li>Role - <span>Frontend</span></li>
                            <li>Voir - <span><a href="https://git.julien-lebron.com"
                                        target="_blank">www.git.julien-lebron.com</a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="work__card mix nft">
                    <img src="assets/img/works/pug.jpg" alt="" class="work__img">
                    <h3 class="work__title">Pug Factory</h3>
                    <span class="work__button">Demo
                        <i class="uil uil-arrow-right work__button-icon"></i>
                    </span>
                    <div class="portfolio__item-details">
                        <h3 class="details__title">Développement Backend</h3>
                        <p class="details__description">Création d'une collection de NFT hébergée sur OpenSea. Le
                            générateur utilise la technologie JavaScript. Le Design à été réalisé par Justine Waller.
                        </p>
                        <ul class="details__info">
                            <li>Crée le - <span>22 avril 2022</span></li>
                            <li>Technologies - <span>JavaScript</span></li>
                            <li>Role - <span>Backend</span></li>
                            <li>Voir - <span><a href="https://opensea.io/collection/pug-factory"
                                        target="_blank">www.opensea.io/collection/pug-factory</a></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- Portfolio Popup -->
        <div class="portfolio__popup">
            <div class="portfolio__popup-inner">
                <div class="portfolio__popup-content grid">
                    <span class="portfolio__popup-close"><i class="uil uil-times"></i></span>
                    <div class="pp__thumbnail">
                        <img src="assets/img/works/blog.png" alt="" class="portfolio__popup-img">
                    </div>
                    <div class="portfolio__popup-info">
                        <div class="portfolio__popup-subtitle">Featured - <span>Design</span></div>
                        <div class="portfolio__popup-body">
                            <h3 class="details__title">App for technology & services</h3>
                            <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aliquid, rerum dolor porro obcaecati cum sequi doloremque architecto.</p>
                            <ul class="details__info">
                                <li>Created - <span>4 dec 2020</span></li>
                                <li>Technologies - <span>html css</span></li>
                                <li>Role - <span>frontend</span></li>
                                <li>View - <span><a href="#">www.domain.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===== Services =====-->
        <section class="services section" id="services">
            <h2 data-heading="Services" class="section__title">Des prestations adaptées à vos besoins</h2>

            <div class="services__container container grid">
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Développement <br> Web</h3>
                    </div>

                    <span class="services__button">
                        View More <i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <h3 class="services__modal-title">Développement Web</h3>
                            <p class="services__modal-description">Expérience de plus de 3 ans dans la prestation de
                                services de qualité supérieure aux clients et aux entreprises.</p>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Site vitrine, corporate, évènementiel,
                                        e-commerce, intranet, application mobile.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Des intégrations HTML / CSS
                                        respectueuses des standards du Web.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Des outils adaptés à votre coeur de métier,
                                        applications & solutions personnalisées.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Affichage sémantique des informations,
                                        des pages propres pour un référencement optimal.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">Conception Graphique</h3>
                    </div>

                    <span class="services__button">
                        View More <i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <h3 class="services__modal-title">Conception Graphique & WebDesign</h3>
                            <p class="services__modal-description">Expérience de plus de 3 ans dans la prestation de
                                services de qualité supérieure aux clients et aux entreprises.</p>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Logos, templates Web, plaquettes publicitaires,
                                        cartes de visite, newsletters...</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Des animations de contenu non intrusives
                                        pour embellir votre projet.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Outils spécifiques au bon fonctionnement
                                        de votre entreprise.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Compatible tous supports, tablette & application
                                        mobile.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__content">
                    <div>
                        <i class="uil uil-edit services__icon"></i>
                        <h3 class="services__title">Formation <br> Développeur</h3>
                    </div>

                    <span class="services__button">
                        View More <i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <h3 class="services__modal-title">Formateur en Développement Web</h3>
                            <p class="services__modal-description">Expérience de plus de 3 ans dans la prestation de
                                formations de qualité supérieure aux étudiants.</p>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">HTML / CSS</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Bootstrap</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">JavaScript</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">MySQL</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">PHP</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Symfony</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Wordpress</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--===== Testimonials =====-->
        <section class="testimonials section">
            <h2 data-heading="Mes retours" class="section__title">Témoignages</h2>

            <div class="testimonials__container container swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial__description">Julien était mon formateur PHP chez Doranco ,il a vraiment
                            des solides compétences en plusieurs langages, il a une grande expérience et capacité à nous
                            expliquer les informations.... il était patient et à l'écoute pour répondre à notre
                            questions.
                            merci Julien pour m'aider à réaliser mon première projet en php.</p>
                        <h3 class="testimonial__date">7 dévrier 2023</h3>
                        <div class="testimonial__profile">
                            <img src="assets/img/testimonials/caroline.jpg" alt="" class="testimonial__profile-img">

                            <div class="testimonial__profile-data">
                                <span class="testimonial__profile-name">Caroline Al Salloum</span>
                                <span class="testimonial__profile-detail">Développeuse d'application multimédia</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial__description">Développeur très compétent. Je l'ai constaté notamment en
                            assistant à des cours PHP qu'il a donné. Julien a également des soft skills intéressants
                            pour le travail en équipe tels que l'écoute active, sa faculté d'adaptation, son dynamisme
                            et sa sociabilité. Je recommande Julien lebron.</p>
                        <h3 class="testimonial__date">8 janvier 2023</h3>
                        <div class="testimonial__profile">
                            <img src="assets/img/testimonials/pierre-alexandre.jpg" alt=""
                                class="testimonial__profile-img">

                            <div class="testimonial__profile-data">
                                <span class="testimonial__profile-name">Pierre-Alexandre Detollenaere</span>
                                <span class="testimonial__profile-detail">Développeur web Junior</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial__description">Julien est l'un de mes formateurs préférés. Il a toutes les
                            qualités d'un bon formateur, il est calme, patient, organisé, prend le temps d'expliquer,
                            très serviable....</p>
                        <h3 class="testimonial__date">March 27. 2020</h3>
                        <div class="testimonial__profile">
                            <img src="assets/img/testimonials/imane.jpg" alt="" class="testimonial__profile-img">

                            <div class="testimonial__profile-data">
                                <span class="testimonial__profile-name">Imane El Kaddouri</span>
                                <span class="testimonial__profile-detail">Développeuse Web Full Stack</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial__description">Je recommande Julien, il enseigne très bien, merci à lui
                            pour ses explications et son temps, il est toujours à l'écoute et prêt à aider, je le
                            remercie.</p>
                        <h3 class="testimonial__date">7 février 2023</h3>
                        <div class="testimonial__profile">
                            <img src="assets/img/testimonials/sidi.jpg" alt="" class="testimonial__profile-img">

                            <div class="testimonial__profile-data">
                                <span class="testimonial__profile-name">Sidi Daoudi</span>
                                <span class="testimonial__profile-detail">Développeur mobile en stage</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial__description">J'ai eu la chance d'avoir Julien comme formateur en 2022 sur
                            PHP lors mes cours pour devenir Développeur d'applications multimédias. Julien est un
                            formateur dédié, pédagogue et talentueux.
                            Son approche de l'enseignement des langages informatique et son aisance lors de
                            l'enseignement reflète sa bonne connaissance du domaine. Vivement recommandé !</p>
                        <h3 class="testimonial__date">6 avril 2022</h3>
                        <div class="testimonial__profile">
                            <img src="assets/img/testimonials/corentin.jpg" alt="" class="testimonial__profile-img">

                            <div class="testimonial__profile-data">
                                <span class="testimonial__profile-name">Corentin Esteve</span>
                                <span class="testimonial__profile-detail">Développeur Front-End, UX/UI Designer</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--===== Prices =====-->
        <section class="prices section" id="prices">
            <h2 data-heading="Tarifs" class="section__title">Un tarif adapté à un site internet de qualité !</h2>
            <div class="prices__container container grid">
                <div class="services__content prices__content">
                    <div>
                        <i class="uil uil-wordpress-simple services__icon"></i>
                        <h3 class="services__title">Site Vitrine <br> Standard</h3>
                        <p class="prices__description"><b>Développé sous WORDPRESS</b><br>(Outil de gestion de contenu)
                        </p>
                        <p class="prices__price">A partir de <b>999€</b></p>
                    </div>

                    <span class="services__button">
                        Voir plus <i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content prices__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Charte graphique à partir d'une maquette pré-définie
                                    </p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Sélection d'une palette de couleur</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Domaine + hébergement
                                        + e-mail pendant 12 mois</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Interface administrateur
                                        STANDARD</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Site responsive <br>
                                        (adapté tous supports)</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Mise en place du contenu <br>
                                        (textes & images)</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Formulaire de contact</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Liens de partage sur les
                                        réseaux sociaux</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Optimisation
                                        du référencement</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Statistiques de visite</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Mise en ligne du site</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Formation utilisation du site</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">Site Vitrine Personnalisé</h3>
                        <p class="prices__description"><b>Développé SUR-MESURE</b> <br>(Codage à la main)</p>
                        <p class="prices__price">A partir de <b>1500€</b></p>
                    </div>

                    <span class="services__button">
                        Voir plus <i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Création charte graphique personnalisée</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Proposition de logo</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Domaine + hébergement
                                        + e-mail pendant 12 mois</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Interface administrateur
                                        SUR-MESURE</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Site responsive
                                        (adapté tous supports)</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Mise en place du contenu
                                        (textes & images)</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Formulaire de contact & Map</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Liens de partage sur les
                                        réseaux sociaux</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Optimisation du référencement
                                        et des performances</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Statistiques de visite</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Mise en ligne du site</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Formation utilisation du site</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__content">
                    <div>
                        <i class="uil uil-shopping-cart-alt services__icon"></i>
                        <h3 class="services__title">Plateforme E-commerce</h3>
                        <p class="prices__description"><b>PRESTASHOP</b> ou <b>WORDPRESS</b> <br>(Outil de gestion de
                            contenu)</p>
                        <p class="prices__price">A partir de <b>2500€</b> </p>
                    </div>

                    <span class="services__button">
                        View More <i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Création charte graphique personnalisée</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Proposition de logo</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Domaine + hébergement
                                        + e-mail pendant 12 mois</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Installation & configuration des plugins choisis</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Site responsive
                                        (adapté tous supports)</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Mise en place du contenu
                                        (textes & images)</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Formulaire de contact & Map</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Liens de partage sur les
                                        réseaux sociaux</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Optimisation du référencement
                                        et des performances</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Mise en ligne du site</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Formation utilisation du site</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__content">
                    <div>
                        <i class="uil uil-graduation-cap services__icon"></i>
                        <h3 class="services__title">Formation Développeur</h3>
                        <p class="prices__description"><b>Apprendre à coder</b> <br>(Mission de formation)</p>
                        <p class="prices__price">A partir de <b>250€</b>/Jour </p>
                    </div>

                    <span class="services__button">
                        View More <i class="uil uil-arrow-right services__button-icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">HTML / CSS</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Bootstrap</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">JavaScript</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">MySQL</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">PHP</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Symfony</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p class="services__modal-info">Wordpress</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== Contact =====-->
        <section class="contact section" id="contact">
            <h2 data-heading="Contactez-moi" class="section__title">Une idéé ? Un projet ? N'hésitez pas à demander un
                devis ! [Gratuit]</h2>

            <div class="contact__container container grid">
                <div class="contact__content">
                    <div class="contact__info">
                        <div class="contact__card">
                            <i class="uil uil-envelope-edit contact__card-icon"></i>
                            <h3 class="contact__card-title">Email</h3>
                            <span class="contact__card-data">lebron.pro.77@gmail.com</span>
                            <span class="contact__button">
                                Contactez-moi <i class="uil uil-arrow-right contact__button-icon"></i>
                            </span>
                        </div>
                        <div class="contact__card">
                            <i class="uil uil-whatsapp contact__card-icon"></i>
                            <h3 class="contact__card-title">Whatsapp</h3>
                            <span class="contact__card-data">(+33) 6.66.84.29.26</span>
                            <span class="contact__button">
                                Contactez-moi <i class="uil uil-arrow-right contact__button-icon"></i>
                            </span>
                        </div>
                        <div class="contact__card">
                            <i class="uil uil-linkedin contact__card-icon"></i>
                            <h3 class="contact__card-title">LinkedIn</h3>
                            <span class="contact__card-data">Julien Lebron</span>
                            <span class="contact__button">
                                Contactez-moi <i class="uil uil-arrow-right contact__button-icon"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="contact__content">
                    <form action="contact.php" class="contact__form" method="POST">
                        <div class="input__container">
                            <input type="text" class="input" name="surname" id="surname">
                            <label for="surname">Nom / Prénom</label>
                            <span>Nom / Prénom</span>
                        </div>
                        <div class="input__container">
                            <input type="email" class="input" name="email" id="email" autocomplete="off">
                            <label for="email">E-mail</label>
                            <span>E-mail</span>
                        </div>
                        <div class="input__container">
                            <input type="tel" class="input" name="phone" id="phone" autocomplete="off">
                            <label for="phone">Téléphone</label>
                            <span>Télephone</span>
                        </div>
                        <div class="input__container textarea">
                            <textarea name="message" id="message" class="input"></textarea>
                            <label for="message">Message</label>
                            <span>Message</span>
                        </div>
                        <button type="submit" target="_blank" class="button"><i
                                class="uil uil-navigator button__icon"></i>
                            Envoyer
                        </button>
                    </form>
                </div>

            </div>
        </section>



        </div>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h2 class="footer__title">Julien Lebron</h2>
                        <span class="footer__subtitle">Développeur Full Stack et Formateur</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#services" class="footer__link">Services</a>
                        </li>
                        <li>
                            <a href="#work" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="#home" class="footer__social">
                            <i class="uil uil-estate"></i>
                        </a>
                        <a href="https://github.com/JulienLebron" target="_blank" class="footer__social">
                            <i class="uil uil-github"></i>
                        </a>
                        <a href="https://www.instagram.com/julien_lebron/" target="_blank" class="footer__social">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/julien-lebron-24b154162/" target="_blank"
                            class="footer__social">
                            <i class="uil uil-linkedin"></i>
                        </a>
                    </div>
                </div>

                <p class="footer__copy">&#169; Julien Lebron. Tous Droits Réservés</p>
            </div>
        </footer>
    </main>

    <!--===== COOKIE =====-->
    <?php
        if(!isset($_COOKIE['portfolio']))
        {
    ?>
    <div class="open__cookie" id="cookieBar">
        <div class="cookie__text">
            <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies me permettant de
                réaliser des statistiques de visites.
                <a rel="nofollow" href="mention.php" class="cookie__info">En savoir plus</a>
            </p>
        </div>
        <div class="cookie__button">
            <a href="?portfolio" class="button">Accepter</a>
        </div>
    </div>
    <?php
        }
    ?>

    <!--========== SCROLL UP ==========-->


    <!--========== MIXITUP FILTER ==========-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--========== SWIPER JS ==========-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>

</html>