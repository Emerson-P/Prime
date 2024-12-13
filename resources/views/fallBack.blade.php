<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .fallback-container {
            text-align: center;
        }
        .fallback-container h1 {
            font-size: 60px;
            color: #ff6b6b;
            margin-bottom: 10px;
        }
        .fallback-container p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .fallback-container a {
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
        .fallback-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="fallback-container">
        <h1>404</h1>
        <p>Oops! A página que você procura não foi encontrada.</p>
        <a href="{{ Route('index')}}">Voltar para a Página Inicial</a>
    </div>
</body>
</html>
