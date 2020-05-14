var success= false;
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


function crearSecciones(labels,seccionDOM)
{
    var seccionValue = document.getElementById(seccionDOM).getAttribute("id")
    var seccion = document.getElementById(seccionValue);
    if( !(labels == undefined) && !(seccionDOM == undefined) )
    {
        for(i =0 ; i < labels.length; i++)
        {
    
            var division = document.createElement("div")
            var label = document.createElement("label")
            var divMenu = document.createElement("div")
    
            division.setAttribute("id","division"+i)
            division.setAttribute("class","division")
            divMenu.setAttribute("class","renglon renglon-menu")
            label.setAttribute("for","renglones")
            label.innerText = labels[i];
    
            division.appendChild(label);
            division.appendChild(divMenu);
            seccion.appendChild(division);
            success= true;
        }

        if( success == true )
        {
            addButtons();
        }
    }
    else{
        console.log("Error al crear secciones");
        success= false;
    }
   
}


function addButtons()
{
    console.log("adding buttons!")
}
