var success = false;
class section {

    constructor( title, subtitle, hint, button, buttonTitle,seccionDOM)
    {
        this.title = title;
        this.subtitle = subtitle;
        this.hint = hint;
        this.button = button;
        this.buttonTitle = buttonTitle;
        this.seccionDOM = seccionDOM
    }





    /* Methods */
    createSection() {
        var seccionValue = document.getElementById(this.seccionDOM).getAttribute("id")
        var seccion = document.getElementById(seccionValue);
        if( !(this.title == undefined) && !(this.seccionDOM == undefined) )
        {
            var i=0;
            var division = document.createElement("div")    // crear div para agrupar el contenido
            var label = document.createElement("label")     // crear elemento label
            var divMenu = document.createElement("div")      // crear div para el contenido
            
            division.setAttribute("id","division"+i)
            division.setAttribute("class","division")
            divMenu.setAttribute("class","renglon renglon-menu")
            // create a button if the DOM sends true
            if( this.button == true)
            {
                var button = document.createElement("button");
                button.setAttribute("id","button"+this.buttonTitle);
                button.setAttribute("class","main-button");
                button.setAttribute("onclick","this.imprime()")
                button.innerHTML = this.buttonTitle;
                divMenu.appendChild(button);
            }

            label.setAttribute("for","renglones")
            label.innerText = this.title;
    
            division.appendChild(label);
            division.appendChild(divMenu);
            seccion.appendChild(division);
            success= true;
        

        }
        else{
            console.log("Error al crear secciones");
            success= false;
        }
    
    }


    addButtons()
    {
        
        if( this.button != undefined && this.buttonTitle != "" && this.button == true )
        {
         
    
        }
    }

    imprime()
    {
        console.log(
            this.title+"\n",
            this.subtitle+"\n",
            this.hint+"\n",
            this.button+"\n",
            this.buttonTitle+"\n",
        )
    }
}