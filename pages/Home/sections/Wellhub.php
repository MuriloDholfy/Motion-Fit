<style>
/* Estilos Base */
.partnership-section {
    display: flex;
    padding: 80px 200px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 8px;
    align-self: stretch;
    margin-bottom: 250px;
}

.conteudo {
    display: flex;
    align-items: center;
    gap: 32px;
    width: 900px;
}

.image-container img {
    width: 870px;
    height: auto;
    border-radius: 8px;
}

.text-content {
  max-width: 100%;
  margin: 1rem 0;
}

.text-content h3 {
  font-size: 2rem;
  color: #333;
}

.text-content h3 span {
  color: #7bc043; /* Verde */
}

.text-content p {
  font-size: 1rem;
  color: #666;
  margin: 1rem 0;
}

.buttons {
  display: flex;
  gap: 1rem;
}

.btn-wellhub {
    font-size: 12px;
    font-weight: bold;
    display: flex;
    height: 56px;
    padding: 0px 24px;
    justify-content: center;
    align-items: center;
    gap: 8px;
    border: none;
}

.learn-more {
    border-radius: 28px;
    background: var(--Colors-Gray-2, #E4E9E9);
}

.learn-more:hover {
    background-color: rgb(189, 189, 189);
}

.start-now {
    border-radius: 28px;
    background: var(--Colors-Primary-6, #96C22C);
}

.start-now:hover {
    background-color: rgb(121, 175, 79);
}

/* Media Queries para Responsividade */
@media (max-width: 1024px) {
    .conteudo {
        width: 100%;
        flex-direction: column;
        align-items: center;
    }
    .image-container img {
        width: 100%;
        max-width: 870px;
    }
}

@media (max-width: 768px) {
    .partnership-section {
        padding: 40px 20px;
        margin-bottom: 150px;
    }
    .text-content h3 {
        font-size: 1.5rem;
        text-align: center;
    }
    .text-content p {
        font-size: 0.9rem;
        text-align: center;
    }
    .buttons {
        flex-direction: column;
        width: 100%;
        align-items: center;
    }
    .btn-wellhub {
        width: 100%;
        justify-content: center;
    }
    
}
a {
  text-decoration: none;
  outline: none;
  color: inherit; /* Para herdar a cor do elemento filho, se desejar */
}


</style>

<section class="partnership-section">
  <div class="">
    <div class="image-container">
      <img src="img/Wellhub/img.png" alt="Wellhub e ">
    </div>
    <div class="conteudo">
      <div class="text-content row">
        <h3 class="col-6">Aqui aceitamos alunos com <span>Wellhub</span>.</h3>
        <div class="col-6">
          <p>Disponibilizamos nossas unidades para atender alunos que possuem acesso a estes benefícios, basta chegar em uma de nossas academias e fazer seu check-in para poder fazer seu treino.</p>
          <div class="buttons">
            <a href="https://wellhub.com/pt-br/?utm_campaign=latam-br_b2c-b2b_google-search-agnostic_con_ongoing_all_signup_1223&utm_source=google&utm_medium=cpc&utm_content=None-None-None-EM-Text-Brand_Pure_Gympass&utm_term=paid-wh-gympass&gad_source=1&gclid=EAIaIQobChMI9Ja48KnViwMVkA5ECB2yuyeQEAAYASAAEgLkv_D_BwE"> 
              <button class="btn-wellhub learn-more">
                Entenda como funciona
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z" fill="#232729"/>
                </svg>
              </button>
            </a>
            <a href="Unidades.php"> 
              <button class="btn-wellhub start-now">Comece agora mesmo</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  // Função que verifica se a tela é mobile e remove a classe "col-6"
  function removeCol6OnMobile() {
    if (window.innerWidth <= 768) {
      // Seleciona todos os elementos com a classe "col-6"
      const elements = document.querySelectorAll('.col-6');
      elements.forEach(element => {
        element.classList.remove('col-6');
      });
    }
  }

  // Executa a função assim que o conteúdo for carregado
  window.addEventListener('DOMContentLoaded', removeCol6OnMobile);
  // Também atualiza ao redimensionar a tela
  window.addEventListener('resize', removeCol6OnMobile);
</script>
