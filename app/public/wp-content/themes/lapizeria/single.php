<!-- /*Pagina o template para las publicaciones del blog o post types*/ -->
<?php 
 get_header();

 while (have_posts()): the_post();
 
        get_template_part('template-parts/loop','contenido');

        //Comentarios
        comments_template();//esto hace el llamado a el template o archivo comments (comentarios) 

 endwhile; 
 
 
 get_footer(); 

