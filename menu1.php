<!DOCTYPE html>
<html lang="en">
<head>
    <title>Template Web Responsive dengan Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.html">
        <img src="gambar/logo.png" alt="logo" style="width:200px;">
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Pemrograman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Database</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Framework</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lainnya</a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron text-center">
    <h1>Belajar Programming Itu Mudah</h1>
    <p>Tingkatkan skill programming kamu belajar tutorial pemrograman gratis!</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="gambar/HTML_&_CSS.png" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>Belajar HTML & CSS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="gambar/Programming.png" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3><a href="artikel.html" style="text-decoration:none;color: black;">Web Programming</a> </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="gambar/Python.png" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>Belajar Python</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="gambar/Desain_UI_&_UX.png"  width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>Desain UI & UX</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block " role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Copyright 2020 kelasprogrammer.com</p>
</div>
</body>
</html>