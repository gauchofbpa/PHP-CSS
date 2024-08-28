<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Um Esqueleto que conversa com um Elefante Azul</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <p>Está precisando urgentemente calcular a área de um triângulo e saber se ele excedeu ao valor limite 100? <br> <span>VOCÊ VEIO AO LUGAR CERTO!</span> </p>
    </div>
    <form id="formulario" method="post">
        <div class="container">
            <div class="medida">
                <h1>Qual é a medida da base do triângulo?</h1>
                <div>
                <label class="nome_medida" for="base">Base</label>
                    <input type="number" id="base_triangulo" name="base_triangulo" step="0.01" required>
                </div>
            </div>
            <br>
            <div class="medida">
                <h1>Qual é a medida da altura do triângulo?</h1>
                <div>
                <label class="nome_medida" for="altura">Altura</label>
                    <input type="number" id="altura_triangulo" name="altura_triangulo" step="0.01" required>
                </div>
            </div>
        </div>
        <br>
        <div class="botao_medida">
            <button id="botao" type="submit" name="calcular_area_triangulo">Enviar</button>
        </div>
    </form>
    <br>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['calcular_area_triangulo'])){
            $base_triangulo = $_POST['base_triangulo'];
            $altura_triangulo = $_POST['altura_triangulo'];
            $area_triangulo = $base_triangulo * $altura_triangulo / 2;
            echo '<p class="texto_echo">'."A área do triângulo com as informações que você digitou é de: <span>$area_triangulo</span>. </p> <br>";
            if($area_triangulo > 100) {
                echo '<p class="texto_echo">'."A área do triângulo é <span>maior</span> do que o valor limite. </p> <br>";
            } else {
                echo '<p class="texto_echo">'."A área do triângulo é <span>menor</span> do que o valor limite. </p> <br>";
            }
        }
    }
    ?>
</body>
</html>