<?php
    require './assets/backend/Token.php';
    if (!isset($_COOKIE['jwt']) || !Token::isValid($_COOKIE['jwt']))
        header('Location: /login.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>

<body>
    <a href="https://icons8.com/icon/o7eir7CYJkqm/mulher-popular"></a>
        <div id="menu">
        </div>
        <div class="wrapper">

            <div class="sidebar">
                <div class="profile">
                    <img src="https://i.pinimg.com/originals/3d/3d/66/3d3d660132d05053ba2709f2e46de978.jpg">
                    <h3 id="prof-username"></h3>
                    <p id="prof-role"></p>
                </div>
                <ul>
                    <li>
                        <a href="#" class="active">
                            <span class="icon"><i class="fas fa-user-alt"></i></span>
                            <span class="item">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-desktop"></i></span>
                            <span class="item">Coordenadores</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-user-friends"></i></span>
                            <span class="item">Noticias</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-play"></i></span>
                            <span class="item">Radio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-music"></i></span>
                            <span class="item">Packs Musica</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="far fa-clock"></i></span>
                            <span class="item">Marcar Horario</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fal fa-receipt"></i></span>
                            <span class="item">Emblemas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-cog"></i></span>
                            <span class="item">Desenvolvedor</span>
                        </a>
                        <p style="color: #fff;margin-top: 10px;font-size: 10px;margin-left: 11px;">Hpainel Desenvolvido Por MarcosStivis e Geefi</p>
                    </li>
                </ul>
            </div>
        </div>
        <center>
            <div style="    margin-left: 265px;" class="main-section">
                <div class="dashbord">
                    <div class="icon-section">
                        <i class="fa fa-users" aria-hidden="true"></i><br>
                        <small>Users</small>
                        <p>256</p>
                    </div>
                    <div class="detail-section">
                        <a href="#">More Info </a>
                    </div>
                </div>
                <div class="dashbord dashbord-green">
                    <div class="icon-section">
                        <i class="fa fa-money" aria-hidden="true"></i><br>
                        <small>Account</small>
                        <p>$ 256</p>
                    </div>
                    <div class="detail-section">
                        <a href="#">More Info </a>
                    </div>
                </div>
                <div class="dashbord dashbord-orange">
                    <div class="icon-section">
                        <i class="fa fa-bell" aria-hidden="true"></i><br>
                        <small>Alert</small>
                        <p>9 New</p>
                    </div>
                    <div class="detail-section">
                        <a href="avisos.php">More Info </a>
                    </div>
                </div>
                <div class="dashbord dashbord-blue">
                    <div class="icon-section">
                        <i class="fa fa-tasks" aria-hidden="true"></i><br>
                        <small>Task</small>
                        <p>8</p>
                    </div>
                    <div class="detail-section">
                        <a href="#">More Info </a>
                    </div>
                </div>
                <div class="dashbord dashbord-red">
                    <div class="icon-section">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
                        <small>Cart</small>
                        <p>$ 24</p>
                    </div>
                    <div class="detail-section">
                        <a href="#">More Info </a>
                    </div>
                </div>
                <div class="dashbord dashbord-skyblue">
                    <div class="icon-section">
                        <i class="fa fa-comments" aria-hidden="true"></i><br>
                        <small>Mentions</small>
                        <p>96</p>
                    </div>
                    <div class="detail-section">
                        <a href="#">More Info </a>
                    </div>
                </div>
            </div>
        </center>
        <script src="/assets/js/index.js"></script>
    </body>

</html>