<!-- Aqui colocamos el contenido que vamos a llamar varias veces esto lo
hacemos para evitar duplicidad y que mas adelante sea mucho mas facil
editar este archivo  no ir de archivo en archivo editandolo si no solamente en este -->
    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"> 
        <div class="contenido-hero">
            <h1> <?php the_title(); ?> </h1>
        </div>
    </div>
    <!--Reutilizamos las utiidades contenedor que ya estaba y seccion para agregar algo de padding-->
    <div class="seccion contenedor">
        <main class="contenido-principal">
            <?php 
            /* si esta en la pagina de post vamos a correr este contenido cuando este en las entradas del blog*/
                if(is_single()): 
                    get_template_part('template-parts/informacion','entrada');
                endif;
            ?>  
            <?php the_content(); ?>

        </main>
    </div>
<!-- VIDEO 142 -->