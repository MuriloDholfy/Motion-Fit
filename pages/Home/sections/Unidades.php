<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Unidades</title>
  <!-- Inclua os links do Bootstrap e demais CSS -->
  <link href="caminho/para/bootstrap.css" rel="stylesheet">
  <style>
    /* Seu CSS já existente */
    .carousel {
      position: relative;
      max-width: 870px;
      width: 100%;
    }
    .unidade-section {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 8px;
      padding: 80px 20px;
      width: 100%;
    }
    .section-title {
      color: #232729;
      font-size: 32px;
      font-weight: 700;
      line-height: 38px;
      text-align: left;
      width: 70%;
    }
    .section-title span {
      color: #7bc043;
    }
    .card img {
      height: 200px;
      width: 100%;
      object-fit: cover;
      border-radius: 6px;
    }
    .card {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      border-color: #fff;
      margin-bottom: 20px;
    }
    .btn-card {
      display: flex;
      height: 48px;
      padding: 0 24px;
      justify-content: center;
      align-items: center;
      gap: 8px;
      border-radius: 24px;
      background: var(--Colors-Gray-2, #E4E9E9);
      transition: background 0.3s ease;
      text-decoration: none;
      color: inherit;
    }
    .btn-card:hover {
      background: rgb(195, 197, 197);
    }
    .social-icons {
      display: flex;
      gap: 10px;
    }
    .social-icon {
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 24px;
      background: var(--Colors-Primary-6, #96C22C);
      transition: background-color 0.3s ease;
    }
    .social-icon i {
      font-size: 20px;
      color: #333;
    }
    .social-icon:hover {
      background: var(--Colors-Primary-6, rgb(156, 185, 89));
    }
    .social-icon:hover i {
      color: #fff;
    }
    .card-text {
      overflow: hidden;
      color: var(--Colors-Gray-7, #5D686E);
      text-overflow: ellipsis;
      font-size: 14px;
      font-weight: 400;
      line-height: 150%;
    }
    @media (max-width: 768px) {
      .unidade-section {
        padding: 0px 0px;
      }
      .section-title {
        font-size: 24px;
        line-height: 30px;
      }
      .btn-card {
        padding: 0 16px;
      }
      
    }
    @media (max-width: 768px) {
      .carousel-cards .unidade-section,
      .carousel-cards .row,
      .carousel-cards .col-4 {
        display: block !important;
      }
      .carousel-cards .col-4 {
           width: 80.0%; 
           justify-content: center;
           align-items: center;
      }
    }

  </style>
</head>
<body>
  
<section class="carousel-cards">
  <div class="container">
    <div class="unidade-section">
      <h3 class="section-title"><span>Explore e conheça</span> nossas unidades</h3>
      <div id="unitCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Cria uma linha para os 3 cards -->
        <div class="row">
          <?php if (!empty($unidades)): ?>
            <?php 
              // Limita para apenas os 3 primeiros registros
              $firstThree = array_slice($unidades, 0, 3);
            ?>
            <?php foreach($firstThree as $unidade): ?>
              <div class="col-4">
                <div class="card">
                <!-- <?php
                    // Exemplo: $unidade é o array com os dados da unidade
                    $imagePath = $unidade['imagem'];

                    // // Verifica se o campo de imagem está vazio
                    // if (empty($imagePath)) {
                    //     // Define um caminho padrão para a imagem
                    //     $imagePath = 'img/default.png';
                    // }
                    ?> -->
                    <img src="img/Unidade/Cards/<?php echo htmlspecialchars($imagePath); echo htmlspecialchars($unidade['nome']);?>.png">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($unidade['nome']); ?></h5>
                    <p class="card-text">
                      <i class="fas fa-map-marker-alt"></i>
                      <?php echo htmlspecialchars($unidade['endereco']); ?>
                    </p>
                    <p class="card-text">
                      <i class="fas fa-clock"></i>
                      <?php echo htmlspecialchars($unidade['horario_funcionamento']); ?>
                    </p>
                    <a href="Detalhes.php?id=<?php echo $unidade['id']; ?>" class="btn-card">Ver Mais Detalhes</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>Nenhuma unidade encontrada.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  function toggleRowClass() {
    // Seleciona a div específica dentro do carrossel (ajuste o seletor se necessário)
    const rowElement = document.querySelector('#unitCarousel .row, #unitCarousel .container');

    if (rowElement) {
      if (window.innerWidth <= 768) {
        // Se for mobile e ainda estiver com a classe "row", substitui para "container"
        if (rowElement.classList.contains('row')) {
          rowElement.classList.replace('row', 'container');
        }
      } else {
        // Se for desktop e a div estiver com a classe "container", volta para "row"
        if (rowElement.classList.contains('container')) {
          rowElement.classList.replace('container', 'row');
        }
      }
    }
  }

  // Executa a função quando o DOM for carregado
  window.addEventListener('DOMContentLoaded', toggleRowClass);
  // Atualiza a verificação ao redimensionar a tela
  window.addEventListener('resize', toggleRowClass);
</script>

<!-- Inclua os scripts do Bootstrap -->
<script src="caminho/para/bootstrap.bundle.js"></script>
</body>
</html>
