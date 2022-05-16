<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bienvenido - Login</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'><link rel="stylesheet" href="/assets/css/icons.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="es" dir="ltr">

    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="main">
            <div class="container a-container" id="a-container">
                <form class="form" id="a-form" method="POST" action="">
                    @csrf
                    <h2 class="form_title title">Crear Cuenta</h2>
                    <div class="form__icons">
                        <ul class="wrapper">
                            <li class="icon facebook">
                                <span class="tooltip">Facebook</span>
                                <span><i class="fab fa-facebook-f"></i></span>
                            </li>
                            <li class="icon github">
                                <span class="tooltip">Github</span>
                                <span><i class="fab fa-github"></i></span>
                            </li>
                            <li class="icon instagram">
                                <span class="tooltip">Instagram</span>
                                <span><i class="fab fa-instagram"></i></span>
                            </li>

                        </ul>
                    </div>
                    <span class="form__span">Usa tu correo electrónico para registrarte</span>

                    <input class="form__input" type="text" placeholder="Name" id="name" name="name">


                    <input class="form__input" type="text" placeholder="Email" id="email" name="email">

                    
                    <input class="form__input" type="password" placeholder="Password" id="password" name="password">
 

                    <input class="form__input" type="password" placeholder="Password_confirmacion" name="password_confirmacion">
                    <button class="form__button button submit, text">REGISTRARSE</button>
                </form>
            </div>
            <div class="container b-container" id="b-container">
                <form class="form" id="b-form" method="POST" action="">
                    @csrf
                    <h2 class="form_title title">Iniciar sesión</h2>
                    <div class="form__icons">
                        <ul class="wrapper">
                            <li class="icon facebook">
                                <span class="tooltip">Facebook</span>
                                <span><i class="fab fa-facebook-f"></i></span>
                            </li>
                            <li class="icon github">
                                <span class="tooltip">Github</span>
                                <span><i class="fab fa-github"></i></span>
                            </li>
                            <li class="icon instagram">
                                <span class="tooltip">Instagram</span>
                                <span><i class="fab fa-instagram"></i></span>
                            </li>

                        </ul>
                    </div><span class="form__span">o usa tu cuenta de correo</span>
                    <input class="form__input" type="text" placeholder="Email" id="email" name="email">
                    <input class="form__input" type="password" placeholder="Password" id="password" name="password">
                    @error('message')
                    <p class="switch__description description">{{$message}}</p>
                    @enderror
                    <a class="form__link" href="">¿Olvidaste tu contraseña?</a>
                    <button class="form__button button submit, text">INICIAR SESIÓN</button>
                </form>
            </div>
            <div class="switch" id="switch-cnt">
                <div class="switch__circle"></div>
                <div class="switch__circle switch__circle--t"></div>
                <div class="switch__container" id="switch-c1">
                    <h2 class="switch__title title">Bienvenido!</h2>
                    <p class="switch__description description">Para mantenerse conectado con nosotros por favor inicie
                        sesión con su información personal</p>
                    <button class="switch__button button switch-btn">INICIAR SESIÓN</button>
                </div>
                <div class="switch__container is-hidden" id="switch-c2">
                    <h2 class="switch__title title">Holiii!</h2>
                    <p class="switch__description description">Ingresa tus datos personales</p>
                    <button class="switch__button button switch-btn">REGISTRARSE</button>
                </div>
            </div>
        </div>
        <script src="main.js"></script>
    </body>

    </html>
    <!-- partial -->
    <script src="/assets/js/script.js"></script>

</body>

</html>
