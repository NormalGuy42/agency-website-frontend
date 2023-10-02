<?php
    include('config/connection.php');
    // $GLOBALS['tables'] = [
    //     'events',
    //     'portfolio',
    //     'recent_projects',
    // ];
    // if(isset($_GET['id']) && isset($_GET['src']) && isset($_GET['return'])){
    //     if(in_array($_GET['src'],[0,1,2])){
    //         $table = $GLOBALS['tables'][$_GET['src']];
    //         $stmt = $db->prepare("SELECT * FROM $table WHERE `id`=:id");
    //         $stmt->bindParam(':id',$_GET['id']);
    //         $stmt->execute();
    //         $data = $stmt->fetch(PDO::FETCH_ASSOC);
    //     }
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woody Events Africa Event</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/events.css">
    <script src="scripts/script.js" defer></script>
    <style>
        main{
            background-color: white;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .page_title{
            color: black;
        }
    </style>
</head>
<body>
    <?php include('templates/header.php')?>
       <h2 class="page_title">
            Evenement
       </h2> 
    </main>
</body>
</html>