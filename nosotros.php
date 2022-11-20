<?php 
require 'includes/funciones.php';
incluirTemplate ('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>
                esta es la historia de una empresa impulsada por un espíritu emprendedor que es ejemplo de crecimiento. Desde 1990 nació CONSTRUCCIONES ANDAPREF, una empresa dedicada a aprender de sus clientes. Su experiencia en el mercado de la construcción y la inmobiliaria demuestra que son ellos los que nos enseñan constantemente a optimizar nuestros servicios.

Tan solo siete años después de haberse conformado la entidad da un paso delante de su evolución empresarial pues en 1997 se constituye como sociedad y surge "invent".

En mayo de 1998 la sociedad es afiliada a la Cámara de Comercio de Villavicencio y terminando el siglo XX decidimos ampliar nuestros servicios, afiliándonos a la Red Nacional Inmobiliaria. 

                </p>

            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>La seguridad es sumamente imporatante cuando hablamos del lugar donde vivimos, es por este motivo que tu mejor opcion esta con nostros "invent" por un futuro mas seguro.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Muchas personas se asustan con este tema, "invent" este no es un problema, tenemos departamentos de todos los precios, y tambien se puede pagar en partes, para que asi de una vez pueda adquirir su nueva vida</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.png" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Con nuestros departamentos no tendras poblemas con el tiempo, nuestras viviendas se encuentran en lugares con facil accecibilidad al transporte, llegar tarde sera lo ultimo que te pasara.</p>
            </div>
        </div>
    </section>
    <?php 
incluirTemplate ('footer');
?>