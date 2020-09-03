<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
    font-family: "Lato", sans-serif;
    }

    .sidebar {
        height: 100%;
        width: 85px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        white-space: nowrap;
    }

    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    .material-icons,
    .icon-text {
        vertical-align: middle;
    }

    .material-icons {
        padding-bottom: 3px;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
        margin-left: 470px;
        font-size: 14px;
    }
    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */

    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }
        .sidebar a {
            font-size: 18px;
        }
    }
    </style>
</head>
<body>
    <div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
            <a href="#"><span><i class="material-icons">monetization_on</i><span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;Nomina</span></a><br>
            <a href="#"><i class="material-icons">monetization_on</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Prenomina</a></span>
            </a><br>
            <a href="#"><i class="material-icons">contacts</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Usuarios</span></a><br>
            <a href="#"><i class="material-icons">book</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Cursos</span></a><br>
            <a href="#"><i class="material-icons">fact_check</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Atenciones</span></a><br>
            <a href="#"><i class="material-icons">feedback</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Comentarios</span></a><br>
            <a href="#"><i class="material-icons">build</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Material</span></a><br>
            <a href="#"><i class="material-icons">assignment</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Cartas de<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trabajo</span></a><br>
            <a href=""><i class="material-icons">home</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Volver<span></a>
        </div>

        <script>
            var mini = true;

            function toggleSidebar() {
                if (mini) {
                    console.log("opening sidebar");
                    document.getElementById("mySidebar").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "470px";
                    this.mini = false;
                } else {
                    console.log("closing sidebar");
                    document.getElementById("mySidebar").style.width = "85px";
                    document.getElementById("main").style.marginLeft = "470px";
                    this.mini = true;
                }
            }
        </script>
</body>
</html>