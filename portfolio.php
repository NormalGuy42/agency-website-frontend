<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody Events Africa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <?php include('templates/header.php')?>
    <h2 class="page_title title">Animation Photos & Vidéos</h2>
        <section class="gallery section_block">
            <div class="content_info">
                <img src="assets/g_5.png" alt="" class="cover_img">
                <div class="row carousel">
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                    <div class="row_box">
                        <img src="assets/g_5.png" alt="">
                    </div>
                </div>
                <h3>Week-end Fou Rire Edition 4</h3>
                <div class="paragraph">
                    <div class="vertical_line"></div>
                    <p>Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.</p>
                </div>
            </div>
            <div class="img_grid">
            </div>
        </section>
        <div class="line separator"></div>
        <section class="section_block">
            <div class="container">
                <div class="text">
                    <h2 class="page_title">Avez vous un projet?</h2>
                    <a href="contact.php">
                        <button class="woodyBtn">Contactez-nous</button>
                    </a>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1561.0866103359626!2d-13.675846151532808!3d9.550287026622724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf1cd72a4cafe097%3A0xfda1a98ae9ca7ca7!2ssi%C3%A9ge%20de%20l'UFDG!5e0!3m2!1sen!2s!4v1691534363768!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <div class="grey_line"></div>
    </main>
    <?php include('templates/footer.php')?>
    <script defer>
        var page = document.querySelector("#portfolio");
        page.classList.add('selected');

        var currentProjectIndex = 0;
        var currentProject = document.querySelector('.content_info');
        var projectsGrid = document.querySelector('.img_grid');
        var projectBoxes = document.querySelectorAll('.box');
        var projects = [
            {
                "coverImg": "assets/g_5.png",
                "images": [
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_2.png",
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_4.png",
                    "assets/g_5.png",
                ],
                "title": "Week-end Fou Rire Edition 4",
                "text": "Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.",
            },
            {
                "coverImg": "assets/g_1.png",
                "images": [
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                ],
                "title": "Week-end Fou Rire Edition 3",
                "text": "Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.",
            },
            {
                "coverImg": "assets/g_2.png",
                "images": [
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                    "assets/g_2.png",
                ],
                "title": "Nuit Ecobank Awards",
                "text": "Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.",
            },
            {
                "coverImg": "assets/g_3.png",
                "images": [
                    "assets/g_3.png",
                    "assets/g_3.png",
                    "assets/g_3.png",
                    "assets/g_3.png",
                    "assets/g_3.png",
                    "assets/g_3.png",
                    "assets/g_3.png",
                    "assets/g_3.png",
                    "assets/g_3.png",
                ],
                "title": "Pub 1",
                "text": "Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.", 
            },
            {
                "coverImg": "assets/g_4.png",
                "images": [
                    "assets/g_4.png",
                    "assets/g_4.png",
                    "assets/g_4.png",
                    "assets/g_4.png",
                    "assets/g_4.png",
                    "assets/g_4.png",
                    "assets/g_4.png",
                ],
                "title": "Pub 2",
                "text": "Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.",
                
            },
            {
                "coverImg": "assets/g_5.png",
                "images": [
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_5.png",
                    "assets/g_5.png",
                ],
                "title": "Pub 3",
                "text": "Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.",
                
            },
            {
                "coverImg": "assets/g_1.png",
                "images": [
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                    "assets/g_1.png",
                ],
                "title": "Week-end Fou Rire Edition 5",
                "text": "Nous sommes fiers de créér des événements mémorables et de vous aider à attendre vos objectifs de communication, tout en renforçant votre image de marque.",
                
            },
        ]
        function buildImages(startAnimation){
            projectsGrid.innerHTML = '';
            for(var i = 1; i<projects.length; i++){
                var box = document.createElement('div');
                var img = document.createElement('img');
                var link = document.createElement('a');

                img.setAttribute('src',projects[i].coverImg);
                box.setAttribute('id',i);
                link.setAttribute('href',`#${0}`)

                box.classList.add('box');
                link.appendChild(img);
                box.appendChild(link);
                
                projectsGrid.appendChild(box);
            }
            projectBoxes = document.querySelectorAll('.box');
            if(startAnimation && window.innerWidth >1240){
                setTimeout(()=>{
                projectBoxes[0].classList.add("movement","down");
                projectBoxes[2].classList.add("movement","down");

                projectBoxes[4].classList.add("movement","right");
                projectBoxes[3].classList.add("movement","up");

                projectBoxes[5].classList.add("movement","up");
                projectBoxes[1].classList.add("movement","left");
                },1)
            }
            //Add animations
            projectBoxes.forEach(box=>{
                box.addEventListener("click",()=>{displayBox(box.id,true)});
            })
        }

        function displayBox(index,startAnimation){
            var selectedProject = projects[index];
            var previousProject = projects[0];

            var coverImg = currentProject.querySelector('.cover_img');
            var title = currentProject.querySelector('h3');
            var paragraph = currentProject.querySelector('p');
            var row = currentProject.querySelector('.row');

            coverImg.setAttribute('src',selectedProject.coverImg);
            title.innerText = selectedProject.title;
            paragraph.innerText = selectedProject.text;

            row.innerHTML = '';
            for(var i=0;i<selectedProject.images.length;i++){
                // var circle = document.createElement('div');
                // circle.classList.add('circle');
                // if(i==0){circle.classList.add('active')};
                // rowBtns.appendChild(circle);

                var rowBox = document.createElement('div');
                var img = document.createElement('img');
                rowBox.classList.add('row_box','carousel_item');
                img.setAttribute('src',selectedProject.images[i]);
                
                rowBox.appendChild(img);
                row.appendChild(rowBox);
            }
            projects[index] = projects[0];
            projects[0] = selectedProject;
            var rowBoxes = document.querySelectorAll('.row_box');
            rowBoxes.forEach(box=>{
                box.addEventListener('click',()=>{
                    var selectedImage = box.querySelector('img').getAttribute('src');
                    coverImg.setAttribute('src',selectedImage);
                });
            })
            buildImages(startAnimation);
        }
        displayBox(0,false);
    </script>
        <script defer>
        const carousel = document.querySelector(".carousel");
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
</body>
</html>