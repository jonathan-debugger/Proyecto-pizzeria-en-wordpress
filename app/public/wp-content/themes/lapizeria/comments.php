<div class="contenedor comentarios">
    <?php 
    //Agregamos el formulario  de comentarios
    $args =array(
        'class_submit'=>'boton boton-primario'
    );
        comment_form($args);
    ?>
    <h3 class="text-center">
        Comentarios
    </h3>
<ul class="lista-comentarios">
    <?php 
        $args = array(
            /*Este $post siempre va a traer el post actual y el id actual siempre y cuando este dentro del while 
                osea siempre va a traer los comentarios de la entrada actual  o post actual asi evitamos que se revuelvan 
                los comentarios de distintas publicaciones*/
            "post_id"=>$post->ID,  
            "status"=>'approve',   /*Solamente vamos a traer los  comentarios aprovados*/
        );
        $comentarios = get_comments($args);

        $args2= array(
            "per-page"=>10, /*comentarios por pagina */
            "reverse_top_level"=>false /*Esto lo que hace es mostrarme el ultimo comentario de primeras */
        );
        /*Luego listamos los comentarios */
        wp_list_comments($args2,$comentarios);
    ?>
</ul>
</div>