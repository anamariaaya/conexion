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
        <button class="header__overlay__btn btn-video">Ver video</button>
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
                <a class="header__nav--btn" href="https://www.avalpaycenter.com/wps/portal/portal-de-pagos/web/pagos-aval/resultado-busqueda/realizar-pago/!ut/p/a1/lZLdV4IwGMb_li66jL18CpfMVJDKSjHHTWfC0hUwQiBPf31Dj1pZdtrV9u553ue3DxShGYpy2vAFrbjIadquI-vRdkzLN0AL7KmBwfVDp3_leSpcgxQQKYBfhgtf_SPj7rL1e3hgYh1GO_9eMJhsAoKx5uFAha5x0t_VjvyGY0nB6Lo7nYYqwH_9x4B_-B9Q9FXywwm-CY4RN4ITd0gkZOdzhNOTHbDj30x0FewOGrc9nmlD18qKlU3KKoXncVonTClotXzk-ZNA5BxwvYppIsrbUm7zgqZ9GrPVlLM3Zb2ssrRtE4tM4fNMeWq3lEKUVdsuEwlDpJFKRDwU4bgv_AUi_mE6PExP4o6sLW4sEr4QXV4nNEEENiVasYVkfK1ZQve1rBC7GkYkFjlby8_5PQWCjitTTDz08I28tc4RRgAOuBOp6AWuNjDVLUb5WnOZr1q2aZjyaRzH0rd4ecNyLvwWDkDTLdNERRaG4Qz4bZbZ-sv9BZ2_s7n9PGHEPfsACZkhlw!!/#Z7_8956I402K0K7A0AI5BJHBN00A7" target="_blank     ">Paga tu factura</a>
            </li>
        </ul>
    </nav>

    
</header>