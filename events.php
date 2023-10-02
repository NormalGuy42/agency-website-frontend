<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody Events Africa Evenements</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/events.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <?php include('templates/header.php')?>
    <div class="outer_container">
        <img src="assets/PROJ_4.png" alt="" class="banner_img">
        <div class="inner_container">
            <div class="content section_block">
                <div class="container">
                    <div class="grey_box">
                        <h1 class="page_title">SALON DE LA FINANCE</h1>
                    </div>
                </div>
                <section class="events_grid">
                <article>
                    <a href="event.php">
                        <div class="img_container">
                            <img src="assets/PROJ_4.png" alt=>
                        </div>
                    </a>
                    <div class="container">
                        <div class="info_container">
                            <h1 class="title">Salon de la finance</h1>
                            <p>Kôbri Business Expo 2023 (KBE) est un salon annuel dédié aux acteurs locaux et internationaux du secteur financier. Il est un cadre de rencontre, de réseautage et d'échanges approfondis sur les problématiques du secteur. Il vise, entre autres, à favoriser l'échange d'informations et de connaissances, promouvoir la
                            compréhension de l'importance de la finance, faciliter les opportunités de partenariat et de collaboration. Au-delà des échanges et partage d'expériences</p>
                        </div>  
                        <a href="event.php">
                            <button class="woodyBtn invite">Participez</button>
                        </a>
                    </div>
                </article>
                <article>
                    <a href="event.php">
                        <div class="img_container">
                            <img src="assets/PROJ_4.png" alt="">
                        </div>
                    </a>
                    <div class="container">
                        <div class="info_container">
                            <h1 class="title">Salon de l'énergie</h1>
                            <p>Le Salon de l'énergie, est un cadre de rencontres qui réunit tous les acteurs du secteur de l'énergie à Conakry. Il vise à impulser une dynamique au secteur par la définition de stratégies communes, le traitement des problématiques liées aux activités de la filière</p>
                        </div>
                        <a href="event.php">
                            <button class="woodyBtn invite">Participez</button>
                        </a>
                    </div>
                </article>
                </section>
                <h1 class="title references_title">QUELQUES PROJETS ET RÉFÉRENCES</h1>
                <section class="references_container">
                    <div class="btn_container">
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
                    </div>
                    <div class="references_carousel">
                        <a href="portfolio.php?">
                            <div class="box" id="">
                                <img src="assets/g_1.png" alt="">
                            </div>
                        </a>
                        <a href="portfolio.php?">
                            <div class="box" id="">
                                <img src="assets/g_2.png" alt="">
                            </div>
                        </a>
                        <a href="portfolio.php?">
                            <div class="box" id="">
                                <img src="assets/g_3.png" alt="">
                            </div>
                        </a>
                        <a href="portfolio.php?">
                            <div class="box" id="">
                                <img src="assets/g_4.png" alt="">
                            </div>
                        </a>
                        <a href="portfolio.php?">
                            <div class="box" id="">
                                <img src="assets/g_5.png" alt="">
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
        
    </main>
    <script>
        const carousel = document.querySelector(".references_carousel");
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
                firstImgWidth =  document.querySelector(".references_carousel > a").clientWidth + 25;
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
    <?php include('templates/footer.php')?>
    <script defer>
        //Paragraph limiter
        function reduceText(text){
            var num = text.split('').length;
            var array = text.split('');
            var reducedText = '';
            if(num <= 400){
                return text;
            }else{
                for(let i=0; i<400;i++){
                    reducedText += array[i];
                }
                reducedText = reducedText.trim()
                return reducedText+'...';
            }
        }
        var p = document.querySelectorAll(".info_container > p");
        document.addEventListener("DOMContentLoaded",()=>{
            var string = '';
            p.forEach(p=>{
                var currentText = p.textContent;
                p.innerText = reduceText(currentText);
            })
        })

        var page = document.querySelector("#events");
        page.classList.add('selected');


        //Events Sliders
        const events = [...document.querySelectorAll('.references_carousel')];
        const nextBtn = [...document.querySelectorAll('#nextBtn')];
        const prevBtn = [...document.querySelectorAll('#prevBtn')];

        // .references_carousel
        events.forEach((item,i) => {
            let containerDimesions = item.getBoundingClientRect();
            let containerWidth = containerDimesions.width;
            
            nextBtn[i].addEventListener('click',()=>{
                item.scrollLeft +=containerWidth;
            })
            prevBtn[i].addEventListener('click',()=>{
                item.scrollLeft -=containerWidth;
            })
        });

    </script>
</body>
</html>