<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody Events Africa Event</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/events.css">
    <script src="scripts/script.js" defer></script>
    <style>
        video{
            width: 100%;
            aspect-ratio: 16 / 9;
            max-height: 80vh;
        }
        .container{
            padding: 30px 0;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            display: block;
        }
        @media (max-width:500px) {
            video{
                width: 90%;
                aspect-ratio: 16 / 9;
                max-height: 80vh;
            }
        }
    </style>
</head>
<body>
    <?php include('templates/header.php')?>
        <div class="pos">
            <a href="index.php">
                <button class="floatingReturnBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                    </svg>
                </button>
            </a>
        </div>
        <div class="container">
        <video src="assets/video.mp4" muted controls autoplay></video>
        </div>
</body>
</html>