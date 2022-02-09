<?php
require_once './vendor/autoload.php';
use \Mailjet\Resources;

define('API_USER', 'b102e93104bf6b392b845285d4e6fdf9');
define('API_LOGIN', '861d235070165fe6e28e1bab374e4b65');
$mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);

    if(!empty($_POST['names']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $names = htmlspecialchars($_POST['names']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => "pixovery@gmail.com",
                            'Name' => "Demande Pixovery"
                        ],
                        'To' => [
                            [
                                'Email' => "pixovery@gmail.com",
                                'Name' => "Demande Pixovery"
                            ]
                        ],
                        'Subject' => "Demande de renseignement",
                        'TextPart' => "$names, $email, $message",
                    ]
                ]
            ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "E-mail envoyé avec succès !";

        }else{
            echo "E-mail non valide";
        }
    }else{
        header("Location:index.html");
        die();
    }
    ?>