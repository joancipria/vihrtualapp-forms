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
                <input id="device" name="device" type="text" hidden>
                <div class="columns">
                    <div class="column is-half is-offset-one-quarter">
                        <h1 class="title">Encuesta VIHrtual-App</h1>
                        <ul class="steps is-horizontal">
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
                                        <i data-feather="check"></i>
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
                                    <p class="card-header-title subtitle">1. Consentimiento</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Bienvenido y gracias por participar en esta prueba. La Universitat Polit??cnica de Val??ncia junto con el Hospital de Elche est?? desarrollando un <strong>chatbot</strong> para ofrecer <strong>informaci??n sobre el VIH y el SIDA</strong>. Actualmente deseamos ver si funciona como se pretende, y para ello estamos realizando un peque??o estudio.<br><br> 
                                        Para participar en la prueba primero <strong>debes leer <a target="_blank" href="terms.html">los t??rminos y condiciones</a> y, si estas de acuerdo, dar tu consentimiento marcando la casilla "He le??do y acepto los t??rminos y condiciones"</strong>.<br><br>Te recordamos que los datos compartidos est??n sujetos al RGPD, <strong>son an??nimos y tienen como ??nico fin la investigaci??n</strong>. Una vez aceptados, pulsa 'Siguiente' para empezar.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label checkbox">
                                            <input name="agree" type="checkbox" required>
                                            He le??do y acepto los <a target="_blank" href="terms.html">t??rminos y condiciones</a>.
                                            </label>
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
                                    <p class="card-header-title subtitle">2. General</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">
                                        Muchas gracias por participar en este estudio. Durante la prueba te pediremos que rellenes una serie de encuestas y pruebes el chatbot para que nos puedas dar tu opini??n. <strong>Lee y sigue atentamente las instrucciones que se indiquen</strong> en cada paso y pulsa el bot??n 'Siguiente' para avanzar.<br><br> Para empezar, rellena los siguientes datos:

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">Edad</label>
                                            <div class="control has-icons-right">
                                                <input name="age" class="input" type="number" min="12" max="80"
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
                                            <label class="label">G??nero</label>
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
                                                    Educaci??n superior
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
                                            <label class="label">??Sabes qu?? es un chatbot?</label>
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" value="si" name="exp1" required>
                                                    S??
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
                                            <label class="label">??Has utilizado alguna vez un chatbot?</label>
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" value="si" name="exp2" required>
                                                    S??
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
                                    <p class="card-header-title subtitle">2. Conocimiento previo</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">A continuaci??n deseamos conocer tu conocimiento actual sobre el VIH. <strong>Indica si las siguientes afirmaciones son verdaderas o falsas</strong>. En caso de no saber la respuesta, no te preocupes, simplemente marca la opci??n 'No lo s??'.</p>
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
                                    printTrueFalseQuestion($text[0],$id, $text[1]);
                                    
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
                <!-- <span class="form-section">
                    <div class="columns">
                        <div class="column has-text-centered is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">3. Acceder a VIHrtual-App</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Ha llegado el momento de probar VIHrtual-App y realizarle algunas preguntas al chatbot. Para ello, <strong>utiliza tu tel??fono m??vil y escanea el c??digo QR para acceder a la aplicaci??n</strong>. Una vez hayas accedido, pulsa 'Siguiente' para conocer los siguientes pasos.<br><br> En caso de no poder escanear el c??digo, accede desde el ordenador haciendo click sobre el enlace situado debajo del QR 'Acceder manualmente'.</p>
                                    </div>
                                </div> 
                                <div class="card-content">
                                    <div class="content">
                                        <p class="instructions">Ha llegado el momento de probar VIHrtual-App y realizarle algunas preguntas al chatbot. Para ello, <strong>pulsa el bot??n 'Acceder al chatbot' situado m??s abajo</strong>. Observar??s como se abre una nueva pesta??a en tu navegador. Llegado este momento, <strong>no interact??es todav??a con la aplicaci??n. Vuelve a este formulario y pulsa 'Siguiente' para conocer los siguientes pasos.</strong><br><br> Si en alg??n momento cierras la pesta??a con la aplicaci??n, no te preocupes, <strong>vuelve a esta secci??n y pulsa de nuevo sobre el bot??n para acceder</strong>.</p>
                                        <a class="button" target="_blank" id="manualLink" href="">Acceder al chatbot</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div id="qrcode"></div>
                                        <a target="_blank" id="manualLink" href="">Acceder manualmente</a>
                                        <h2 class="subtitle">Escanea el c??digo QR con tu m??vil y accede a VIHrtual-App
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
                </span> -->
                <span class="form-section">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">3. Tareas</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <!-- <p class="instructions">Una vez has accedido a VIHrtual-App te vamos a pedir que realices unas <strong>peque??as tareas</strong>. Estas consisten simplemente en hacerle algunas preguntas al chatbot y que te las conteste dentro de un tiempo limitado.<br><br> A continuaci??n puedes leer las tareas a llevar a cabo. <strong>Ejec??talas una por una y preg??ntale al chatbot todo aquello que consideres necesario para conseguir el objetivo descrito. Tienes 2 minutos para cada tarea, quien te ha proporcionado esta encuesta te indicar?? cu??ndo se ha agotado el tiempo.</strong></p> -->
                                        <!-- <p class="instructions">Una vez has accedido a VIHrtual-App te vamos a pedir que realices unas <strong>peque??as tareas</strong>. Estas consisten simplemente en hacerle algunas preguntas al chatbot y que te las conteste dentro de un tiempo limitado.<br><br> A continuaci??n puedes leer las tareas a llevar a cabo. <strong>Ejec??talas una por una y preg??ntale al chatbot todo aquello que consideres necesario para conseguir el objetivo descrito. Tienes 2 minutos para cada tarea, pero no te preocupes, son muy f??ciles de hacer ????.</strong><br><br>Cuando est??s listo, <strong>vuelve a la pesta??a del chatbot y pulsa 'Empezar' para comenzar</strong> a hacer las tareas. Cuando hayas terminado, <strong>vuelve al formulario y pulsa 'Siguiente' para avanzar</strong>.</p> -->
                                        <p class="instructions">
                                        Ha llegado el momento de probar VIHrtual-App, y para ello te vamos a pedir que realices una serie de peque??as tareas. Estas consisten en hacerle algunas preguntas al chatbot y que te las conteste dentro de un tiempo limitado.
                                        <br><br>
                                        A continuaci??n puedes leer las tareas que debes llevar a cabo. <strong>Ejec??talas una por una y preg??ntale al chatbot todo aquello que consideres necesario para conseguir el objetivo descrito. Tienes 2 minutos para cada tarea</strong>, pero no te preocupes, son muy f??ciles de hacer ????. ??chales un vistazo primero:
                                        <br><br>
                                        <h3>Tarea 1</h3>
                                        <p><strong>Objetivo:</strong> Averigua qu?? es el VIH.</p>

                                        <h3>Tarea 2</h3>
                                        <p><strong>Objetivo:</strong> Averigua qu?? s??ntomas presenta el VIH.</p>

                                        <h3>Tarea 3</h3>
                                        <p><strong>Objetivo:</strong> Averigua c??mo se transmite el VIH.</p>

                                        <h3>Tarea 5</h3>
                                        <p><strong>Objetivo:</strong> Averigua qu?? es la transmisi??n vertical.</p>

                                        <h3>Tarea 5</h3>
                                        <p><strong>Objetivo:</strong> Averigua si se contin??a investigando sobre el VIH.</p>

                                        <h3>Tarea 6</h3>
                                        <p><strong>Objetivo:</strong> Averigua c??mo puedes realizarte una prueba de detecci??n de VIH.</p>
                                        <br><br>
                                        Cuando est??s listo, <strong>pulsa el bot??n 'Acceder al chatbot' situado m??s abajo para abrir VIHrtual-App</strong>. Observar??s como se abre una nueva pesta??a en tu navegador. <strong>Dentro del chatbot pulsa 'Empezar' para comenzar a hacer las tareas. Cuando hayas terminado, vuelve al formulario y pulsa 'Siguiente' para avanzar.</strong></p>
                                        <div class="mt-6 mb-5" style="width: 100%; text-align: center">
                                            <a class="button" target="_blank" id="manualLink" href="">Acceder al chatbot</a>
                                        </div>
                                        <br>                                      
                                        <p class="instructions">Si en alg??n momento cierras la pesta??a con la aplicaci??n, no te preocupes, vuelve a esta secci??n y pulsa de nuevo sobre el bot??n para acceder.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <h3>Tarea 1</h3>
                                        <p><strong>Objetivo:</strong> Averigua qu?? es el VIH y qu?? s??ntomas presenta.</p>

                                        <h3>Tarea 2</h3>
                                        <p><strong>Objetivo:</strong> Averigua c??mo se transmite el VIH.</p>

                                        <h3>Tarea 3</h3>
                                        <p><strong>Objetivo:</strong> Averigua qu?? es la transmisi??n vertical.</p>

                                        <h3>Tarea 4</h3>
                                        <p><strong>Objetivo:</strong> Averigua si se contin??a investigando sobre el VIH.</p>

                                        <h3>Tarea 5</h3>
                                        <p><strong>Objetivo:</strong> Averigua c??mo puedes realizarte una prueba de detecci??n de VIH.</p>

                                    </div>
                                </div>
                            </div> -->

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
                                        <p class="instructions">Tras utilizar el chatbot deseamos saber si tus conocimientos sobre el VIH han mejorado. Para ello, <strong>responde de nuevo</strong> a la encuesta anterior. <strong>Indica si las siguientes afirmaciones son verdaderas o falsas</strong>. En caso de no saber la respuesta, no te preocupes, simplemente marca la opci??n 'No lo s??'.</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            // For each HIV-KQ-18 question
                            foreach($hiv18 as $text) {
                                // Set answer id
                                $id = 'k'. $hivCounter;

                                // Render answer
                                printTrueFalseQuestion($text[0],$id, $text[1]);
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
                                        <p class="instructions">Por ??ltimo, queremos que valores tu experiencia con VIHrtual-App. <strong>Valora tu conformidad con las siguientes afirmaciones utilizando una escala del 1 al 5, siendo 1 que est??s totalmente en desacuerdo y el 5 totalmente de acuerdo</strong>.<br><br> Una vez contestadas todas la preguntas, pulsa 'Enviar' para finalizar la prueba.</p>
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
                            <?php
                                $susCounter = 1;
                                
                                // For each HIV-KQ-18 question 
                                foreach($sus as $text) {
                                    // Set answer id
                                    $id = 's'. $susCounter;

                                    printScaleQuestion($text,$id);
                                    $susCounter +=1;
                                }
                            ?>
                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">Comentarios adicionales</label>
                                            <div class="control">
                                                <textarea name="comments" class="textarea" placeholder="??C??mo ha sido tu experiencia? ??Has tenido alg??n problema?"></textarea>
                                            </div>
                                        </div>
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
                                        <p>Muchas gracias por participar.</p>
                                        <!-- <br>
                                        <a href="index.php" class="button is-link">Nueva encuesta</a> -->
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
        const id = "upv"+random.toString(36).substr(2, random.length);

        // Fill hidden input with ID
        document.getElementById("id").value = id;

        // Generate QR code with ID param
        //var qrcode = new QRCode("qrcode");
        //qrcode.makeCode("http://vihrtualapp.gti-ia.upv.es?id=" + id);
        document.getElementById("manualLink").href = "http://vihrtualapp.gti-ia.upv.es?id=" + id;
        
        document.getElementById('device').value = navigator.userAgent || '';
        // Feather icons
        feather.replace();
    </script>
    <script src="js/form.js"></script>

</body>

</html>