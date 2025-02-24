<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ - Motion Fit</title>
  <style>
    .faq {
      padding: 80px 20px 120px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .faq-container {
      width: 100%;
      max-width: 1216px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
    }
    
    .faq-left, .faq-right {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
    }
    
    .faq-left {
      width: 50%;
      text-align: left;
    }
    
    .faq-left h2 {
      color: #333;
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    .faq-left p, .faq-left li {
      color: #666;
      margin-bottom: 10px;
    }
    
    .faq-left img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    
    .btn-contact {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 15px;
      background: #ddd;
      border-radius: 15px;
      text-decoration: none;
      color: #333;
    }
    
    .faq-right {
      width: 100%;
    }
    
    .faq-item {
      border-bottom: 1px solid #96C22C;
      padding: 10px 0;
    }
    
    .faq-item h3 {
      color: #333;
      cursor: pointer;
      font-weight: bold;
    }
    
    .faq-item p {
      display: none;
      color: #666;
      margin-top: 10px;
    }
    
    /* Responsividade */
    @media (max-width: 768px) {
      .faq-container {
        flex-direction: column;
        gap: 30px;
      }
      
      .faq-left, .faq-right {
        width: 100%;
        font-size: 14px;

      }
      .faq-item h3 {
          font-size: 16px;

        }
      
      .faq {
        padding: 40px 10px 60px;
      }
    }
  </style>
  <script>
    function toggleFAQ(el) {
      const answer = el.nextElementSibling;
      answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    }
  </script>
</head>
<body>
  <div class="faq">
    <div class="faq-container">
      <!-- <div class="faq-left">
        <h2>Algumas <span style="color: #96C22C;">perguntas e respostas frequentes</span> em nosso FAQ</h2>
        <div class="row" style="display: flex; align-items: center; gap: 10px;">
          <div class="col-2">
            <img class="p-1" src="img/Faq/img.png" alt="Foto de Luiz Felipe da Silva">
          </div>
          <div class="col-6">
            <p><strong>SAC Motion Fit</strong><br>Atendente Virtual</p>
          </div>
        </div>
        <p>+55 11 98946 7901<br>Telefone e WhatsApp</p>
        <p>sac@motionfitacademia.com<br>E-mail</p>
        <a href="https://wa.me/5511989467901?text=Ol%C3%A1%20vim%20pelo%20site%20e%20quero%20sanar%20uma%20duvida." class="btn-contact">Entre em contato conosco</a>
      </div> -->
      <div class="faq-right">
        <div class="faq-item">
          <h3 onclick="toggleFAQ(this)">Quais são os planos disponíveis na academia Motion Fit?</h3>
          <p>
            A Motion Fit oferece uma variedade de planos para atender às necessidades de diferentes clientes, incluindo:
          </p>
          <ul>
            <li>Plano Mensal: Ideal para quem prefere flexibilidade sem compromisso a longo prazo.</li>
            <li>Plano Trimestral: Oferece um desconto em relação ao plano mensal e é perfeito para quem planeja treinar por um período mais longo.</li>
            <li>Plano Semestral: Maior economia com um compromisso de seis meses.</li>
            <li>Plano Anual: Melhor custo-benefício para aqueles comprometidos com um ano de treino.</li>
          </ul>
        </div>
        <div class="faq-item">
          <h3 onclick="toggleFAQ(this)">O que está incluído em cada plano da Motion Fit?</h3>
          <p>Os planos incluem acesso completo às instalações da academia, equipamentos modernos, aulas coletivas e acompanhamento de profissionais especializados.</p>
        </div>
        <div class="faq-item">
          <h3 onclick="toggleFAQ(this)">Existe alguma taxa de matrícula ou adesão na Motion Fit?</h3>
          <p>A Motion Fit pode cobrar uma taxa de adesão, dependendo das promoções vigentes. Consulte nossa equipe para mais detalhes.</p>
        </div>
        <div class="faq-item">
          <h3 onclick="toggleFAQ(this)">Quais são as formas de pagamento aceitas pela Motion Fit?</h3>
          <p>A academia aceita pagamentos via cartão de crédito, débito, boleto bancário e PIX.</p>
        </div>
        <div class="faq-item">
          <h3 onclick="toggleFAQ(this)">Posso pausar meu plano na Motion Fit se precisar viajar ou por motivos de saúde?</h3>
          <p>Sim, a Motion Fit permite a suspensão temporária do plano mediante justificativa válida. Consulte a recepção para saber mais sobre as condições.</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
