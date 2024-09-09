<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Assets/css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo azul">
                    <h3>Módulo 1 - Inicio</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basic&file=ola">Olá PHP</a>
                        </li>
                        
                        <li>
                            <a href="exercicio.php?dir=basic&file=html">Integração HTML</a>
                        </li>
                        
                        <li>
                            <a href="exercicio.php?dir=basic&file=css">Integração CSS</a>
                        </li>
                        
                        <li>
                            <a href="exercicio.php?dir=basic&file=desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 2</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 3</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <!-- <div class="modulo vermelho">
                    <h3>Módulo 4</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 5</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 6</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 7</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 8</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 9</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div> -->
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Direitos Reservados <?= date('Y'); ?>
    </footer>
</body>
</html>