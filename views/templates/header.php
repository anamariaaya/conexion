<header class="header__<?php
        if(isset($inicio)){
            echo 'index';
        } elseif(isset($paginas)){
            echo 'pages';
        } else{
            echo 'sections';
        }
    ?>
">
    <?php
        if(isset($inicio)):?>
            <div class="header__overlay">
                <video class="header__overlay__video" src="/build/videos/header.mp4" autoplay loop muted></video>
            </div>
    <?php endif;?>

    <?php
        $folder = '/build/img/';
        $filename = getPathComponent().'.webp';
        $fileExists = file_exists($folder . $filename);

    if(!isset($inicio) && !isset($paginas)):?>
        <?php if($fileExists): ?>
            <img class="header__overlay__img" src="/build/img/<?php headerImg();?>.webp" alt="Portada <?php headerImg();?>" loading="lazy">
            <h1 class="header__overlay__title"><?php echo $main_title ?></h1>
        <?php endif;?>
    <?php endif;?>

    <nav class="header__nav wrapper">
        <ul>
            <li>
                <a href="/">Inicio</a>
            </li>
            <li>
                <a href="/quienes-somos">Quienes somos</a>
            </li>
            <li>
                <a href="/servicios">Servicios</a>
            </li>
            <li>
                <a href="/ofertas">Ofertas laborales</a>
            </li>
            <li>
                <a href="/cotizar">Quiero cotizar</a>
            </li>
            <li>
                <a class="header__nav--btn" href="/contacto">Contacto</a>
            </li>
        </ul>
    </nav>

    
</header>