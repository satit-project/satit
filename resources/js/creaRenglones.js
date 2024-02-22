
function creaRenglones(labels, idBase)
{
    var seccion = document.getElementById("seccion-renglones")

    for(i =0 ; i < labels.length; i++)
    {
        var division = document.createElement("div")
        var label = document.createElement("label")
        var divSemana = document.createElement("div")

        division.setAttribute("id","division"+i)
        divSemana.setAttribute("id", idBase[i]+i)
        division.setAttribute("class","division")
        divSemana.setAttribute("class","renglones renglon-semana")
        label.setAttribute("for","renglones")
        label.innerText = labels[i];

        division.appendChild(label);
        division.appendChild(divSemana);
        seccion.appendChild(division);

    }

}



function agregarContenidoDemoPrenomina(text, idBase) {


    for (i = 0; i < idBase.length; i++) {
        var renglon = document.getElementById(idBase[i]+ i);
        renglon.innerHTML = text[i];
    }
}


