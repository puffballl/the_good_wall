
function showPW() {
    var x = document.getElementById("wachtwoord");
    if (x.type === "wachtwoord") {
        x.type = "text";
    } else {
        x.type = "wachtwoord";
    }
}