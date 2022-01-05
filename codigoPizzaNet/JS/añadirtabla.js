// función para añadir los elementos seleccionados en una tabla y mostrarla

  function genera_tabla() {     
    // Obtener valor seleccionado 
    var lista = document.getElementById("inputGroupSelect03");

    // obtener elemento de la tabla por id
    var tabla = document.getElementById("tab");

    // Obtener el índice de la opción que se ha seleccionado
    var indiceSeleccionado = lista.selectedIndex;

    // Con el índice y el array "options", obtener la opción seleccionada
    var opcionSeleccionada = lista.options[indiceSeleccionado];

    // Obtener el valor y el texto de la opción seleccionada
    var textoSeleccionado = opcionSeleccionada.text;
    
    // si no se selecciona una opcion valida no se agrega a la tabla
    if(textoSeleccionado!="Elegir..."){

        var hilera = document.createElement("tr");
        var celda = document.createElement("th"); 
        var textoCelda = document.createTextNode(textoSeleccionado);
        celda.appendChild(textoCelda);
        hilera.appendChild(celda);
        tab.appendChild(hilera);
    }
}