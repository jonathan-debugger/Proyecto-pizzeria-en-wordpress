<?php 
/*
plugin Name: La Pizzeria Gutenberg Blocks
Plugin URI:
Description:Agrega bloques de Gutenber nativos
Version: 1.0
Author: Jonathan Bernal
Author URI: https://github.com/jonathan-debugger
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/
/*evitar que alguien acceda a este archivo */

if(!defined('ABSPATH')) exit;

/** Categorias personalizadas **/

/*Le pasamos por parametro las categorias actuales y el post actual
  El post no se requiere pero las categorias si y esto wordpress va inyectar 
  automaticamente las categorias en esta funcion 
  -Estas categorias vienen como un arreglo por lo tanto unimos un arreglo con otro arreglo*/
function lapizzeria_categoria_personalizada($categories, $post){

    return array_merge(
        $categories,
        array(
            array(
                /*registramos la nueva categoria personalizada */
                'slug' => 'lapizzeria',
                'title'=> 'La pizzeria',
                'icon' => 'store'
            )
        )
    );
}
/* le pasamos un  prioridad de 10 que es la mas alta y le pasamos 2 parametro a la funcion*/
add_filter('block_categories','lapizzeria_categoria_personalizada',10,2);

/** Registrar bloques scripts y CSS **/

function lapizzeria_registrar_bloques(){
    //Si gutemberg no existe o no esta activo no se ejecutara este codigo ya que por lo general gutemberg se desactiva
   /*Si no existe esta funcion de gutenberg no se va a ejecutar este codigo */
    if(!function_exists('register_block_type')){
        return;
    }
    /* Registrar los bloques en el editor de wordpress */
    /*lo registramos pero aun no  lo colocamos en cola */
  
    wp_register_script(
    'lapizzeria-editor-script', // handle o nombre  unico
    plugins_url('build/index.js', __FILE__ ), // archivo con los bloques (direccion o  ubicación del  plugin que ese archivo va ser el que va a  compilar los bloques)
    array('wp-blocks','wp-i18n', 'wp-element','wp-editor'), //Dependencias  3 son obligatorias
    /* 
    - wp-block:     Esta contiene las funciones para los bloques
    - wp-i18n:      Esta nos pemite traducir nuestros plugins a diferentes lenguajes
    - wp-element:   Esta va contener  algunos elementos en gutemberg ya que casi nada de lo que utilizas en gutenberg
                    es algo que hacemossolamnete importamos los elementos ya existentes como por ejemplo un titulo una url
    - wp-editor:    
    */
    
    /*===============
          Version
     ================*/
    /**Para que los  cambios se vean reflejados cada vez que compliamos y se actualize la version cada vez
       utilizamos filemtime — Obtiene el momento de la última modificación de un archivo
       filemtime(plugin_dir_path(__FILE__) . 'build/index.js')  aqui  pasamos el archivo  actual
       Esto va hacer traernos  la version con la ultima hora en la que se modifico el archivo
        Ya que va ser una version mas nueva que la anterior y podremos ver  los cambios sin problema
     * **/
    filemtime(plugin_dir_path(__FILE__) . 'build/index.js')

    );

    /*================
      Registrar Styles
     =================*/

     //estilos para el editor de gutemberg (unicamente)
     wp_register_style(
         'lapizzeria-editor-styles',//handle o nombre 
         plugins_url('./css/editor.css', __FILE__ ), //direccion del archivo
         array('wp-edit-blocks'), //dependencias
         filemtime(plugin_dir_path(__FILE__) . 'css/editor.css')

     );   

          //Estilos para los bloques backend y frontend osea se van a cargar tanto como en el editor como en las paginas
          wp_register_style(
            'lapizzeria-frontend-styles',//handle o nombre 
            plugins_url('./css/styles.css', __FILE__ ), //direccion del archivo
            array(), //dependencias no lleva
            filemtime(plugin_dir_path(__FILE__) . 'css/styles.css')
   
        ); 

        /**Registar bloques de gutenberg**/
        //arreglo de bloques
        $blocks =[
            'lapizzeria/boxes' /*se recomienda darle  un prefijo lapizzeria/ para que no se llegue a chocar conotro bloque */
        ];
        //Recorrer bloques y agregar scripts y styles
        foreach ($blocks as $block) {
            /*Asi es como registramos un bloque o varios bloques por eso el foreach */
           /* y le pasamos los handle o  nombres de los scritps y styles que registramos anteriormente*/
            register_block_type($block, array(
                'editor_script' => 'lapizzeria-editor-script', // script principal para el editor
                'editor_style'  => 'lapizzeria-editor-styles', // styles para el editor
                'style' => 'lapizzeria-frontend-styles'     // styles para el frontend
            ));
        }
    }

add_action('init','lapizzeria_registrar_bloques');


/*Debemos todo el tiempo correr el comando npm start para que se  guarden los cambios */
/* Video 152 */