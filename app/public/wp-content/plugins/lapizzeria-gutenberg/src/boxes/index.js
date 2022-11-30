/*wp.blocks va a contener todos los diferentes componenetes para 
  los bloques 
  wp.editor va a contener todo lo relacionado al editor*/
const { registerBlockType } =wp.blocks;
/*Importar componente RichText el cual nos permite escribir en el editor */
const { RichText }=wp.editor;
/*Immportar logo para el bloque  con el complemento que instalamos que esta en webpack
    @svgr/webpack url-loader */
import { ReactComponent as Logo } from '../pizzeria-icon.svg';
/*
7 pasos para crear un bloque en Gutenberg.
1.-Importar el componente(s) que utilizás.
2.-Colocar el componente donde deseas utilizarlo.
3.-Crear una función que lea los contenidos. 
4.-Registra unn atributo.
5.-Extraer el contenido desde props.
6.- Guarda el contenido con setAttributes.
7.-Lee los contenidos guardados en save().
*/
/* un componente es una parte del bloque hablando  en el  editor ejemplo 
    (el editor es un componente que forma parte de un bloque y ese bloque a su vez continene
        mas componentes como el de alinear texto agregar  texto hipervinculos etc)*/
registerBlockType('lapizzeria/boxes',{
    title: 'Pizzeria cajas',
    icon: { src: Logo },
    category:'lapizzeria',
    /*en edit son los valores que se van a editar  */
    edit: () => {
        return(
           <h1>Se ve en el editor</h1>  
        )
    },
    /*save muestra lo que el usuario guarda en la base de datos */
    save:() => {
        return(
            <h1>Se ve en el frontend</h1>  
        )
    }
});

/**Video 155**/