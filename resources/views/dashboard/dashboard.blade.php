<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="{{ route ('category.index')}}">Dashboard</a></li>
        <li><a href="#">Sair</a></li>
    </ul>


    <nav class="green">
        <div class="nav-wrapper container ">
            <a href="#" class="center brand-logo " href="index.html"><img src="img/logo.png"></a>
            <ul class="right ">
                <li class="hide-on-med-and-down"><a href="#" onclick="fullScreen()"><i class="material-icons">settings_overscan</i> </a> </li>
                <li><a href="#" class="dropdown-trigger" data-target='dropdown2'>Olá usuário! <i class="material-icons right">expand_more</i> </a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger left  show-on-large"><i class="material-icons">menu</i></a>
        </div>
    </nav>


    <ul id="slide-out" class="sidenav ">
        <li>
            <div class="user-view">
                <div class="background red ">
                    <img src="img/office.jpg" style="opacity: 0.5">
                </div>
                <a href="#user"><img class="circle" src="img/user.jpg"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
        </li>

        <li><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
        <li><a href="#"><i class="material-icons">playlist_add_circle</i>Produtos</a></li>
        <li><a href="#!"><i class="material-icons">shopping_cart</i>Pedidos</a></li>
        <li><a href="#!"><i class="material-icons">bookmarks</i>Categorias</a></li>
        <li><a href="#!"><i class="material-icons">peoples</i>Usuários</a></li>
    </ul>

    <div class="row container">
        <section class="info">

            <div class="col s12 m4">
                <article class="bg-gradient-green card z-depth-4 ">
                    <i class="material-icons">paid</i>
                    <p>Faturamento</p>
                    <h3>R$ 123,00</h3>
                </article>
            </div>

            <div class="col s12 m4">
                <article class="bg-gradient-blue card z-depth-4 ">
                    <i class="material-icons">face</i>
                    <p>Usuários</p>
                    <h3>34 </h3>
                </article>
            </div>

            <div class="col s12 m4">
                <article class="bg-gradient-orange card z-depth-4 ">
                    <i class="material-icons">shopping_cart</i>
                    <p>Pedidos este mês</p>
                    <h3>0</h3>
                </article>
            </div>

        </section>
    </div>


    <div class="row container ">
        <section class="graficos col s12 m6">
            <div class="grafico card z-depth-4">
                <h5 class="center"> Aquisição de usuários</h5>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </section>

        <section class="graficos col s12 m6">
            <div class="grafico card z-depth-4">
                <h5 class="center"> Produtos </h5>
                <canvas id="myChart2" width="400" height="200"></canvas>
            </div>
        </section>
    </div>

    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/main.js"></script>
</body>

</html>




















