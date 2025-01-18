<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Muchas Gracias</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?= base_url() ?>public/template/img/logo_letra.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?= base_url() ?>public/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/template/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/template/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?= base_url() ?>public/template/css/custom.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Hace que el contenedor ocupe toda la altura de la pantalla */
            background-color: #f4f4f4; /* Cambia este color según sea necesario */
        }
    </style>

    <script type="text/javascript">
        function delayedRedirect() {
            window.location = "../review-wizard-version.html"
        }
    </script>

</head>
<!--<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">-->

<body style="background-color:#fff;">
    <input type="hidden" id="urlbase" value="<?= base_url() ?>">
    <div id="success">
        <div class="icon icon--order-success svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
            </svg>
        </div>
        <h4 data-section="final" data-value="title">"¡Muchas gracias por tu tiempo, 😊 Tu opinión es muy valiosa para nosotros! 💙"</h4>
        <button type="button" class="btn btn-warning" data-section="final" data-value="descuento">DESCUENTO EN SU PROXIMA VISITA DEL 20%</button>
        <div>
            <a href="https://wa.me/51951307467?text=Hola,%20me%20gustaría%20más%20información" target="_blank" class="btn btn-success mt-3" data-section="final" data-value="chat">CHATEA CON NOSOTROS</a>
        </div>
        
    </div><!-- END SEND MAIL SCRIPT -->

    <script>
        const urlbase = document.getElementById('urlbase').value;

        const savedLanguage = localStorage.getItem('language-britto') || 'es';
        

        const urlLanguage = `${urlbase}public/languages/${savedLanguage}.json`;

        loadLanguage(urlLanguage);

        const textsToChange = document.querySelectorAll("[data-section]");

        function loadLanguage(url) { // Nombre del archivo de traducción (es.json o en.json)
    
        // Cargar el archivo de traducción
        fetch(url)
                .then(res => res.json())
                .then(data => {
                    textsToChange.forEach((el) => {
                        const section = el.dataset.section;
                        const value = el.dataset.value;

                        el.innerHTML = data[section][value];
                    })
                })
            .catch(error => console.error('Error al cargar el archivo de traducción:', error));
        }
    </script>

</body>

</html>