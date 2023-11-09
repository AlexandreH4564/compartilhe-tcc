<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/teste.css">
    <title>ComPartilhe</title>
</head>
<body>

    <section class="tela-inicial">
        <div class="container-home">
            <img src="/img/logof.svg" alt="logo">
            <h1 id="titulo">ComPartilhe</h1>
            <h4 id="subtitulo">Para um futuro sustentavél, uma moda confiavél!</h4>

            <div class="linha-botao">
                @if (Route::has('login'))
                    <div class="auth">
                        @auth
                            <a href="{{ url('/dashboard') }}">
                                <button class="btn-log">Dashboard</button>
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                <button class="btn-log">Logar</button>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button class="btn-log">cadastre-se</button>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        <a href="#sec-two">
            <button id="circle-btn-I" class="circle-btn">
                <i class="fa-solid fa-arrow-down fa-2xl" style="color: #b27b2b;"></i>
            </button>
        </a>
    </section>




    <section id="sec-two" class="tela-vitrine">
        <button class="circle-btn" id="anterior">
            <i class="fa-solid fa-arrow-left fa-2xl" style="color: #b27b2b;"></i>
        </button>

        <div class="cards-vit">
            @foreach ($vitrine as $peca)
                <div class="card-vit">
                    <div class="image-vit">
                        <img src="{{ asset('img/pecas/' . $peca->image) }}" alt="{{ $peca->image }}">
                    </div>

                    <div class="info-vit">
                        <h2 class="text-vit">{{ $peca->codigo }}</h2>
                        <h2 class="text-vit">{{ $peca->tipo }}</h2>
                        <h2 class="text-vit">{{ $peca->cor }}</h2>
                        <h2 class="text-vit">{{ $peca->material }}</h2>
                        <h2 class="text-vit">DISPONIVÉL</h2>
                    </div>

                </div>
            @endforeach
        </div>

        <button class="circle-btn" id="proximo">
            <i class="fa-solid fa-arrow-right fa-2xl" style="color: #b27b2b;"></i>
        </button>
    </section>


    <section class="tela-III">

        <div class="cards-section">
            <article class="cards">
                <div class="barra">
                    <img src="/img/elementos/cpt.svg" alt="cpt" width="50">
                    <strong>ComPartilhe</strong>
                </div>
                <p>Nascido no IFPR Campus Paranaguá, o Com-Partilhe busca proporcionar feiras de trocas, envolvendo a
                    comunidade em práticas econômicas conscientes e promovendo a reutilização de itens. Além de
                    desempenhar um papel fundamental na promoção da moda circular e na redução do desperdício, também
                    trás uma abordagem sem custo monetário, tornando o projeto inclusivo, beneficiando igualmente todos
                    os públicos.</p>




            </article>
            <article class="cards">
                <div class="barra">
                    <i class="fa-solid fa-leaf fa-2xl"></i>
                    <strong>Sustentabilidade</strong>
                </div>
                <p>É um conceito amplo que requer o equilíbrio entre as necessidades atuais e futuras, levando em
                    consideração não apenas o presente, mas também o impacto a longo prazo. Buscando harmonizar valores
                    econômicos, sociais e ambientais, o principal objetivo é assegurar que as ações de hoje não
                    prejudiquem a capacidade das gerações futuras de atender às suas próprias necessidades.


            </article>
            <article class="cards">
                <div class="barra">
                    <i class="fa-solid fa-arrows-rotate fa-2xl"></i>
                    <strong>Carbono Verde</strong>
                </div>
                <p>O Crédito de Carbono é a moeda utilizada no mercado de carbono. Criada a partir do Protocolo de Kyoto
                    em 1997, o conceito visa a diminuição dos gases de efeito estufa na atmosfera. Esses créditos podem
                    ser comprados por empresas e governos para compensar suas próprias emissões, promovendo a redução
                    global de gases de efeito estufa. Isso ajuda a combater as mudanças climáticas e incentiva práticas
                    mais sustentáveis.</p>




            </article>
            <article class="cards">
                <div class="barra">
                    <i class="fa-solid fa-question fa-2xl"></i>
                    <Strong>Curiosidade</Strong>
                </div>
                <p>
                    Você sabia que uma montanha de roupas descartadas no deserto do Atacama, no norte do Chile, atingiu proporções tão grandes que já pode ser vista do espaço? O conhecido “lixão da moda” deve aumentar ainda mais: a cada ano, milhares de toneladas de itens são enviados para a enorme pilha de roupas.
                </p>


            </article>
        </div>




    </section>




    <footer>
        <h2>ComPartilhe &copy; 2023</h2>

        <div class="redes-footer">
            <a class="redes"
                href="https://www.instagram.com/projeto_com_partilhe/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">
                <img src="/img/logowelcome.svg" alt="logo">
            </a>

            <a class="redes" href="https://ifpr.edu.br/paranagua/">
                <i class="fa-brands fa-github fa-2xl"></i>

            </a>


            <a class="redes"
                href="https://www.instagram.com/henriwue.png/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">
                <i class="fa-brands fa-instagram fa-2xl"></i>
            </a>


            <a href="" class="redes">
                <i class="fa-brands fa-twitter fa-2xl"></i>
            </a>
        </div>



    </footer>
    <script src="/js/script.js"></script>
</body>

</html>
