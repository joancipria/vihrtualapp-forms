// Current form section
var formSection = 1;

// Go to next form section                      
function next() {

    // Check answers before  
    if (!checkAnswers()) {
        return;
    }

    // Show next section
    formSection++;
    showFormSection();
}

// Go to previous form section
function prev() {
    formSection--;
    showFormSection();
}

// Check current form  section answers
function checkAnswers() {
    // Current form section inputs
    let inputs = document.getElementsByClassName('form-section-active')[0].getElementsByTagName('input');

    // For each input
    for (let i = 0; i < inputs.length; i++) {
        // Check validity
        if (!inputs[i].validity.valid) {
            alert("Rellena correctamente todos los campos para poder avanzar");
            return false;
        }
    }
    return true;
}

// Show / hide section
function showFormSection() {
    // All sections
    let sections = document.getElementsByClassName('form-section');

    let currentSection = formSection - 1;

    // Hide current section
    document.getElementsByClassName('form-section-active')[0].classList.remove("form-section-active");

    // Show current section
    sections[currentSection].classList.add("form-section-active");

    // Update steps
    updateSteps(currentSection);

    // Scroll to top
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Update steps bulma element
function updateSteps(step) {
    document.getElementsByClassName('steps-segment is-active')[0].classList.remove("is-active");
    document.getElementsByClassName('steps-segment')[step].classList.add("is-active");
}


const form = document.getElementById('form');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const data = new FormData(form);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://vihrtualapp.gti-ia.upv.es/encuesta/sendForm.php');
    xhr.onload = () => {
        if (xhr.status === 200) {
            // if the response is json encoded
            let response = xhr.responseText;

            if (response == 'valid') {
                // redirect here
                document.getElementById('result').innerHTML = "¡Encuesta guardada con éxito!";
                next();
            } else {
                document.getElementById('result').innerHTML = "<span class='error'>Error: </span>No se pudo guardar la encuesta";
                next();
                console.error(response);
            }
        }
    }
    xhr.send(data);
});