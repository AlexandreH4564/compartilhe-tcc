<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="css/estoque.css">
    <title>Estoque</title>

    <div class="min-h-screen">
        @livewire('navigation-menu')

        
    <section class="tabela">
        <table class="estoque-table">
            <thead>
                <tr>
                    <th>Imagem</th>
                  
                    <th>Codigo</th>
                    <th>Tipo</th>
                    <th>Cor</th>
                    <th>Material</th>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                @foreach($estoque as $peca)
                    <tr>
                        <td>
                            <img src="{{ asset('img/pecas/' . $peca->image) }}"  alt="{{ $peca->image }}" width="100" height="100"class="foto">
                        </td>
                        <td>{{ $peca->codigo }}</td>

                        <td>{{ $peca->tipo }}</td>
                        <td>{{ $peca->cor }}</td>
                        <td>{{ $peca->material }}</td>
                        <!-- Adicione outras colunas conforme necessário -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    