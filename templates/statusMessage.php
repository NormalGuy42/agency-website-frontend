<?php
    include('../lib/successMessage.php');

    //Update the user based changes made
    if(isset($_SESSION['status'])){
        if($_SESSION['status'] == 'ERROR'){
            echo "<div class='statusBox'><div class='error'>{$_SESSION['statusMessage']}</div></div>";
        }else{
            echo "<div class='statusBox'><div class='success'>{$successMessages[$_SESSION['statusMessage']]}<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
            <path d='M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z'/></svg></div></div>";
        }
    }
    unset($_SESSION['status']);

?>