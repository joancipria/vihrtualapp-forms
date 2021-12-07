<?php include('form.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - VIHrtual-App</title>
    <link rel="stylesheet" href="./css/bulma.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/qrcode.min.js"></script>
</head>

<body>
    <section class="section">
        <div class="container">
        </div>
        <div id="tab-content" class="container">
            <form id="form" action="./sendForm.php" method="post">

                <input id="id" name="id" type="text" hidden>

                <span class="is-active" data-content="1">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <h1 class="title">Encuesta VIHrtual-App</h1>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">1. General</p>
                                </header>
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

                        </div>
                    </div>
                </span>
                <span data-content="2">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <?php
                                $hivCounter = 1;
                                
                                // For each HIV-KQ-18 question
                                foreach($hiv18 as $text) {
                                    // Set answer id
                                    $id = 'k'. $hivCounter;

                                    // Render answer
                                    printTrueFalseQuestion($text,$id, "2. Conocimiento previo");
                                    
                                    $hivCounter +=1;
                                }
                                ?>
                        </div>
                    </div>
                </span>
                <span data-content="2">
                    <div class="columns">
                        <div class="column has-text-centered is-half is-offset-one-quarter">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title subtitle">3. Acceder a VIHrtual-App</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <div id="qrcode"></div>
                                        <h2 class="subtitle">Escanea el código QR con tu móvil y accede a VIHrtual-App
                                        </h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
                <span data-content="2">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <?php
                            // For each HIV-KQ-18 question
                            foreach($hiv18 as $text) {
                                // Set answer id
                                $id = 'k'. $hivCounter;

                                // Render answer
                                printTrueFalseQuestion($text,$id, "4. Conocimiento posterior");
                                $hivCounter +=1;
                            }
                        ?>
                        </div>
                    </div>
                </span>
                <span data-content="2">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <?php
                                $cuqCounter = 1;
                                
                                // For each HIV-KQ-18 question 
                                foreach($cuq as $text) {
                                    // Set answer id
                                    $id = 'c'. $cuqCounter;

                                    printScaleQuestion($text,$id, "5. Usabilidad");
                                    $cuqCounter +=1;
                                }
                            ?>
                            <div class="field is-grouped is-grouped-centered">
                                <div class="control">
                                    <input type="submit" class="button is-link" value="Enviar">
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
    </script>

</body>

</html>