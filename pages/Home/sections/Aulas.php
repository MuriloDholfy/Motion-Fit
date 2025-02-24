<style>
.carousel-Aulas {
  padding: 2rem;
  text-align: center;
}

.carousel-Aulas h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: #333;
}

.carousel-container-Aulas {
    display: flex;
    align-items: flex-start;
    gap: 32px;
    align-self: stretch;
}

.card-Aulas {
  width: 200px;
  height: 300px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-Aulas img {
    width: 200px;
    height: 300px;
}

.carousel-title {
  font-size: 26px;
  font-style: normal;
  font-weight: 700;
  line-height: 120%;
  letter-spacing: -0.96px;
}

.carousel-title .highlight-green {
  color: var(--Colors-Primary-6, #96C22C);
  font-weight: bold;
}

.carousel-title .text-black {
  color: var(--Colors-Gray-10, #232729);
  font-weight: bold;
}
</style>
<section class="carousel-ads">
    <div class="container">
        <h2 class="carousel-title col-7">
             <span class="text-black">Unidades <span class="highlight-green">equipadas </span>  com <span class="highlight-green">espaços</span> especiais para modalidades diversificadas!            </span>
        </h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <!-- Primeiro card -->
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas1.png" alt="Card-Aula 1">
                            </div>
                        </div>
                        <!-- Segundo card -->
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas2.png" alt="Card-Aula 2">
                            </div>
                        </div>
                        <!-- Terceiro card -->
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas3.png" alt="Card-Aula 3">
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas4.png" alt="Card-Aula 4">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Próxima página de cards -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Quarto card -->
                         <!-- Primeiro card -->
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas1.png" alt="Card-Aula 1">
                            </div>
                        </div>
                        <!-- Segundo card -->
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas2.png" alt="Card-Aula 2">
                            </div>
                        </div>
                        <!-- Terceiro card -->
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas3.png" alt="Card-Aula 3">
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="card-Aulas">
                                <img src="img/Aulas/Card-Aulas4.png" alt="Card-Aula 4" >
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
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
