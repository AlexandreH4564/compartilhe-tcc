<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/welcome.css">

    </head>
    <body>

    
    
    
        <header>
            <div class="logo">
                <img src="/img/logowelcome.svg" alt="logo">
                <h1 id="titulo">ComPartilhe</h1>
            </div>


            <div class="login-register-container">
                @if (Route::has('login'))
                    <div class="auth">
                        @auth
                        <button  class="dashboard-button">
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </button>
                        @else
                        <button class="login-button">
                            <a href="{{ route('login') }}">Log in</a>
                        </button>
                            @if (Route::has('register'))
                            <button class="register-button">
                                <a href="{{ route('register') }}" >Register</a>
                            </button>
                                
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </header>


        

        <div class="bodytwo">
            teste
        </div>
        
    </body>
</html>
