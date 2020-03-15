
function creaRenglones(cantidad)
{
 
    var renglones= document.getElementById("seccion-renglones")
    for(i =0 ; i <cantidad; i++)
    {
        var divSemana = document.createElement("div")
        divSemana.setAttribute("class","renglones renglon-semana")
        
        var divNomina = document.createElement("div")
        divNomina.setAttribute("class","renglones renglon-nomina")
        renglones.appendChild(divSemana)
        renglones.appendChild(divNomina)

    }
    
}
