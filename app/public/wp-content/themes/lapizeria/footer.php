
<footer class="site-footer"> 
    <?php 
        $args = array(
                'theme_location'=> 'header-menu',
                'container' => 'nav',
                'container_class' => 'footer-nav',
                /* Con after agregamos despues del ultimo elemento del item actual ejemplo 
                <li>
                    <span>Primer elemento</span> 
                    <span class="separador"> | </span>
                </li>*/

                'after' => '<span class="separador"> | </span>' 

            );
            wp_nav_menu($args);
     

    ?>

        <div class="direccion">
                <p>8179 bay avenue View, CA 94043</p>
                <p>Teléfono: 3202259000</p>
        </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>