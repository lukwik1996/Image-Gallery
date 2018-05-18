var input;
var pole_textowe = "";
var ile = 1;

function dodaj(){
    var pole_tekstowe = document.getElementById('pole_text').value;
    if (pole_tekstowe == ""){
        return;
    }

    for (var i = 1; i < ile; i += 1){
        if (pole_tekstowe == localStorage.getItem("tekst"+i)){
            alert("Podana rasa jest już na liście");
            return;
        }
    }

    if (ile > 1) {
        pole_textowe = document.getElementById("lista").value;
    }

    localStorage.setItem("tekst"+ile, pole_tekstowe);
    localStorage.setItem('text', pole_tekstowe);
    sessionStorage.setItem('text', pole_tekstowe);

    alert("Pomyślnie dodano rasę psa do listy");

    var div = document.getElementById("kol_prawa");
    var textareas = document.getElementsByTagName('textarea');
    if(textareas.length == 0) {
        input = document.createElement("textarea");
        input.name = "post";
        input.id = "lista";
        input.maxLength = "100";
        input.cols = "20";
        input.rows = "10";
        div.appendChild(input);
    }

    var area = document.getElementsByTagName('textarea');
    document.getElementById("lista").readonly = false;

    if (ile > 1) {
        document.getElementById("lista").value += "\n" + localStorage.getItem("tekst"+ile);
    }
    else {
        document.getElementById("lista").value += localStorage.getItem("tekst"+ile);
    }
    document.getElementById("lista").readonly = true;
    ile += 1;

    document.getElementById('pole_text').value = "";
    document.getElementById(pole_tekstowe).style.backgroundColor = "darkorange";
}

function usun() {

    ile -= 1;
    var poprzedni = localStorage.getItem("tekst"+ile);

    localStorage.removeItem(poprzedni);
    sessionStorage.removeItem(sessionStorage.getItem("tekst"+ile));
    document.getElementById(poprzedni).style.backgroundColor = "lightgrey";

    document.getElementById("lista").value = pole_textowe;
    alert("Usunięto ostatni element listy");
}

function edytuj() {
    var pole_tekstowe = document.getElementById('pole_text').value;
    ile -= 1;
    var poprzedni = localStorage.getItem("tekst"+ile);

    localStorage.removeItem(poprzedni);
    sessionStorage.removeItem(sessionStorage.getItem(('tekst')));
    document.getElementById(poprzedni).style.backgroundColor = "lightgrey";

    document.getElementById("lista").value = pole_textowe;
    if (pole_tekstowe == ""){
        return;
    }
    localStorage.setItem("tekst"+ile, pole_tekstowe);
    sessionStorage.setItem('tekst', pole_tekstowe);
    document.getElementById(pole_tekstowe).style.backgroundColor = "darkorange";

    alert("Edytowano ostatni element listy");
    if (ile > 1) {
        document.getElementById("lista").value += "\n" + localStorage.getItem("tekst" + ile);
    }
    else{
        document.getElementById("lista").value += localStorage.getItem("tekst" + ile);
    }
    ile += 1;
    document.getElementById('pole_text').value = "";
}

function zobacz() {
    ile -= 1;
    var poprzedni = localStorage.getItem("tekst"+ile);
    if (poprzedni) {
        alert(poprzedni);
    }
    else {
        alert("Brak elementu");
    }
    ile += 1;
    document.getElementById('pole_text').value = poprzedni;
}

function zobacz2() {
    var poprzedni = localStorage.getItem('text');
    if (poprzedni) {
        alert(poprzedni);
    }
    else {
        alert("Brak elementu");
    }
    document.getElementById('pole_text').value = poprzedni;
}

function zobacz3() {
    var poprzedni = sessionStorage.getItem('text');
    if (poprzedni) {
        alert(poprzedni);
    }
    else {
        alert("Brak elementu");
    }

    document.getElementById('pole_text').value = poprzedni;
}

function wyczysc() {
    localStorage.clear();
    sessionStorage.clear();
    alert("Lista wyczyszczona");
    document.getElementById("tabela").style.backgroundColor = "lightgrey";
    document.getElementById("lista").value = "";
    document.getElementById('pole_text').value = "";
}

function hover(){
    var buttons = document.getElementById("kol_prawa").getElementsByClassName("przycisk")

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].onmouseover = function () {
            this.style.cursor = 'hand';
            this.style.borderColor = 'red';
        }

        buttons[i].onmouseout = function () {
            this.style.cursor = 'pointer';
            this.style.borderColor = 'gray';
        }
    }
}
