<style>
  /* Estilos gerais da navbar (desktop) */
  .navbar {
    position: absolute;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 90px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.16);
    background: rgba(255, 255, 255, 0.01);
    backdrop-filter: blur(12px);
    gap: 10px;
    z-index: 1000;
  }

  .navbar a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
    font-size: 0.9rem;
  }

  .navbar .logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #96C22C;
  }

  /* Tamanho padrão do SVG do logo */
  .navbar .logo svg {
    width: 197px; /* tamanho original */
    height: auto;
    transition: width 0.3s;
  }

  .navbar .cta-button2 {
    background-color: #96C22C;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    color: #000;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
  }

  .navbar .cta-button {
    background-color: #E4E9E9;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    color: #000;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
  }

  .navbar .cta-button2:hover {
    background-color: #ccc;
  }

  .navbar .cta-button:hover {
    background-color: #ccc;
  }

  /* ---------- Estrutura para o menu hamburger ---------- */
  /* Oculta o checkbox de toggle */
  #toggle-menu {
    display: none;
  }

  /* Seção de links (desktop) */
  .nav-links {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  /* Oculta o botão hamburger no desktop */
  .hamburger {
    display: none;
  }

  /* ---------- Responsividade para dispositivos móveis ---------- */
  @media (max-width: 768px) {
    *{overflow-x: unset;
    }
    .navbar {
      padding: 20px 20px;
    }

    /* Exibe o botão hamburger */
    .hamburger {
      display: block;
      cursor: pointer;
      z-index: 1100; /* acima da sidebar */
    }

    .hamburger span {
      display: block;
      width: 25px;
      height: 3px;
      margin: 5px;
      background: #fff;
      transition: 0.3s;
    }

    /* Sidebar: menu lateral */
    .nav-links {
      position: fixed;
      top: 100%;
      left: 0;
      width: 250px;  /* Largura da sidebar */
      height: 100vh;
      background: rgba(31, 30, 32, 0.74);
      flex-direction: column;
      align-items: center;
      padding: 60px 20px; /* espaço superior para não ficar abaixo da navbar */
      transform: translateX(-100%);
      transition: transform 0.3s ease;
      z-index: 2050;
      
    }

    /* Quando o checkbox estiver marcado, a sidebar desliza para dentro */
    #toggle-menu:checked + .hamburger + .nav-links {
      transform: translateX(0);
    }

    /* Ajusta os links para a sidebar */
    .nav-links a,
    .nav-links button {
      margin: 10px 0;
      font-size: 1.1rem;
    }

    /* Reduz o tamanho do logo em telas menores */
    .navbar .logo svg {
      width: 120px;
    }
  }

  /* Para telas ainda menores */
  @media (max-width: 480px) {
    .navbar .logo svg {
      width: 100px;
    }
  }
</style>

