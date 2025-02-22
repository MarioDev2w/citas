@extends('adminlte::page') @section('title', 'Dashboard')
@section('content_header')


<div id="features" class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Peritaje</h2>
                <p class="p-heading">
                    El peritaje de vehículos es un proceso técnico y
                    especializado que tiene como objetivo evaluar el estado
                    general de un vehículo. Este análisis se realiza para
                    determinar su valor, detectar posibles daños, verificar su
                    estado mecánico, eléctrico y estético, y asegurar que cumple
                    con las normativas de seguridad.
                </p>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab"
                            aria-controls="tab-1" aria-selected="true"><i class="fas fa-list"></i>Importancia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab"
                            aria-controls="tab-2" aria-selected="false"><i
                                class="fas fa-envelope-open-text"></i>Tipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab"
                            aria-controls="tab-3" aria-selected="false"><i class="fas fa-chart-bar"></i>Aplicaciones</a>
                    </li>
                </ul>
                <!-- end of tabs links -->

                <!-- Tabs Content -->
                <div class="tab-content" id="argoTabsContent">
                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image-container">
                                    <img src="{{
                                            asset(
                                                'img/asesora comerci 3381ccc1-08ed-4bf2-bf64-d90035f55cf9.png'
                                            )
                                        }}" width="500" height="350" alt="Asesora Comercia" />
                                </div>
                                <!-- end of image-container -->
                            </div>
                            <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="text-container">
                                    <h3>
                                        Importancia del Peritaje de Vehículos
                                    </h3>
                                    <p>
                                        Compradores: Permite conocer el estado
                                        real del vehículo antes de adquirirlo,
                                        evitando sorpresas desagradables y
                                        asegurando una compra segura.
                                    </p>
                                    <p>
                                        Vendedores: Ayuda a establecer un precio
                                        justo y a demostrar la transparencia de
                                        la transacción, lo que genera confianza
                                        en los potenciales compradores.
                                    </p>
                                    <p>
                                        Seguros: Es fundamental para las
                                        aseguradoras para valorar el vehículo
                                        correctamente en caso de siniestro o
                                        para la renovación de pólizas.
                                    </p>
                                    <ul class="list-unstyled li-space-lg"></ul>
                                </div>
                                <!-- end of text-container -->
                            </div>
                            <!-- end of col -->
                        </div>
                        <!-- end of row -->
                    </div>
                    <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image-container">
                                    <img src="{{
                                            asset(
                                                'img/asesora comerci 3381ccc1-08ed-4bf2-bf64-d90035f55cf9.png'
                                            )
                                        }}" width="500" height="350" alt="Asesora Comercia" />
                                </div>
                                <!-- end of image-container -->
                            </div>
                            <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="text-container">
                                    <h3>Tipos de Peritaje</h3>
                                    <p>
                                        Peritaje Preventivo: Se realiza de
                                        manera voluntaria para conocer el estado
                                        del vehículo en cualquier momento, sin
                                        que esté vinculado a una transacción de
                                        compra-venta.
                                    </p>
                                    <p>
                                        Peritaje Obligatorio: Es exigido por
                                        algunas normativas o empresas
                                        aseguradoras antes de otorgar una póliza
                                        o para tramitar la renovación de la
                                        misma..
                                    </p>
                                    <p>
                                        Peritaje Judicial: Se lleva a cabo en el
                                        marco de un proceso judicial para
                                        determinar responsabilidades en caso de
                                        accidentes o disputas legales
                                        relacionadas con el vehículo.
                                    </p>
                                </div>
                                <!-- end of text-container -->
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image-container">
                                    <img src="{{
                                            asset(
                                                'img/asesora comerci 3381ccc1-08ed-4bf2-bf64-d90035f55cf9.png'
                                            )
                                        }}" width="500" height="350" alt="Asesora Comercia" />
                                </div>
                                <!-- end of image-container -->
                            </div>
                            <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="text-container">
                                    <h3>
                                        Aplicaciones del Peritaje de Vehículos
                                    </h3>
                                    <p>
                                        Compra y Venta: Es una herramienta
                                        esencial para compradores y vendedores
                                        de vehículos usados. Asegura que ambas
                                        partes estén informadas sobre el estado
                                        real del vehículo, ayudando a establecer
                                        un precio justo.
                                    </p>
                                    <p>
                                        Reclamaciones de Seguro: Después de un
                                        accidente, el peritaje es necesario para
                                        evaluar los daños y determinar el monto
                                        de la indemnización. También se utiliza
                                        para verificar el estado del vehículo
                                        antes de emitir o renovar una póliza de
                                        seguro.
                                    </p>
                                    <p>
                                        Control de Calidad: Algunas empresas
                                        utilizan el peritaje para evaluar flotas
                                        de vehículos antes de ponerlos en
                                        servicio, asegurando que están en
                                        óptimas condiciones.
                                    </p>

                                    <a class=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-container">
    <div class="card">
        <details class="warning">
            <summary>Carrocería y chasís</summary>
            <p>
                En esta parte del peritaje de vehículo se evalúa el estado de la
                pintura con medidor de espesor así como también se tendrán en
                cuenta los rayones o portazos y verificación puntas de chasís.
            </p>
        </details>

        <details class="info" open>
            <summary>Suspensión</summary>
            <p>
                Inspección de fugas y estado físico de: espirales,
                amortiguadores rótulas, muñecos, bujes, terminales, tijeras,
                soportes, dirección, entre otros.
            </p>
        </details>

        <details class="alert">
            <summary>Frenos</summary>
            <p>Discos, pastillas, caliper y líquido de frenos en mangueras o conexiones.</p>

        </details>
    </div>

    <div class="card">


        <details class="warning">
            <summary>Estado de las llantas</summary>
            <p>Se verifica la vida útil aproximada de las llantas, nivel de presión de aire, estado del rin, llanta de
                repuesto, copas de seguridad, tapas centro rin y copas rin.</p>

        </details>

        <details class="info" open>
            <summary>Estado interior del vehículo</summary>
            <p>Estado del interior sillas, tapetes, alfombras, carteras, millaré, aire acondicionado, entre otros.</p>

        </details>

        <details class="alert">
            <summary> Motor</summary>
            <p>En la evaluación de motor del peritaje completo se verifican soportes de motor, posibles fugas superiores
                e inferiores, niveles de líquidos, estado del aceite, se realiza prueba de ruidos con el fin de detectar
                posibles fallas internas y prueba de compresión para determinar la vida útil y el estado del motor según
                los psi de cada cilindro. ***El proceso de compresion en el peritaje esta sujeto a la accesibilidad de
                los cilindros, este proceso no aplica para todo los vehículos. si el sistema de admisión de áire del
                motor esta por encima de tal forma que impide el acceso a los cilindros, se procedera a realizar pruebas
                alternativas a la compresion de motor.</p>

        </details>
    </div>
