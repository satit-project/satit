
function creaRenglones(labels)
{
    var seccion = document.getElementById("seccion-renglones")

    for(i =0 ; i < labels.length; i++)
    {
        console.log("se crea renglon " + i)
        var division = document.createElement("div")
        var label = document.createElement("label")
        var divSemana = document.createElement("div")

        division.setAttribute("id","division"+i)
        division.setAttribute("class","division")
        divSemana.setAttribute("class","renglones renglon-semana")
        label.setAttribute("for","renglones")
        label.innerText = labels[i];

        division.appendChild(label);
        division.appendChild(divSemana);
        seccion.appendChild(division);

    }

}
