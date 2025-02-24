<style>

     
#big-numbers  {
    
    background-color: #232729;
    border-top: 2px solid #444;
    border-bottom: 2px solid #444;
}
     
#big-numbers h2 {
  text-align: center;
  font-size: 2.5em;
  margin-bottom: 20px;
}

#big-numbers section {
  padding: 50px 20px;
  max-width: 1200px;
  margin: 0 auto;
}


/* Big Numbers */
#big-numbers .big-numbers-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  text-align: center;
  flex-wrap: wrap;
}

#big-numbers .big-number {
  background-color: #232729;
  padding: 20px;
  border-radius: 10px;
  width: 400px;
  transition: background-color 0.3s ease;
}

#big-numbers .big-number h3 {
  font-size: 2.4em;
  color: #fff;
  margin-bottom: 10px;
}

#big-numbers .big-number:hover {
  background-color: #232729;
}
@media (max-width: 768px) {
  /* Mantém o mesmo layout do desktop */
  #big-numbers .big-numbers-container {
    flex-direction: row;
  }
  
  #big-numbers .big-number {
    width: 400px; /* mesma largura definida originalmente */
    margin: 0; /* ou o margin que você já usa */
  }
  
  #big-numbers h2 {
    font-size: 1.5em;
  }
  
  #big-numbers .big-number h3 {
    font-size: 1.5em;
  }
}

</style>  
  
  <!-- Section: Big Numbers -->
  <section id="big-numbers">
    <div class="big-numbers-container">
      <div class="big-number mt-5">
        <div class="row">
        <h3 >+27 Mil alunos</h3>
        </div>
        
        <p>Inscritos em toda nossa rede Motion Fit
        </p>
      </div>
      <div class="big-number mt-5">
        <h3 >+4 Anos</h3>
        <p>Atuando no mercado Fitness Brasileiro
        </p>
      </div>
    </div>
  </section>