</div>

<style>
    /*
Native <details> element styling
AUTHOR: https://codepen.io/nicolasjengler 

+ replaced list-item styling with flex and pseudo-element content on summary => vertically aligned sign with summary content
+ added selection and focus outline matching detail style
+ addede custom list-style-type
  - corona-warning  
  - corona-info
  - corona-alert
+ fix body height –> min-height: 
  allow scroll on all details opened
*/

    /* Añadir display: flex a la clase card-container */

    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap");

    :root {
        --color-summary-1: #fff6ee;
        --color-summary-1-highlight: #ffc48b;
        --color-summary-2: #fafaff;
        --color-summary-2-highlight: #b4b3ff;
        --color-summary-3: #fff0f3;
        --color-summary-3-highlight: #ffb3c0;

        --font-ibm-plex-sans: "IBM Plex Sans", sans-serif;
    }

    

    .card-container {
        display: flex;
        gap: 20px;
        /* Espacio entre las tarjetas */
        justify-content: center;
        /* Centra horizontalmente las tarjetas */
        flex-wrap: wrap;
        /* Permite que las tarjetas se envuelvan si no hay suficiente espacio */
        max-width: 100%;
        /* Asegura que las tarjetas no se salgan del contenedor */
    }

    .card {
        background: rgb(246, 241, 241);
        padding: 38px 36px;
        margin-top: 40px;
        margin-bottom: 40px;
        border-radius: 4px;
        box-shadow: 0 8px 10px rgba(0, 0, 0, 0.1);
        max-width: 30em;
        width: 100%;
        flex: 1 1 45%;
        /* Cada tarjeta ocupa el 45% del ancho disponible */
        box-sizing: border-box;
    }

    h1 {
        font-family: var(--font-ibm-plex-sans);
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        line-height: 1.2;
        color: var(--color-title);
        margin-bottom: 20px;
    }

    details {
        border-radius: 5px;
        overflow: hidden;
        background: rgba(0, 0, 0, 0.05);
        border-left: 15px solid gray;
        padding: 15px;
        margin-top: 15px;
    }

    details.warning {
        background: var(--color-summary-1);
        border-left-color: var(--color-summary-1-highlight);
    }

    details.info {
        background: var(--color-summary-2);
        border-left-color: var(--color-summary-2-highlight);
    }

    details.alert {
        background: var(--color-summary-3);
        border-left-color: var(--color-summary-3-highlight);
    }

    summary,
    p {
        font-family: var(--font-ibm-plex-sans);
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        color: var(--color-title);
        padding: 20px;
        cursor: pointer;
    }

    /* Template: Tivo - SaaS App HTML Landing Page Template
   Author: Inovatik
   Created: Sep 2019
   Description: Master CSS file
*/

    /*****************************************
Table Of Contents:

01. General Styles
02. Preloader
03. Navigation
04. Header
05. Customers
06. Description
07. Features
08. Features Lightboxes
09. Details
10. Video
11. Pricing
12. Testimonials
13. Newsletter
14. Footer
15. Copyright
16. Back To Top Button
17. Extra Pages
18. Sign Up and Log In Pages
19. Media Queries
******************************************/

    /*****************************************
Colors:
- Backgrounds, buttons, bullets, icons - blue #5f4dee
- Backgrounds, light button, light body text - light gray #f3f7fd
- Headings text - black #333
- Body text - dark gray #555
******************************************/

    /******************************/
    /*     01. General Styles     */
    /******************************/

    .btn-solid-reg {
        display: inline-block;
        padding: 1.1875rem 2.125rem 1.1875rem 2.125rem;
        border: 0.125rem solid #5f4dee;
        border-radius: 2rem;
        background-color: #5f4dee;
        color: #fff;
        font: 700 0.875rem/0 "Open Sans", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-solid-reg:hover {
        background-color: transparent;
        color: #5f4dee;
        text-decoration: none;
    }

    .btn-solid-lg {
        display: inline-block;
        padding: 1.375rem 2.625rem 1.375rem 2.625rem;
        border: 0.125rem solid #5f4dee;
        border-radius: 2rem;
        background-color: #5f4dee;
        color: #fff;
        font: 700 0.875rem/0 "Open Sans", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-solid-lg:hover {
        background-color: transparent;
        color: #5f4dee;
        text-decoration: none;
    }

    .btn-outline-reg {
        display: inline-block;
        padding: 1.1875rem 2.125rem 1.1875rem 2.125rem;
        border: 0.125rem solid #5f4dee;
        border-radius: 2rem;
        background-color: transparent;
        color: #5f4dee;
        font: 700 0.875rem/0 "Open Sans", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-reg:hover {
        background-color: #5f4dee;
        color: #fff;
        text-decoration: none;
    }

    .btn-outline-lg {
        display: inline-block;
        padding: 1.375rem 2.625rem 1.375rem 2.625rem;
        border: 0.125rem solid #5f4dee;
        border-radius: 2rem;
        background-color: transparent;
        color: #5f4dee;
        font: 700 0.875rem/0 "Open Sans", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-lg:hover {
        background-color: #5f4dee;
        color: #fff;
        text-decoration: none;
    }

    .btn-outline-sm {
        display: inline-block;
        padding: 0.875rem 1.5rem 0.875rem 1.5rem;
        border: 0.125rem solid #5f4dee;
        border-radius: 2rem;
        background-color: transparent;
        color: #5f4dee;
        font: 700 0.875rem/0 "Open Sans", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-sm:hover {
        background-color: #5f4dee;
        color: #fff;
        text-decoration: none;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.25rem;
    }

    .form-group.has-error.has-danger {
        margin-bottom: 0.625rem;
    }

    .form-group.has-error.has-danger .help-block.with-errors ul {
        margin-top: 0.375rem;
    }

    .label-control {
        position: absolute;
        top: 0.87rem;
        left: 1.25rem;
        color: #555;
        opacity: 1;
        font: 400 0.875rem/1.375rem "Open Sans", sans-serif;
        cursor: text;
        transition: all 0.2s ease;
    }

    /* IE10+ hack to solve lower label text position compared to the rest of the browsers */
    @media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
        .label-control {
            top: 0.9375rem;
        }
    }

    .form-control-input:focus+.label-control,
    .form-control-input.notEmpty+.label-control,
    .form-control-textarea:focus+.label-control,
    .form-control-textarea.notEmpty+.label-control {
        top: 0.125rem;
        opacity: 1;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .form-control-input,
    .form-control-select {
        display: block;
        /* needed for proper display of the label in Firefox, IE, Edge */
        width: 100%;
        padding-top: 1.0625rem;
        padding-bottom: 0.0625rem;
        padding-left: 1.25rem;
        border: 1px solid #c4d8dc;
        border-radius: 0.25rem;
        background-color: #fff;
        color: #555;
        font: 400 0.875rem/1.875rem "Open Sans", sans-serif;
        transition: all 0.2s;
    }

    .form-control-select {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        height: 3rem;
    }

    /* IE10+ hack to solve lower label text position compared to the rest of the browsers */
    @media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
        .form-control-input {
            padding-top: 1.25rem;
            padding-bottom: 0.75rem;
            line-height: 1.75rem;
        }

        .form-control-select {
            padding-top: 0.875rem;
            padding-bottom: 0.75rem;
            height: 3.125rem;
            line-height: 2.125rem;
        }
    }

    select {
        /* you should keep these first rules in place to maintain cross-browser behavior */
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        background-image: url("../images/down-arrow.png");
        background-position: 96% 50%;
        background-repeat: no-repeat;
        outline: none;
    }

    select::-ms-expand {
        display: none;
        /* removes the ugly default down arrow on select form field in IE11 */
    }

    .form-control-textarea {
        display: block;
        /* used to eliminate a bottom gap difference between Chrome and IE/FF */
        width: 100%;
        height: 8rem;
        /* used instead of html rows to normalize height between Chrome and IE/FF */
        padding-top: 1.25rem;
        padding-left: 1.3125rem;
        border: 1px solid #c4d8dc;
        border-radius: 0.25rem;
        background-color: #fff;
        color: #555;
        font: 400 0.875rem/1.75rem "Open Sans", sans-serif;
        transition: all 0.2s;
    }

    .form-control-input:focus,
    .form-control-select:focus,
    .form-control-textarea:focus {
        border: 1px solid #a1a1a1;
        outline: none;
        /* Removes blue border on focus */
    }

    .form-control-input:hover,
    .form-control-select:hover,
    .form-control-textarea:hover {
        border: 1px solid #a1a1a1;
    }

    .checkbox {
        font: 400 0.75rem/1.25rem "Open Sans", sans-serif;
    }

    input[type="checkbox"] {
        vertical-align: -15%;
        margin-right: 0.375rem;
    }

    /* IE10+ hack to raise checkbox field position compared to the rest of the browsers */
    @media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
        input[type="checkbox"] {
            vertical-align: -9%;
        }
    }

    .form-control-submit-button {
        display: inline-block;
        width: 100%;
        height: 3.125rem;
        border: 1px solid #5f4dee;
        border-radius: 1.5rem;
        background-color: #5f4dee;
        color: #fff;
        font: 700 0.875rem/0 "Open Sans", sans-serif;
        cursor: pointer;
        transition: all 0.2s;
    }

    .form-control-submit-button:hover {
        background-color: transparent;
        color: #5f4dee;
    }

    /* Form Success And Error Message Formatting */
    #smsgSubmit.h3.text-center.tada.animated,
    #lmsgSubmit.h3.text-center.tada.animated,
    #nmsgSubmit.h3.text-center.tada.animated,
    #pmsgSubmit.h3.text-center.tada.animated,
    #smsgSubmit.h3.text-center,
    #lmsgSubmit.h3.text-center,
    #nmsgSubmit.h3.text-center,
    #pmsgSubmit.h3.text-center {
        display: block;
        margin-bottom: 0;
        color: #555;
        font-size: 1.125rem;
        line-height: 1rem;
    }

    .help-block.with-errors .list-unstyled {
        color: #555;
        font-size: 0.75rem;
        line-height: 1.125rem;
        text-align: left;
    }

    .help-block.with-errors ul {
        margin-bottom: 0;
    }

    /* end of form success and error message formatting */

    /* Form Success And Error Message Animation - Animate.css */
    @-webkit-keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    .tada {
        -webkit-animation-name: tada;
        animation-name: tada;
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    /* end of form success and error message animation - Animate.css */

    /* Fade-move Animation For Details Lightbox - Magnific Popup */
    /* at start */
    .my-mfp-slide-bottom .zoom-anim-dialog {
        opacity: 0;
        transition: all 0.2s ease-out;
        -webkit-transform: translateY(-1.25rem) perspective(37.5rem) rotateX(10deg);
        -ms-transform: translateY(-1.25rem) perspective(37.5rem) rotateX(10deg);
        transform: translateY(-1.25rem) perspective(37.5rem) rotateX(10deg);
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
        opacity: 1;
        -webkit-transform: translateY(0) perspective(37.5rem) rotateX(0);
        -ms-transform: translateY(0) perspective(37.5rem) rotateX(0);
        transform: translateY(0) perspective(37.5rem) rotateX(0);
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
        opacity: 0;
        -webkit-transform: translateY(-0.625rem) perspective(37.5rem) rotateX(10deg);
        -ms-transform: translateY(-0.625rem) perspective(37.5rem) rotateX(10deg);
        transform: translateY(-0.625rem) perspective(37.5rem) rotateX(10deg);
    }

    /* dark overlay, start state */
    .my-mfp-slide-bottom.mfp-bg {
        opacity: 0;
        transition: opacity 0.2s ease-out;
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing.mfp-bg {
        opacity: 0;
    }

    /* end of fade-move animation for details lightbox - magnific popup */

    /* Fade Animation For Image Lightbox - Magnific Popup */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fadeIn {
        -webkit-animation: fadeIn 0.6s;
        animation: fadeIn 0.6s;
    }

    @-webkit-keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    .fadeOut {
        -webkit-animation: fadeOut 0.8s;
        animation: fadeOut 0.8s;
    }

    /* end of fade animation for image lightbox - magnific popup */

    /*************************/
    /*     02. Preloader     */
    /*************************/
    .spinner-wrapper {
        position: fixed;
        z-index: 999999;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
    }

    .spinner {
        position: absolute;
        top: 50%;
        /* centers the loading animation vertically one the screen */
        left: 50%;
        /* centers the loading animation horizontally one the screen */
        width: 3.75rem;
        height: 1.25rem;
        margin: -0.625rem 0 0 -1.875rem;
        /* is width and height divided by two */
        text-align: center;
    }

    .spinner>div {
        display: inline-block;
        width: 1rem;
        height: 1rem;
        border-radius: 100%;
        background-color: #5f4dee;
        -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    .spinner .bounce1 {
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }

    .spinner .bounce2 {
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }

    @-webkit-keyframes sk-bouncedelay {

        0%,
        80%,
        100% {
            -webkit-transform: scale(0);
        }

        40% {
            -webkit-transform: scale(1);
        }
    }

    @keyframes sk-bouncedelay {

        0%,
        80%,
        100% {
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }

        40% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
    }

    /**************************/
    /*     03. Navigation     */
    /**************************/
    .navbar-custom {
        background-color: #5f4dee;
        box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
        font: 700 0.875rem/0.875rem "Open Sans", sans-serif;
        transition: all 0.2s;
    }

    .navbar-custom .container {
        max-width: 87.5rem;
    }

    .navbar-custom .navbar-brand.logo-image img {
        width: 4.4375rem;
        height: 1.75rem;
    }

    .navbar-custom .navbar-brand.logo-text {
        font: 700 2rem/1.5rem "Open Sans", sans-serif;
        color: #fff;
        text-decoration: none;
    }

    .navbar-custom .navbar-nav {
        margin-top: 0.75rem;
        margin-bottom: 0.5rem;
    }

    .navbar-custom .nav-item .nav-link {
        padding: 0.625rem 0.75rem 0.625rem 0.75rem;
        color: #f7f5f5;
        opacity: 0.8;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .navbar-custom .nav-item .nav-link:hover,
    .navbar-custom .nav-item .nav-link.active {
        color: #fff;
        opacity: 1;
    }

    /* Dropdown Menu */
    .navbar-custom .dropdown:hover>.dropdown-menu {
        display: block;
        /* this makes the dropdown menu stay open while hovering it */
        min-width: auto;
        animation: fadeDropdown 0.2s;
        /* required for the fade animation */
    }

    @keyframes fadeDropdown {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .navbar-custom .dropdown-toggle:focus {
        /* removes dropdown outline on focus */
        outline: 0;
    }

    .navbar-custom .dropdown-menu {
        margin-top: 0;
        border: none;
        border-radius: 0.25rem;
        background-color: #5f4dee;
    }

    .navbar-custom .dropdown-item {
        color: #f7f5f5;
        opacity: 0.8;
        font: 700 0.875rem/0.875rem "Open Sans", sans-serif;
        text-decoration: none;
    }

    .navbar-custom .dropdown-item:hover {
        background-color: #5f4dee;
        color: #fff;
        opacity: 1;
    }

    .navbar-custom .dropdown-items-divide-hr {
        width: 100%;
        height: 1px;
        margin: 0.75rem auto 0.725rem auto;
        border: none;
        background-color: #c4d8dc;
        opacity: 0.2;
    }

    /* end of dropdown menu */

    .navbar-custom .nav-item .btn-outline-sm {
        margin-top: 0.25rem;
        margin-bottom: 1.375rem;
        margin-left: 0.5rem;
        border: 0.125rem solid #fff;
        color: #fff;
    }

    .navbar-custom .nav-item .btn-outline-sm:hover {
        background-color: #fff;
        color: #5f4dee;
    }

    .navbar-custom .navbar-toggler {
        padding: 0;
        border: none;
        color: #fff;
        font-size: 2rem;
    }

    .navbar-custom button[aria-expanded="false"] .navbar-toggler-awesome.fas.fa-times {
        display: none;
    }

    .navbar-custom button[aria-expanded="false"] .navbar-toggler-awesome.fas.fa-bars {
        display: inline-block;
    }

    .navbar-custom button[aria-expanded="true"] .navbar-toggler-awesome.fas.fa-bars {
        display: none;
    }

    .navbar-custom button[aria-expanded="true"] .navbar-toggler-awesome.fas.fa-times {
        display: inline-block;
        margin-right: 0.125rem;
    }

    /*********************/
    /*    04. Header     */
    /*********************/
    .header {
        background-color: #5f4dee;
    }

    .header .header-content {
        padding-top: 8rem;
        padding-bottom: 4rem;
        text-align: center;
    }

    .header .text-container {
        margin-bottom: 3rem;
    }

    .header h1 {
        margin-bottom: 1rem;
        color: #fff;
        font-size: 2.5rem;
        line-height: 3rem;
    }

    .header .p-large {
        margin-bottom: 2rem;
        color: #f3f7fd;
    }

    .header .btn-solid-lg {
        margin-right: 0.5rem;
        margin-bottom: 1.125rem;
        margin-left: 0.5rem;
        border-color: #f3f7fd;
        background-color: #f3f7fd;
        color: #5f4dee;
    }

    .header .btn-solid-lg:hover {
        background: transparent;
        color: #f3f7fd;
    }

    .header .btn-outline-lg {
        border-color: #f3f7fd;
        color: #f3f7fd;
    }

    .header .btn-outline-lg:hover {
        background-color: #f3f7fd;
        color: #5f4dee;
    }

    .header-frame {
        margin-top: -1px;
        /* To remove white margin in FF */
        width: 100%;
        height: 2.25rem;
    }

    /*************************/
    /*     05. Customers     */
    /*************************/
    .slider-1 {
        padding-top: 5rem;
        padding-bottom: 3.25rem;
    }

    .slider-1 .slider-container {
        text-align: center;
    }

    /***************************/
    /*     06. Description     */
    /***************************/
    .cards-1 {
        padding-top: 3.25rem;
        padding-bottom: 3rem;
        text-align: center;
    }

    .cards-1 .h2-heading {
        margin-bottom: 3.5rem;
    }

    .cards-1 .card {
        max-width: 21rem;
        margin-right: auto;
        margin-bottom: 3.5rem;
        margin-left: auto;
        padding: 0;
        border: none;
    }

    .cards-1 .card-image {
        max-width: 16rem;
        margin-right: auto;
        margin-bottom: 2rem;
        margin-left: auto;
    }

    .cards-1 .card-title {
        margin-bottom: 0.5rem;
    }

    .cards-1 .card-body {
        padding: 0;
    }

    /************************/
    /*     07. Features     */
    /************************/
    .tabs {
        padding-top: 8rem;
        padding-bottom: 8.125rem;
        background-color: #f3f7fd;
    }

    .tabs .h2-heading,
    .tabs .p-heading {
        text-align: center;
    }

    .tabs .nav-tabs {
        display: block;
        margin-bottom: 2.25rem;
        border-bottom: none;
    }

    .tabs .nav-link {
        padding: 0.375rem 1rem 0.375rem 1rem;
        border: none;
        color: #86929b;
        font-weight: 700;
        font-size: 1.25rem;
        line-height: 1.75rem;
        text-align: center;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .tabs .nav-link:hover,
    .tabs .nav-link.active {
        background: transparent;
        color: #5f4dee;
    }

    .tabs .nav-link .fas {
        margin-right: 0.625rem;
    }

    .tabs .image-container {
        margin-bottom: 2.75rem;
    }

    .tabs .list-unstyled .fas {
        color: #5f4dee;
        font-size: 0.5rem;
        line-height: 1.625rem;
    }

    .tabs .list-unstyled .media-body {
        margin-left: 0.625rem;
    }

    .tabs #tab-1 h3 {
        margin-bottom: 0.75rem;
    }

    .tabs #tab-1 .list-unstyled {
        margin-bottom: 1.5rem;
    }

    .tabs #tab-2 h3 {
        margin-bottom: 0.75rem;
    }

    .tabs #tab-2 .list-unstyled {
        margin-bottom: 1.5rem;
    }

    .tabs #tab-3 h3 {
        margin-bottom: 0.75rem;
    }

    .tabs #tab-3 .list-unstyled {
        margin-bottom: 1.5rem;
    }

    /***********************************/
    /*     08. Features Lightboxes     */
    /***********************************/
    .lightbox-basic {
        margin: 2.5rem auto;
        padding: 2rem 1.5rem 2rem 1.5rem;
        border-radius: 0.25rem;
        background: #fff;
        text-align: left;
    }

    .lightbox-basic .container {
        padding-right: 0;
        padding-left: 0;
    }

    .lightbox-basic .image-container {
        max-width: 33.75rem;
        margin-right: auto;
        margin-bottom: 3rem;
        margin-left: auto;
    }

    .lightbox-basic h3 {
        margin-bottom: 0.5rem;
    }

    .lightbox-basic hr {
        width: 2.5rem;
        height: 0.125rem;
        margin-top: 0;
        margin-bottom: 0.875rem;
        margin-left: 0;
        border: 0;
        background-color: #5f4dee;
        text-align: left;
    }

    .lightbox-basic h4 {
        margin-bottom: 1rem;
    }

    .lightbox-basic .list-unstyled .fas {
        color: #5f4dee;
        font-size: 0.5rem;
        line-height: 1.625rem;
    }

    .lightbox-basic .list-unstyled .media-body {
        margin-left: 0.625rem;
    }

    .lightbox-basic .btn-outline-reg,
    .lightbox-basic .btn-solid-reg {
        margin-top: 0.75rem;
    }

    /* Signup Button */
    .lightbox-basic .btn-solid-reg.mfp-close {
        position: relative;
        width: auto;
        height: auto;
        color: #fff;
        opacity: 1;
    }

    .lightbox-basic .btn-solid-reg.mfp-close:hover {
        color: #5f4dee;
    }

    /* end of signup Button */

    /* Back Button */
    .lightbox-basic a.mfp-close.as-button {
        position: relative;
        width: auto;
        height: auto;
        margin-left: 0.375rem;
        color: #5f4dee;
        opacity: 1;
    }

    .lightbox-basic a.mfp-close.as-button:hover {
        color: #fff;
    }

    /* end of back button */

    .lightbox-basic button.mfp-close.x-button {
        position: absolute;
        top: -0.125rem;
        right: -0.125rem;
        width: 2.75rem;
        height: 2.75rem;
        color: #707984;
    }

    /***********************/
    /*     09. Details     */
    /***********************/
    .basic-1 {
        padding-top: 7.5rem;
        padding-bottom: 8rem;
    }

    .basic-1 .text-container {
        margin-bottom: 3.75rem;
    }

    .basic-1 .list-unstyled {
        margin-bottom: 1.375rem;
    }

    .basic-1 .list-unstyled .fas {
        color: #5f4dee;
        font-size: 0.5rem;
        line-height: 1.625rem;
    }

    .basic-1 .list-unstyled .media-body {
        margin-left: 0.625rem;
    }

    /*********************/
    /*     10. Video     */
    /*********************/
    .basic-2 {
        padding-top: 8rem;
        padding-bottom: 6.75rem;
        background-color: #f3f7fd;
        text-align: center;
    }

    .basic-2 .image-container {
        margin-bottom: 2rem;
    }

    .basic-2 .image-container img {
        border-radius: 0.75rem;
    }

    .basic-2 .video-wrapper {
        position: relative;
    }

    /* Video Play Button */
    .basic-2 .video-play-button {
        position: absolute;
        z-index: 10;
        top: 50%;
        left: 50%;
        display: block;
        box-sizing: content-box;
        width: 2rem;
        height: 2.75rem;
        padding: 1.125rem 1.25rem 1.125rem 1.75rem;
        border-radius: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    .basic-2 .video-play-button:before {
        content: "";
        position: absolute;
        z-index: 0;
        top: 50%;
        left: 50%;
        display: block;
        width: 4.75rem;
        height: 4.75rem;
        border-radius: 50%;
        background: #5f4dee;
        animation: pulse-border 1500ms ease-out infinite;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    .basic-2 .video-play-button:after {
        content: "";
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 50%;
        display: block;
        width: 4.375rem;
        height: 4.375rem;
        border-radius: 50%;
        background: #5f4dee;
        transition: all 200ms;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    .basic-2 .video-play-button span {
        position: relative;
        display: block;
        z-index: 3;
        top: 0.375rem;
        left: 0.25rem;
        width: 0;
        height: 0;
        border-left: 1.625rem solid #fff;
        border-top: 1rem solid transparent;
        border-bottom: 1rem solid transparent;
    }

    @keyframes pulse-border {
        0% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            opacity: 1;
        }

        100% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            opacity: 0;
        }
    }

    /* end of video play button */

    .basic-2 .p-heading {
        margin-bottom: 1rem;
    }

    /***********************/
    /*     11. Pricing     */
    /***********************/
    .cards-2 {
        padding-top: 7.875rem;
        padding-bottom: 2.25rem;
        text-align: center;
    }

    .cards-2 .h2-heading {
        margin-bottom: 3.75rem;
    }

    .cards-2 .card {
        display: block;
        max-width: 19rem;
        margin-right: auto;
        margin-bottom: 3rem;
        margin-left: auto;
        border: 1px solid #ccd3df;
        border-radius: 0.375rem;
    }

    .cards-2 .card .card-body {
        padding: 2.5rem 2rem 2.75rem 2em;
    }

    .cards-2 .card .card-title {
        margin-bottom: 0.5rem;
        color: #5f4dee;
        font: 700 1.125rem/1.5rem "Open Sans", sans-serif;
    }

    .cards-2 .card .price .currency {
        margin-right: 0.25rem;
        color: #434c54;
        font-weight: 700;
        font-size: 1.5rem;
        vertical-align: 40%;
    }

    .cards-2 .card .price .value {
        color: #434c54;
        font: 700 3.25rem/3.5rem "Open Sans", sans-serif;
        text-align: center;
    }

    .cards-2 .card .frequency {
        font-size: 0.875rem;
    }

    .cards-2 .card .divider {
        height: 1px;
        margin-top: 1.75rem;
        margin-bottom: 2rem;
        border: none;
        background-color: #ccd3df;
    }

    .cards-2 .card .list-unstyled {
        margin-top: 1.875rem;
        margin-bottom: 1.625rem;
        text-align: left;
    }

    .cards-2 .card .list-unstyled .media {
        margin-bottom: 0.5rem;
    }

    .cards-2 .card .list-unstyled .fas {
        color: #5f4dee;
        font-size: 0.875rem;
        line-height: 1.625rem;
    }

    .cards-2 .card .list-unstyled .fas.fa-times {
        margin-left: 0.1875rem;
        margin-right: 0.125rem;
        color: #555;
    }

    .cards-2 .card .list-unstyled .media-body {
        margin-left: 0.625rem;
    }

    /****************************/
    /*     12. Testimonials     */
    /****************************/
    .slider-2 {
        padding-top: 2.75rem;
        padding-bottom: 4rem;
    }

    .slider-2 .slider-container {
        position: relative;
    }

    .slider-2 .swiper-container {
        position: static;
        width: 82%;
        text-align: center;
    }

    .slider-2 .image-wrapper {
        width: 6rem;
        margin-right: auto;
        margin-bottom: 1rem;
        margin-left: auto;
    }

    .slider-2 .image-wrapper img {
        border-radius: 50%;
    }

    .slider-2 .testimonial-text {
        margin-bottom: 0.5rem;
    }

    .slider-2 .testimonial-author {
        color: #333;
    }

    .slider-2 .swiper-button-prev,
    .slider-2 .swiper-button-next {
        width: 1.125rem;
    }

    .slider-2 .swiper-button-prev:focus,
    .slider-2 .swiper-button-next:focus {
        /* even if you can't see it chrome you can see it on mobile device */
        outline: none;
    }

    .slider-2 .swiper-button-prev {
        left: -0.375rem;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2028%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23505c67'%2F%3E%3C%2Fsvg%3E");
        background-size: 1.125rem 1.75rem;
    }

    .slider-2 .swiper-button-next {
        right: -0.375rem;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2028%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23505c67'%2F%3E%3C%2Fsvg%3E");
        background-size: 1.125rem 1.75rem;
    }

    /**************************/
    /*     13. Newsletter     */
    /**************************/
    .form {
        padding-top: 4rem;
        padding-bottom: 6rem;
    }

    .form .text-container {
        margin-bottom: 3.5rem;
        padding: 3.5rem 1rem 2.5rem 1rem;
        border-radius: 0.5rem;
        background-color: #f3f7fd;
    }

    .form h2 {
        margin-bottom: 2.75rem;
        text-align: center;
    }

    .form .icon-container {
        text-align: center;
    }

    .form .fa-stack {
        width: 2em;
        margin-bottom: 0.75rem;
        margin-right: 0.375rem;
        font-size: 1.5rem;
    }

    .form .fa-stack .fa-stack-1x {
        color: #fff;
        transition: all 0.2s ease;
    }

    .form .fa-stack .fa-stack-2x {
        color: #5f4dee;
        transition: all 0.2s ease;
    }

    .form .fa-stack:hover .fa-stack-1x {
        color: #5f4dee;
    }

    .form .fa-stack:hover .fa-stack-2x {
        color: #f3f7fd;
    }

    /**********************/
    /*     14. Footer     */
    /**********************/
    .footer-frame {
        width: 100%;
        height: 1.5rem;
    }

    .footer {
        padding-top: 3rem;
        padding-bottom: 0.5rem;
        background-color: #5f4dee;
    }

    .footer .footer-col {
        margin-bottom: 2.25rem;
    }

    .footer h4 {
        margin-bottom: 0.625rem;
        color: #fff;
    }

    .footer .list-unstyled,
    .footer p {
        color: #f3f7fd;
    }

    .footer .footer-col.middle .list-unstyled .fas {
        color: #fff;
        font-size: 0.5rem;
        line-height: 1.5rem;
    }

    .footer .footer-col.middle .list-unstyled .media-body {
        margin-left: 0.5rem;
    }

    .footer .footer-col.last .list-unstyled .fas {
        color: #fff;
        font-size: 0.875rem;
        line-height: 1.5rem;
    }

    .footer .footer-col.last .list-unstyled .media-body {
        margin-left: 0.625rem;
    }

    .footer .footer-col.last .list-unstyled .fas.fa-globe {
        margin-left: 1rem;
        margin-right: 0.625rem;
    }

    /*************************/
    /*     15. Copyright     */
    /*************************/
    .copyright {
        padding-top: 1rem;
        padding-bottom: 0.375rem;
        background-color: #5f4dee;
        text-align: center;
    }

    .copyright .p-small {
        padding-top: 1.375rem;
        border-top: 1px solid #718ad1;
        color: #f3f7fd;
    }

    .copyright a {
        color: #f3f7fd;
        text-decoration: none;
    }

    /**********************************/
    /*     16. Back To Top Button     */
    /**********************************/
    a.back-to-top {
        position: fixed;
        z-index: 999;
        right: 0.75rem;
        bottom: 0.75rem;
        display: none;
        width: 2.625rem;
        height: 2.625rem;
        border-radius: 1.875rem;
        background: #4f3cda url("../images/up-arrow.png") no-repeat center 47%;
        background-size: 1.125rem 1.125rem;
        text-indent: -9999px;
    }

    a:hover.back-to-top {
        background-color: #4332c5;
    }

    /***************************/
    /*     17. Extra Pages     */
    /***************************/
    .ex-header {
        padding-top: 8rem;
        padding-bottom: 5rem;
        background-color: #5f4dee;
        text-align: center;
    }

    .ex-header h1 {
        color: #fff;
    }

    .ex-basic-1 {
        padding-top: 2rem;
        padding-bottom: 0.875rem;
        background-color: #f3f7fd;
    }

    .ex-basic-1 .breadcrumbs {
        margin-bottom: 1.125rem;
    }

    .ex-basic-1 .breadcrumbs .fa {
        margin-right: 0.5rem;
        margin-left: 0.625rem;
    }

    .ex-basic-2 {
        padding-top: 4.75rem;
        padding-bottom: 4rem;
    }

    .ex-basic-2 h3 {
        margin-bottom: 1rem;
    }

    .ex-basic-2 .text-container {
        margin-bottom: 3.625rem;
    }

    .ex-basic-2 .text-container.last {
        margin-bottom: 0;
    }

    .ex-basic-2 .text-container.dark {
        padding: 1.625rem 1.5rem 0.75rem 2rem;
        background-color: #f3f7fd;
    }

    .ex-basic-2 .image-container-large {
        margin-bottom: 4rem;
    }

    .ex-basic-2 .image-container-large img {
        border-radius: 0.25rem;
    }

    .ex-basic-2 .image-container-small img {
        border-radius: 0.25rem;
    }

    .ex-basic-2 .list-unstyled .fas {
        color: #5f4dee;
        font-size: 0.5rem;
        line-height: 1.625rem;
    }

    .ex-basic-2 .list-unstyled .media-body {
        margin-left: 0.625rem;
    }

    .ex-basic-2 .form-container {
        margin-top: 3rem;
    }

    .ex-basic-2 .btn-outline-reg {
        margin-top: 1.75rem;
    }

    .ex-footer-frame {
        width: 100%;
        height: 2.75rem;
        background-color: #f3f7fd;
    }

    /****************************************/
    /*     18. Sign Up and Log In Pages     */
    /****************************************/
    .ex-2-header {
        padding-top: 9rem;
        background-color: #5f4dee;
        text-align: center;
        min-height: 100vh;
    }

    .ex-2-header h1,
    .ex-2-header p {
        color: #fff;
    }

    .ex-2-header p {
        max-width: 24rem;
        margin-right: auto;
        margin-bottom: 2.5rem;
        margin-left: auto;
    }

    .ex-2-header .form-container {
        max-width: 26rem;
        margin-right: auto;
        margin-left: auto;
        padding: 2.25rem 1.25rem 1.25rem 1.25rem;
        border-radius: 0.5rem;
        background-color: #f3f7fd;
    }

    .ex-2-header .checkbox {
        text-align: left;
    }

    /*****************************/
    /*     19. Media Queries     */
    /*****************************/
    /* Min-width width 768px */
    @media (min-width: 768px) {

        /* General Styles */
        .p-heading {
            width: 85%;
            margin-right: auto;
            margin-left: auto;
        }

        .h2-heading {
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        /* end of general styles */

        /* Header */
        .header .text-container {
            margin-bottom: 4rem;
        }

        .header h1 {
            font-size: 3.5rem;
            line-height: 4.125rem;
        }

        .header .btn-solid-lg {
            margin-bottom: 0;
            margin-left: 0;
        }

        .header-frame {
            height: 5.5rem;
        }

        /* end of header */

        /* Testimonials */
        .slider-2 .swiper-button-prev {
            width: 1.375rem;
            background-size: 1.375rem 2.125rem;
        }

        .slider-2 .swiper-button-next {
            width: 1.375rem;
            background-size: 1.375rem 2.125rem;
        }

        /* end of testimonials */

        /* Newsletter */
        .form .text-container {
            padding: 4rem 2.5rem 3rem 2.5rem;
        }

        .form form {
            margin-right: 4rem;
            margin-left: 4rem;
        }

        /* end of newsletter */

        /* Footer */
        .footer-frame {
            height: 5rem;
        }

        /* end of footer */

        /* Extra Pages */
        .ex-header {
            padding-top: 11rem;
            padding-bottom: 9rem;
        }

        .ex-basic-2 .text-container.dark {
            padding: 2.5rem 3rem 2rem 3rem;
        }

        .ex-basic-2 .form-container {
            margin-top: 0;
        }

        /* end of extra pages */

        /* Sign Up And Log In Pages */
        .ex-2-header {
            padding-top: 11rem;
        }

        .ex-2-header .form-container {
            padding: 2.25rem 1.75rem 1.25rem 1.75rem;
        }

        /* end of sign up and log in pages */
    }

    /* end of min-width width 768px */

    /* Min-width width 992px */
    @media (min-width: 992px) {

        /* Navigation */
        .navbar-custom {
            padding: 2.125rem 1.5rem 2.125rem 2rem;
            background: transparent;
            box-shadow: none;
        }

        .navbar-custom .navbar-nav {
            margin-top: 0;
            margin-bottom: 0;
        }

        .navbar-custom .nav-item .nav-link {
            padding: 0.25rem 0.75rem 0.25rem 0.75rem;
        }

        .navbar-custom .nav-item .nav-link:hover,
        .navbar-custom .nav-item .nav-link.active {
            opacity: 1;
        }

        .navbar-custom.top-nav-collapse {
            padding: 0.5rem 1.5rem 0.5rem 2rem;
            background-color: #5f4dee;
            box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
        }

        .navbar-custom.top-nav-collapse .nav-item .nav-link:hover,
        .navbar-custom.top-nav-collapse .nav-item .nav-link.active {
            color: #fff;
        }

        .navbar-custom .dropdown-menu {
            padding-top: 1rem;
            padding-bottom: 1rem;
            border-top: 0.25rem solid rgba(0, 0, 0, 0);
            border-radius: 0.25rem;
        }

        .navbar-custom.top-nav-collapse .dropdown-menu {
            border-top: 0.25rem solid rgba(0, 0, 0, 0);
            box-shadow: 0 0.375rem 0.375rem 0 rgba(0, 0, 0, 0.02);
        }

        .navbar-custom .dropdown-item {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .navbar-custom .dropdown-items-divide-hr {
            width: 84%;
        }

        .navbar-custom .nav-item .btn-outline-sm {
            margin-top: 0;
            margin-bottom: 0;
            margin-left: 1rem;
        }

        /* end of navigation */

        /* General Styles */
        .p-heading {
            width: 65%;
        }

        .h2-heading {
            width: 60%;
        }

        /* end of general styles */

        /* Header */
        .header .header-content {
            text-align: left;
        }

        .header .text-container {
            margin-top: 4rem;
            margin-bottom: 0;
        }

        .header .image-container {
            position: relative;
            margin-top: 3rem;
        }

        .header .image-container .img-wrapper {
            position: absolute;
            display: block;
            width: 470px;
        }

        .header-frame {
            height: 8rem;
        }

        /* end of header */

        /* Description */
        .cards-1 .card {
            display: inline-block;
            width: 17rem;
            max-width: 100%;
            margin-right: 1rem;
            margin-left: 1rem;
            vertical-align: top;
        }

        .cards-1 .card-image {
            width: 9rem;
        }

        /* end of description */

        /* Features */
        .tabs .nav-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 2.75rem;
        }

        .tabs .nav-link {
            padding-right: 1.25rem;
            padding-left: 1.25rem;
            border-bottom: 2px solid rgb(202, 202, 202);
        }

        .tabs .nav-link:hover,
        .tabs .nav-link.active {
            border-bottom: 2px solid #5f4dee;
        }

        .tabs .image-container {
            margin-bottom: 0;
        }

        /* end of features */

        /* Features Lightboxes */
        .lightbox-basic {
            max-width: 62.5rem;
            padding: 2.5rem 2.5rem 2.5rem 2.5rem;
        }

        .lightbox-basic .image-container {
            max-width: 100%;
            margin-right: 2rem;
            margin-bottom: 0;
            margin-left: 0.5rem;
        }

        .lightbox-basic h3 {
            margin-top: 0.5rem;
        }

        /* end of features lightboxes */

        /* Details */
        .basic-1 {
            padding-top: 8rem;
        }

        .basic-1 .text-container {
            margin-bottom: 0;
        }

        /* end of details */

        /* Video */
        .basic-2 .image-container {
            max-width: 53.125rem;
            margin-right: auto;
            margin-left: auto;
        }

        .basic-2 p {
            width: 65%;
            margin-right: auto;
            margin-left: auto;
        }

        /* end of video */

        /* Pricing */
        .cards-2 .card {
            display: inline-block;
            margin-right: 0.5rem;
            margin-left: 0.5rem;
            vertical-align: top;
        }

        /* end of pricing */

        /* Testimonials */
        .slider-2 .swiper-container {
            width: 92%;
            text-align: left;
        }

        .slider-2 .image-wrapper {
            float: left;
            width: 10rem;
            margin-bottom: 0;
        }

        .slider-2 .text-wrapper {
            max-width: 100%;
            margin-top: 1.25rem;
            margin-left: 13rem;
        }

        .slider-2 .swiper-button-prev {
            left: -0.75rem;
        }

        .slider-2 .swiper-button-next {
            right: -0.75rem;
        }

        /* end of testimonials */

        /* Newsletter */
        .form .text-container {
            width: 55rem;
            margin-right: auto;
            margin-left: auto;
            padding-top: 5rem;
            padding-bottom: 4.5rem;
        }

        .form h2 {
            margin-right: 7rem;
            margin-left: 7rem;
        }

        .form form {
            margin-right: 9rem;
            margin-left: 9rem;
        }

        /* end of newsletter */

        /* Extra Pages */
        .ex-header h1 {
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        .ex-basic-2 {
            padding-bottom: 5rem;
        }

        /* end of extra pages */
    }

    /* end of min-width width 992px */

    /* Min-width width 1200px */
    @media (min-width: 1200px) {

        /* General Styles */
        .h2-heading {
            width: 50%;
        }

        /* end of general styles */

        /* Header */
        .header .header-content {
            padding-top: 11rem;
            padding-bottom: 5rem;
        }

        .header .text-container {
            margin-top: 5.5rem;
            margin-right: 0.5rem;
        }

        .header .image-container {
            margin-top: 1rem;
            margin-left: 1.5rem;
        }

        .header .image-container .img-wrapper {
            width: 630px;
        }

        .header-frame {
            height: 9.375rem;
        }

        /* end of header */

        /* Customer */
        .slider-1 .slider-container {
            margin-right: 3rem;
            margin-left: 3rem;
        }

        /* end of customer */

        /* Description */
        .cards-1 .card {
            width: 18.875rem;
            margin-right: 2rem;
            margin-left: 2rem;
        }

        .cards-1 .card-image {
            width: 12.5rem;
        }

        /* end of description */

        /* Features */
        .tabs .image-container {
            margin-right: 1.5rem;
            margin-left: 1rem;
        }

        .tabs .text-container {
            margin-top: 1.5rem;
            margin-right: 1rem;
            margin-left: 1.5rem;
        }

        /* end of features */

        /* Details */
        .basic-1 .image-container {
            margin-right: 1rem;
            margin-left: 1.5rem;
        }

        .basic-1 .text-container {
            margin-top: 1rem;
            margin-right: 1.5rem;
            margin-left: 1rem;
        }

        .basic-1 h2 {
            margin-bottom: 1rem;
        }

        /* end of details */

        /* Pricing */
        .cards-2 .card {
            width: 19.375rem;
            max-width: 100%;
            margin-right: 1.75rem;
            margin-left: 1.75rem;
        }

        .cards-2 .card .card-body {
            padding-right: 2.25rem;
            padding-left: 2.25rem;
        }

        /* end of pricing */

        /* Testimonials */
        .slider-2 .slider-container {
            width: 64.125rem;
            margin-right: auto;
            margin-left: auto;
        }

        /* end of testimonials */

        /* Newsletter */
        .form .text-container {
            width: 64.75rem;
            padding-top: 6rem;
            padding-bottom: 5.5rem;
        }

        .form h2 {
            margin-right: 12rem;
            margin-left: 12rem;
        }

        .form form {
            margin-right: 15rem;
            margin-left: 15rem;
        }

        /* end of newsletter */

        /* Footer */
        .footer .footer-col.first {
            margin-right: 1.5rem;
        }

        .footer .footer-col.middle {
            margin-right: 0.75rem;
            margin-left: 0.75rem;
        }

        .footer .footer-col.last {
            margin-left: 1.5rem;
        }

        /* end of footer */

        /* Extra Pages */
        .ex-header h1 {
            width: 60%;
            margin-right: auto;
            margin-left: auto;
        }

        .ex-basic-2 .form-container {
            margin-left: 1.75rem;
        }

        .ex-basic-2 .image-container-small {
            margin-left: 1.75rem;
        }

        /* end of extra pages */
    }

    /* end of min-width width 1200px */
</style>

@stop @section('content') @stop @section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css" /> --}} @stop @section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop