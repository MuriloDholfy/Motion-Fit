<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Depoimentos</title>
  <style>
    .depoimento-section {
      display: flex;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
    }
    .depoimento-imagem {
      flex: 1;
      text-align: center;
    }
    .depoimento-imagem img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
    .depoimento-conteudo {
      flex: 2;
      padding-left: 20px;
    }
    .depoimento-conteudo img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .depoimento-conteudo h2 {
      font-size: 24px;
      color: #333;
      margin: 0;
    }
    .depoimento-conteudo p {
      color: #666;
      line-height: 1.6;
      margin: 10px 0;
      font-size: 24px;
    }
    .depoimento-conteudo .autor {
      font-weight: bold;
      color: #333;
    }
    .depoimento-conteudo .detalhes {
      font-size: 14px;
      color: #999;
    }
    
    /* Responsividade para telas menores */
    @media (max-width: 768px) {
      .depoimento-section {
        flex-direction: row;
        padding: 10px;
      }
      .depoimento-conteudo p {
          color: #666;
          line-height: 1.6;
          margin: 10px 0;
          font-size: 12px;
      }
      .depoimento-conteudo img {
            width: 0;
            height: 0;
            border-radius: 0;
            margin-bottom: 0;
        }

    }

  </style>
</head>
<body>
  <section class="depoimento-section">
    <div class="depoimento-imagem">
      <img src="img/Depoimentos/img.png" alt="Imagem de Depoimento">
    </div>
    <div class="depoimento-conteudo">
      <img src="img/Depoimentos/Frame.png" alt="Ícone do Usuário">
      <p>
        A academia Motion Fit é excelente para saúde e fitness. 
        <strong>Em apenas um mês, minha saúde melhorou drasticamente. Os resultados vieram rapidamente, sem que eu percebesse.</strong> 
        Nunca fui fã de academias, mas a equipe da Unidade Savoy acolheu e apoiou em tudo que precisei. Hoje, não consigo mais me imaginar sem essa experiência.
      </p>
      <hr>
      <p class="autor">João Silva Pessoa</p>
      <p class="detalhes">Aluno à 3 Anos • Unidade Parque Savoy</p>
    </div>
  </section>
</body>
</html>
