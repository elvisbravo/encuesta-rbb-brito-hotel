<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/wilio/review-wizard-version.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 16:49:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RBB BRITO HOTEL, encuesta sobre satisfacción del cliente">
    <meta name="author" content="RBB BRITO HOTEL">
    <title>RBB BRITO HOTEL | Encuesta</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?= base_url() ?>public/template/img/logo_letra.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url() ?>public/template/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url() ?>public/template/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url() ?>public/template/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url() ?>public/template/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?= base_url() ?>public/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/template/css/menu.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/template/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/template/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?= base_url() ?>public/template/css/custom.css" rel="stylesheet">

    <!-- MODERNIZR MENU -->
    <script src="<?= base_url() ?>public/template/js/modernizr.js"></script>

</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->


    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-6 content-left">
                <div class="content-left-wrapper">
                    <a href="<?= base_url() ?>public/template/index.html" id="logo"><img src="<?= base_url() ?>public/template/img/logo_letra.png" alt="" width="49" height="35"></a>
                    <div id="social">
                        <ul>
                            <li><a href="https://www.facebook.com/rbbbritohoteltpp" target="_blank"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/rbbbritohotel/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="https://www.tiktok.com/@rbbbritohotel?_t=8rwN7wsLnVw&_r=1" target="_blank"><i class="bi bi-tiktok"></i></a></li>
                        </ul>

                    </div>
                    <!-- /social -->
                    <div>
                        <figure><img src="<?= base_url() ?>public/template/img/rbb_brito_sin_fondo.png" alt="" class="img-fluid"></figure>

                        <div id="language-selector">
                            <a href="#" id="lang-es" class="language-option" data-language="es">
                                <img src="<?= base_url() ?>public/template/img/es.svg" alt="Español" width="50">
                            </a>
                            <a href="#" id="lang-en" class="language-option" data-language="en">
                                <img src="<?= base_url() ?>public/template/img/gb.svg" alt="English" width="50">
                            </a>
                        </div>

                        <h2 data-section="landing" data-value="title">Encuesta</h2>
                        <p> <span data-section="landing" data-value="saludo">¡Hola </span> <span><?= $nombre ?>! </span> <span data-section="landing" data-value="description">Queremos saber cómo fue tu experiencia en RBB BRITO HOTEL 4 ESTRELLAS. Tu opinión nos ayuda a crecer y asegurarnos de que tu próxima visita sea aún mejor. Completar esta encuesta solo te tomará unos minutos, y tus respuestas serán muy valiosas para nosotros. ¡Gracias por ayudarnos a mejorar!</span> </p>
                        

                        <a href="#start" class="btn_1 rounded" data-section="landing" data-value="startBtn">Empezar!</a>
                    </div>
                    <div class="copy" data-section="landing" data-value="footer">© 2024 RBB BRITO HOTEL 4 ESTRELLAS</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->

            <div class="col-lg-6 content-right" id="start">
                <div id="wizard_container" class="my-auto">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <input type="hidden" id="urlbase" value="<?= base_url() ?>">
                    <!-- /top-wizard -->
                    <form id="wrapped" method="POST">
                        <input id="website" name="website" type="text" value="">
                        <input type="hidden" name="token" value="<?= $token ?>">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            <div class="step">
                                <h3 class="main_question"><strong>1</strong> <span data-section="encuesta" data-value="pregunta1">¿Cómo fue tu experiencia con el proceso de reserva y la atención recibida en recepción?</span> </h3>
                                <div class="form-group rating_wp clearfix">
                                    <span class="rating">
                                        <input type="radio" class="required rating-input" id="rating-input-1-10" name="rating_input_1" value="10" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-10" class="rating-number">10</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-9" name="rating_input_1" value="9" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-9" class="rating-number">9</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-8" name="rating_input_1" value="8" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-8" class="rating-number">8</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-7" name="rating_input_1" value="7" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-7" class="rating-number">7</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-6" name="rating_input_1" value="6" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-6" class="rating-number">6</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-5" name="rating_input_1" value="5" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-5" class="rating-number">5</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-4" name="rating_input_1" value="4" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-4" class="rating-number">4</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-3" name="rating_input_1" value="3" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-3" class="rating-number">3</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-2" name="rating_input_1" value="2" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-2" class="rating-number">2</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-1" name="rating_input_1" value="1" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-1" class="rating-number">1</label>
                                        <input type="radio" class="required rating-input" id="rating-input-1-0" name="rating_input_1" value="0" onchange="getVals(this, 'rating_input_1');">
                                        <label for="rating-input-1-0" class="rating-number">0</label>
                                    </span>
                                </div>

                            </div>
                            <!-- /step-->
                            <div class="step">
                                <h3 class="main_question"><strong>2</strong><span data-section="encuesta" data-value="pregunta2">¿Qué tan satisfecho/a te sentiste con la limpieza de tu habitación?</span></h3>
                                <div class="form-group rating_wp clearfix">
                                    <span class="rating">
                                        <input type="radio" class="required rating-input" id="rating-input-2-10" name="rating_input_2" value="10" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-10" class="rating-number">10</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-9" name="rating_input_2" value="9" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-9" class="rating-number">9</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-8" name="rating_input_2" value="8" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-8" class="rating-number">8</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-7" name="rating_input_2" value="7" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-7" class="rating-number">7</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-6" name="rating_input_2" value="6" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-6" class="rating-number">6</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-5" name="rating_input_2" value="5" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-5" class="rating-number">5</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-4" name="rating_input_2" value="4" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-4" class="rating-number">4</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-3" name="rating_input_2" value="3" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-3" class="rating-number">3</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-2" name="rating_input_2" value="2" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-2" class="rating-number">2</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-1" name="rating_input_2" value="1" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-1" class="rating-number">1</label>
                                        <input type="radio" class="required rating-input" id="rating-input-2-0" name="rating_input_2" value="0" onchange="getVals(this, 'rating_input_2');">
                                        <label for="rating-input-2-0" class="rating-number">0</label>
                                    </span>
                                </div>
                            </div>
                            <!-- /step-->
                            <div class="step">
                                <h3 class="main_question"><strong>3</strong> <span data-section="encuesta" data-value="pregunta3">¿Qué tan satisfecho/a te sentiste con la atención y amabilidad del personal durante tu estadía en el hotel?</span> </h3>
                                <div class="form-group rating_wp clearfix">
                                    <span class="rating">
                                        <input type="radio" class="required rating-input" id="rating-input-3-10" name="rating_input_3" value="10" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-10" class="rating-number">10</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-9" name="rating_input_3" value="9" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-9" class="rating-number">9</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-8" name="rating_input_3" value="8" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-8" class="rating-number">8</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-7" name="rating_input_3" value="7" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-7" class="rating-number">7</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-6" name="rating_input_3" value="6" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-6" class="rating-number">6</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-5" name="rating_input_3" value="5" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-5" class="rating-number">5</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-4" name="rating_input_3" value="4" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-4" class="rating-number">4</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-3" name="rating_input_3" value="3" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-3" class="rating-number">3</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-2" name="rating_input_3" value="2" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-2" class="rating-number">2</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-1" name="rating_input_3" value="1" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-1" class="rating-number">1</label>
                                        <input type="radio" class="required rating-input" id="rating-input-3-0" name="rating_input_3" value="0" onchange="getVals(this, 'rating_input_3');">
                                        <label for="rating-input-3-0" class="rating-number">0</label>
                                    </span>
                                </div>
                            </div>
                            <!-- /step-->
                            <div class="step">
                                <h3 class="main_question"><strong>4</strong> <span data-section="encuesta" data-value="pregunta4">¿Qué tan satisfecho/a quedó con la calidad de la comida ofrecida en el restaurante durante su estadía?</span> </h3>
                                <div class="form-group rating_wp clearfix">
                                    <span class="rating">
                                        <input type="radio" class="required rating-input" id="rating-input-4-10" name="rating_input_4" value="10" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-10" class="rating-number">10</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-9" name="rating_input_4" value="9" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-9" class="rating-number">9</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-8" name="rating_input_4" value="8" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-8" class="rating-number">8</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-7" name="rating_input_4" value="7" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-7" class="rating-number">7</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-6" name="rating_input_4" value="6" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-6" class="rating-number">6</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-5" name="rating_input_4" value="5" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-5" class="rating-number">5</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-4" name="rating_input_4" value="4" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-4" class="rating-number">4</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-3" name="rating_input_4" value="3" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-3" class="rating-number">3</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-2" name="rating_input_4" value="2" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-2" class="rating-number">2</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-1" name="rating_input_4" value="1" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-1" class="rating-number">1</label>
                                        <input type="radio" class="required rating-input" id="rating-input-4-0" name="rating_input_4" value="0" onchange="getVals(this, 'rating_input_4');">
                                        <label for="rating-input-4-0" class="rating-number">0</label>
                                    </span>
                                </div>
                            </div>
                            <!-- /step-->
                            <div class="step">
                                <h3 class="main_question"><strong>5</strong> <span data-section="encuesta" data-value="pregunta5">¿Qué tan probable es que recomiende el hotel RBB BRITO 4 ESTRELLAS?</span> </h3>
                                <div class="form-group rating_wp clearfix">
                                    <span class="rating-emoticon">

                                        <!-- Opción 1: No recomendaría -->
                                        <input type="radio" class="required rating-input" id="rating-input-5-no" name="rating_input_5" value="no_recomendar" onchange="getVals(this, 'rating_input_5');">
                                        <label for="rating-input-5-no" class="rating-label">
                                            <img src="https://cdn-icons-png.flaticon.com/512/742/742752.png" alt="No recomendaría" class="rating-icon">
                                            <span data-section="emojis" data-value="no-recomendaria">No recomendaría</span>
                                        </label>

                                        <!-- Opción 2: No estoy seguro -->
                                        <input type="radio" class="required rating-input" id="rating-input-5-uncertain" name="rating_input_5" value="no_seguro" onchange="getVals(this, 'rating_input_5');">
                                        <label for="rating-input-5-uncertain" class="rating-label">
                                            <img src="https://cdn-icons-png.flaticon.com/512/742/742774.png" alt="No estoy seguro" class="rating-icon">
                                            <span data-section="emojis" data-value="no-estoy-seguro">No estoy seguro</span>
                                        </label>

                                        <!-- Opción 3: Recomendaría -->
                                        <input type="radio" class="required rating-input" id="rating-input-5-yes" name="rating_input_5" value="recomendar" onchange="getVals(this, 'rating_input_5');">
                                        <label for="rating-input-5-yes" class="rating-label">
                                            <img src="https://cdn-icons-png.flaticon.com/512/742/742751.png" alt="Recomendaría" class="rating-icon">
                                            <span data-section="emojis" data-value="recomendaria">Recomendaría</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <!-- /step-->
                            <div class="submit step">
                                <h3 class="main_question"><strong>6</strong> <span data-section="encuesta" data-value="pregunta6">¿Qué área del hotel considera que necesita más mejora ?</span> </h3>
                                <div class="form-group">
                                    <label class="container_radio version_2"> <span data-section="opciones" data-value="recepcion">Recepción</span>
                                        <input type="checkbox" name="mejorar[]" value="Recepcion" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_radio version_2"> <span data-section="opciones" data-value="reservas">Reservas</span>
                                        <input type="checkbox" name="mejorar[]" value="Reservas" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_radio version_2"> <span data-section="opciones" data-value="restaurante">Restaurante</span>
                                        <input type="checkbox" name="mejorar[]" value="Restaurante" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_radio version_2"> <span data-section="opciones" data-value="bar_piscina">Bar Piscina</span>
                                        <input type="checkbox" name="mejorar[]" value="Bar Piscina" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_radio version_2"> <span data-section="opciones" data-value="habitaciones">Habitaciones</span>
                                        <input type="checkbox" name="mejorar[]" value="Habitaciones" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_radio version_2"> <span data-section="opciones" data-value="cochera">Cochera</span>
                                        <input type="checkbox" name="mejorar[]" value="Cochera" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward" data-section="btnSurvey" data-value="previous">Anterior</button>
                            <button type="button" name="forward" class="forward" data-section="btnSurvey" data-value="next">Siguiente</button>
                            <button type="submit" name="process" class="submit" data-section="btnSurvey" data-value="submit">Enviar</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
    </div>
    <!-- /container-fluid -->

    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <!-- /cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div>
    <!-- /cd-overlay-content -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- COMMON SCRIPTS -->
    <script src="<?= base_url() ?>public/template/js/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url() ?>public/template/js/common_scripts.min.js"></script>
    <script src="<?= base_url() ?>public/template/js/velocity.min.js"></script>
    <script src="<?= base_url() ?>public/template/js/functions.js"></script>

    <!-- Wizard script -->
    <script src="<?= base_url() ?>public/template/js/review_func.js"></script>

</body>

<!-- Mirrored from www.ansonika.com/wilio/review-wizard-version.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 16:49:59 GMT -->

</html>