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
    <!--========== UNICONS ==========-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Demande de contact</title>
</head>

<body>

    <main class="contact__page">
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
                <a href="index.php" class="button"><i class="uil uil-estate button__icon"></i>
                    Revenir sur le site</a>
        </div>
    </main>

</body>

</html>