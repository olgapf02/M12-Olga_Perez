{{--@extends('layout')--}}
{{--@section('imagen_entera')--}}
{{--    <div class="imagen-entera-container">--}}
{{--        <div class="image-container">--}}
{{--            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">--}}
{{--        </div>--}}
{{--        <div class="titulo-container">--}}
{{--            <h3> {{__('Our events')}}</h3>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@section('content')--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
{{--    <link rel="stylesheet" href="styles.css">--}}
</head>
<body>
<!-- El cuadro de login -->
<div class="login-box">
    <h2>Login</h2>
    <form id="loginForm">
        <div class="input-group">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">
        </div>
        <div class="input-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit" href="{{ url('/') }}">Iniciar Sesión</button>
    </form>
</div>
</body>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
    }

    .usuario {
    display: block;
    margin-bottom: 20px;
    }

    .login-box {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    /*box-shadow: 0 2px 5px rgba(0,0,0,0.1);*/
    }

    .login-box h2 {
    margin-bottom: 20px;
    text-align: center;
    }

    .input-group label {
    display: block;
    font-weight: bold;
    }

    .input-group input[type="text"],
    .input-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }

    button {
        padding: 10px 20px;
        background-color: #980b11;
        border-radius: 4px;
        margin-top: 10px;
        color: white;
        margin-top: 10px;
        float: right;
    }
    button:hover {
        background-color: #ff1a1f;

        }

    /*.butt-login{*/
    /*    padding: 10px 20px;*/
    /*    background-color: #980b11;*/
    /*    border-radius: 4px;*/
    /*    margin-top: 10px;*/
    /*    color: white;*/
    /*    margin-top: 10px;*/
    /*    float: right;*/

    /*}*/
    /*.but-login:hover {*/
    /*    background-color: #ff1a1f;*/
    /*}*/
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordInput = document.getElementById("password");

        passwordInput.addEventListener("input", function() {
            const maskedValue = maskPassword(this.value);
            this.value = maskedValue;
        });

        function maskPassword(value) {
            return "•".repeat(value.length);
        }

        const loginForm = document.getElementById("loginForm");

        loginForm.addEventListener("submit", function(event) {
            event.preventDefault();

            const username = this.username.value;
            const password = this.password.value;

            // Aquí puedes enviar los datos del formulario
            console.log("Username:", username);
            console.log("Password:", password);

            // Puedes hacer una petición AJAX aquí para enviar los datos
            // Por ejemplo:
            /*
            fetch("url_del_servidor/login", {
                method: "POST",
                body: JSON.stringify({ username, password }),
                headers: {
                    "Content-Type": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error("Error:", error);
            });
            */
        });
    });

</script>
</html>

{{--@endsection--}}
