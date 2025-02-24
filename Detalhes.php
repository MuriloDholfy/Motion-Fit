
<?php
// Inclua o arquivo de conexão (ajuste o caminho se necessário)
include 'model/db.php';

// Verifica se o parâmetro 'id' foi passado via GET
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consulta preparada para evitar SQL Injection
    $stmt = $pdo->prepare("SELECT * FROM unidades WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $unidade = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$unidade) {
        // Se não encontrar a unidade, exibe mensagem e encerra
        die("Unidade não encontrada.");
    }
} else {
    die("ID não fornecido.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Motion Fit</title>
  <link rel="icon" type="image/svg+xml" href="img/Cabeçalho.svg">
  <link href="css/home.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php
    include('components/navBar.php'); 
    include('pages/Unidades/sections/conteudoDetalhes.php');
    include('components/footer.php'); 

?>

  <script>
    function changeUnit(unit) {
      const infoBox = document.querySelector('.info-box');
      const img = infoBox.querySelector('img');
      const title = infoBox.querySelector('h3');
      const description = infoBox.querySelector('p');

      if (unit === 'parque-savoy') {
        img.src = 'img/Cards/Foto.png';
        title.textContent = 'Unidade Parque Savoy';
        description.textContent = 'R. Manuel de Andrade Furtado, 54 - Parque Savoy City, São Paulo - SP, 03571-200';
      } else if (unit === 'unidade-1') {
        img.src = 'img/Cards/Unidade1.png';
        title.textContent = 'Unidade 1';
        description.textContent = 'Endereço da Unidade 1';
      } else if (unit === 'unidade-2') {
        img.src = 'img/Cards/Unidade2.png';
        title.textContent = 'Unidade 2';
        description.textContent = 'Endereço da Unidade 2';
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
