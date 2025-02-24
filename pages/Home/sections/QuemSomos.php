<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Section com Metades - Responsivo</title>
  <style>
    /* Reset básico */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: Arial, sans-serif;
    }
    
    .section-quemsomos {
      min-height: 100vh;
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      background: rgb(35,39,41);
      background: linear-gradient(0deg, rgba(35,39,41,1) 80%, rgba(255,255,255,1) 80%);
      padding: 20px;
    }
    
    .center-image {
      position: relative;
      top: 20%; /* Ajuste para deixar a imagem mais centralizada na versão desktop */
      width: 870px; /* Tamanho fixo para telas maiores */
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 40px;
    }
    
    .text-quemsomos {
      display: flex;
      flex-direction: row;
      padding: 50px;
      text-align: left;
      width: 80%;
      justify-content: space-between;
      margin-top: 0px;
      margin-bottom: 0px;
      color: #fff;
    }
    
    .text-quemsomos .col-4 {
      flex: 1;
      padding: 0 20px;
    }
    
    .text-quemsomos h3 {
      font-size: 24px;
      color: #fff;
      line-height: 1.5;
      margin-bottom: 20px;
    }
    
    .text-quemsomos h3 span {
      font-size: 24px;
      background: var(--Colors-Primary-6, #96C22C);
      line-height: 1.5;
      padding: 0 5px;
    }
    
    .text-quemsomos p {
      font-size: 16px;
      color: #fff;
      line-height: 1.5;
    }
    
    .buttons-quemsomos button {
      display: flex;
      height: 56px;
      padding: 0 24px;
      justify-content: center;
      align-items: center;
      gap: 8px;
      border-radius: 28px;
      background: var(--Colors-Primary-6, #96C22C);
      border: none;
      cursor: pointer;
      color: #fff;
      font-size: 16px;
    }
    
    .buttons-quemsomos button:hover {
      background-color: #444;
    }
    
    /* Responsividade para telas menores */
    @media (max-width: 768px) {
      .section-quemsomos {
        padding: 20px;
        min-height: auto;
      }
      
      .center-image {
        width: 100%;
        max-width: 500px;
        top: 0;
        margin-bottom: 20px;
      }
      
      .text-quemsomos {
        flex-direction: column;
        padding: 20px;
        margin-top: 40px;
        margin-bottom: 40px;
      }
      
      .text-quemsomos .col-4 {
        width: 100%;
        padding: 10px 0;
        margin-bottom: 20px;
      }
      
      .text-quemsomos h3 {
        font-size: 20px;
      }
      
      .text-quemsomos p {
        font-size: 14px;
      }
      
      .buttons-quemsomos button {
        width: 100%;
        height: 48px;
        font-size: 14px;
      }
    }
    
  </style>
</head>
<body>
  <section class="section-quemsomos" id="quemsomos">
    <img src="img/QuemSomos/img.png" alt="Imagem Central" class="center-image" />
    <div class="text-quemsomos row">
      <div class="col-4">
        <h3>Focados em te entregar a melhor <span>experiência!</span></h3>
        <div class="buttons-quemsomos">
          <button class="btn-quemsomos btn-wellhub start-now">
            Conheça mais sobre nós
          </button>
        </div>
      </div>
      <div class="col-4">
        <p>Fundada em 2019 com apenas uma academia, a Motion Fit surge como uma resposta dinâmica às necessidades do mercado fitness. Desde então, embarcamos em uma jornada extraordinária de crescimento e expansão. Hoje, estamos</p>
      </div>
      <div class="col-4">
        <p>orgulhosamente posicionados para revolucionar o setor, preparando-nos para lançar 16 academias em locais estratégicos. Nosso sucesso é impulsionado por nossa paixão pela tecnologia, inovação e excelência em atendimento ao cliente...</p>
      </div>
    </div>
  </section>
</body>
</html>
