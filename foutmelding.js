wachtwoord = document.getElementById("wachtwoord");
wachtwoordhh = document.getElementById("wachtwoordhh");

if(wachtwoord !== wachtwoordhh){
    alert("Det wachtwoorden wat je heb ingevuldkomen niet overeens ")
}

function showPW() {
    var x = document.getElementById("myInput");
    if (x.type === "wachtwoord") {
        x.type = "text";
    } else {
        x.type = "wachtwoord";
    }
}