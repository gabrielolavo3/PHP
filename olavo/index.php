<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Calculadora de IMC</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="">

  <form class="" method="post">
    <h1 class="">Calculadora de ICMS</h1>

    <label for="peso" class="">Valor do produto</label>
    <input 
      type="number" 
      id="valorproduto" 
      name="valorproduto" 
      step="0.1"
      placeholder="Ex: R$ 75.60" 
      class=""
      required
    />

    <div>      
      <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $valorProduto = $_POST['valorproduto']; // Busca a variável html com name

          $icms = $valorProduto * 0.08; // Cálculo do ICMS (8% do valor do produto)

          if ($valorProduto > 50) {
              $valorFrete = $valorProduto * 0.10;
              $frete = $valorFrete + $icms; // Cálculo do frete (10% do valor do produto) + ICMS
              echo 'Valor do frete: R$ ', round($frete, 2); // Impressão formatada
          }
          else {
              echo 'Valor do frete: R$ 0.00'; 
          }
        }
          
          ?>
    </div>
    
    <button type="submit" class="">
      <span>Calcular ICMS</span>
    </button>
  </form>

</body>
</html>
