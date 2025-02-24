<?php
// Incluir o arquivo de conexão com o banco
include 'model/db.php';

// Verifica se o parâmetro "id" foi passado na URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    // Prepara a consulta para evitar SQL Injection
    $stmt = $pdo->prepare("SELECT * FROM unidades WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $unidade = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se não encontrar a unidade, encerra com uma mensagem de erro
    if (!$unidade) {
        die("Unidade não encontrada.");
    }
} else {
    die("ID não fornecido.");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    
    /* Estilos da página */
    .plans { text-align: center; padding: 50px 20px; }
    .plans-title { font-size: 24px; margin-bottom: 30px; }
    .plans-container { 
      display: flex; 
      justify-content: center; 
      gap: 20px; 
      flex-wrap: nowrap; 
    }
    .plan-card { 
      background: white; 
      padding: 30px; 
      border-radius: 10px; 
      width: 320px; 
      text-align: center; 
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    }
    .highlight { background: black; color: white; }
    .plan-price { font-size: 22px; font-weight: bold; margin: 10px 0; }
    .plan-price span { font-size: 16px; font-weight: normal; }
    .plan-description {
    font-size: 11px;
    margin-bottom: 15px;
    color: #000000;
    text-align: left;
    padding: 0px 20px;
    margin-top: 20px;
    line-height: 2;
}    .plan-button { background: white; border: 2px solid black; padding: 10px 15px; border-radius: 5px; cursor: pointer; }
    .highlight-btn { background: black; color: white; border: 2px solid white; }
    .plan-features { list-style: none; padding: 0; margin-top: 20px; }
    .plan-features li { font-size: 14px; margin: 5px 0; }
    
    .navbar {  background-image: url('img/Footer/Footer.png'); }
    .container { max-width: 1200px; margin: 0 auto; padding: 20px; color: #333; margin-top:10% }
    .unit-hero {
      width: 100%;
      height: 300px; 
      background-color: #d9d9d9; 
      border-radius: 8px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #666;
      font-size: 18px;
      position: relative;
      overflow: hidden;
    }
    .unit-hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
    }
    .icon-row {
      position: absolute;
      bottom: 10px;
      right: 10px;
      display: flex;
      gap: 8px;
    }
    .icon-placeholder {
      width: 32px;
      height: 32px;
      background-color: #bbb;
      border-radius: 4px;
    }
    
    .unit-info { margin-bottom: 20px; }
    .unit-info h2 { font-size: 24px; font-weight: 600; margin-bottom: 6px; }
    .unit-info p { font-size: 16px; color: #666; }
    
    .info-wrapper { 
      display: flex; 
      flex-wrap: wrap; 
      gap: 20px; 
      margin-bottom: 30px; 
    }
    .info-card { 
      flex: 1 1 300px; 
      border: 1px solid #ccc; 
      border-radius: 15px; 
      padding: 20px; 
    }
    .info-card h3 { 
      font-size: 18px; 
      margin-bottom: 10px; 
      color: #333; 
      display: flex; 
      align-items: center; 
      gap: 8px; 
    }
    .info-card ul { list-style: none; margin-top: 10px; }
    .info-card li { margin-bottom: 8px; color: #555; }
    .info-card p { margin-bottom: 16px; line-height: 1.5; color: #555; }
    
    .tour-buttons { display: flex; gap: 10px; }
    .tour-buttons button { 
      padding: 10px 16px; 
      border: none; 
      border-radius: 4px; 
      cursor: pointer; 
      background-color: #4CAF50; 
      color: #fff; 
      font-size: 14px; 
      transition: background-color 0.3s; 
    }
    .tour-buttons button:hover { background-color: #45a049; }
    
    .schedule { margin-bottom: 40px; }
    .schedule h3 { font-size: 20px; margin-bottom: 20px; color: #333; }
    .table-responsive { overflow-x: auto; }
    table { 
      width: 100%; 
      min-width: 700px; 
      border-collapse: collapse; 
      border: 1px solid #eee; 
    }
    thead { background-color: #f5f5f5; }
    th, td { 
      text-align: center; 
      padding: 12px; 
      border: 1px solid #eee; 
      color: #555; 
    }
    th { font-weight: 600; color: #333; }
    
    .modalities { text-align: center; padding: 50px 20px; }
    .modalities-title { font-size: 24px; margin-bottom: 30px; }
    .modalities-container { 
      display: flex; 
      justify-content: center; 
      gap: 20px; 
      flex-wrap: wrap; 
    }
    .modality-card { 
      /* display: flex; 
      flex-direction: column; 
      align-items: center; 
      background: white; 
      padding: 20px; 
      border-radius: 10px; 
      width: 120px; 
      text-align: center; 
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  */
    }
    .modality-icon img { 
      width: 60px; 
      height: 60px; 
      margin-bottom: 10px; 
    }
    .modality-card p { 
      font-size: 14px; 
      font-weight: bold; 
      color: #333; 
    }

    /* Estilização geral da seção */
        .areas-estrutura {
        max-width: 1200px;       /* Ajuste conforme a necessidade */
        margin: 0 auto;
        padding: 40px 20px;
        font-family: sans-serif; /* Exemplo de fonte */
        text-align: center;
        }

        /* Título de cada bloco (Áreas e Estrutura) */
        .areas-estrutura h2 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: #333; /* Ajuste de cor */
        }

        /* Container que agrupa os ícones em cada seção */
        .icons-row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;         /* Para quebrar linha em telas menores */
        gap: 2rem;               /* Espaçamento entre os ícones */
        margin-bottom: 40px;     /* Espaço inferior entre grupos */
        }

        /* Cada ícone e seu texto */
        .icon-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 100px;        /* Largura máxima para alinhar o texto */
        text-decoration: none;
        color: #666;
        }
        /* Estilo do ícone */
        .icon-box img {
        width: 48px;             /* Tamanho do ícone */
        height: 48px;
        margin-bottom: 0.5rem;
        }

        /* Estilo do texto abaixo do ícone */
        .icon-box span {
        font-size: 0.95rem;
        line-height: 1.2;
        color: #444; /* Ajuste de cor */
        }

    
    /* Media Queries para Responsividade */
    @media (max-width: 768px) {
      .unit-hero { height: 200px; }
      .info-wrapper { flex-direction: column; }
      .plans-container {
        flex-wrap: wrap;
        justify-content: center;
      }
      .plan-card {
        width: 100%;
        max-width: 320px;
        margin: 0 auto 20px;
      }
    }
    
    @media (max-width: 480px) {
      .unit-info h2 { font-size: 20px; }
      .unit-info p { font-size: 14px; }
      .plan-price { font-size: 20px; }
      .plan-description { font-size: 13px; }
      .tour-buttons button { font-size: 12px; padding: 8px 12px; }
      .modality-card { width: 100px; }
      .modality-icon img { width: 50px; height: 50px; }
    }

  </style>
  <title>Detalhes da Unidade - Motion Fit</title>
  <?php
// Incluir o arquivo de conexão com o banco
include 'model/db.php';

// Verifica se o parâmetro "id" foi passado na URL e busca a unidade
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM unidades WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $unidade = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$unidade) {
        die("Unidade não encontrada.");
    }
} else {
    die("ID não fornecido.");
}

// CONSULTAS DINÂMICAS

// Buscar os planos vinculados à unidade atual
$stmtPlanos = $pdo->prepare("SELECT * FROM planos WHERE unidade_id = :unidade_id");
$stmtPlanos->execute([':unidade_id' => $unidade['id']]);
$planos = $stmtPlanos->fetchAll(PDO::FETCH_ASSOC);



$stmtModalidades = $pdo->prepare("
    SELECT m.* 
    FROM modalidades m 
    INNER JOIN unidade_modalidades um ON m.id = um.modalidade_id 
    WHERE um.unidade_id = :unidade_id
");
$stmtModalidades->execute([':unidade_id' => $unidade['id']]);
$modalidades = $stmtModalidades->fetchAll(PDO::FETCH_ASSOC);

$stmtAreas = $pdo->prepare("
    SELECT a.* 
    FROM areas a 
    INNER JOIN unidade_areas ua ON a.id = ua.area_id 
    WHERE ua.unidade_id = :unidade_id
");
$stmtAreas->execute([':unidade_id' => $unidade['id']]);
$areas = $stmtAreas->fetchAll(PDO::FETCH_ASSOC);

$stmtEstrutura = $pdo->prepare("
    SELECT e.* 
    FROM estrutura e 
    INNER JOIN unidade_estrutura ue ON e.id = ue.estrutura_id 
    WHERE ue.unidade_id = :unidade_id
");
$stmtEstrutura->execute([':unidade_id' => $unidade['id']]);
$estrutura = $stmtEstrutura->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detalhes da Unidade - Motion Fit</title>
  <style>
    /* Seus estilos existentes */
  </style>
</head>
<body>
  <div class="container">
    <!-- IMAGEM GRANDE DA UNIDADE -->
    <div class="unit-hero">
      <?php
        // Verifica se existe imagem, caso contrário usa imagem padrão
        $imagePath = $unidade['imagem'];
        if (empty($imagePath)) {
            $imagePath = 'img/default.png';
        }
      ?>
      <img class="img-hero" src="img/Unidade/Cards/<?php echo htmlspecialchars($unidade['nome']); ?>.png" alt="<?php echo htmlspecialchars($unidade['nome']); ?>">
      <div class="icon-row">
        <div class="icon-placeholder"></div>
        <div class="icon-placeholder"></div>
        <div class="icon-placeholder"></div>
      </div>
    </div>

    <!-- TÍTULO E ENDEREÇO DA UNIDADE -->
    <div class="unit-info">
      <h2><?php echo htmlspecialchars($unidade['nome']); ?> - Motion Fit</h2>
      <p><?php echo htmlspecialchars($unidade['endereco']); ?></p>
    </div>

    <!-- DUAS BOXES: HORÁRIOS E TOUR -->
    <div class="info-wrapper">
      <!-- HORÁRIOS DE ATENDIMENTO -->
      <div class="info-card">
        <h3>Horários de Atendimento</h3>
        <?php if (!empty($unidade['horario_funcionamento'])): ?>
          <p><?php echo htmlspecialchars($unidade['horario_funcionamento']); ?></p>
        <?php else: ?>
          <ul>
            <li><strong>Segunda a Sexta:</strong> 06h00 às 22h00</li>
            <li><strong>Sábados e Feriados:</strong> 08h00 às 14h00</li>
            <li><strong>Domingos:</strong> Fechado</li>
          </ul>
        <?php endif; ?>
      </div>

      
    </div>

    <!-- SEÇÃO DE PLANOS -->
    <section class="plans">
      <h2 class="plans-title">Nossos Planos</h2>
      <div class="plans-container">
        <?php if (!empty($planos)): ?>
          <?php foreach($planos as $plano): ?>
            <div class="plan-card <?php echo ($plano['destaque'] ? 'highlight' : ''); ?>">
              <h3><?php echo htmlspecialchars($plano['nome']); ?></h3>
              <p class="plan-price">
                R$<?php echo number_format($plano['preco'], 2, ',', '.'); ?> 
                <span>por mês</span>
              </p>
              <?php echo ($plano['destaque'] ? 'highlight-btn' : ''); ?>
                <button class="plan-button <?php echo ($plano['destaque'] ? 'highlight-btn' : ''); ?>"
                      onclick="window.location.href='<?php echo htmlspecialchars($plano['linkbotao']); ?>'">
                Assinar este plano
              </button>
              <p class="plan-description"><?php echo htmlspecialchars($plano['descricao']); ?></p>

              <ul class="plan-features">
                <?php
                  // Exemplo: se os features estiverem armazenados em outra tabela
                  $stmtFeatures = $pdo->prepare("SELECT * FROM plano_features WHERE plano_id = :plano_id");
                  $stmtFeatures->execute([':plano_id' => $plano['id']]);
                  $features = $stmtFeatures->fetchAll(PDO::FETCH_ASSOC);
                  foreach($features as $feature):
                ?>
                  <li>&#10003; <?php echo htmlspecialchars($feature['descricao']); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>Nenhum plano disponível para esta unidade.</p>
        <?php endif; ?>
      </div>
    </section>

    <!-- SEÇÃO DE MODALIDADES -->
    <section class="modalities">
      <h2 class="modalities-title">Modalidades</h2>
      <div class="modalities-container">
        <?php if (!empty($modalidades)): ?>
          <?php foreach($modalidades as $modalidades): ?>
            <div class="icon-box">
                <img src="img/Unidade/Modalidades/<?php echo htmlspecialchars($modalidades['nome']); ?>.png" alt="<?php echo htmlspecialchars($modalidades['nome']); ?>">
                <span><?php echo htmlspecialchars($modalidades['nome']); ?></span>
              </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>Nenhuma modalidade disponível para esta unidade.</p>
        <?php endif; ?>
      </div>
    </section>

    <!-- SEÇÃO DE ÁREAS E ESTRUTURA -->
    <section class="areas-estrutura">
      <!-- Áreas -->
      <div class="areas">
        <h2>Áreas</h2>
        <div class="icons-row">
          <?php if (!empty($areas)): ?>
            <?php foreach($areas as $area): ?>
              <div class="icon-box">
                <img src="img/Unidade/Areas/<?php echo htmlspecialchars($area['nome']); ?>.png" alt="<?php echo htmlspecialchars($area['nome']); ?>">
                <span><?php echo htmlspecialchars($area['nome']); ?></span>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>Nenhuma área cadastrada.</p>
          <?php endif; ?>
        </div>
      </div>

      <!-- Estrutura -->
      <div class="estrutura">
        <h2>Estrutura</h2>
        <div class="icons-row">
          <?php if (!empty($estrutura)): ?>
            <?php foreach($estrutura as $item): ?>
              <div class="icon-box">
                <img src="img/Unidade/Estrutura/<?php echo htmlspecialchars($item['nome']); ?>.png" alt="<?php echo htmlspecialchars($item['nome']); ?>">
                <span><?php echo htmlspecialchars($item['nome']); ?></span>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>Nenhuma informação de estrutura cadastrada.</p>
          <?php endif; ?>
        </div>
      </div>
    </section>

  </div>
</body>
</html>
