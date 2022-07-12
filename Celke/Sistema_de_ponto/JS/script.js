//var apHorario = document.querySelector("#horario")

function atualizarHorario(){
    var data = new Date().toLocaleString("pt-pt",{
        timeZone: "Europe/Lisbon"
    })

    //var formatarData = data.replace(", ", " - ")
    //apHorario.innerHTML = formatarData
    
    document.querySelector("#horario").innerHTML = data.replace(", ", " - ")
}

setInterval(atualizarHorario, 1000); // Chama a função a cad segundo