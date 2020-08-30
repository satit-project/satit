<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?php echo constant('URL');?>/public/css/sidenav.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
        <a href="#"><span><i class="material-icons">info</i><span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;about</span></a><br>
        <a href="#"><i class="material-icons">spa</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;services</a></span>
        </a><br>
        <a href="#"><i class="material-icons">monetization_on</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;clients</span></a><br>
        <a href="#"><i class="material-icons">email</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;contact<span></a>
    </div>

    <script>
        var mini = true;

        function toggleSidebar() {
            if (mini) {
                console.log("opening sidebar");
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                this.mini = false;
            } else {
                console.log("closing sidebar");
                document.getElementById("mySidebar").style.width = "85px";
                document.getElementById("main").style.marginLeft = "85px";
                this.mini = true;
            }
        }
    </script>
</body>
</html>