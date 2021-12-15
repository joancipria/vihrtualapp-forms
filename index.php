<?php include('form.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta - VIHrtual-App</title>
    <link rel="stylesheet" href="./css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/octoshrimpy/bulma-o-steps/master/bulma-steps.css">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/qrcode.min.js"></script>
</head>

<body>
    <section class="section">
        <div class="container">
        </div>
        <div id="tab-content" class="container">
            <form id="form" action="" method="post">
                <input id="id" name="id" type="text" hidden>
                <div class="columns">
                    <div class="column is-half is-offset-one-quarter">
                        <h1 class="title">Encuesta VIHrtual-App</h1>
                        <ul class="steps">
                            <li class="steps-segment is-active">
                                <span class="steps-marker">
                                    1
                                    <!-- <span class="icon">
                                        <i data-feather="user"></i>
                                    </span> -->
                                </span>
                            </li>
                            <li class="steps-segment">
                                <span class="steps-marker">
                                    2
                                    <!-- <span class="icon">
                                        <i data-feather="clipboard"></i>
                                    </span> -->
                                </span>
                            </li>
                            <li class="steps-segment">
                                <span class="steps-marker">
                                    3
                                    <!-- <span class="icon">
                                        <i data-feather="smartphone"></i>
                                    </span> -->
                                </span>
                            </li>
                            <li class="steps-segment">
                                <span class="steps-marker">
                                    4
                                    <!-- <span class="icon">
                                        <i data-feather="clipboard"></i>
                                    </span> -->
                                </span>
                            </li>
                            <li class="steps-segment">
                                <span class="steps-marker">
                                    5
                                    <!-- <span class="icon">
                                        <i data-feather="clipboard"></i>
                                    </span> -->
                                </span>
                            </li>
                            <li class="steps-segment">
                                <span class="steps-marker">
                                    6
                                    <!-- <span class="icon">
                                        <i data-feather="clipboard"></i>
                                    </span> -->
                                </span>
                            </li>
                            <li class="steps-segment">
                                <span class="steps-marker">
                                    <span class="icon">
                                        <i data-feather="check"></i>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <span class="form-section form-section-active">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">1. General</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Bienvenido y gracias por participar en esta prueba. La Universitat Politècnica de València junto con el Hospital de Elche está desarrollando un <strong>chatbot</strong> para ofrecer <strong>información sobre el VIH y el SIDA</strong>. Actualmente deseamos ver si funciona como se pretende, y para ello estamos realizando un pequeño estudio.<br><br> A continuación te pediremos que rellenes una serie de encuestas y pruebes el chatbot para que nos puedas dar tu opinión. <strong>Lee y sigue atentamente las instrucciones que se indican</strong> en cada paso y pulsa el botón 'Siguiente' para avanzar. <br><br>Para empezar, rellena los siguientes datos y pulsa en el botón 'Siguiente' para continuar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">Edad</label>
                                            <div class="control has-icons-right">
                                                <input name="age" class="input" type="number" min="18" max="100"
                                                    placeholder="Edad" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">Género</label>
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" value="masculino" name="gender" required>
                                                    Masculino
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" value="femenino" name="gender">
                                                    Femenino
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" value="otro" name="gender">
                                                    Otro
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">Estudios</label>
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" value="graduado" name="studies" required>
                                                    Graduado Escolar
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" value="superior" name="studies">
                                                    Educación superior
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" value="superior" name="studies">
                                                    Sin estudios
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">¿Sabes qué es un chatbot?</label>
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" value="si" name="exp1" required>
                                                    Sí
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" value="no" name="exp1">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">¿Has utilizado alguna vez un chatbot?</label>
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" value="si" name="exp2" required>
                                                    Sí
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" value="no" name="exp2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns is-mobile">
                                <div class="column">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <!-- <button type="button" onclick="prev()" class="button is-link">Anterior</button> -->
                                        </div>
                                    </div>                                
                                </div>
                                <div class="column">
                                    <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <button type="button" onclick="next()" class="button is-link">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
                <span class="form-section">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                        <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">2. Conocimiento previo</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Primeramente, deseamos conocer tu conocimiento actual sobre el VIH. <strong>Indica si a las siguientes afirmaciones son verdaderas o falsas</strong>. En caso de no saber la respuesta, no te preocupes, simplemente marca la opción 'No lo sé'.</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $hivCounter = 1;
                                
                                // For each HIV-KQ-18 question
                                foreach($hiv18 as $text) {
                                    // Set answer id
                                    $id = 'k'. $hivCounter;

                                    // Render answer
                                    printTrueFalseQuestion($text,$id);
                                    
                                    $hivCounter +=1;
                                }
                            ?>
                            <div class="columns is-mobile">
                                <div class="column">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="button" onclick="prev()" class="button is-link">Anterior</button>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="column">
                                    <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <button type="button" type="button" onclick="next()" class="button is-link">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </span>
                <span class="form-section">
                    <div class="columns">
                        <div class="column has-text-centered is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">3. Acceder a VIHrtual-App</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Ha llegado el momento de probar VIHrtual-App y realizarle algunas preguntas al chatbot. Para ello, <strong>utiliza tu teléfono móvil y escanea el código QR para acceder a la aplicación</strong>. Una vez hayas accedido, pulsa 'Siguiente' para conocer los siguientes pasos.<br><br> En caso de no poder escanear el código, accede desde el ordenador haciendo click sobre el enlace situado debajo del QR 'Acceder manualmente'.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div id="qrcode"></div>
                                        <a target="_blank" id="manualLink" href="">Acceder manualmente</a>
                                        <h2 class="subtitle">Escanea el código QR con tu móvil y accede a VIHrtual-App
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="columns is-mobile">
                                <div class="column">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="button" onclick="prev()" class="button is-link">Anterior</button>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="column">
                                    <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <button type="button" onclick="next()" class="button is-link">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </span>
                <span class="form-section">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">4. Tareas</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Una vez has accedido a VIHrtual-App te vamos a pedir que realices unas <strong>pequeñas tareas</strong>. Estas consisten simplemente en hacerle algunas preguntas al chatbot y que te las conteste dentro de un tiempo limitado.<br><br> A continuación puedes leer las tareas a llevar a cabo. <strong>Ejecútalas una por una y pregúntale al chatbot todo aquello que consideres necesario para conseguir el objetivo descrito. Tienes 2 minutos para cada tarea, quien te ha proporcionado esta encuesta te indicará cuándo se ha agotado el tiempo.</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <h3>Tarea 1</h3>
                                        <p><strong>Objetivo:</strong> Averigua qué es el VIH y qué síntomas presenta.</p>

                                        <h3>Tarea 2</h3>
                                        <p><strong>Objetivo:</strong> Averigua cómo se transmite el VIH.</p>

                                        <h3>Tarea 3</h3>
                                        <p><strong>Objetivo:</strong> Averigua qué es la transmisión vertical.</p>

                                        <h3>Tarea 4</h3>
                                        <p><strong>Objetivo:</strong> Averigua si se continua investigando sobre el VIH.</p>

                                        <h3>Tarea 5</h3>
                                        <p><strong>Objetivo:</strong> Averigua cómo puedes realizarte una prueba de detección de VIH.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="columns is-mobile">
                                <div class="column">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="button" onclick="prev()" class="button is-link">Anterior</button>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="column">
                                    <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <button type="button" onclick="next()" class="button is-link">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </span>
                <span class="form-section">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">5. Conocimiento posterior</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Tras utilizar el chatbot deseamos saber si tus conocimientos sobre el VIH han mejorado. Para ello, <strong>responde de nuevo</strong> a la encuesta anterior. <strong>Indica si las siguientes afirmaciones son verdaderas o falsas</strong>. En caso de no saber la respuesta, no te preocupes, simplemente marca la opción 'No lo sé'.</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            // For each HIV-KQ-18 question
                            foreach($hiv18 as $text) {
                                // Set answer id
                                $id = 'k'. $hivCounter;

                                // Render answer
                                printTrueFalseQuestion($text,$id);
                                $hivCounter +=1;
                            }
                            ?>

                            <div class="columns is-mobile">
                                <div class="column">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="button" onclick="prev()" class="button is-link">Anterior</button>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="column">
                                    <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <button type="button" onclick="next()" class="button is-link">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </span>
                <span class="form-section">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">6. Usabilidad</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Por último, queremos que valores tu experiencia con VIHrtual-App. <strong>Valora tu conformidad con las siguientes afirmaciones utilizando una escala del 1 al 5, siendo 1 que estás totalmente en desacuerdo y el 5 totalmente de acuerdo</strong>.<br><br> Una vez contestadas todas la preguntas, pulsa 'Enviar' para finalizar la prueba.</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $cuqCounter = 1;
                                
                                // For each HIV-KQ-18 question 
                                foreach($cuq as $text) {
                                    // Set answer id
                                    $id = 'c'. $cuqCounter;

                                    printScaleQuestion($text,$id);
                                    $cuqCounter +=1;
                                }
                            ?>
                            <div class="columns is-mobile">
                                <div class="column">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="button" onclick="prev()" class="button is-link">Anterior</button>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="column">
                                    <div class="field is-grouped is-grouped-right">
                                        <div class="control">
                                            <input type="submit" class="button is-link" value="Enviar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
                <span class="form-section">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter has-text-centered">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">Resultado</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <h1 id="result" class="title"></h1>
                                        <p >Muchas gracias por participar.</p>
                                        <br>
                                        <a href="index.php" class="button is-link">Nueva encuesta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </form>
        </div>
    </section>
    <script>
        // Create unique ID
        const random = Math.random();
        const id = random.toString(36).substr(2, random.length);

        // Fill hidden input with ID
        document.getElementById("id").value = id;

        // Generate QR code with ID param
        var qrcode = new QRCode("qrcode");
        qrcode.makeCode("http://vihrtualapp.gti-ia.upv.es?id=" + id);
        document.getElementById("manualLink").href = "http://vihrtualapp.gti-ia.upv.es?id=" + id;
        
        // Feather icons
        feather.replace();
    </script>
    <script src="js/form.js"></script>

</body>

</html>