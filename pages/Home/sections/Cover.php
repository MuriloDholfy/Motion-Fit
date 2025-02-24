<style>

  .container {
    font-family: "Nunito Sans", sans-serif;
  }
  
  .cover {
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
  }
  
  .cover video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    filter: brightness(50%);
  }
  
  .content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    padding: 0 20px;
  }
  
  .content h1 {
    color: var(--Colors-Gray-1, #FFF);
    text-align: center;
    font-family: "Nunito Sans";
    font-size: 40px;
    font-style: normal;
    font-weight: 700;
    line-height: 120%;
    letter-spacing: -1.44px;
    margin-bottom: 20px;
  }
  
  .content h1 span {
    color: #96C22C;
  }
  
  .content p {
    color: var(--Colors-Gray-2, #E4E9E9);
    text-align: center;
    font-family: "Nunito Sans";
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%;
    margin-bottom: 30px;
  }
  
  .search-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
  }
  
  .search-bar input[type="text"] {
    padding: 15px 20px;
    font-size: 1rem;
    border: none;
    border-radius: 25px;
    outline: none;
    width: 550px;
    margin: 5px;
    height: 50px;
    max-width: 100%;
  }
  
  .search-bar button {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    width: 70px;
    height: 50px;
    background-color: #96C22C;
    border: none;
    border-radius: 28px;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin: 5px;
  }
  
  .search-bar button:hover {
    background-color: #8ebd20;
  }
  
  .search-bar button i {
    font-size: 20px;
  }
  
  .info-box {
    background: #fff;
    color: #333;
    padding: 20px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    width: 90%;
    max-width: 600px;
    margin: 20px auto 0;
    position: relative;
  }
  
  .info-box img {
    width: 70px;
    height: 70px;
    border-radius: 5%;
  }
  
  .info-box div {
    margin-left: 15px;
    flex: 1;
  }
  
  .info-box h3 {
    margin: 0;
    font-size: 2.2rem;
    color: #333;
  }
  
  .info-box p {
    margin: 5px 0 0;
    font-size: 0.9rem;
    color: #555;
  }
  
  .info-box select {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
    color: #333;
    cursor: pointer;
    outline: none;
  }
  
  .info-box select:hover {
    background-color: #e6e6e6;
  }
  
  .carousel-ads {
    display: flex;
    padding: 120px 0px 80px 0px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 32px;
    align-self: stretch;
  }
  
  .section-title {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 30px;
  }
  
  .carousel-inner img {
    object-fit: cover;
    height: 400px;
    border-radius: 20px;
  }
  
  /* Ajustes para as setas */
  .carousel-control-prev, .carousel-control-next {
    position: relative;
    top: 90%;
    left: 10%;
    transform: translateX(0);
    z-index: 10;
    display: flex;
    justify-content: space-between;
    gap: 15px;
    opacity: 100%;
  }
  
  .carousel-control-prev-icon {
    opacity: 100%;
    color: #fff;
    background-color: #E4E9E9;
    border-radius: 50%;
    transition: background-color 0.3s ease;
  }
  
  .carousel-control-next-icon {
    opacity: 100%;
    color: #fff;
    background-color: #96C22C;
    border-radius: 50%;
    transition: background-color 0.3s ease;
  }
  
  .carousel-control-prev-icon:hover {
    background-color: #E4E9E9;
    transition: background-color 0.3s ease;
  }
  
  .carousel-control-next-icon:hover {
    background-color: #98d30e;
    transition: background-color 0.3s ease;
  }
  
  /* ------------------- Responsividade ------------------- */
  @media (max-width: 768px) {
    .content {
      padding: 0 10px;
    }
    
    .content h1 {
      font-size: 28px;
      letter-spacing: -0.8px;
      margin-bottom: 15px;
    }
    
    .content p {
      font-size: 16px;
      line-height: 140%;
      margin-bottom: 20px;
    }
    
    .search-bar input[type="text"] {
      width: 90%;
      padding: 12px 16px;
      font-size: 0.9rem;
    }
    
    .search-bar button {
      width: 60px;
      height: 45px;
      padding: 8px;
    }
    
    .carousel-inner img {
      height: 250px;
      border-radius: 10px;
    }
    
    .carousel-ads {
      padding: 60px 0 40px 0;
    }
  }
  @media (max-width: 768px) {
    .content {
        padding: 0 10px;
        width: 100%;
    }
}
@media (max-width: 768px) {
    .search-bar input[type="text"] {
        width: 75%;
        padding: 12px 16px;
        font-size: 0.9rem;
    }
}


</style>

<div class="cover">
    <video autoplay muted loop>
      <source src="img/APRESENTACAO-MOTION-FIT-PARQUE-SAVOY.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="content">
      <h1>Auxiliamos você a buscar sua melhor versão e elevar <span>sua saúde</span>.</h1>
      <p>Na Motion, impulsionamos seu crescimento com uma experiência única e resultados excepcionais. Equipamentos de última geração, profissionais qualificados e tecnologia de ponta à sua disposição.</p>

      <div class="search-bar">
      <input type="text" id="cep-input" placeholder="Digite seu CEP...">
      <button onclick="searchByCep()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17 17L21 21M3 11C3 15.4183 6.58172 19 11 19C13.213 19 15.2161 18.1015 16.6644 16.6493C18.1077 15.2022 19 13.2053 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11Z" stroke="#232729" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>

      <!-- Caixa de informações ajustada como dropdown para seleção de unidades -->
      <!-- <div class="info-box">
        <img src="img/Cards/Foto.png" alt="Location">
        <div>
          <h3>Unidade Parque Savoy</h3>
          <p>R. Manuel de Andrade Furtado, 54 - Parque Savoy City, São Paulo - SP, 03571-200</p>
        </div>
        <select id="unit-select" onchange="changeUnit(this.value)">
          <option value="parque-savoy" selected>Parque Savoy</option>
          <option value="unidade-1">Unidade 1</option>
          <option value="unidade-2">Unidade 2</option>
        </select>
      </div> -->
    </div>
  </div>
  <script>
      function searchByCep() {
      const cep = document.getElementById('cep-input').value.trim();
      
      if (cep === '') {
        alert("Por favor, digite um CEP.");
        return;
      }
      
      fetch('https://viacep.com.br/ws/' + cep + '/json/')
        .then(response => response.json())
        .then(data => {
          // console.log("Dados retornados pela API ViaCEP:", data);
          // alert("Dados retornados:\n" + JSON.stringify(data, null, 2));
          
          if (data.erro) {
            alert("CEP não encontrado.");
            return;
          }
          // Captura os campos de localidade e estado
          const cidade = data.localidade;
          const estado = data.uf;
          
          // Redireciona para a página Unidades.php com os parâmetros cidade e estado
          window.location.href = 'Unidades.php?cidade=' + encodeURIComponent(cidade) + '&estado=' + encodeURIComponent(estado);
        })
        .catch(error => {
          console.error('Erro na requisição ViaCEP:', error);
          alert("Erro ao consultar o CEP. Tente novamente.");
        });
    }

  </script>