<!-- Inclusão do Font Awesome (opcional) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Estrutura HTML da Navbar -->
<div class="navbar">
  <!-- Logo -->
  <a href="index.php">
  <span class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="197" height="24" viewBox="0 0 197 24" fill="none">
                <path d="M162.16 4.47205H168.804C169.922 4.47205 170.829 5.37858 170.829 6.49677C170.829 7.61497 169.922 8.52149 168.804 8.52149H164.338V10.3587H167.986C169.044 10.3587 169.902 11.2166 169.902 12.2747C169.902 13.3328 169.044 14.1907 167.986 14.1907H164.338V17.1504C164.338 18.4636 163.273 19.5283 161.96 19.5283C160.646 19.5283 159.582 18.4636 159.582 17.1504V7.05041C159.582 5.62649 160.736 4.47205 162.16 4.47205Z" fill="#96C22C"/>
                <path d="M177.067 4.47205C178.387 4.47205 179.457 5.54193 179.457 6.86174V17.1504C179.457 18.4636 178.392 19.5283 177.079 19.5283H177.055C175.742 19.5283 174.678 18.4636 174.678 17.1504V6.86174C174.678 5.54193 175.748 4.47205 177.067 4.47205Z" fill="#96C22C"/>
                <path d="M187.278 8.52149H185.331C184.213 8.52149 183.307 7.61497 183.307 6.49677C183.307 5.37857 184.213 4.47205 185.331 4.47205H194.075C195.193 4.47205 196.099 5.37857 196.099 6.49677C196.099 7.61497 195.193 8.52149 194.075 8.52149H192.033V17.1504C192.033 18.4636 190.969 19.5283 189.655 19.5283C188.342 19.5283 187.278 18.4636 187.278 17.1504V8.52149Z" fill="#96C22C"/>
                <path d="M71.9912 7.62763V17.2695C71.9912 18.5171 70.98 19.5283 69.7324 19.5283H69.4945C68.2469 19.5283 67.2357 18.5171 67.2357 17.2695V10.5833L64.8426 13.6831C63.9372 14.8559 62.1664 14.8542 61.2633 13.6794L58.8656 10.5594V17.2695C58.8656 18.5171 57.8544 19.5283 56.6068 19.5283C55.3592 19.5283 54.3477 18.5171 54.3477 17.2695V7.62763C54.3477 5.88476 55.7604 4.47205 57.5032 4.47205H57.624C58.5884 4.47205 59.5001 4.91324 60.0986 5.66963L63.1932 9.58102L66.3835 5.64173C66.9826 4.90202 67.8837 4.47205 68.8356 4.47205C70.5785 4.47205 71.9912 5.88476 71.9912 7.62763Z" fill="white"/>
                <path d="M98.9631 8.52149H97.0169C95.8987 8.52149 94.9922 7.61497 94.9922 6.49677C94.9922 5.37857 95.8987 4.47205 97.0169 4.47205H105.76C106.878 4.47205 107.785 5.37857 107.785 6.49677C107.785 7.61497 106.878 8.52149 105.76 8.52149H103.719V17.1504C103.719 18.4636 102.654 19.5283 101.341 19.5283C100.028 19.5283 98.9631 18.4636 98.9631 17.1504V8.52149Z" fill="white"/>
                <path d="M114.265 4.47205C115.584 4.47205 116.654 5.54193 116.654 6.86174V17.1504C116.654 18.4636 115.59 19.5283 114.277 19.5283H114.253C112.94 19.5283 111.875 18.4636 111.875 17.1504V6.86174C111.875 5.54193 112.945 4.47205 114.265 4.47205Z" fill="white"/>
                <path d="M155.009 6.63568V17.2312C155.009 18.4999 153.981 19.5283 152.712 19.5283C152.056 19.5283 151.431 19.2476 150.995 18.757L145.189 12.2241V17.3644C145.189 18.5594 144.22 19.5283 143.025 19.5283C141.83 19.5283 140.861 18.5594 140.861 17.3644V7.10189C140.861 5.6495 142.039 4.47205 143.491 4.47205C144.266 4.47205 145.002 4.81401 145.502 5.40647L150.682 11.5476V6.63597C150.682 5.44098 151.65 4.47234 152.846 4.47205C154.041 4.47205 155.009 5.4407 155.009 6.63568Z" fill="white"/>
                <path d="M86.9207 14.7954C86.2497 15.4393 85.3075 15.7614 84.0947 15.7614C82.9196 15.7614 81.9869 15.4485 81.2972 14.8224C80.6073 14.1963 80.2621 13.257 80.2621 12.0051C80.2621 10.7819 80.5978 9.84805 81.2687 9.20411C81.9397 8.56016 82.8816 8.23805 84.0947 8.23805C85.2699 8.23805 86.2023 8.55125 86.8922 9.17707C87.5822 9.80318 87.9273 10.7422 87.9273 11.9944C87.9273 13.2179 87.5917 14.1514 86.9207 14.7954ZM89.9443 6.098C88.5016 4.78884 86.5517 4.13425 84.0947 4.13425C81.5584 4.13425 79.5889 4.8081 78.1859 6.15437C76.783 7.50121 76.0815 9.45346 76.0815 12.0111C76.0815 14.6291 76.8026 16.5926 78.2452 17.9018C79.6875 19.2109 81.6374 19.8652 84.0947 19.8652C86.6308 19.8652 88.6009 19.192 90.0035 17.8451C91.4064 16.4988 92.1079 14.5466 92.1079 11.9887C92.1079 9.37034 91.3866 7.40688 89.9443 6.098Z" fill="white"/>
                <path d="M131.584 14.7954C130.913 15.4393 129.971 15.7614 128.758 15.7614C127.583 15.7614 126.65 15.4485 125.96 14.8224C125.27 14.1963 124.925 13.257 124.925 12.0051C124.925 10.7819 125.261 9.84805 125.932 9.20411C126.603 8.56016 127.545 8.23805 128.758 8.23805C129.933 8.23805 130.865 8.55125 131.555 9.17707C132.245 9.80318 132.59 10.7422 132.59 11.9944C132.59 13.2179 132.255 14.1514 131.584 14.7954ZM134.607 6.098C133.165 4.78884 131.215 4.13425 128.758 4.13425C126.221 4.13425 124.252 4.8081 122.849 6.15437C121.446 7.50121 120.745 9.45346 120.745 12.0111C120.745 14.6291 121.466 16.5926 122.908 17.9018C124.351 19.2109 126.301 19.8652 128.758 19.8652C131.294 19.8652 133.264 19.192 134.667 17.8451C136.07 16.4988 136.771 14.5466 136.771 11.9887C136.771 9.37034 136.05 7.40688 134.607 6.098Z" fill="white"/>
                <path d="M12.4387 24C11.2075 24 10.2095 23.0017 10.2095 21.7705V2.22937C10.2095 1.33349 10.7456 0.52475 11.5707 0.176176C12.3958 -0.172974 13.3495 0.0062027 13.992 0.630589L34.1069 20.1714C34.9899 21.0296 35.0103 22.4409 34.1524 23.3238C33.2944 24.2071 31.8832 24.2272 31 23.3699L14.6679 7.50313V21.7705C14.6679 23.0017 13.6699 24 12.4387 24Z" fill="#96C22C"/>
                <path d="M2.66817 24C1.43694 24 0.438965 23.0017 0.438965 21.7705V2.22937C0.438965 1.33349 0.975056 0.52475 1.80019 0.176176C2.62532 -0.172974 3.57901 0.0062027 4.22151 0.630589L24.3364 20.1714C25.2194 21.0296 25.2398 22.4409 24.3819 23.3238C23.5239 24.2071 22.1127 24.2272 21.2297 23.3699L4.89738 7.50313V21.7705C4.89738 23.0017 3.8994 24 2.66817 24Z" fill="white"/>
                <path d="M42.324 24C41.7644 24 41.2041 23.7903 40.7707 23.3699L20.6561 3.82844C20.0049 3.196 19.8025 2.23196 20.1436 1.3913C20.485 0.550348 21.302 0.000165939 22.2094 0.000165939H42.3243C43.5553 0.000165939 44.5535 0.998146 44.5535 2.22937C44.5535 3.4606 43.5553 4.45886 42.3243 4.45886H27.7035L43.8777 20.1714C44.7606 21.0296 44.781 22.4409 43.9231 23.3238C43.4862 23.7739 42.9053 24 42.324 24Z" fill="#96C22C"/>
                <path d="M43.9597 12C43.9597 13.2312 42.9617 14.2295 41.7305 14.2295C40.4992 14.2295 39.501 13.2312 39.501 12C39.501 10.7688 40.4992 9.77079 41.7305 9.77079C42.9617 9.77079 43.9597 10.7688 43.9597 12Z" fill="white"/>
            </svg>
        </span>
    </span>
  </a>

  <!-- Checkbox para toggle (oculto) -->
  <input type="checkbox" id="toggle-menu">

  <!-- Ícone hamburger (aparece em mobile) -->
  <label for="toggle-menu" class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </label>

  <!-- Sidebar (Links da Navbar) -->
  <div class="nav-links">
    <a href="index.php#quemsomos">Quem somos</a>
    <a href="Unidades.php">Unidades</a>
    <a href="https://wa.me/5511989262177?text=Ol%C3%A1%20vim%20pelo%20site%20e%20quero%20saber%20mais%20sobre%20vagas!">
      Nossas vagas 
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
        <path d="M4.83008 12.6667L13.4967 4M13.4967 4V12.32M13.4967 4H5.17674" stroke="#E4E9E9" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
    <!-- <button class="cta-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
        <path d="M5.56104 20V19C5.56104 15.134 8.69505 12 12.561 12M12.561 12C16.427 12 19.561 15.134 19.561 19V20M12.561 12C14.7701 12 16.561 10.2091 16.561 8C16.561 5.79086 14.7701 4 12.561 4C10.3519 4 8.56104 5.79086 8.56104 8C8.56104 10.2091 10.3519 12 12.561 12Z" stroke="#232729" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg> 
      Área do Aluno
    </button> -->
    <a href="Unidades.php">
      <button class="cta-button2">Comece agora mesmo</button>
    </a>
  </div>
</div>
