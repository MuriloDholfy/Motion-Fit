<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel de Imagens</title>
    <!-- Bootstrap CSS -->
    <style>
        p {
            margin-top: 0;
            margin-bottom: 1rem;
            color: #fff;
        }
        .carousel-container {
          background-color: #232729;
            width: 100%;
            text-align: center;
            margin: 0 auto;
            
        }
        .carousel-box {
            width: 80%;
            max-width: 1056px;
            text-align: center;
            margin: 0 auto;
            padding: 20px;

        }
        .carousel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .carousel-header h2 {
            margin: 0;
            
        }
        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 20px;

        }
        .social-icons img {
            width: 24px;
            height: 24px;
        }
    
        .carousel-galeria {
              position: relative;
              width: 100%;
              height: 100%;
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
          }

          .carousel-galeria img {
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
          .social-icons .texto {
                margin-top: 1.5rem !important;
                font-size: 18px;
            }

        .main-image {
            width: 60%;
            height: auto;
        }
        .thumbnails {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding: 0 10px;
        }
        .thumbnails img {
                height: 250px;
                FONT-WEIGHT: 200;
                border-radius: 15px;
            }
        .carousel-controls {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .carousel-controls button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
        .carousel-header h3 {
          font-size: 24px;
          color: #fff;
          line-height: 1.5;
        }

        .carousel-header h3 span {
          font-size: 24px;
          color: #96C22C;
          line-height: 1.5;
        }
        .img-principal{
            width: 500px;
            height: 500px;

        }
         /* Ajustes para telas menores */
     @media (max-width: 768px) {
        .social-icons .texto {
            font-size: 0px;
        }
      .carousel-galeria {
        /* flex-direction: column; */
        align-items: center;
      }
      .main-image {
        max-width: 10%;
      }
      .thumbnails {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
      }
      .thumbnails img {
        max-width: 20%;
        width: 200px;
        height: 200px;
      }
      .thumbnails .img-principal{
            width: 200px;
            height: 200px;

        }
       
       
    } 
    @media (max-width: 768px) {
        .thumbnails img {
            max-width: 115%;
            width: 200px;
            height: 100px;
        }
    }
    @media (max-width: 768px) {
        .thumbnails {
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
        }
    }
    @media (max-width: 768px) {
        .carousel-galeria .img-principal {
            width: 50%;
            height: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .carousel-header h3 {
          padding-top: 20px;
          font-size: 16px;
          color: #fff;
          line-height: 1.5;
        }

        .carousel-header h3 span {
          font-size: 16px;
          color: #96C22C;
          line-height: 1.5;
        }
    }
        
    </style>
</head>
<body>
    <div class="carousel-container">
      <div class="carousel-box">

        <div class="carousel-header">
            <h3>Veja mais detalhes <span> dos nossos espaços!<span> </h3>
            <div class="social-icons ">
              <p class="texto mt-4"> Veja mais em nosso...</p>
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
        <div class="carousel-galeria">
        <img data-src="holder.js/500x500" class="img-principal" alt="500x500" src="img/galeria/mid.png" data-holder-rendered="true" >            
          <div class="thumbnails">
              <img data-src="holder.js/200x200" class="img" alt="200x200" src="img/galeria/Frame1.png" data-holder-rendered="true" >            
              <img data-src="holder.js/200x200" class="img" alt="200x200" src="img/galeria/Frame2.png" data-holder-rendered="true" >            
          </div>
          <div class="thumbnails">
              <img data-src="holder.js/200x200" class="img" alt="200x200" src="img/galeria/Frame3.png" data-holder-rendered="true" >            
              <img data-src="holder.js/200x200" class="img" alt="200x200" src="img/galeria/Frame4.png" data-holder-rendered="true" >            
          </div>
        </div>
        <div class="carousel-controls col-1">
            <button>&larr;</button>
            <button>&rarr;</button>
        </div>
        </div>

    </div>

   
</body>
</html>