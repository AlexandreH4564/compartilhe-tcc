<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles

<link rel="stylesheet" href="css/estilos-gerais.css">
<link rel="stylesheet" href="css/form-grupo.css">
<link rel="stylesheet" href="css/flashmensage.css">
<title>
    @yield('title')
</title>
</head>

<body>
    @livewire('navigation-menu')
    <x-flash-erro/>
    <x-flash-message/>

    @yield('content')

    <footer>
        <p>ComPartilhe &copy; 2023</p>
    </footer>


    <!-- Scripts -->
    @livewireScripts
    <script src="js/modal.js"></script>
    <script src="js/input.js"></script>
</body>

</html>
