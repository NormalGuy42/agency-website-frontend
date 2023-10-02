<?php
    include('config/connection.php');
    include('lib/bot.php');

    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    if(!is_bot($_SERVER['HTTP_USER_AGENT'],$visitor_ip)){
        //Check if visitor has ever been on the website
        $check_ip = $db->prepare('SELECT * FROM `visites_uniques` WHERE `ip_address`=:ip_address');
        $check_ip->bindParam('ip_address',$visitor_ip);
        $check_ip->execute();
        $result = $check_ip->rowCount();
        if($result <1){
            $check_ip = $db->prepare('INSERT INTO `visites_uniques`(`ip_address`) VALUES(:ip_address)');
            $check_ip->bindParam(':ip_address',$visitor_ip);
            $check_ip->execute();
        }
        //Check if visitor has been on site this day
        date_default_timezone_set('UTC');

        $check_ip = $db->prepare('SELECT `ip_address`,`date` FROM `visits` WHERE `ip_address`=:ip_address AND day(`date`)= day(now()) AND month(`date`)=month(now()) AND year(`date`)=year(now()) ORDER BY id LIMIT 1');
        $check_ip->bindParam(':ip_address',$visitor_ip);
        $check_ip->execute();
        $result = $check_ip->rowCount();
        if($result < 1){
            $check_ip = $db->prepare('INSERT INTO `visits`(`ip_address`) VALUES(:ip_address)');
            $check_ip->bindParam('ip_address',$visitor_ip);
            $check_ip->execute();
        }
    }

    //Get data
    //Diaporama
    $stmt = $db->prepare("SELECT * FROM slideshow");
    $stmt->execute();
    $diaporama = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Text
    $stmt = $db->prepare("SELECT * FROM text WHERE `page`='index.php'");
    $stmt->execute();
    $text = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $expertiseText = $text[0]['textContent'];
    $projectsText = $text[1]['textContent'];

    //References
    $stmt = $db->prepare("SELECT * FROM `references`");
    $stmt->execute();
    $references = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody Events Africa</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/script.js" defer></script>
    <style>
        h1,h2{
            text-align: center;
            font-size: 35px;
        }

    </style>
