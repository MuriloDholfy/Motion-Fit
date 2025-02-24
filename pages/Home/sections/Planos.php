<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos por Unidade</title>
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
    </style>
</head>
<body>
    <h1>Conheça nossos planos por unidade!</h1>
    <section class="container mb-5">

        <article class="plan">
            <h2>Motion Clube</h2>
            <div class="price">R$ 00,000/mês</div>
            <p>Descrição curta com no máximo duas linhas sobre o plano.</p>
            <a href="#" class="btn-wellhub start-now">Assinar este plano</a>

            <ul>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Programa de treinos exclusivos</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Avaliação física completa</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Acesso a todas as modalidades</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Pagamento facilitado e seguro</li>
                <li class="negative"><img class="icon" src="img/Planos/icons/cross-icon.png" alt="cross"> Acesso a todas unidades</li>
                <li class="negative"><img class="icon" src="img/Planos/icons/cross-icon.png" alt="cross"> Acesso ao Motion KIDS</li>
                <li class="negative"><img class="icon" src="img/Planos/icons/cross-icon.png" alt="cross"> Reservas e inscrições pelo App</li>
                <li class="negative"><img class="icon" src="img/Planos/icons/cross-icon.png" alt="cross"> 7 dias VIP para amigos</li>
                <li class="negative"><img class="icon" src="img/Planos/icons/cross-icon.png" alt="cross"> Sem anuidade ou taxa de matrícula</li>
            </ul>
        </article>

        <article class="plan highlight">
            <div class="title">OPÇÃO MAIS RECOMENDADA!</div>
            <h2 class="mt-5">Motion Pré</h2>
            <div class="price">R$ 00,000/mês</div>
            <p>Descrição curta com no máximo duas linhas sobre o plano.</p>
            <a href="#" class="btn-wellhub start-now">Assinar este plano</a>
            <ul>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Programa de treinos exclusivos</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Avaliação física completa</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Acesso a todas as modalidades</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Pagamento facilitado e seguro</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Acesso a todas unidades</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Acesso ao Motion KIDS</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Reservas e inscrições pelo App</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> 7 dias VIP para amigos</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Sem anuidade ou taxa de matrícula</li>
            </ul>
        </article>

        <article class="plan">
            <h2>Motion Prime</h2>
            <div class="price">R$ 00,000/mês</div>
            <p>Descrição curta com no máximo duas linhas sobre o plano.</p>
            <a href="#" class="btn-wellhub start-now">Assinar este plano</a>
            <ul>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Programa de treinos exclusivos</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Avaliação física completa</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Acesso a todas as modalidades</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Pagamento facilitado e seguro</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Acesso a todas unidades</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Acesso ao Motion KIDS</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Reservas e inscrições pelo App</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> 7 dias VIP para amigos</li>
                <li class="positive"><img class="icon" src="img/Planos/icons/check-icon.png" alt="check"> Sem anuidade ou taxa de matrícula</li>
            </ul>
        </article>
    </section>
</body>
</html>
