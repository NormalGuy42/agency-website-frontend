<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody Events Africa Contacts</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <?php include('templates/header.php')?>
        <section class="info_content section_block">
            <form action="contact.php" method="POST" id="contactForm">
                <h2 class="page_title">CONTACTS</h2>
                <div class="input_container">
                    <div class="wrapper">
                        <input type="text" placeholder="Prénom" name="firstName" value="" autocomplete="off">
                    </div class="wrapper">
                    <div class="wrapper">
                        <input type="text" placeholder="Nom" name="lastName" value="" autocomplete="off">
                    </div>
                </div>
                <div class="input_container">
                    <div class="wrapper">
                        <input type="email" placeholder="Email" name="email" value="" autocomplete="off">
                    </div>
                    <div class="wrapper">
                        <input type="number" placeholder="Téléphone" name="phone" value="" autocomplete="off">
                    </div>
                </div>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
                <button class="woodyBtn" type="submit" name="submit">Envoyer un message</button>
            </form>
            <div class="text_content">
                <div class="box">
                    <h3>Téléphone</h3>
                </div>
                <div class="contacts_content">
                    <div>
                        <img src="assets/location_marker.svg" alt="">
                        <span>:Dixinn, Conakry - GUINEE</span>
                    </div>
                    <a href="tel:+224622624133">
                        <img src="assets/phone.svg" alt="">
                        <span>:+224 622 62 41 33</span>
                    </a>
                    <a href="tel:+224611000099">
                        <img src="assets/whatsapp.svg" alt="">
                        <span>:+224 611 00 00 99</span>
                    </a>
                    <a href="mailto:info@woodyeventsafrica.com">
                        <img src="assets/mail.svg" alt="">
                        <span>:info@woodyeventsafrica.com</span>
                    </a>
                </div>
                <div class="socials">
                    <h3>Se connecter</h3>
                    <div class="svg_container">
                        <a href="#">
                                <img src="assets/linkedin.svg" alt="linkedin link">
                            </a>
                            <a href="#">
                                <img src="assets/facebook.svg" alt="facebook link" class="resize">
                            </a>
                            <a href="#">
                                <img src="assets/instagram.svg" alt="instagram link">    
                            </a>
                            <a href="#">
                                <img src="assets/youtube.svg" alt="linkedin link">
                            </a>
                            <a href="#">
                                <img src="assets/tiktok.svg" alt="linkedin link">
                            </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="map section_block">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1561.0866103359626!2d-13.675846151532808!3d9.550287026622724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf1cd72a4cafe097%3A0xfda1a98ae9ca7ca7!2ssi%C3%A9ge%20de%20l&#39;UFDG!5e0!3m2!1sen!2s!4v1691534363768!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <?php include('templates/footer.php')?>
    <script>
        var page = document.querySelector("#contact");
        page.classList.add('selected');
    </script>
</body>
</html>