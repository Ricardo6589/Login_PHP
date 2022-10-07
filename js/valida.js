var validaFormulario = function() {


}
var validaEmail = function(evento) {
    var valor = evento.target.value
    if (!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(valor))) {
        document.getElementById(evento.target.id + "_msg").innerHTML = evento.target.name + " no es válido";
        evento.target.style.borderColor = "red";
        evento.target.style.borderWidth = "5px";
        evento.target.focus();
        return false;
    } else {
        document.getElementById(evento.target.id + "_msg").innerHTML = "";
        evento.target.style.borderColor = "black";
        evento.target.style.borderWidth = "1px";
    }

}
var validaTexto = function(evento) {
    var valor = evento.target.value;
    if (valor == null || valor.length == 0 && (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}$/)(valor)) {
        document.getElementById(evento.target.id + "_msg").innerHTML = evento.target.name + " no es válido";
        evento.target.style.borderColor = "red";
        evento.target.style.borderWidth = "5px";
        evento.target.focus();
        return false;
    } else {
        document.getElementById(evento.target.id + "_msg").innerHTML = "";
        evento.target.style.borderColor = "black";
        evento.target.style.borderWidth = "1px";
    }
}


window.onload = function() {

    document.getElementById("element_4").onblur = validaEmail;
    document.getElementById("element_3").onblur = validaContra;
}