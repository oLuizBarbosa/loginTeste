function abrirMenu() {
    document.getElementById("menu").classList.add("active");
}

function fecharMenu() {
    document.getElementById("menu").classList.remove("active");
}


function cadastrar_tarefa(listaId) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("conteudo-principal").innerHTML = this.responseText;
        }
    };
    
    xhttp.open("GET", "../controller/criar_tarefa.php?id=" + listaId, true);
    xhttp.send();
}