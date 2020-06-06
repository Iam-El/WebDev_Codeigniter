<head>
    <title>LEANEVENTO Foundation</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/leanevent.css') ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/index.js') ?>"></script>
</head>
<body id="wrapper">
<header>

    <div class="header-content">
        <button class="header-button fas fa-bars" onclick=homepage_mobile_menu(event)></button>
        <div class="logo">
            <img id="header-logo" src="<?php echo base_url('assets/image/logo-blanco.png') ?>">
            <h3 id="header-logo-text">LEANVENTOS</h3>
        </div>
        <div class="menu">
            <nav class="nav-bar">
                <ul>
                    <li class="link active"><a href="<?php echo base_url('homepage') ?>">Inicio</a></li>
                    <li class="link"><a href="<?php echo base_url('aboutus' ) ?>">Quienes Somos</a></li>
                    <li class="link"><a href="http://emf2253.uta.cloud/Fernandes_Leanevent/">Blog</a></li>
                    <li class="link"><a href="<?php echo base_url('register') ?>">Reg&#237strate</a></li>
                    <li class="link"><a href="<?php echo base_url('contactUs') ?>">Contacto</a></li>
                    <li class="link"><a href="<?php echo base_url('login') ?>">Inciar Sesi&#243n</a></li>
                    <li class="link"><a href="<?php echo base_url('buyfromus') ?>">Comprar Boletos</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>