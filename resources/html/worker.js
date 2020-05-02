
onmessage = function(oEvent){
    console.log("worker recibe: "+oEvent.data)
    postMessage('se guardo :'+ oEvent.data);

}

