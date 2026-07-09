<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icono para pestañas en navegadores web-->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <title>Tutorial CCTV</title>

    <!-- Bootstrap CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Google Fonts -->
        <!-- Tipografías: Montserrat para títulos y Roboto para textos generales -->

        <!-- Optimiza la conexión con los servidores de Google Fonts antes de cargar las fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Carga las familias tipográficas Montserrat y Roboto -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Fin Google Fonts -->

    <!-- Estilos propios -->
    <link rel="stylesheet" href="assets/css/index.css">

</head>

<body class="container-xxl px-0 vh-100 d-flex flex-column bg-body-tertiary">

    <!--Inicio del header -->
    <header class="p-1">

        <!--Inicio Contenedor principal con diseño navbar aun que no es directamente el nav tiene el boton que lleva al navbar  -->
        <div class="navbar bg-white rounded-1 shadow-sm ">

            <!--Inicio Contenedor secundario por defecto configuracion de boostrap -->
            <div class="container-fluid d-flex align-items-center justify-content-center pt-1">

                <!-- Titulo -->
                <h1 class="text-primary fw-bold fs-3">
                    Tutorial mantenimiento preventivo CCTV
                </h1>

            </div>
            <!--Fin Contenedor secundario por defecto configuracion de boostrap -->

        </div>
        <!--Fin Contenedor principal con diseño navbar aun que no es directamente el nav tiene el boton que lleva al navbar  -->   

    </header>
    <!--Fin del header  -->


    <!--Inicio del main esta estructurado para que ocupe todo el espacio disponible ademas permite hacer scroll manteniendo el espacio del header y del footer fijo en la pantalla -->
    <main class="flex-grow-1 overflow-y-auto row px-3 m-0">

        <!-- Inicio contenido del detalles de los pasos -->
        <section class="col-9 py-3 border-secondary border-2 border-end">

            <h2 class="text-primary text-center fs-4">
                Pasos para realizar un mantenimiento preventivo a un sistema de circuito cerrado de television (CCTV)
            </h2>

            <!-- paso 1. -->
            <section id="paso1" class="contenedor-paso">

                <!-- titulo del paso 1 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-5 ">
                        Paso 1. Documentar visualización de camaras en DVR
                    </h3>
                </div>

                <!-- descripcion del paso 1 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Antes de empezar a manipular el sistema, es necesario tomar evidencia de cada una de las camaras conectadas al DVR, si tenia o no visualizacion, hacia donde esta observando y si esta enfocada, todo esto sirve como base para la creacion de un informe de un antes y un despues del mantenimiento.</p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 1 -->
                <div class="contenedor-imagenes-paso">
                    <figure>
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso1_monitor_dvr.png" 
                            alt="Foto de un monitor de la visualizacion de 32 camaras de un grabador donde 15 de ellas no tienen visual"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 1. Visualizacion de camaras antes del mantenimiento
                        </figcaption>
                    </figure>   
                </div>

            </section>


            <!-- paso 2. -->
            <section id="paso2" class="contenedor-paso">

                <!-- titulo del paso 2 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-5 ">
                        Paso 2. Organizar Gabinete de grabadores
                    </h3>
                </div>

                <!-- descripcion del paso 2 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Segun el estado del gabinete si los cables estan en desorden y sueltos, se recomienda ordenarlos, marcarlos y de paso limpiar el gabinete, esto permite identificar rapidamente el cable de cada camara, ademas de proporcionar una manipulacion comoda al momento de intervenir en los grabadores. </p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 2 -->
                <div class="contenedor-imagenes-paso">

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso2_gabinete_desordenado.png" 
                            alt="Foto de un gabinete negro de 80cm de alto que en su contenido hay dos grabadores con todos los cables de todas las diferentes conexiones desordenados"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 2. Gabinete desordenado
                        </figcaption>
                    </figure>

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso2_gabinete_ordenado.png" 
                            alt="Foto del mismo gabinete de la figura 2, pero esta vez ordenado, con cada cable separado y bien agrupado."
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 3. Gabinete ordenado
                        </figcaption>
                    </figure> 
                </div>

            </section>
            

            <!-- paso 3. -->
            <section id="paso3" class="contenedor-paso">

                <!-- titulo del paso 3 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-5 ">
                        Paso 3. Limpiar grabador de video DVR
                    </h3>
                </div>

                <!-- descripcion del paso 3 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Con el tiempo el grabador de las camaras acumula polvo y hollin que hacen que el calor de la tarjeta principal aumente, ademas que bloquea el correcto paso del aire de adentro hacia afuera que pasa a traves del ventilador, por esto es necesario realizar una limpieza profunda dentro del grabador para asi alargar la vida util del equipo, evitando posibles daños por temperaturas extremas. </p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 3 -->
                <div class="contenedor-imagenes-paso">

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso3_grabador_sucio.png" 
                            alt="Imagen que contiene 4 imagenes donde se puede visualizar el estado de un grabador por dentro, el cual se encuentra sucio toda su carcasa y hasta los componentes electronicos"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 4. Grabador desarmado y sucio
                        </figcaption>
                    </figure>

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso3_grabador_limpio.png" 
                            alt="Imagen que contiene 5 imagenes que muestran el mismo grabador anteriormente mencionado pero con todas las partes del mismo limpias y libres de hollin."
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 5. Grabador desarmado y limpio
                        </figcaption>
                    </figure> 
                </div>

            </section>



            <!-- paso 4. -->
            <section id="paso4" class="contenedor-paso">

                <!-- titulo del paso 4 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-5 ">
                        Paso 4. Levantar información de ubicacioón de camaras
                    </h3>
                </div>

                <!-- descripcion del paso 4 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Para poder llevar un control del mantenimiento realizado a cada una de las camaras, se recomienda generar un plano del lugar para asi sobre este dibujar cada una de las camaras, lo que permite determinar claramente su ubicacion a demas de ayudar a agilizar la deteccion de en que punto del grabador esta conectada y que area esta vigilando. </p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 4 -->
                <div class="contenedor-imagenes-paso">

                    <figure class="">
                        <a href="assets/img/paso4_plano_ubicacion_camaras.png" target="_blank" title="Haz clic para ver el plano en tamaño completo">
                            <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso4_plano_ubicacion_camaras.png" 
                            alt="Imagen de un plano de un conjunto de casas, en donde se tiene el croquis de toda el area que abarca el lugar, ademas tiene señalado por medio de un cuadrado y un triangulo las camaras donde se encuentran ubicadas, apuntando hacia donde estan vigilando y con una etiqueta de a que grabador esta conectada y que puerto"
                            >
                        </a>
                        
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 5. Plano ubicacion de camaras (clic para ampliar)
                        </figcaption>
                    </figure>

                </div>

            </section>


            <!-- paso 5. -->
            <section id="paso5" class="contenedor-paso">

                <!-- titulo del paso 5 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-5 ">
                        Paso 5. Limpieza de camaras
                    </h3>
                </div>

                <!-- descripcion del paso 5 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Para hacer una limpieza comoda y adecuadamente, se recomienda desmontar la camara, para ello es util ayudarse de un taladro inalambrico para agilizar el desmonte, una vez desinstalado esta la comodidad de limpiarlo a nivel de piso, eliminando la suciedad acumulado y limpiando el lente con un paño suave, a la vez como ya esta desmontada la camara se debe limpiar la caja que contiene el cargador y el video balum, verificando de una vez la conexiones que no presenten sulfatacion. Un dato importante en algunas instalaciones se puede encontrar malas practicas en la instalacion, como el cable electrico conectado directamente al cargador sin una clavija aerea, e incluso el uso del cable utp para transimitir la corriente AC, cualquiera que sea la anomalia que se encuentre, es recomendable tomar fotos de como se encuentra la instalacion, pues esto permite mostrar los hallazgos y proponer mejorar del mismo, para su adecuado rendimiento. </p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 5 -->
                <div class="contenedor-imagenes-paso">

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso5_limpieza_camaras.png" 
                            alt="Imagen que contiene 6 imagenes donde se ve lo siguiente: 
                            imagen 1 - camara sucia y desmontadas. 
                            imagen 2 - limpieza de la camara.
                            imagen 3 - camara limpia.
                            imagen 4 - caja de conexiones de la camara con cargador, cable utp, cable duplex, video balum, todo los elementos con polvo acumulado.
                            imagen 5 - caja de conexiones limpia.
                            imagen 6 - sujeto subido en una escalera de tijera manipulando una camara y sus conexiones"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 6. Limpieza de camaras y su caja de conexiones
                        </figcaption>
                    </figure>

                </div>

            </section>


            <!-- paso 6. -->
            <section id="paso6" class="contenedor-paso">

                <!-- titulo del paso 6 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-6 ">
                        Paso 6. Revision del cableado
                    </h3>
                </div>

                <!-- descripcion del paso 6 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Es de vital importancia aclarar que esta revision depende mucho del alcance del presupuesto, pues un mantenimiento preventivo no cubre revisar el cableado a fondo ni su reparacion, todo depende del acuerdo inicial que se haya pactado entre ambas partes. En dado caso si es necesario recuperar todas las camaras salvando el material ya instalado, entonces revisar cada una de las cajas de paso para verificar el estado de los empalmes y repararlos si el cable esta aun en continuidad de punta a punta, para esto se recomienda utilizar un generador de tonos, que ayuda a identificar rapidamente los cables y un multimetro para verificar la continuidad de cada uno de los hilos. Para proteger y mejorar el nuevo empalme usar estaño y termoencogible, para que el empalme sea lo mejor posible y su duracion sea mucho mayor, de todas formas en cada una de las cajas de paso verificar que no exista acumulacion de agua o humedad que es la principal causa de averías de los empalmes. De igual manera una camara no deberia tener mas de un emplame, pues con un cable se pueden recoger hasta cuatro camaras, pero en ocasiones se puede encontrar que una sola camara puede llegar a tener 5 empalmes, esto es una muy mala practica y apesar de que se pueda subsanar una vez, para el siguiente mantenimiento es mejor plantear una nueva instalacion del cableado y hasta de la infraestructura de la tuberia. </p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 6 -->
                <div class="contenedor-imagenes-paso">

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso6_caja_paso_antes.png" 
                            alt="Imagen de una caja metalica de 10cm * 10cm, abierta y sucia por dentro, con animales muertos y tierra acumulada, ademas se observan seis cables utp donde de a dos cables estan empalmados cada uno de los hilos entre si, estos empalmes estan protegidos con cinta aislante"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 7. Caja de empalmes antes de intervenir
                        </figcaption>
                    </figure>

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso6_caja_paso_despues.png" 
                            alt="Imagen de la misma caja metalica anterior pero esta se ve limpia, con los empalmes protegidos con termoencoogible bien ordenados."
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 8. Caja de empalmes despues de intervenir
                        </figcaption>
                    </figure>

                </div>

            </section>



            <!-- paso 7. -->
            <section id="paso7" class="contenedor-paso">

                <!-- titulo del paso 7 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-7 ">
                        Paso 7. Enfoque de las camaras
                    </h3>
                </div>

                <!-- descripcion del paso 7 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Aun que este paso se puede hacer en conjunto con los dos anteriores, todo depende de la forma de trabajar y el personal a disposicion, pues aun que parezca doble trabajo ir a una camara hacerle mantenimiento y despues volver a ir para enfocarla, en cuestion de productivad se ve mas efectivo si concentramos las energias a reparar y limpiar, para luego como una satisfaccion enfocar las camaras que es la tarea de menor esfuerzo fisico y mental, de igual manera esta de libre decision del tecnico que realice el mantenimiento. Muy bien en este caso y retomando, se pueden realizar el paso 5, 6 y 7 en conjunto, pues al estar en la camara se verifica si esta funcionando correctamente su video hasta el grabador y en dado caso que no, con ayuda del plano se puede trazar la posible ruta del cable y seguirla para encontrar la falla de la misma, para asi despues poder enfocarla, en donde la idea es aprovechar al maximo la apertura del lente, pues en grabacion de areas nos debemos fijar que no este grabando una pared si no es necesario e incluso que este apuntando al cielo, son dos causas que hacen desaprovechar la capacidad de la camara para grabar un poco mas de amplitud donde si pasa gente constantemente. </p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 7 -->
                <div class="contenedor-imagenes-paso">

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso7_camara_antes_de_enfocar.png" 
                            alt="Imagen de la visualizacion de una camara en un parqueadero en el primer piso al aire libre dentro de un conjunto, donde se ven cuatro carros al lado izquierdo y dos carros al lado derecho, en total se alcanzan a ver 5 estacionamientos del lado izquierdo y tres al lado derecho, la camara se encuentra apuntando muy hacia el suelo"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 9. Ejemplo de camara antes de enfocar
                        </figcaption>
                    </figure>

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso7_camara_despues_de_enfocar.png" 
                            alt="Imagen de la visualizacion de la misma camara anteriore, pero esta vez se alcanza a visualizar hasta el fondo del mismo parqueadero, podiendo apreciar bastantes carros estacionados, la visual mejora considerablemente a comparacion de la anterior"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 10. Ejemplo de camara despues de enfocar
                        </figcaption>
                    </figure>

                </div>

            </section>



            <!-- paso 8. -->
            <section id="paso8" class="contenedor-paso">

                <!-- titulo del paso 8 -->
                <div class="contenedor-titulo-paso">
                    <h3 class="text-primary fs-8 ">
                        Paso 8. Realizar un informe
                    </h3>
                </div>

                <!-- descripcion del paso 8 -->
                <div class="contenedor-descripcion-paso">
                    <p> <span class="fw-bold">Descripcion:</span> Una vez terminado el mantenimiento, para que quede constancia de las actividades realizadas, los hallazgos encontrados, las propuestas de mejora, las aclaraciones del estado de la instalacion y el resultado final de la visualizacion de las camaras en el DVR, se debe realizar un informe con todo este contenido, asi se demuestra el trabajo realizado y se justifica las posibles fallas que se lleguen a presentar en el futuro por malas instalaciones encontradas o deterioro de los elementos que la componen. </p>
                </div>

                <!-- Contenedor de la o las imagenes del paso 8 -->
                <div class="contenedor-imagenes-paso">

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso8_monitor_dvr.png" 
                            alt="Imagen del mismo monitor del paso 1, pero esta vez se visualizan todas las 32 camaras"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 11. Visualizacion de camaras al finalizar el mantenimiento
                        </figcaption>
                    </figure>

                    <figure class="">
                        <img 
                            class="imagen-representativa-paso"
                            src="assets/img/paso8_informe_tecnico.png" 
                            alt="Imagen de un documento pdf abierto desde un navegador, aqui se observan cuatro hojas al costado derecho y al lado izquierdo una previsualizacion de cada una de estas hojas. Este documento es un ejemplo de un informe tecnico, el detalle de la imagen es con el fin de presentar al usuario que el resultado final debe ser un documento entregable, mas alla de su contenido pues este es de libre construccion de la persona"
                        >
                        <figcaption class="mt-2 text-muted small text-center">
                            Figura 12. Informe en pdf
                        </figcaption>
                    </figure>

                </div>

            </section>


        </section>
        <!-- Fin del contenido del detalle de los pasos -->

        <!-- Inicio del menu de navegacion con la lista ordenada de los pasos -->
         <!-- Se usa sticky-top para mantener fijo el menu de navegacion mientras se hace scroll en el contenido de los detalles -->
        <nav class= "col-3 py-3 sticky-top align-self-start">
            <h2 class="text-primary text-center fs-4">
                Menú de navegación
            </h2>

            <ol>
                <li>
                    <a href="#paso1">Documentar visualizacion de camaras en DVR</a>
                </li>

                <li>
                    <a href="#paso2">Organizar Gabinete de grabadores</a>
                </li>

                <li>
                    <a href="#paso3">Limpiar grabador de video DVR</a>
                </li>

                <li>
                    <a href="#paso4">Levantar información de ubicación de camaras</a>
                </li>

                <li>
                    <a href="#paso5">Limpieza de camaras</a>
                </li>

                <li>
                    <a href="#paso6">Revision del cableado</a>
                </li>

                <li>
                    <a href="#paso7">Enfoque de las camaras</a>
                </li>

                <li>
                    <a href="#paso8">Realizar un informe</a>
                </li>

            </ol>
        </nav>
        <!-- Fin del menu de navegacion con la lista ordenada de los pasos -->


    </main>
    <!-- Fin del main  -->


    <!-- Inicio del footer -->
    <footer class="p-1">
        <div class="container-fluid bg-white border-top py-2 text-center text-muted rounded-1">
            <small>&copy; 2026 John Alexander Foreo Rubio. <span class="d-block d-sm-inline">Tutorial mantenimiento preventivo CCTV.</span></small>
        </div>
    </footer>
    <!-- Fin del footer -->




    <!-- Bootstrap JS -->
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="./vendor/iconify/js/iconify-icon.min.js"></script>
    
</body>
</html>
