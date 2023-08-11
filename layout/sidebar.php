<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicados Digitales</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- SIDEBAR -->
    <nav>
        <div class="sidebar-top">
            <span class="shrink-btn">
                <i class='bx bx-chevron-left'></i>
            </span>
            <!-- <img src="./img/logo.png" height="45" width="60" class="logo" alt=""> -->
            <h3 class="hide">Comunicados <br> Digitales</h3>
        </div>

        <div class="sidebar-links">
            <ul>

                <!-- fondo gris en link seleccionado -->
                <div class="active-tab"></div>
                <li>
                    <a href="./index.php" class="active" data-active="0">
                        <div class="icon">
                            <i class='bx bx-home'></i>
                            <i class='bx bxs-home'></i>
                        </div>
                        <span class="link hide">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="./events.php" data-active="1">
                        <div class="icon">
                            <i class='bx bx-calendar'></i>
                            <i class='bx bxs-calendar'></i>
                        </div>
                        <span class="link hide">Eventos</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:contacto@comunicadosdigitales.com" data-active="2">
                        <div class="icon">
                            <i class='bx bx-conversation'></i>
                            <i class='bx bxs-conversation'></i>
                        </div>
                        <span class="link hide">
                            Enviar mensaje a la escuela
                        </span>
                    </a>
                </li>
                <li>
                    <a href="./help.php" data-active="3">
                        <div class="icon">
                            <i class='bx bx-help-circle'></i>
                            <i class='bx bxs-help-circle'></i>
                        </div>
                        <span class="link hide">Ayuda e información</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <a href="#" class="account">
                <i class="bx bx-user"></i>
            </a>
            <div class="admin-user">
                <div class="admin-profile">
                    <img src="./img/logo.png" alt="">
                    <div class="admin-info">
                        <h3>Walter Blanco</h3>
                        <h5>Admin</h5>
                    </div>
                </div>
                <a href="" class="log-out">
                    <i class="bx bx-log-out"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- FEED -->

    <main>