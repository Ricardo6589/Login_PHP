var validaFormulario = function() {


}
var validaEmail = function(evento) {
        var valor = evento.target.value
        if (!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(valor))) {
            document.getElementById(evento.target.id + "_msg").innerHTML = evento.target.name + " no válido";
            evento.target.style.borderColor = "red";
            evento.target.style.borderWidth = "5px";
            evento.target.focus();
            return false;
        } else {
            document.getElementById(evento.target.id + "_msg").innerHTML = "";
            evento.target.style.borderColor = "black";
            evento.target.style.borderWidth = "1px";
            return true;
        }

    }
    // var validaContra = function(evento) {
    //     console.log("hola")
    //     var valor = evento.target.value;
    //     if (valor == null || valor.length == 0 || (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}$/.test(valor))) {
    //         console.log("hola2")
    //         document.getElementById(evento.target.id + "_msg").innerHTML = evento.target.name + " no puede estar vacio";
    //         evento.target.style.borderColor = "red";
    //         evento.target.style.borderWidth = "5px";
    //         evento.target.focus();
    //         document.getElementById('saveForm').addAttribute("disabled");
    //         return false;
    //     } else {
    //         document.getElementById(evento.target.id + "_msg").innerHTML = "";
    //         evento.target.style.borderColor = "black";
    //         evento.target.style.borderWidth = "1px";
    //         document.getElementById('saveForm').removeAttribute("disabled");
    //         return true;
    //     }
    // }

window.onload = function() {

    document.getElementById("element_1").onblur = validaEmail;
    // document.getElementById("element_2").onblur = validaContra;
}