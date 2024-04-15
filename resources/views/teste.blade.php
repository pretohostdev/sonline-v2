<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Sou um teste</h2>

    @php
use Illuminate\Support\Facades\Http;

$response = Http::get('https://v6.exchangerate-api.com/v6/b84dc72513a0e6bae9a6a925/latest/USD');

if ($response->successful()) {
    $data = $response->json(); // Obtenha os dados da resposta como um array JSON
    // Faça algo com os dados recebidos
    
} else {
    $statusCode = $response->status(); // Obtenha o código de status da resposta
    // Lide com o erro de acordo com o código de status
}
@endphp

<div>
    <h1>Dados da API</h1>
    @if (isset($data))
        <ul>
            @foreach ($data as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Erro ao obter dados da API. Código de status: {{ $statusCode }}</p>
    @endif
</div>


</body>
</html>