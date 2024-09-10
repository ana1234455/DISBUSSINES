<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleplanos.css">
    <title>PLANOS</title>
</head>

<body>

    <header>
        <h1>Nossos Preços</h1>
        <div class="toggle">
            <label>Anual</label>
            <div class="toggle-btn">
                <input type="checkbox" id="checkbox" class="checkbox">
                <label for="checkbox" class="sub" id="suv">
                    <div class="circle"></div>
                </label>
            </div>
            <label>Mensal</label>
        </div>
    </header>

    <div class="container">

        <div class="cards">
            <div class="card shadow">
                <ul>
                    <li class="pack">Pacote Básico</li>
                    <li id="basic" class="price bottom-bar">
                        &dollar;100.00</li>
                    <li class="bottom-bar">Exposição em uma seção destacada do site </li>
                    <li class="bottom-bar">Links para as redes sociais do cliente.</li>
                    <li class="bottom-bar">Relatórios básicos de desempenho </li>
                    <li class="bottom-bar">Suporte por e-mail.</li>
                    <li>
                        <button class="btn">Saiba mais</button>
                    </li>
                </ul>
            </div>
            <div class="card active">
                <ul>
                    <li class="pack">Pacote Premium</li>
                    <li id="basic" class="price bottom-bar">
                        &dollar;600.00</li>
                    <li class="bottom-bar">Exposição em áreas premium do site</li>
                    <li class="bottom-bar">Artigos de blog e posts dedicados, <br>incluindo entrevistas </li>
                    <li class="bottom-bar">Inclusão em campanhas promocionais<br> e e-mails direcionados.</li>
                    <li class="bottom-bar">Análise detalhada de desempenho<br> e insights de mercado</li>
                    <li class="bottom-bar">Suporte prioritário e consultoria estratégica.</li>

                    <li>
                        <button class="btn active-btn">Saiba mais</button>
                    </li>
                </ul>
            </div>
            <div class="card shadow">
                <ul>


                    <li class="pack">Pacote Intermediário</li>
                    <li id="basic" class="price bottom-bar">
                        &dollar;300.00</li>
                    <li class="bottom-bar">Exposição em múltiplas seções do site.</li>
                    <li class="bottom-bar">Artigo ou post de blog dedicado<br> sobre o cliente.</li>
                    <li class="bottom-bar">Relatórios detalhados de desempenho</li>
                    <li class="bottom-bar">Suporte por e-mail e telefone.</li>

                    <li>
                        <button class="btn">Saiba mais</button>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</body>

</html>