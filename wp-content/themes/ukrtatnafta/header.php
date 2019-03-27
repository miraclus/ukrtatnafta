<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">  -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ;?>">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <!-- <link href="css/fontello.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/media.css"> -->
	<title>«Укртатнафта»</title>
	<?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-xl navbar-light  main-menu">
                <div class="menu-logo-lang">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="navbar-brand ">
                        <img src="<?php bloginfo('template_url'); ?>/img/utn-logo.jpg" class="navbar-logo" width="200" alt="logo">
                    </a>
                    <!-- <ul class="lang align-self-center">
                        <a href="#"><li>UA</li></a>
                        <a href="#"><li class="lang-active">RU</li></a>
                        <a href="#"><li>EN</li></a>
                    </ul> -->
                    <ul class="lang align-self-center">
                        <?php echo polylang_shortcode(); ?>
                    </ul>
                </div>
                
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" 
                            aria-haspopup="true" aria-expanded="false">Новости<i class="demo-icon icon-down-open-mini"></i>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                                
                                <a class="dropdown-item" href="<?php echo get_page_link(34); ?>"><i class="demo-icon icon-id-card"></i> Новости</a>
                                <a class="dropdown-item" href="#"><i class="demo-icon icon-id-card-o"></i> Публикации</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink"  
                            aria-haspopup="true" aria-expanded="false">О компании<i class="demo-icon icon-down-open-mini"></i></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="production.html"><i class="demo-icon icon-droplet"></i> Производство</a>
                                <a class="dropdown-item" href="power.html"><i class="demo-icon icon-flash"></i> Поставка электроэнергии</a>
                                <a class="dropdown-item" href="ecology.html"><i class="demo-icon icon-envira"></i> Экология</a>
                                <a class="dropdown-item" href="social.html"><i class="demo-icon icon-users"></i> Социальная сфера</a>
                                <a class="dropdown-item" href="tel_service.html"><i class="demo-icon icon-info-circled"></i> Раскрытие информации</a>
                                <a class="dropdown-item" href="about_us.html"><i class="demo-icon icon-question-circle-o"></i> О нас</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink"  aria-haspopup="true"
                                    aria-expanded="false">Наш бизнес<i class="demo-icon icon-down-open-mini"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#"><i class="demo-icon icon-basket"></i> Реализация неликвидов</a>
                                    <a class="dropdown-item" href="#"><i class="demo-icon icon-dollar"></i> Цены</a>
                                    <a class="dropdown-item" href="trade_og.html"><i class="demo-icon icon-handshake-o"></i> Реализация нефтепродуктов</a>
                                    <a class="dropdown-item" href="#"><i class="demo-icon icon-plane"></i> Реализация авиатоплива</a>                                    
                                </div>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Наши потребности</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="contacts.html">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
	</header>
	<main>