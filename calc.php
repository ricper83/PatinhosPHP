<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resolução do Exercício</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Resolução:</h1>
    <?php 
      //Pega a quantidade de patinhos digitada no formulário:
      $numPatos = $_GET["patinhos"] ?? 0;
      //Verifica se a quantidade digitada está correta e retorna mensagem de erro se não.
      if(!is_numeric($numPatos) || $numPatos <=1 || $numPatos >=10){
        echo "O número digitado de patinhos é inválido. \n";
        echo "É necessário enviar um valor maior que 1 e menor que 10. \n";
        exit;
      }
      //itera a quantidade total de patinhos:
      for($i = $numPatos; $i > 0; $i--){
        echo "\n";

        //Condição da quantidade de patinhos:
        echo $i != 1 ? $i." <p>patinhos foram passear</p>\n" : "<p>1 patinho foi passear</p>\n";

        //Textos finais da letra:
        echo "<p>Além das montanhas</p>\n";
        echo "<p>Para brincar</p>\n";
        echo "<p>A mamãe gritou: Quá, quá, quá, quá</p>\n";

        switch($i){
          case 2:
            echo "<p>Mas só 1 patinho voltou de lá.</p>\n";
            break;
          case 1:
            echo "<p>Mas nenhum patinho voltou de lá.</p>\n";
            break;
          default:
            echo "<p>Mas só ".($i-1)." patinhos voltaram de lá</p>.\n";
            break;
        }

      };
    ?>
  </main>
</body>
</html>