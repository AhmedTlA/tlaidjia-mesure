<html lang="en">
<head>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/7896a1d885.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tlaidjia-Mesure</title>
</head>
<body id="body">

    <div id="loader"></div>

    <div id="nv">
        <div id="top-nav">
        <div id="links">
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div id="like-btn">
            <a href="">
            <i class="fa-solid fa-thumbs-up"></i>
            <p>Like</p>
        </a>
        </div>
    </div>
    </div>
    <div id="fol"></div>
    <div id="nav-bar">
        <div id="enter-nav">
        <div id='logo'>
            <a href="#"><img src="images/favicon.ico" alt="Tlaidjia-Mesure"></a>
            <p>Tlaidjia-Mesure company</p>
        </div>
        <div id="list">
            <ul>
                <li><a href="index.html">BIENVENUE</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="Stock.html">Stock matérielles G E</a></li>
                <li><a href="#" id="verifier">Vérifier notre produit</a></li>
            </ul>
        </div>
    </div>
    </div>

    <div id="nav-bar2">
        <div id="enter-nav2">
        <div id='logo2'>
            <a href="#"><img src="images/favicon.ico" alt="Tlaidjia-Mesure"></a>
            <p>Tlaidjia-Mesure company</p>
        </div>
        <div id="list2">
            <ul>
                <li><a href="index.html">BIENVENUE</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="Stock.html">Stock matérielles G E</a></li>
                <li id="verifier">Vérifier notre produit</li>
            </ul>
        </div>
    </div>
    </div>

    <div id="p">
        <div id="produit">
        <ul>
            <a href=""><li>Débit pression et température</li></a>
            <a href=""><li>Débit-pression-niveau</li></a>
            <a href=""><li>Appareillages de mesure sur commande</li></a>
            <a href=""><li>Accéléromètres</li></a>
        </ul>
    </div>
    </div>
    <div id="evrything" style="width: 100%;background: aliceblue;
padding: 70px;">




<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;





require_once './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';
require './PHPMailer-master/src/Exception.php';








if (isset($_POST['send'])) {

    $name =$_POST['name'];
    $Email =$_POST['E-mail'];
    $Message =$_POST['Message'];
    $Titre =$_POST['Titre'];
    $Personelcite =$_POST['Personel-cite'];

    //$jsonString = file_get_contents('email.json');

    //$data = json_decode($jsonString, true);

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // Set the SMTP server details
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    //$mail->addAttachment($_FILES['image']['tmp_name'], $_FILES['image']['name']);
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'ahmedtlaidjia123@gmail.com';
    $mail->Password = 'qqjrqadkbbqtxbmy';
    $mail->Subject = "Message from your web";
    $mail->isHTML(true);
    $mail->Body = $Message;
    // Set the email details
    $mail->setFrom('ahmedtlaidjia123@gmail.com', 'Ahmed');
   //foreach ($data['people'] as $person) {
    $mail->addAddress(/*$person['E-mail']*/ 'ahmedtlaidjia123@gmail.com','ahmed');
    // Send the email

    // }

    // if (isset($_FILES['image'])) {
    //     $image_data = file_get_contents($_FILES['image']['tmp_name']);
    //     $mail->addStringAttachment(
    //         $image_data,
    //         $_FILES['image']['name']
    //     );
    // }?>





<section  id="sec-form">
<?php
    if ($mail->send()) {
        echo '<h1 style="font-family: cursive;margin-top : 150px;padding: 5px 30px;
        background: #4190f8;">Email sent successfully!</h1>';
    } 
}
?>
            <form  id="form" action="sendMail.php"
            enctype="multipart/form-data" method="post">
                <label for="Nom et Prenom">Nom et Prenom : <i class="fa-solid fa-user"></i></label>
                <input type="text" placeholder="Entrer votre non et prenom ici ..." id="Nom et Prenom" name="name" required>
            
                <label for="Personel-cite">Personel-cite :</label>
                <input type="text" placeholder="Entrer votre cite ici ..." id="Personel-cite" name="Personel-cite" required>
            
                <label for="E-mail">Votre E-mail : <i class="fa-solid fa-envelope"></i></label>
                <input type="email" placeholder="Entrer votre E-mail ici ..." id="E-mail" name="E-mail" required>
            
                <label for="Titre">Titre :</label>
                <input type="text" placeholder="Entrer Titre ici ..." id="Titre" name="Titre" required>
            
                <label for="Message">Message : <i class="fa-solid fa-comment"></i></label>
                <input type="text" name="Message" id="Message" placeholder="Entrer message ici ..." required>

                <button id="btn" name="send">Send</button><label id="i" for="btn"><i class="fa-solid far fa-paper-plane"></i></label>
            </form>
            </section>
    </div>
<div id="bet"></div>
<footer>
    <div id="about">
    <div id="first-foot-text">
        <p>Email: <span> tlaidjia@gmail.com / atlaidjia@yahoo.fr / tlaidjia@yahoo.fr / tlaidjiaa@yahoo.fr / akadertlaidjia@gmail.com</span></p>
        
        <p>Representant :<span>Monsieur TLAIDJIA Abdelkader </span></p>
        <hr>
        <p>Siège :<span>RUE DJOUDI HAMOU N°06 coopératif maabouda ELINFIRAJ classe 195 groupe propriété N°159    Sétif 19000 Spécialité appareillages de mesure électronique et électricité pression température débit niveau vibration analyse de combustion, analyse d'humidité, détection de gaz et feu ,….. </span></p>
        <hr>
        <p>Mon Emplacement sur maps:<br><a target="_blank" href="https://goo.gl/maps/SqP9BTGNXCyizpbd7">https://goo.gl/maps/SqP9BTGNXCyizpbd7</a></p>
        <hr>
        <p>TEL:<span>|| + 213 (0)771 744597 || +213 (0) 662867197 ||<br> <span style="margin-left: 115px;">|| +213 (0)558 922 346 ||</span> </span></p>
        <hr>
        <p>Fax :<span>+ 213 (0 ) 44750877</span></p>
    </div>
    <div id="second-foot-text">
        <p>skype :<span>tlaidjia</span></p>
        <hr>
        <p>CONDITION GENERALE DE VENTE : <br> <span>BON DE COMMANDE . <br> -50% : à la commande par virement au compte.</span></p>
        <hr>
        <p>N°  CCP : <span>17272  41  CLE 74  au Nom Tlaidjia Abdelkader</span></p>
        <hr>
        <p>N° CCP  :<span>RIP:  007  99999   0001727241 29</span></p>
        <hr>
        <p>BDL  compte droit étrangé: <span>N°:   005  00374  4585318460 22  </span></p>
        <hr>
        <p>BNA compte  dinard algerien :<span>N° : 001  00704  0200019915 17</span></p>
        <hr>
        <p>Euro page web :<br><a  target="_blank" href="https://www.europages.fr/TLAIDJIAMESURE/DZA000026-00101.html">https://www.europages.fr/TLAIDJIAMESURE/DZA000026-00101.html</a></p>
        <hr>
        <p>Euro pageVmobil :<br><a target="_blank" href="https://m.europages.fr/TLAIDJIAMESURE/DZA000026-00101.html">https://m.europages.fr/TLAIDJIAMESURE/DZA000026-00101.html</a></p>
    </div>
</div>
</footer>
<div id="nv">
    <div id="top-nav">
    <div id="links">
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <div id="like-btn">
        <a href="">
        <i class="fa-solid fa-thumbs-up"></i>
        <p>Like</p>
    </a>
    </div>
</div>
</div>
</div>
    <script src="script.js"></script>
</body>
</html>



