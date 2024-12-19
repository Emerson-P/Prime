<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Inicial</title>
    
    <style>
        /* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    color: #333;
    background-color: #f4f4f4;
}

/* Header */
header {
    background: #333;
    color: #fff;
    padding: 1rem 0;
}
header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header h1 {
    margin: 0;
}
header nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}
header nav ul li {
    margin: 0 1rem;
}
header nav ul li a {
    color: #fff;
    text-decoration: none;
}

/* Container */
.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

/* Seções */
section {
    margin: 2rem 0;
    padding: 1rem;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
section h2 {
    margin-top: 0;
}

/* Footer */
footer {
    text-align: center;
    padding: 1rem 0;
    background: #333;
    color: #fff;
    margin-top: 2rem;
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Bem-vindo ao Meu Site</h1>
            <nav>
                <ul>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="about" class="container">
            <h2>Sobre Nós</h2>
            <p>Este é um exemplo de página inicial básica para você começar a criar seu site incrível.</p>
        </section>
        <section id="services" class="container">
            <h2>Serviços</h2>
            <ul>
                <li>Design Web</li>
                <li>Desenvolvimento Front-End</li>
                <li>Consultoria Técnica</li>
            </ul>
        </section>
        <section id="contact" class="container">
            <h2>Contato</h2>
            <p>Entre em contato pelo email: exemplo@email.com</p>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
