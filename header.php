<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="recursos/bootstrap.min.css">


</head>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Buscar pokemon</a>
            </div>
            <ul class="nav navbar-nav">
                <?php
                if (!isset($_SESSION)) session_start();
                if(isset($_SESSION['username'])){
                    echo "<li class='active'><a href='agregarpokemon.php'>Agregar Pokemon</a></li>";
                }
                ?>
<!--                <li class="active"><a href="#">Home</a></li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (!isset($_SESSION)) session_start();
                if(isset($_SESSION['username'])){
                    $nombre=$_SESSION['username'];
                    echo "<li><a href=''>".$nombre."</a> </li>";
                    echo "<li><a href='logout.php'>salir</a></li>";
                }else{
                    echo "<li><a href='login.php'>loguear</a></li>";
                }

                ?>

            </ul>
        </div>
    </nav>
</header>
