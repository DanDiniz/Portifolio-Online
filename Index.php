<?php

    INCLUDE('config.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#PROJETO 01">
    <meta name="keywords" content="Projeto1">
    <title>Daniel | DevWeb</title>
    <link rel="icon" type="image/png" href="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/devicon/devicon-original.svg"/>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>./CSS/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>./CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        //MANIPULANDO URLS PARA FAZER O SCROLL DINAMICO

        $url = isset($_GET['url']) ? $_GET['url'] : 'Home';
        switch ($url ) {
            case 'Sobre':
                echo '<target target="Sobre" />';
                break;
            case 'Serviços':
                    echo '<target target="Serviços" />';
                    break;
            case 'Contato':
                    echo '<target target="Contato" />';
                    break;
            default:

            break;
        }

?>
    <header class="header-wrp">
        <div class="center">
        <div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>"><i class="fa fa-terminal" aria-hidden="true"></i></a></div>
            <nav class="desktop rigth">
                <ul>
                <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Serviços">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Contato">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile rigth">
            <div class="button-menu-mbolie">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Serviços">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <?php


    if(file_exists('Pages/'.$url.'.php')){
    include('Pages/'.$url.'.php');
    }
    else{
        if($url != 'Sobre' && $url != 'Serviços' && $url != "Contato"){
            include('Pages/404.php');
            $page404 = true; 
        }
    else{
        include('Pages/Home.php');
    }

    }
    ?>
    <footer id="Contato">
        <div class="center">
            <p><i class="fa fa-envelope" aria-hidden="true"></i>dan.das.diniz@gmail.com</p>
            <p><i class="fa fa-linkedin" aria-hidden="true"></i><a href="https://www.linkedin.com/in/daniel-da-silva-diniz-a05499236/">linkedin/DanDiniz</a></p>
            <p><i class="fa fa-github" aria-hidden="true"></i><a href="https://github.com/DanDiniz">Github/DanDiniz</a></p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>./JS/Jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>./JS/script.js"></script>
</body>
</html>