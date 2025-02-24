
    <style>
        h1 {
            text-align: center;
            color: #96C22C;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .plan {
            align-items: center;
            justify-content: center;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative;
        }

        .plan.highlight {
            background-color: #212121;
            color: #fff;
            border: none;
        }

        .plan.highlight .title {
            background-color: #96C22C;
            color: #fff;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 5px;
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .plan h2 {
            color: var(--Colors-Gray-10, #232729);

            /* Fonts/Heading/H7 */
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%; /* 28.8px */
            letter-spacing: -0.72px;
        }

        .plan p {
            color: var(--Colors-Gray-7, #5D686E);
            /* Fonts/Paragraphs/P4 */
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 24px */
        }

        .plan.highlight p {
            color:rgb(255, 255, 255);
        }
        .plan.highlight h2 {
            color:rgb(255, 255, 255);
        }

        .price {
            font-size: 1.8rem;
            color: #96C22C;
            margin: 10px 0;
        }

        .plan ul {
            list-style: none;
            text-align: left;
            margin: 20px 0;
        }

        .plan ul li {
            display: flex;
            padding: 1px;
            align-items: center;
            justify-content: start;

            gap: 16px;
            color: var(--Colors-Gray-7, #5D686E);

            /* Fonts/Paragraphs/P4 */
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 24px */
        }

        .plan ul li .icon {
            width: 20px;
            height: 20px;
        }

        .plan ul li.negative {
            color: #f44336;
        }

        .plan ul li.positive {
            color: #96C22C;
        }

        .btn-planos {
           
            display: inline-block;
            background-color: #96C22C;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .btn-planos:hover {
            background-color: #45a049;
        }
        @media (max-width: 768px) {

            .carousel-inner img {
              object-fit: cover;
              height: 180px;
              border-radius: 20px;
          }
        }
    </style>
</style>

<section class="carousel-ads">
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Ads/Banner.png" class="d-block w-100" alt="Anúncio 1">
          </div>
          <div class="carousel-item">
            <img src="img/Ads/Banner.png" class="d-block w-100" alt="Anúncio 2">
          </div>
          <div class="carousel-item">
            <img src="img/Ads/Banner.png" class="d-block w-100" alt="Anúncio 3">
          </div>
        </div>

        <!-- Botões de navegação -->
        <div class="d-flex align-items-start row col-3 mt-2">
          <button class="carousel-control-prev col-6" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M21 12.5H3M3 12.5L11.5 4M3 12.5L11.5 21" stroke="#A4ACB1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>

          <button class="carousel-control-next col-6" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M3 12.5H21M21 12.5L12.5 4M21 12.5L12.5 21" stroke="#232729" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>