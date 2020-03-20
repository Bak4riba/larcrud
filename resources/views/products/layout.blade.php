<!DOCTYPE html>

<html>

<head>

    <title>CRUD DESENVOLVIDO COM LARAVEL</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('assets/style.css')?>" type="text/css">
</head>

<body id="bckg">
    <div class="header">
        <img src="assets/img/unnamed.png" alt="Logo Empresa" height="90" width="100">
    </div>    
    <div id='cssmenu'>
        <ul>
            <li><a href='#'><span>Home</span></a></li>
            <li class='active has-sub'><a href='#'><span>Products</span></a>
            <li><a href='#'><span>About</span></a></li>
            <li class='last'><a href='#'><span>Contact</span></a></li>
        </ul>
    </div>


     


  

<div class="container">

    @yield('content')

</div>

   

</body>

</html>