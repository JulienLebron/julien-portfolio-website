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
                    'HTMLPart' => "<p>$email</p><h3>Mr ou Mme $surname, <h3><p>$phone</p><p>$message</p>"
                ]
                ]
            ];
                $response = $mj->post(Resources::$Email, ['body' => $body]);
                $response->success();
                echo "Email envoyé avec succès ! <br>";
                echo '<a href="index.php">Revenir sur le site</a>';
        }
        else{
            echo "Email non valide";
        }

    } else {
        header('Location: index.php');
        die();
    }