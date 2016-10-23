/**
 * Created by Javi on 28/08/2016.
 */
function navPho() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
function mostrarOcultar(id) {
    (document.getElementById(id).style.display === "") ? document.getElementById(id).style.display = "none" : document.getElementById(id).style.display = "";
}