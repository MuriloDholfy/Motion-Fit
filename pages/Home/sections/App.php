<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seção com Imagem e card-apps</title>
  <style>
   
    .section-app {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 60px;
      margin: 0 auto;
    }
    .section-app h3 {
      font-size: 24px;
      line-height: 1.5;
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .section-app h3 span {
      font-size: 24px;
      color: #96C22C;
    }
    .texto-app p {
      color: #666;
      line-height: 1.6;
      font-size: 14px;
      text-align: center;
      margin: 0 20px;
    }
    /* Container dos conteúdos (imagem e cards) */

    /* A coluna vazia (usada para espaçamento) */
    .col-1 {
      flex: 0 0 8.33%;
    }
    .image-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .image-container img {
      display: block;
    }
    .image-app {
      max-width: 350px; /* Tamanho máximo da imagem */
      max-height: 650px;
      width: 100%;
      height: auto;
    }
    .card-apps-container {
      flex: 3;
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 0 20px;
    }
    .card-app {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      border: 2px solid rgba(0, 0, 0, 0.1);
    }
    .card-app img {
      width: 50px;
      height: 50px;
      margin-bottom: 10px;
    }
    .card-app h2 {
      margin-top: 0;
      color: #333;
      font-size: 18px;
    }
    .card-app p {
      color: #666;
      line-height: 1.6;
      font-size: 14px;
    }
    
    /* Responsividade para telas menores */
    @media (max-width: 768px) {
      .section-app .col-5{
        width: 100%;
        padding: 0 20px;

      }
      .section-app {
        padding: 30px;
      }
      /* Remove a coluna vazia para melhor aproveitamento do espaço */
      .col-1 {
        display: none;
      }
      .image-container .img-app {
        width: 50%;
        max-width: 823px;
        margin-top: 20px;
            }
        }

      .image-container, 
      .card-apps-container {
        width: 100%;
        padding: 0;
      }
      .image-app {
        max-width: 100%;
        height: auto;
      }
    
  </style>
</head>
<body>
  <div class="section-app">
    <div class="texto-app col-5">
      <h3>
        Nosso APP <span>auxilia e facilita o dia a dia</span> de todos nossos alunos.
      </h3>
      <p>
        Alem de facilitar, disponibilizamos uma comunidade onde é possível públicar e interagir com outros alunos e instrutores de toda nossa rede de academias.
      </p>
    </div>

    <div class="conteudo row col-12">
      <div class="col-1"></div>
      <div class="image-container col-4">
        <img src="img/App/Mid.png" alt="Imagem do Aplicativo" class="image-app img-app">
      </div>
      <div class="card-apps-container col-6">
        <div class="card-app">
          <img src="img/App/Icon-Block.png" alt="Ícone Comunidade">
          <h2>Comunidade Motion Fit</h2>
          <p>
            Um feed repleto de conteúdos fantásticos feitos por nossos alunos e instrutores de toda nossa rede de academias. Publique ou interaja com todos eles dentro do App.
          </p>
        </div>
        <div class="card-app">
          <img src="img/App/Icon-Block2.png" alt="Ícone Agendamento">
          <h2>Sistema de agendamento simples e fácil.</h2>
          <p>
            Oferecemos um sistema de agendamento de aulas para que você possa ficar sem se preocupar em realizar este agendamento presencialmente em uma unidade.
          </p>
        </div>
        <div class="card-app">
          <img src="img/App/Icon-Block3.png" alt="Ícone Treinos">
          <h2>Biblioteca de treinos atualizada.</h2>
          <p>
            Se estiver com dúvidas em relação ao treino e em como executar, nosso app tem um lugar especialmente para te ajudar com essa dúvida.
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
