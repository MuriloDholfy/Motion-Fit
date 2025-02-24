<?php
include 'model/db.php';

$stmt = $pdo->query("SELECT * FROM unidades");
$unidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Motion Fit
  </title>
  <link href="css/home.css" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="img/Cabeçalho.svg">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php
    include('components/navBar.php'); 
    include('pages/Home/sections/Cover.php');?>
    <script>window.rwbp={email:'ti@motionfitacademia.com.br',phone:'5511989467901',message:'Olá seja bem vindo ',lang:'pt-BR'}</script><script defer async src='https://duz4dqsaqembt.cloudfront.net/client/whats.js'></script>
    <?php

    include('pages/Home/sections/Ads.php'); 
    include('pages/Home/sections/Unidades.php'); 
    include('pages/Home/sections/Wellhub.php'); 
    // include('pages/Home/sections/Aulas.php');
    // include('pages/Home/sections/Planos.php');
    include('pages/Home/sections/QuemSomos.php'); 
    include('pages/Home/sections/Numeros.php'); 
    include('pages/Home/sections/Galeria.php');
    include('pages/Home/sections/App.php');
    include('pages/Home/sections/Depoimentos.php');
    include('pages/Home/sections/Faq.php');
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
