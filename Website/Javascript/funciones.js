function mostrarFyH(){
	var hoy = new Date();
    
    var diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    
    var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
    
    
    var diaSemana = diasSemana[hoy.getDay()];
    var dia = hoy.getDate().toString().padStart(2, '0');
    var mes = meses[hoy.getMonth()];
    var anio = hoy.getFullYear();
    
    
    var hora = hoy.getHours().toString().padStart(2, '0');
    var minutos = hoy.getMinutes().toString().padStart(2, '0');

	var textoFecha = ` ${diaSemana} ${dia} de ${mes} de ${anio}`;
    var textoHora = `Son las ${hora}:${minutos} horas`;

    document.getElementById("fecha-hora").innerHTML = `${textoFecha}<br>${textoHora}`;

}


function vaciar(){
    document.getElementById("n1").value="";
}
function cuadrado(){
    let num= document.getElementById("n1");
    num.value = num.value*num.value;
}

function res1() {
    var radios = document.getElementsByName('pregunta1');
    var resultado = document.getElementById('resultado1');
    var seleccionado = false;
    var respuestaCorrecta = "CPU";

    // Validar si un radio button ha sido seleccionado
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            seleccionado = true;
            if (radios[i].value === respuestaCorrecta) {
                resultado.innerHTML = "Correcto";
            } else {
                resultado.innerHTML = "Incorrecto";
            }
            break;
        }
    }

    if (!seleccionado) {
        alert("Por favor, seleccione una respuesta.");
    }
}

function res2() { 
    var respuesta = document.getElementById('respuesta2');
    var resultado = document.getElementById('resultado2'); 

    if (respuesta.value.trim() === "") {
        alert("Por favor, ingrese una respuesta para la segunda pregunta.");
        return;
    }

    if (respuesta.value.trim().toLowerCase() === "cpu") {
        resultado.innerHTML = "Correcto";
    } else {
        resultado.innerHTML = "Incorrecto";
    }
}


function res3() {
    var respuesta3 = document.getElementById('respuesta3');
    var resultado3 = document.getElementById('resultado3');

    if (respuesta3.value.trim() === "") {
        alert("Por favor, ingrese una respuesta para la tercera pregunta.");
        return;
    }
}

function res4() {
    var radios = document.getElementsByName('pregunta4');
    var resultado = document.getElementById('resultado4');
    var seleccionado = false;
    var respuestaCorrecta = "Windows";

    // Validar si un radio button ha sido seleccionado
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            seleccionado = true;
            if (radios[i].value === respuestaCorrecta) {
                resultado.innerHTML = "Correcto";
            } else {
                resultado.innerHTML = "Incorrecto";
            }
            break;
        }
    }

    if (!seleccionado) {
        alert("Por favor, seleccione una respuesta para la cuarta pregunta.");
    }
}

function res5() {
    var respuesta = document.getElementById('respuesta5');
    var resultado = document.getElementById('resultado5');
    if (respuesta.value.trim().toLowerCase() === "random access memory") {
        resultado.innerHTML = "Correcto";
    } else {
        resultado.innerHTML = "Incorrecto";
    }
}
