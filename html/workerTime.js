var timerStart = true;
function myTimer(d0)
{
    var d = (new Date()).valueOf();
    var diff = d-d0;
    var minutes = Math.floor(diff/1000/60);
    var seconds = Math.floor(diff/1000)-minutes*60;
    var myVar = null;
    minutes = minutes.toString();
    postMessage(seconds);
}

if(timerStart)
{
    var d0 = (new Date()).valueOf();
    myVar = setInterval(function(){myTimer(d0),100});
    timerStart = false;
}