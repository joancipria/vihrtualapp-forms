<?php 
// QUESTIONS

// HIV-KQ-18
$hiv18 = array(
    array("El toser o estornudar NO extiende el contagio de VIH",true), 
    array("Una persona puede contagiarse con VIH si comparte un vaso de agua que ha utilizado una persona infectada de VIH", false), 
    array("Sacar el pene antes de que el varón eyacule evita que la mujer se contagie con el virus VIH durante las relaciones sexuales",false),
    array("Una mujer puede infectarse con el VIH si tiene relaciones sexuales anales con un hombre",true),
    array("Ducharse o lavarse los genitales/ partes privadas después de mantener relaciones sexuales evita que la persona se infecte con VIH",false),
    array("Toda mujer embarazada, infectada con VIH, tendrá niños infectados con VIH",false),
    array("Personas que están infectadas con el VIH rápidamente muestran signos o síntomas de que está contagiados/as",false),
    array("Existe una vacuna que evita que la persona adulta se infecte con el VIH",false),
    array("Las personas son más propensas a infectarse cuando se dan besos profundos, o colocan sus lenguas dentro de la boca de sus parejas que está infectada con VIH",false),
    array("Una mujer no puede contagiarse con VIH si tiene relaciones sexuales durante su menstruación",false),
    array("Existe un condón femenino que ayuda a reducir el riesgo de infectarse con VIH",true),
    array("Un condón de piel natural es mejor para prevenir el contagio de VIH que un condón de látex",false),
    array("Una persona que esté tomando antibióticos no se contagiará con VIH si tiene relaciones sexuales",false),
    array("Tener relaciones sexuales con más de una pareja sexual aumenta la probabilidad de que se infecte con VIH",true),
    array("Realizarse una prueba para determinar si se está infectado con VIH una semana después de haber tenido relaciones sexuales puede determinar si la persona está infectada o no",false),
    array("Una persona puede infectarse con VIH compartiendo un baño termal (yacuzzi) o una piscina con una persona infectada con el VIH",false),
    array("Una persona puede contagiarse con VIH cuando sostiene relaciones sexuales de forma oral",true),
    array("Utilizar vaselina o aceite para bebé con los condones reduce el riesgo de infectarse con VIH",false)
);

// CUQ
$cuq = array(
    "La personalidad del chatbot era real y cautivadora",
    "El chatbot parecía demasiado robótico",
    "El chatbot se mostró cercano durante el inicio",
    "El chatbot fue muy antipático",
    "El chatbot explicó bien su ámbito y finalidad",
    "El chatbot no dio ninguna indicación sobre su finalidad",
    "Fue fácil navegar a través del chatbot",
    "Sería fácil confundirse mientras se usa chatbot",
    "El chatbot me entendió bien",
    "El chatbot falló en reconocer muchas de mis entradas",
    "Las respuestas del chatbot fueron útiles, apropiadas e informativas",
    "Las respuestas del chatbot no eran relevantes",
    "El chatbot lidió bien con cualquier error o fallo",
    "El chatbot parecía incapaz de manejar cualquier error",
    "El chatbot era muy fácil de usar",
    "El chatbot era muy complejo"
);

// SUS
$sus = array(
    "Me gustaría usar esta herramienta frecuentemente",
    "Considero que esta herramienta es innecesariamente compleja",
    "Considero que la herramienta es fácil de usar",
    "Considero necesario el apoyo de personal experto para poder utilizar esta herramienta",
    "Considero que las funciones de la herramienta están bien integradas",
    "Considero que la herramienta presenta muchas contradicciones",
    "Imagino que la mayoría de las personas aprenderían a usar esta herramienta rápidamente",
    "Considero que el uso de esta herramienta es tedioso",
    "Me sentí muy confiado al usar la herramienta",
    "Necesité saber bastantes cosas antes de poder empezar a usar esta herramienta"
);

// Render true/false answer 
function printTrueFalseQuestion($text,$id, $answer){
    $trueValue = ($answer == true)?'1':'0';
    $falseValue = ($answer == false)?'1':'0';
    echo '
    <div class="card">
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">'. $text .'</label>
                    <div class="control">
                        <label class="radio">
                            <input type="radio" value="'.$trueValue.'" name="'. $id .'" required>
                            Verdadero
                        </label>
                        <label class="radio">
                        <input type="radio" value="'.$falseValue.'" name="'. $id .'" required>
                        Falso
                        </label>
                        <label class="radio">
                        <input type="radio" value="0" name="'. $id .'" required>
                        No lo sé
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
}

// Render scale answer 
function printScaleQuestion($text,$id){
    echo '
    <div class="card">
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">'. $text .'</label>
                    <div class="control scale">
                        <label style="margin-right: 20px;">Totalmente en desacuerdo</label>
                        <label class="radio">
                            <span>1</span>
                            <input type="radio" value="1" name="'. $id .'" required>
                        </label>
                        <label class="radio">
                            <span>2</span>
                            <input type="radio" value="2" name="'. $id .'" required>
                        </label>
                        <label class="radio">
                            <span>3</span>
                            <input type="radio" value="3" name="'. $id .'" required>
                        </label>
                        <label class="radio">
                            <span>4</span>
                            <input type="radio" value="4" name="'. $id .'" required>
                        </label>
                        <label class="radio">
                            <span>5</span>
                            <input type="radio" value="5" name="'. $id .'" required>
                        </label>
                        <label style="margin-left: 20px;">Totalmente de acuerdo</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
}
?>