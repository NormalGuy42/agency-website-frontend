<?php
    include('config/connection.php');
    // $stmt = $db->prepare("SELECT `textContent ` FROM `text` WHERE `page`='about.php'");
    // $stmt->execute();
    // $text = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody Events Africa A propos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <?php include('templates/header.php')?>
        <section class="banner_img">
            <div class="rolling_text">
                <p class="scrollingAnimation"> <b class="values">Nos valeurs: </b><b>Passion</b> pour l’exellence<b>Respect</b> de l’autre et des engagements pris<b>Innovation</b> dans nos reflexions et creation<b>Ecouter</b> pour mieux comprendre et repondre<b>Résilience</b> devant l'adversité<b>Engagement</b> dans tout ce que nous entreprenons <b class="values">Nos valeurs:</b><b>Passion</b> pour l’exellence<b>Respect</b> de l’autre et des engagements pris<b>Innovation</b> dans nos reflexions et creation<b>Ecouter</b> pour mieux comprendre et repondre<b>Résilience</b> devant l'adversité<b>Engagement</b> dans tout ce que nous entreprenons </p>
            </div>
            <img src="assets/ABOUT.png" alt="">
        </section>
        <section class="section_block about_content">
            <h2 class="page_title">Notre Agence</h2>
            <div class="block">
                <p>Forte d’une équipe de jeunes africains chevronnés, aux compétences diverses et variées, passionnés par la création d'expériences uniques et le développement de solutions de communication percutantes, Woody Events Africa, est une agence spécialisée dans l’expertise évènementielle et communicationnelle.</p>
            </div>
            <div class="content">
            <div class="box">
                <div class="container">
                    <img src="assets/icons/mission.svg" alt="" id="mission" style="height: 130px;">
                    <div class="text">
                    <h3>
                    Notre Mission
                    </h3>
                    <p>Nous nous attelons a offrir une combinaison puissante de services d'événement et de communication pour aider nos clients a atteindre leurs objectif de manière efficace et créative .Nous travaillons avec des entreprises ,des organisations et des marques pour concevoir des événements exceptionnels et mettre en place des stratégies de communication intégrées,</p>
                    </div>
                </div>
                <div class="container">
                    <img src="assets/icons/vision.svg" alt="" id="vision" style="height:88px;">
                    <div class="text">
                    <h3>
                    Notre Vision
                    </h3>
                    <p>Nous ambitionnons d'être une agence de référence locale et régionale dans nos domaines de prédilection ,afin de participer activement au développement durable</p>
                    </div>
                </div>
                <div class="container">
                    <img src="assets/icons/approach.svg" alt="" id="approach" style="height: 118px;">
                    <div class="text">
                    <h3>
                    Notre Approche
                    </h3>
                    <p>Chez Woody Events Africa, nous croyons que chaque projet est unique. C'est pourquoi nous adoptons une approche personnalisée pour chaque client. Notre équipe créative et expérimentée travail en étroite collaboration avec vous, pour comprendre vos objectifs, vos valeurs et votre public cible

                    En mettant l'accent sur l'innovation la qualité et l'attention aux détails, nous veillons a ce que chaque événement et chaque campagne de communication dépasse vos attentes.</p>
                    </div>
                </div>
                <div class="container">
                    <img src="assets/icons/sigil5.svg" alt="" id="engagement" style="height: 88px;">
                    <div class="text">
                    <h3>
                    Notre Engagement
                    </h3>
                    <p>Nous sommes déterminés a fournir des services de haute qualité, en mettant l'accent sur la satisfaction de nos clients. 
                        
                    Votre réussite est notre succès.
                        
                    Nous sommes fiers de créer des événements mémorables et de vous aider à atteindre vos objectifs de communication, tout en renforçant votre image de marque.
                    </p>
                    </div>
                </div>
            </div>
            <div class="img_container">
                <img src="assets/IMG_2_2.jpg" alt="" class="main_img">
            </div>
            </div>
        </section>
    </main>
    <?php include('templates/footer.php')?>
    <script>
        var page = document.querySelector("#about");
        page.classList.add('selected');
    </script>
</body>
</html>