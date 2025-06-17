<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Calculadora de IMC</title>
  <link rel="stylesheet" href="css/style.css">  
</head>
<body class="">

  <form id="formulario" method="post">
    <h1 class="">Descubra o seu IMC</h1>

    <label for="nome" class="nome">Nome</label>
    <input 
      type="text" id="nome" name="nome" step="0.1" placeholder="Fulano de Tal" 
      class=""
      required
    />
    <label for="peso" class="peso">Peso(Kg)</label>
    <input 
      type="number" id="peso" name="peso" step="0.1"placeholder="65.1" 
      class=""
      required
    />
    <label for="altura" class="altura">Altura(m)</label>
    <input 
      type="number" id="altura" name="altura" step="0.1" placeholder="1.7" 
      class=""
      required
    />
    
    <button type="submit" class="">
      <span>Calcular IMC</span>
    </button>

    <div class="resultado">
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $nome = $_POST['nome'];
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];

                $imc = $peso / ($altura*$altura);

                if ($imc < 18.5) {
                    echo 'Olá, ', $nome, '! Seu IMC é ', number_format($imc, 2), '. Você está muito abaixo do peso.';
                }
                else if ($imc > 18.6 && $imc < 24.9) {
                    echo 'Olá, ', $nome, '! Seu IMC é ', number_format($imc, 2), '. Você está com o peso ideal.';
                }
                else if ($imc > 25 && $imc < 29.9) {
                    echo 'Olá, ', $nome, '! Seu IMC é ', number_format($imc, 2), '. Você está com sobrepeso.';
                }
                else if ($imc > 30 && $imc < 34.9) {
                    echo 'Olá, ', $nome, '! Seu IMC é ', number_format($imc, 2), '. Você está com obesidade grau I.';
                }
                else if ($imc > 35 && $imc < 39.9) {
                    echo 'Olá, ', $nome, '! Seu IMC é ', number_format($imc, 2), '. Você está com obesidade grau II.';
                }
                else {
                    echo 'Olá, ', $nome, '! Seu IMC é ', number_format($imc, 2), '. Você está com obesidade grau III.';
                }
            }            
        ?>
    </div>

  </form>

</body>
</html>