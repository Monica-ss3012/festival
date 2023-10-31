var btnEnviar = document.getElementById("Enviar");
// Función para válidar que los correos tengan la estructura correcta
function validarEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
//  Función para válidar que los correos tengan la estructura correcta

// EVENTO DE CLICK AL BOTON DE GUARDAR
btnEnviar.addEventListener('click', function (event) {
    event.preventDefault()

    var userNameField = document.querySelector("[name='name']");
    var lastNameField = document.querySelector("[name='lastname']");
    var emailField = document.querySelector("[name='email']");
    var phoneField = document.querySelector("[name='phone']");
    var boletoField = document.querySelector("[name='tip_bolet']");
    var selectField = document.querySelector("[name='check']");
    // Validación de formulario
    if (userNameField.value == '') {
        alert("Nombre vacío")
    } else {
        if (lastNameField.value == '') {
            alert("Apellido vacío")
        } else {
            if (!validarEmail(emailField.value)) {
                alert('Ingrese un correo válido')
            } else {
                if (phoneField == '') {
                    alert("Telefóno vacío")
                } else {
                    if (boletoField == '') {
                        alert("Seleccione tipo de boleto")
                    } else {
                        if (!selectField.checked) {
                            alert("Seleccione términos y condiciones")
                        } else {
                            document.getElementById("formulario").submit()
                        }
                    }
                }
            }
        }
    }
    // Validación de formulario
})