</head>
<body>
    <?php include('templates/header.php')?>
    <a href="video.php" class="video" width="100vw">
        <video src="assets/video.mp4" muted controls autoplay loop></video>
    </a>
        <section class="expertise_section section_block section_text">
            <h2 class="page_title">SERVICE</h2>
            <p class="section_paragraph">Nous travaillons avec des entreprises, des organisations et des marques pour concevoir des événements exceptionnels et mettre en place des stratégies de communication intégrées</p>
        </section>
        <section class="expertise_box section_block">
            <div class="card">
                <div class="container_box">
                        <div class="content_box">
                            <h3>EVENEMENTIEL</h3>
                            <div>
                                <span>Rencontres professionnnelles</span>
                                <span>Team building</span>
                                <span>Soirées a thèmes</span>
                                <span>Etudes de marchés et Actions terrains</span>
                                <span>Evénéments spéciaux</span>
                            </div>
                            <a href="service.php">
                                <button class="woodyBtn">En savoir plus</button>
                            </a>
                        </div>
                </div>
                <img src="assets/IMG_3.jpg" alt="">
            </div>
            <div class="card">
                <img src="assets/IMG_4.png" alt="">
                <div class="container_box">
                    <div class="content_box">
                        <h3>COMMUNICATION</h3>
                        <div>
                            <span>Recommandations stratégiques</span>
                            <span>Créations graphiques</span>
                            <span>Communication Digitale</span>
                            <span>Edition tout support et gadgets publicitaires</span>
                            <span>Marquage Véhicules & Utilitaires</span>
                            <span>Signalitiques & Enseigne</span>
                        </div>
                        <a href="service.php#communication">
                            <button class="woodyBtn">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="grey_box">
            <section class="recent_projects section_block section_text">
                <h2 class="page_title">Nos projets récents</h2>
            </section>
        </div>
        <div class="overflow">
        <div class="box_container">
            <div class="shadow"></div>
            <button class="arrow_button left" id="left">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512">
                    <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
                </svg>
            </button>
            <button class="arrow_button right" id="right">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512">
                    <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
                </svg>
            </button>
            <div class="fill_image" style="background-image: linear-gradient(#00000085,#00000085), url(assets/PROJ_1.png) "></div>
            <div class="carousel_container section_block">
                <div class="carousel">
                    <div class="carousel_item">
                        <div class="info_box">
                            <div class="title">Week-end 
                                Fou Rire</div>
                            <div class="vertical_line"></div>
                            <p class="section_paragraph">Nous sommes fiers de créer des événements mémorables et de vous aider a atteindre vos objectifs de communication ,tous en renforçant votre image de marque.</p>
                        </div>
                        <img src="assets/PROJ_1.png" alt="">
                    </div>
                    <div class="carousel_item">
                        <div class="info_box">
                            <div class="title">Week-end 
                                Fou Rire</div>
                            <div class="vertical_line"></div>
                            <p class="section_paragraph">Nous sommes fiers de créer des événements mémorables et de vous aider a atteindre vos objectifs de communication ,tous en renforçant votre image de marque.</p>
                        </div>
                        <img src="assets/PROJ_2.png" alt="">
                    </div>
                    <div class="carousel_item">
                        <div class="info_box">
                            <div class="title">Week-end 
                                Fou Rire</div>
                            <div class="vertical_line"></div>
                            <p class="section_paragraph">Nous sommes fiers de créer des événements mémorables et de vous aider a atteindre vos objectifs de communication ,tous en renforçant votre image de marque.</p>
                        </div>
                        <img src="assets/PROJ_3.png" alt="">
                    </div>
                    <div class="carousel_item">
                        <div class="info_box">
                            <div class="title">Week-end 
                                Fou Rire</div>
                            <div class="vertical_line"></div>
                            <p class="section_paragraph">Nous sommes fiers de créer des événements mémorables et de vous aider a atteindre vos objectifs de communication ,tous en renforçant votre image de marque.</p>
                        </div>
                        <img src="assets/PROJ_4.png" alt="">
                    </div>
                </div>
                <div class="circles">
                    <svg xmlns="http://www.w3.org/2000/svg" id="1" height="1em" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" id="2" height="1em" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" id="3" height="1em" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" id="4" height="1em" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
                </div>
            </div>
            <div class="shadow right"></div>
        </div>
        </div>
        <section class="references">
            <h2 class="section_block section_text page_title">Nos références</h2>
            <!-- <img src="assets/refs.png" alt=""> -->
            <div class="container section_block">
                <img src="assets/logos/logo (1).png" alt="">
                <img src="assets/logos/logo (2).png" alt="">
                <img src="assets/logos/logo (3).png" alt="">
                <img src="assets/logos/logo (4).png" alt="">
                <img src="assets/logos/logo (5).png" alt="">
                <img src="assets/logos/logo (6).png" alt="">
                <img src="assets/logos/logo (7).png" alt="">
                <img src="assets/logos/logo (8).png" alt="">
                <img src="assets/logos/logo (9).png" alt="">
                <img src="assets/logos/logo (10).png" alt="">
                <img src="assets/logos/logo (11).png" alt="">
                <img src="assets/logos/logo (12).png" alt="">
                <img src="assets/logos/logo (13).png" alt="">
                <img src="assets/logos/logo (14).png" alt="">
            </div>
        </section>
    </main>
    <?php include('templates/footer.php')?>
    <script defer>
        const carouselBox = document.querySelector('.carousel_container');
        const shadows = document.querySelectorAll('.shadow');
        const img = document.querySelector('.carousel_item >img');
        const fillImg = document.querySelector('.fill_image');
        const rightBtn = document.querySelector('.arrow_button.right');
        const leftBtn = document.querySelector('.arrow_button.left');

        function sizeElements(){
            var windowWidth = window.innerWidth;
            var boxHeight = `${img.clientHeight}px`;
            var boxWidth = `${(windowWidth-carouselBox.clientWidth)/2}px`;
            var spacing = ((windowWidth-carouselBox.clientWidth)/2)*0.8; 
        

            shadows.forEach(shadow=>{
                shadow.style.width = boxWidth
                shadow.style.height = boxHeight;
            })
            fillImg.style.width = boxWidth;
            fillImg.style.height = boxHeight;

            rightBtn.style.right = spacing > 25? `${spacing}px`:`25px`;
            leftBtn.style.left = spacing > 25? `${spacing}px`:`25px`;
        }
        sizeElements();
        window.addEventListener('resize',sizeElements)
    </script>
    <script defer>
        const carousel = document.querySelector(".box_container");
        let isDragStart =  false, isDragging = false,prevPageX,prevScrollLeft;
        let positionDiff;
        let firstImgWidth;
        let arrowIcons = document.querySelectorAll(".arrow_button");
        let circles = document.querySelectorAll(".circles > svg");
        let index = 0;

        // const activateCircle = (n)=>{
        // }
        // activateCircle(0)

        arrowIcons.forEach(icon =>{
            icon.addEventListener("click",() => {
                firstImgWidth =  document.querySelector(".carousel_item").clientWidth + 10;
                carousel.scrollLeft += icon.id == "left"? -firstImgWidth :firstImgWidth;
                index += icon.id =="left"? -1 : 1;
                if(index>3){index = 3};
                if(index<0){index = 0};

                // activateCircle(index)
            })
        })
        const autoSlide = () =>{
            positionDiff = Math.abs(positionDiff);
            firstImgWidth =  document.querySelector(".carousel_item").clientWidth + 10;
            if(firstImgWidth <120){
                firstImgWidth = 300;
            }
            let valDifference = firstImgWidth -positionDiff;

            if(carousel.scrollLeft > prevScrollLeft){
                //right
                
                if(positionDiff >firstImgWidth /3){
                    index +=1
                    if(index>3){index = 3};
                    if(index<0){index = 0};
                    // activateCircle(index)
                }

                return carousel.scrollLeft += positionDiff >firstImgWidth /3 ?valDifference : -positionDiff;
            }else{
                //left
                if(positionDiff >firstImgWidth /3){
                    index -=1
                    if(index>3){index = 3};
                    if(index<0){index = 0};
                    // activateCircle(index)
                }
                return carousel.scrollLeft -= positionDiff >firstImgWidth /3 ?valDifference : -positionDiff;
            }
        }
        const dragStart = (e)=>{
            isDragStart = true;
            prevPageX = e.pageX || e.touches[0].pageX
            prevScrollLeft = carousel.scrollLeft;
        }
        const dragEnd = ()=>{
            isDragStart = false;
            carousel.classList.remove("dragging");
            if(!isDragging) return;
            isDragging = false;
            autoSlide();
        }
        const dragging = (e)=>{
            if(!isDragStart) return;
            if(!'ontouchstart' in window || !navigator.msMaxTouchPoints){
                if(!window.matchMedia("(any-pointer: coarse)").matches){
                    e.preventDefault();
                }
            }
            isDragging = true;
            carousel.classList.add("dragging");
            positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
        }

        carousel.addEventListener("mousedown",dragStart);
        carousel.addEventListener("touchstart",dragStart,{passive:true});

        carousel.addEventListener("mousemove",dragging);
        carousel.addEventListener("touchmove",dragging,{passive:true});

        carousel.addEventListener("mouseup",dragEnd);
        carousel.addEventListener("touchend",dragEnd);
    </script>
    <script defer>
        var page = document.querySelector("#index");
        page.classList.add('selected');

        var descriptionButtons = document.querySelectorAll('.description_box > button');

        descriptionButtons.forEach(button=>{
            button.addEventListener('click',()=>{
                var buttonType = button.getAttribute('id');
                var activeDescriptionButton = document.querySelector('.description_box > button.active');
                var communicationBox = document.querySelector('#communicationBox');
                var eventBox = document.querySelector('#eventBox');

                activeDescriptionButton.classList.remove('active')
                button.classList.add('active')

                if(buttonType=="communicationButton"){
                    communicationBox.classList.add('showBox');
                    eventBox.classList.remove('showBox');
                }else{
                    communicationBox.classList.remove('showBox');
                    eventBox.classList.add('showBox');
                }
            })
        })

        var infoBoxes = document.querySelectorAll('.expertise_box > .container_box > .box > div');
        infoBoxes.forEach(box=>{
            box.addEventListener('click',()=>{
                var activeSection = document.querySelectorAll('.explanation.showBox');
                if(box.nextElementSibling.classList.contains('showBox')){
                    box.nextElementSibling.classList.remove('showBox') 
                }else{
                    box.nextElementSibling.classList.add('showBox') 
                }

                if(activeSection.length >= 1){
                    activeSection[0].classList.remove('showBox');
                }
            })
        })
        document.addEventListener('click',(e)=>{
            if(!e.target.closest('.expertise_box > .container_box > .box > div')){
                infoBoxes.forEach(box=>{
                    box.nextElementSibling.classList.remove('showBox');
                })
            }
        })
    </script>
</body>
</html>