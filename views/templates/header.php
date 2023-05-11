<header class="
    <?php
        if(isset($inicio)){
            echo 'red';
        } elseif(isset($paginas)){
            echo 'blue';
        } else{
            echo 'green';
        }
    ?>
">
<div class="video">
        <video src="/videos/header.mp4" autoplay loop muted></video>
</div>
    <nav class="nav">
        <ul>
            <li>
                <a href="/">Inicio</a>
            </li>
            <li>
                <a href="/prueba">Prueba</a>
            </li>
            <li>
                <a href="/otraprueba">Otra</a>
            </li>
        </ul>
    </nav>
</header>