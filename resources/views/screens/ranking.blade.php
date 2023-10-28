<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ranking</title>
</head>
<style>
    * {
    font-family: 'Poppins', sans-serif;
}

body {
    background-image: url(/img/wallpaper.gif);
    backdrop-filter: blur(10px);
    background-size: cover;
    background-attachment: fixed;
}
section.tabela {
    background-color: rgb(248, 248, 248);
    border-radius: 20px;
    margin: 100px auto;
    width: 80%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
}

.estoque-table {
    width: 90%;
    border-collapse: collapse;
    border-radius: 20px;
    margin: 0 auto;
}

 
.estoque-table thead {
    height: 100px;
    color: #222222;
}


.estoque-table th, .estoque-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
} 

;.estoque-table td {
    font-weight: 900;
}


.foto {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    transition: transform 0.7s; 
}
.foto:hover {
    transform: scale(2.5); 
}
.estoque-table tbody tr:hover {
    background-color: #ddd;
}
</style>
<body>
    <section class="tabela">
        <table class="estoque-table">
            <thead>
                <tr>
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Total de ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                <tr>
                    <td>
                        @if ($key == 0)
                            1º lugar
                        @elseif ($key == 1)
                            2º lugar
                        @elseif ($key == 2)
                            3º lugar
                        @else
                            {{ $key + 1 }}º lugar
                        @endif
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->credits }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>