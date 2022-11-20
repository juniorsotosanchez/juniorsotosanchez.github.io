<?php 
require 'includes/funciones.php';
incluirTemplate ('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.svg" type="image/webp">
                        <source srcset="build/img/blog1.svg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.svg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="https://urbania.pe/">
                        <h4>Urbania</h4>
                        <p class="informacion-meta">Escrito el: <span>20/11/2022</span> por: <span>Admin</span> </p>

                        <p>
                        Encuentra tu lugar.Revisa los departamentos que bajaron de precio
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.svg" type="image/webp">
                        <source srcset="build/img/blog2.svg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.svg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="https://www.adondevivir.com/departamentos-en-venta-en-lima.html">
                        <h4>Venta de departamentos</h4>
                        <p class="informacion-meta">Escrito el: <span>20/11/2021</span> por: <span>Admin</span> </p>

                        <p>
                            La mejor opcion a solo un isntante, comunicate con nosotros ¡ya!
                        </p>
                    </a>
                </div>
            </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.png" type="image/webp">
                    <source srcset="build/img/blog3.png" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.png" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="https://www.ciudaris.com/blog/comprar-un-departamento-lima/">
                    <h4>Consejos para comprar un departamento en Lima</h4>
                    <p class="informacion-meta">Escrito el: <span>22/10/2022</span> por: <span>Admin</span> </p>

                    <p>
                    Si se trata del primer inmueble que adquieres, sin duda te vendrán bien algunos consejos para comprar un departamento. Para ayudarte a tomar una mejor decisión, en el siguiente artículo te mostraremos varios factores a considerar.
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.svg" type="image/webp">
                    <source srcset="build/img/blog4.svg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.svg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="https://www.lamudi.com.pe/lima/lima-1/departamento/buy/">
                    <h4>La mejor pagina en venta de depas</h4>
                    <p class="informacion-meta">Escrito el: <span>02/10/2019</span> por: <span>Admin</span> </p>

                    <p>
                    Resultados encontrados para Venta de Departamentos en Lima - Comprar Departamento
                    </p>
                </a>
            </div>
        </article>
    </main>

    <?php 
incluirTemplate ('footer');
?>