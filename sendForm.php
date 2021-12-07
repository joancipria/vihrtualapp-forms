<?php require('db.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviado</title>
    <link rel="stylesheet" href="./css/bulma.min.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Success message -->
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column has-text-centered">
                    <h1 class="title">Encuesta enviada con éxito!</h1>
                    <a href="index.php" class="button is-link">Nueva encuesta</a>    
                </div>
            </div>
        </div>
    </section>

<?php 
// Store form result
store(
    $_POST["id"], 
    $_POST["age"], 
    $_POST["gender"], 
    $_POST["studies"], 
    $_POST["exp1"],
    $_POST["exp1"],
    $_POST["k1"],
    $_POST["k2"],
    $_POST["k3"],
    $_POST["k4"],
    $_POST["k5"],
    $_POST["k6"],
    $_POST["k7"],
    $_POST["k8"],
    $_POST["k9"],
    $_POST["k10"],
    $_POST["k11"],
    $_POST["k12"],
    $_POST["k13"],
    $_POST["k14"],
    $_POST["k15"],
    $_POST["k16"],
    $_POST["k17"],
    $_POST["k18"],
    $_POST["k19"],
    $_POST["k20"],
    $_POST["k21"],
    $_POST["k22"],
    $_POST["k23"],
    $_POST["k24"],
    $_POST["k25"],
    $_POST["k26"],
    $_POST["k27"],
    $_POST["k28"],
    $_POST["k29"],
    $_POST["k30"],
    $_POST["k31"],
    $_POST["k32"],
    $_POST["k33"],
    $_POST["k34"],
    $_POST["k35"],
    $_POST["k36"],   
    $_POST["c1"],   
    $_POST["c2"],   
    $_POST["c3"],   
    $_POST["c4"],   
    $_POST["c5"],   
    $_POST["c6"],   
    $_POST["c7"],   
    $_POST["c8"],   
    $_POST["c9"],   
    $_POST["c10"],   
    $_POST["c11"],   
    $_POST["c12"],   
    $_POST["c13"],   
    $_POST["c14"],   
    $_POST["c15"],   
    $_POST["c16"],   
);
?>
</body>
</html>