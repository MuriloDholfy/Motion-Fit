<style>
  /* Estilos Gerais */
  .footer-section {
      background-image: url('img/Footer/Footer.png');
      background-size: cover;
      background-repeat: no-repeat;
      color: #fff;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
  }

  .footer-top {
    text-align: center;
    width: 100%;
    max-width: 870px;
    border-bottom: 1px solid #444;
  }

  .footer-top h2 {
      padding: 0 200px;
      color: var(--Colors-Gray-1, #FFF);
      text-align: center;
      font-size: 40px;
      font-style: normal;
      font-weight: 700;
      line-height: 120%;
      letter-spacing: -1.2px;
  }

  .footer-top p {
      padding: 0 200px;
      color: var(--Colors-Gray-3, #C8D3D9);
      text-align: center;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: 150%;
  }

  .footer-top .privacy-note {
      padding: 0;
  }

  .newsletter-form {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 1rem;
  }

  .newsletter-form input {
      padding: 0.8rem;
      border-radius: 20px;
      border: 1px solid #ccc;
      flex: 1;
      max-width: 400px;
  }

  .newsletter-form button {
      color: #000;
      display: flex;
      height: 56px;
      padding: 0 24px;
      justify-content: center;
      align-items: center;
      gap: 8px;
      border-radius: 28px;
      background: var(--Colors-Primary-6, #96C22C);
      border: none;
  }

  .newsletter-form button:hover {
      background-color: #7bc043;
  }

  .privacy-note {
      color: var(--Colors-Gray-3, #C8D3D9);
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: 150%;
  }

  .privacy-note a {
      color: var(--Colors-Primary-6, #96C22C);
      font-size: 14px;
      font-style: normal;
      font-weight: 700;
      line-height: 120%;
      letter-spacing: -0.42px;
  }

  hr {
      margin: 2rem 0;
      border: 0.5px solid #444;
  }

  .footer-bottom {
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 2rem;
      width: 100%;
      max-width: 870px;
  }

  .footer-left {
      font-size: 14px;
      flex: 1 1 100%;
      text-align: center;
  }

  .footer-logo {
      width: 120px;
      margin-bottom: 1rem;
  }

  .footer-left p {
      margin-bottom: 1rem;
  }

  .social-media a img {
      width: 30px;
      margin-right: 0.5rem;
  }

  .footer-middle,
  .footer-right {
      font-size: 14px;
      flex: 1 1 45%;
      text-align: center;
  }

  .footer-middle ul,
  .footer-right ul {
      list-style: none;
      padding: 0;
  }

  .footer-middle li,
  .footer-right li {
      margin-bottom: 0.5rem;
  }

  .footer-middle a,
  .footer-right a {
      color: #fff;
      text-decoration: none;
  }

  .footer-middle a:hover,
  .footer-right a:hover {
      text-decoration: underline;
  }

  .footer-copyright {
      width: 100%;
      max-width: 870px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.8rem;
      border-top: 1px solid #444;
      padding: 1rem;
      flex-wrap: wrap;
  }
  .footer-section .social-icons {
        justify-content: center;
    }

  .design-logo {
      width: 100px;
  }

  /* Responsividade para telas médias (max-width: 992px) */
  @media (max-width: 992px) {
    .footer-section {
      padding: 2rem 1rem;
    }
    .footer-top h2,
    .footer-top p {
      padding: 0 1rem;
      font-size: 32px;
    }
    .newsletter-form {
      flex-direction: column;
      gap: 0.5rem;
    }
    .newsletter-form input {
      max-width: 100%;
    }
    .footer-section .social-icons {
        justify-content: center;
    }
  }

  /* Responsividade para telas pequenas (max-width: 768px) */
  @media (max-width: 768px) {
    .footer-top h2 {
      font-size: 28px;
      padding: 0 1rem;
    }
    .footer-top p {
      font-size: 14px;
      padding: 0 1rem;
    }
    .footer-bottom {
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }
    .footer-middle,
    .footer-right,
    .footer-left {
      flex: 1 1 100%;
    }
    .footer-copyright {
      flex-direction: column;
      text-align: center;
      gap: 0.5rem;
    }
    .social-icons {
        justify-content: center;
    }
  }

  /* Responsividade para telas extra pequenas (max-width: 480px) */
  @media (max-width: 480px) {
    .footer-top h2 {
      font-size: 24px;
    }
    .footer-top p {
      font-size: 12px;
    }
    .newsletter-form input {
      padding: 0.6rem;
    }
    .newsletter-form button {
      height: 48px;
      padding: 0 16px;
    }
    .footer-middle,
    .footer-right,
    .footer-left {
      font-size: 12px;
    }
  }
</style>


<section class="footer-section">
  <div class="footer-top">
    <div class="newsletter">
      <h2>Fique por dentro de todas as nossas novidades!</h2>
      <p>Cadastre-se em nossa newsletter e receba notificações com novidades, descontos e muito mais na sua caixa de mensagens ou e-mail.</p>
      <div class="search-bar my-3">
        <input type="text" placeholder="Digite sua localização...">
        <button>Enviar</button>
      </div>
      <p class="privacy-note">Ao clicar em 'Enviar', você concorda com nossos <a href="#">termos de uso</a> e nossa <a href="#">política de privacidade</a>.</p>
    </div>
  </div>
  <hr />
  <div class="footer-bottom">
    <div class="footer-left">
      <img src="img/Footer/Logo.svg" alt="Motionfit Logo" class="footer-logo" />
      <p>Academia Fitness que faz sua vida entrar em movimento e a torna saudável.</p>
      <div class="social-icons ">
                <a href="https://www.linkedin.com/company/motionfitacademia/" class="social-icon my-3">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACOklEQVR4nO3Yz4tNcRjH8ZdklF9ZDCUzMslKkt8lsZMUtspKEuFPUGIhEUUsZmPhV7IQY2NjY5qUBUWUojAbxAiNXw2jwzN1m+7c+Z6ZOzPn1nnX0z3d7+fzPc9zz3nO93suJSXjxmKcwTN8jXiM45ivQdiF7+gfIj5jq4KzAb/xB5ewFrMxCytxIcZ+YKkCcyd+9aM1NCdDc12B+RRJzq2hWRCa9wrMx0iypYamJTQfFJgbkeSpGpoTobmlwCyLJ1bW0Fcqmn0qVsR32Vgf1ig4mytusWrxDTs1CM04hK5o6mxBfILTaJvo5Eoaka4avTE4OuvknYItOIcH6I6dQw+e4ip2YEaeQvpzxmi8k7AHrxL1b7EPk/MUMhJdXu/diuPnOIyNmIemeOwvwcFBV/s2phepkCxeYLs0tuFd+O7H2pYrwVRdqvdX6C5jpnwswsvwn82bYKou1bsXB6JHRsLyeBhkO4x1eRJM1aV668GRONfNRi+kGb3xErhwogvJEmiPdSPrmzc4j9ZE/7U43+7UBMeikE34MsR60YP1CXPsD/3F1ARTdanetooisneaVbEuZJ8dFS9tc4aZZ1VoH05UIe0VRVSjI8aPDTNPa+hepyaYqkv1docu+1emGqtj/NEw80wLXW9qgqm6VG9f6LJtSDWaYvznCPMY9y3KaDUZZSEDlFdEeWtVpeyRAcoeUfZIVcoeGaDsEWWPVKXskYbrkf7EqJe3nnn8ozOH+Z76eY3hXCUlJf7zF4WdAr/rztdLAAAAAElFTkSuQmCC" alt="linkedin-2--v1">
                </a>
                <a href="https://www.facebook.com/motionfitacademia/" class="social-icon my-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M14 19H19V5H5V19H12V14H10V12H12V10.3458C12 9.00855 12.1392 8.52362 12.4007 8.03473C12.6622 7.54584 13.0458 7.16216 13.5347 6.9007C13.9174 6.69604 14.3922 6.57252 15.2217 6.51954C15.551 6.49851 15.9771 6.52533 16.5 6.6V8.5H16C15.0827 8.5 14.7042 8.54332 14.4779 8.66433C14.3376 8.73939 14.2394 8.83758 14.1643 8.97793C14.0433 9.20418 14 9.42853 14 10.3458V12H16.5L16 14H14V19ZM4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3Z" fill="#232729"/>
                    </svg>
                </a>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjg2KCwutWLAxXdrZUCHXP2JW4QFnoECB4QAQ&url=https%3A%2F%2Fwww.instagram.com%2Fmotionfitacademias%2F&usg=AOvVaw1ayIOLDmohHOxKLcOU6T9Z&opi=89978449" class="social-icon my-3" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z" fill="#232729"/>
                    </svg>
                </a>
                
                <a href="https://www.tiktok.com/@motionfitacademias" class="social-icon my-3" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.0004 2V8.41396C10.5947 8.33909 10.1768 8.3 9.75039 8.3C5.96724 8.3 2.90039 11.3668 2.90039 15.15C2.90039 18.9332 5.96724 22 9.75039 22C13.5335 22 16.6004 18.9332 16.6004 15.15V11.4136C17.6366 11.8539 18.7662 12.1 20.0005 12.1H21.0005V6.5H20.0005C18.0966 6.5 16.6004 4.96259 16.6004 3V2H11.0004ZM13.0004 4H14.688C15.0818 6.22009 16.7673 7.99607 19.0005 8.4091V10.0282C17.9624 9.87602 17.0253 9.48645 16.1567 8.905L14.6004 7.86327V15.15C14.6004 17.8286 12.429 20 9.75039 20C7.07181 20 4.90039 17.8286 4.90039 15.15C4.90039 12.4714 7.07181 10.3 9.75039 10.3C9.83431 10.3 9.91769 10.3021 10.0005 10.3063V11.9095C9.91795 11.9032 9.83454 11.9 9.75039 11.9C7.95547 11.9 6.50039 13.3551 6.50039 15.15C6.50039 16.9449 7.95547 18.4 9.75039 18.4C11.5453 18.4 13.0004 16.9449 13.0004 15.15C13.0004 11.4334 12.9992 7.71665 13.0004 4ZM8.50039 15.15C8.50039 14.4596 9.06003 13.9 9.75039 13.9C10.4407 13.9 11.0004 14.4596 11.0004 15.15C11.0004 15.8404 10.4407 16.4 9.75039 16.4C9.06003 16.4 8.50039 15.8404 8.50039 15.15Z" fill="#232729"/>
                    </svg>
                </a>
            </div>
    </div>
    <div class="footer-middle">
      <h3>Navegue pelo site</h3>
      <ul>
        <li><a href="#">Nossas unidades</a></li>
        <li><a href="#">Wellhub e Totalpass</a></li>
        <li><a href="#">Espaços dedicados</a></li>
        <li><a href="#">Nossos planos</a></li>
        <li><a href="#">Nosso aplicativo</a></li>
        <li><a href="#">Depoimentos</a></li>
        <li><a href="#">Dúvidas frequentes</a></li>
      </ul>
    </div>
    <div class="footer-right">
      <h3>Termos & Políticas</h3>
      <ul>
        <li><a href="#">Termos de uso</a></li>
        <li><a href="#">Política de privacidade</a></li>
        <li><a href="#">Política de Cookies</a></li>
      </ul>
    </div>
  </div>
  <hr />
  <div class="footer-copyright p-3">
    <p>Todos os direitos reservados a Motionfit CNPJ 53.025.750/0001-84 • Copyright 2024</p>
    <img src="img/Footer/mxm.svg" alt="Design Logo" class="design-logo" />
  </div>
</section>
