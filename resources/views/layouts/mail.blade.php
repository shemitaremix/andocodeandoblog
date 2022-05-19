<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>

    <style>
        .boton {
            margin-left: 35%;
            border: 1px solid #2D3748; /*anchura, estilo y color borde*/
            padding: 10px; /*espacio alrededor texto*/
            background-color: #2D3748; /*color botón*/
            color: #ffffff;/*color texto*/
            text-decoration: none; /*decoración texto*/
            border-radius: 5%; /*bordes redondos*/
        }
        .textoColor{
            color: #A2A8AD !important;
            font-family: sans-serif;
            font-size: 115%;
        }
    </style>
</head>
<body>
<div style="background-color: #EDF2F7;">
    <div style="align-content: center;">
        <!--
        <a href="http://PruebaEmail.test" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#3d4852;font-size:19px;font-weight:bold;text-decoration:none;display:inline-block" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://PruebaEmail.test&amp;source=gmail&amp;ust=1643211974130000&amp;usg=AOvVaw1Kw5C2A7HfQPXU3llj3wBl">
            <img src="https://ci3.googleusercontent.com/proxy/5uxvSydYjLK-NyZ8hSlo7ioBp7rrdMedM_W2Mfb0itpFJrJB3ON1cyZqjMwziFeDCQXj5ykF4VeMPTo-OActmw=s0-d-e1-ft#https://laravel.com/img/notification-logo.png"
                 style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100%;border:none;height:75px;max-height:75px;width:75px" class="CToWUd">
        </a>
        -->
        <br><br>
        <div style="margin-left: 2%">
            <h3 style="text-align: center">Andocodeando_blog</h3>
        </div>
        <br>
    </div>

    <div style="background-color: white; width: 60%; margin-left: 20%">
        <div style="margin-left: 5%; padding-right: 5%">
            <br>
            <h2 style="color: black !important;">
                ¡Hi!
            </h2>
            <p class="textoColor">
                @yield('mensaje')
            </p>
            <br>
            <a type="button" href="" target="_blank" class="boton">
                <span style="color: white !important;">@yield('nombreBoton')</span>
            </a>
            <br><br>
            <p class="textoColor">
                @yield('mensajeAdvertencia')
            </p>
            <br>
            <p class="textoColor">
                Nos vemos,
                <br>
                SIED_APIGATEWATE
            </p>
            <hr style="margin-top: 2%; margin-bottom: 2%">
            <p style="text-align: justify" class="textoColor">
                @yield('mensajeUrl')
                <a href="" target="_blank" style="color: #3869D4"></a>
            </p>
            <br><br>
        </div>
    </div>
    <br><br>
    <div style="align-content: center; width: 50%; margin-left: 30%">
        <p style="color: #959BA0 !important;">
            Copyright &copy; {{date('Y')}} SIED_APIGATEWATE. Todos los derechos reservados.
        </p>
    </div>
    <br><br>
</div>
</body>
</html>