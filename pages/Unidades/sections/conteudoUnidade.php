<?php
include 'model/db.php';

// Consulta para buscar todas as unidades
$stmt = $pdo->query("SELECT * FROM unidades");
$unidades = $stmt->fetchAll();

// Consulta para gerar os filtros da sidebar
$stmtAreas = $pdo->query("SELECT * FROM areas");
$areasFilters = $stmtAreas->fetchAll();

$stmtEstrutura = $pdo->query("SELECT * FROM estrutura");
$estruturaFilters = $stmtEstrutura->fetchAll();

$stmtModalidades = $pdo->query("SELECT * FROM modalidades");
$modalidadeFilters = $stmtModalidades->fetchAll();

// Obtém os parâmetros enviados via GET
$cidade = isset($_GET['cidade']) ? trim($_GET['cidade']) : '';
$estado = isset($_GET['estado']) ? trim($_GET['estado']) : '';

$unidades = [];

// Se a cidade foi informada, tenta filtrar pelas unidades com essa localidade
if (!empty($cidade)) {
    $stmt = $pdo->prepare("SELECT * FROM unidades WHERE localidade = :cidade");
    $stmt->execute([':cidade' => $cidade]);
    $unidades = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Se não encontrar resultados pela cidade e o estado estiver disponível, filtra pelo estado
    if (empty($unidades) && !empty($estado)) {
        $stmt = $pdo->prepare("SELECT * FROM unidades WHERE estado = :estado");
        $stmt->execute([':estado' => $estado]);
        $unidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Se mesmo assim não houver resultados, exibe todas as unidades
if (empty($unidades)) {
    $stmt = $pdo->query("SELECT * FROM unidades");
    $unidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Motion Fit</title>
  <!-- Ícones Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Seus estilos atuais */
    .navbar {      
      border-bottom: 1px solid rgba(24, 10, 10, 0.44);
      background-image: url('img/Footer/Footer.png');
      backdrop-filter: blur(12px);
      z-index: 1000;
    }
    .container {
      display: flex;
      font-family: "Nunito Sans", sans-serif;
      padding: 20px;
      margin-top: 5%;
    }
    /* Botão para alternar o filtro no modo responsivo */
    #toggleFilter {
      display: none;
      margin-bottom: 20px;
      padding: 10px 16px;
      background: #96C22C;
      color: #fff;
      border: none;
      border-radius: 24px;
      font-size: 14px;
      cursor: pointer;
    }
    .sidebar {
      margin-top: 24px;
      width: 250px;
      padding: 20px;
      background: #fff;
      color: #333;
      border: 1px solid #ddd;
      border-radius: 15px;
      margin-right: 20px;
      height: fit-content;
    }
    .sidebar h3 {
      margin-bottom: 1rem;
      font-size: 1.2rem;
    }
    .filter-group {
      margin-bottom: 1.5rem;
    }
    .filter-group h4 {
      font-size: 1rem;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #444;
    }
    .filter-group label {
      display: flex;
      align-items: center;
      margin-bottom: 6px;
      cursor: pointer;
    }
    .filter-group label input {
      margin-right: 8px;
    }
    .main-content {
      flex: 1;
    }
    .search-bar {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
      width: 100%;
    }
    .search-bar input {
      flex: 1;
      padding: 10px 16px;
      border: 1px solid #ccc;
      border-radius: 24px;
      background: #fff;
      color: #333;
      font-size: 14px;
      border: solid 1px #ccc !important;
    }
    .search-bar button {
      width: auto;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 20px;
      background: #96C22C;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 24px;
      font-weight: 600;
      transition: background 0.3s ease;
    }
    .search-bar button i {
      font-size: 14px;
    }
    .search-bar button:hover {
      background: #96C22C;
    }
    .card-deck {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .card {
      flex: 0 0 calc(33.333% - 20px);
      border: 1px solid #fff;
      padding: 10px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      background: #fff;
      border-radius: 8px;
      /* Para que o JS use "flex" para exibir os cards filtrados */
    }
    .card img {
      height: 200px;
      width: 100%;
      object-fit: cover;
      border-radius: 6px;
    }
    .card-title {
      margin-bottom: 0.5rem;
      color: #333;
      font-size: 1rem;
      font-weight: 600;
    }
    .card-text {
      color: #5D686E;
      font-size: 14px;
      font-weight: 400;
      line-height: 150%;
      margin-bottom: 0.5rem;
    }
    .btn-card {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 40px;
      padding: 0 24px;
      gap: 8px;
      border-radius: 20px;
      background: #E4E9E9;
      text-decoration: none;
      color: #333;
      transition: background 0.3s ease;
    }
    .btn-card:hover {
      background: rgb(195, 197, 197);
    }
    @media (max-width: 992px) {
      .card {
        flex: 0 0 calc(50% - 20px);
      }
    }
    @media (max-width: 576px) {
      .container {
        flex-direction: column;
      }
      /* Exibe o botão de filtro no modo responsivo */
      #toggleFilter {
        display: block;
        margin-top: 55px;
      }
      /* Ajusta o sidebar para ocupar a largura total e ficar oculto por padrão */
      .sidebar {
        display: none;
        width: 100%;
        margin: 0 0 20px 0;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
      }
      /* Exibe o sidebar quando ativo */
      .sidebar.active {
        display: block;
      }
      .card {
        flex: 0 0 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Botão para alternar o filtro no modo responsivo -->
    <button id="toggleFilter">Filtrar unidades</button>
    <!-- Sidebar / Filtro -->
    <div class="sidebar">
      <h3>Filtrar unidades</h3>
      <!-- Grupo: Espaços dedicados (áreas) -->
      <div class="filter-group">
        <h4>Espaços dedicados</h4>
        <?php foreach ($areasFilters as $area): ?>
          <label>
            <input type="checkbox" name="filter_area[]" value="<?php echo $area['id']; ?>">
            <?php echo htmlspecialchars($area['nome']); ?>
          </label>
        <?php endforeach; ?>
      </div>
      <!-- Grupo: Estatuto do local (estrutura) -->
      <div class="filter-group">
        <h4>Estatuto do local</h4>
        <?php foreach ($estruturaFilters as $estr): ?>
          <label>
            <input type="checkbox" name="filter_estrutura[]" value="<?php echo $estr['id']; ?>">
            <?php echo htmlspecialchars($estr['nome']); ?>
          </label>
        <?php endforeach; ?>
      </div>
      <!-- Grupo: Aulas diversificadas (modalidades) -->
      <div class="filter-group">
        <h4>Aulas diversificadas</h4>
        <?php foreach ($modalidadeFilters as $mod): ?>
          <label>
            <input type="checkbox" name="filter_modalidade[]" value="<?php echo $mod['id']; ?>">
            <?php echo htmlspecialchars($mod['nome']); ?>
          </label>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- Conteúdo principal -->
    <div class="main-content">
      <!-- Barra de busca -->
      <div class="search-bar">
        <input type="text" id="search" placeholder="Busque uma unidade...">
        <button onclick="filterUnits()">
          Buscar <i class="fas fa-search"></i>
        </button>
      </div>
      <!-- Cards -->
      <div class="row">
        <div class="card-deck">
          <?php if (!empty($unidades)): ?>
            <?php foreach ($unidades as $unidade): ?>
              <?php
              // Recupera os filtros associados à unidade por meio das tabelas de ligação
              $unit_id = $unidade['id'];

              // Áreas
              $stmtUA = $pdo->prepare("SELECT area_id FROM unidade_areas WHERE unidade_id = :unit_id");
              $stmtUA->execute([':unit_id' => $unit_id]);
              $unitAreas = $stmtUA->fetchAll(PDO::FETCH_COLUMN);

              // Estrutura
              $stmtUE = $pdo->prepare("SELECT estrutura_id FROM unidade_estrutura WHERE unidade_id = :unit_id");
              $stmtUE->execute([':unit_id' => $unit_id]);
              $unitEstruturas = $stmtUE->fetchAll(PDO::FETCH_COLUMN);

              // Modalidades
              $stmtUM = $pdo->prepare("SELECT modalidade_id FROM unidade_modalidades WHERE unidade_id = :unit_id");
              $stmtUM->execute([':unit_id' => $unit_id]);
              $unitModalidades = $stmtUM->fetchAll(PDO::FETCH_COLUMN);

              // Define o caminho da imagem
              $imagePath = $unidade['imagem'];
              if (empty($imagePath)) {
                $imagePath = 'img/default.png';
              }
              ?>
              <div class="card"
                   data-areas="<?php echo implode(',', $unitAreas); ?>"
                   data-estrutura="<?php echo implode(',', $unitEstruturas); ?>"
                   data-modalidades="<?php echo implode(',', $unitModalidades); ?>"
              >
                <img src="img/Unidade/Cards/<?php echo htmlspecialchars($unidade['nome']); ?>.png" alt="<?php echo htmlspecialchars($unidade['nome']); ?>">
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
            <?php endforeach; ?>
          <?php else: ?>
            <p>Nenhuma unidade encontrada.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Função de filtro: busca e comparação dos filtros selecionados com os atributos dos cards
    function filterUnits() {
      let searchInput = document.getElementById('search').value.toLowerCase();
      let cards = document.querySelectorAll('.card');

      // Coleta os filtros selecionados para cada grupo
      let selectedAreas = Array.from(document.querySelectorAll('input[name="filter_area[]"]:checked')).map(cb => cb.value);
      let selectedEstrutura = Array.from(document.querySelectorAll('input[name="filter_estrutura[]"]:checked')).map(cb => cb.value);
      let selectedModalidades = Array.from(document.querySelectorAll('input[name="filter_modalidade[]"]:checked')).map(cb => cb.value);

      cards.forEach(card => {
        let title = card.querySelector('.card-title').innerText.toLowerCase();
        let show = title.includes(searchInput);

        // Verifica o grupo Áreas (Espaços dedicados)
        if (show && selectedAreas.length > 0) {
          let cardAreas = card.getAttribute('data-areas').split(',');
          if (!selectedAreas.some(val => cardAreas.includes(val))) {
            show = false;
          }
        }

        // Verifica o grupo Estrutura (Estatuto do local)
        if (show && selectedEstrutura.length > 0) {
          let cardEstrutura = card.getAttribute('data-estrutura').split(',');
          if (!selectedEstrutura.some(val => cardEstrutura.includes(val))) {
            show = false;
          }
        }

        // Verifica o grupo Modalidades (Aulas diversificadas)
        if (show && selectedModalidades.length > 0) {
          let cardModalidades = card.getAttribute('data-modalidades').split(',');
          if (!selectedModalidades.some(val => cardModalidades.includes(val))) {
            show = false;
          }
        }

        card.style.display = show ? "flex" : "none";
      });
    }

    // Eventos de busca e de alteração dos checkboxes
    document.getElementById('search').addEventListener('input', filterUnits);
    document.querySelectorAll('.sidebar input[type="checkbox"]').forEach(checkbox => {
      checkbox.addEventListener('change', filterUnits);
    });

    // Alternar visibilidade do sidebar no modo responsivo
    document.getElementById('toggleFilter').addEventListener('click', function() {
      document.querySelector('.sidebar').classList.toggle('active');
    });
  </script>
</body>
</html>
