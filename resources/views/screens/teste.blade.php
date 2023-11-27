<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Popup Example</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(0, 0, 20);
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 20px;
        border: double;
        background-color: #fff;
        z-index: 1;
        animation: growIn 0.3s ease-out;
        /* Adicionando a animação de crescimento */
    }

    .popup-content {

        position: relative;
    }

    .close {
        position: absolute;
        background-color: red;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    /* Definindo a animação de crescimento */
    @keyframes growIn {
        from {
            transform: translate(-50%, -50%) scale(0);
        }

        to {
            transform: translate(-50%, -50%) scale(1);
        }
    }
</style>

<body>

    <button id="openBtn">Abrir Janela</button>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closeBtn">&times;</span>
            <p>Olá, esse é um teste. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio saepe earum fugit quod quibusdam rerum vel, nihil porro tempora doloremque. Repudiandae vero beatae fugit voluptatum voluptas repellat magni hic alias!</p>
            <img src="/img/logo.svg" alt="">
        </div>
    </div>

    <script>
        document.getElementById('openBtn').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('closeBtn').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });
    </script>
</body>

</html>
