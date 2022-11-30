<!-- Site para los post publicaciones del blog -->

<!-- para activar la pagina de entradas debemos ir al apartado de ajustes - lectura -->
<!-- para saber el id de la pagina o blog vamos a http://la-pizzeria.local/wp-admin/options.php o en la url debe decir que numero hace referencia a la pagina
la buscamos como page_for_post-->
<?php get_header(); ?>

    <?php 
    /*Accedemos al id de la pagina de los post */
        $pagina_blog_id = get_option('page_for_posts');
        /* accedemos al id de la imagen desctacada con el id de la pagina de los posts*/
        $imagen_id = get_post_thumbnail_id($pagina_blog_id);
        $imagen_src = wp_get_attachment_image_src($imagen_id,'full')[0];/* segunndo parametro le pasamos el tamaño */

    ?>

    <div class="hero" style="background-image: url(<?php echo $imagen_src; ?>);"> 
        <div class="contenido-hero">
            <!-- Obtenemos el title de la pagina con el id -->
            <h1> <?php echo get_the_title($pagina_blog_id); ?> </h1>
        </div>
    </div>


    <div class="seccion contenedor con-sidebar">
        <main class="contenido-principal"> 
            <?php while(have_posts()): the_post(); ?>
               <article class="entrada-blog">
                   <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('especialidades'); ?>
                   </a>

                    <?php 
                        get_template_part('template-parts/informacion','entrada');
                    ?>

                    <div class="contenido-entrada">
                        <!--Con the_content traemos todo el contenido de esa entrada Pero como es el home o la pevisualizacion de los post
                            se debe mostrar un pequeño  resumen que describa esa entrada de blog no podemos colocar   todo el texto-->
                            <?php /*the_content();*/ ?>
                       
                        <!--Con esta funcion podemos cortar el texto  primer parametro el texto 
                            a cortar  el segundo la cantidad de palabras a cortar-->
                        <?php /*echo wp_trim_words(get_the_content(),30);*/ ?> 
                    
                        <!-- Tambien si queremos mostrar texto con el extracto que lo ponemos en cada entrada es como una breve descripcion de esa entrada-->
                    <?php the_excerpt(); ?>
                    <a  class="boton boton-primario"   href="<?php the_permalink(); ?>">
                        Leer Más
                    </a>

                </div>
               </article>

            <?php endwhile; ?>    

            <!-- PAGINADOR DE LAS ENTRADAS DEL BLOG -->
            <!--La cantidad de entradas que mostramos se muestran en lectura -->
            <div class="paginacion">
                <?php next_posts_link('Anteriores') ?>
                <?php previous_posts_link('Siguientes') ?>
                <!--Con paginate_links vamos a mostrar los numeros y flechas para poder desplazarnos la paginacion del blog -->
                <?php //echo paginate_links(); ?>

            </div>
        </main>
        <?php get_sidebar(); ?>
    </div>        


<?php get_footer(); ?>



<!-- video  135 minuto 4:21-->