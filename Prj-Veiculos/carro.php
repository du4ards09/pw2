<?php include("cabecalho.php"); ?>
<?php include("menu.php"); ?>
<br><br>
    <?php
        $id = $_GET['id'];

        $imagem = Array();
        $imagem[0] = "<img src='images/Creta.jpeg'>";
        $imagem[1] = "<img src='images/jeep-avenger-suv.png'>";
        $imagem[2] = "<img src='images/Caoa-Chery-SUV.png'>";
        $imagem[3] = "<img src='images/Honda-Civic-Type-R.png'>";
        $imagem[4] = "<img src='images/Audi-A4-2023.jpg'>";
        $imagem[5] = "<img src='images/corolla-SEDAN.png'>";
        $imagem[6] = "<img src='images/chevrolet.jpeg'>";
        $imagem[7] = "<img src='images/peugeot.jpeg'>";
        $imagem[8] = "<img src='images/wolkswagen.jpeg'>";
        $imagem[9] = "<img src='images/bmw.jfif'>";
        $imagem[10] = "<img src='images/Jaguar.jpg'>";
        $imagem[11] = "<img src='images/mercedes.jpeg'>";
        
        $modelo = Array();
        $modelo[0] = "Modelo: Creta";
        $modelo[1] = "Modelo: Jeep Avenger";
        $modelo[2] = "Modelo: Tiggo 8";
        $modelo[3] = "Modelo: Civic Type R";
        $modelo[4] = "Modelo: Audi A4";
        $modelo[5] = "Modelo: Corolla";
        $modelo[6] = "Modelo: Cruze TURBO LT";
        $modelo[7] = "Modelo: Peugeot 208 STYLE";
        $modelo[8] = "Modelo: Volkswagen Polo MSL";
        $modelo[9] = "Modelo: BMW M6";
        $modelo[10] = "Modelo: Jaguar F-Type";
        $modelo[11] = "Modelo: Mercedes Benz GT Roadster C";

        $fabricante = Array();
        $fabricante[0] = "Fabricante: Hyundai";
        $fabricante[1] = "Fabricante: Jeep";
        $fabricante[2] = "Fabricante: Caoa Chery ";
        $fabricante[3] = "Fabricante: Honda";
        $fabricante[4] = "Fabricante: Audi";
        $fabricante[5] = "Fabricante: Toyota";
        $fabricante[6] = "Fabricante: Chevrolet";
        $fabricante[7] = "Fabricante: Peugeot";
        $fabricante[8] = "Fabricante: Volkswagen";
        $fabricante[9] = "Fabricante: BMW";
        $fabricante[10] = "Fabricante: Jaguars Cars";
        $fabricante[11] = "Fabricante: Mercedes Benz";

        $preco = Array();
        $preco[0] = "Preço: R$ 109.990,00";
        $preco[1] = "Preço: R$ 280.000,00 ";
        $preco[2] = "Preço: R$ R$ 201.070,00 ";
        $preco[3] = "Preço: R$ 215.000,00";
        $preco[4] = "Preço: R$ 253.990,00";
        $preco[5] = "Preço: R$ 146.890,00";
        $preco[6] = "Preço: R$ 138.650,00";
        $preco[7] = "Preço: R$ 96.590,00";
        $preco[8] = "Preço: R$ 82.990,00";
        $preco[9] = "Preço: R$ 699.950,00";
        $preco[10] = "Preço: R$ 581.950,00";
        $preco[11] = "Preço: R$ 1.199.900,00";

        $descricao = Array();
        $descricao[0] = "<p>O Creta 2020 tem  frontal traz grade redesenhada, novo para-choque, faróis com projetor e faróis de neblina com luz diurna (DRL) em LED. Na parte traseira do Creta 2020, são inéditos o para-choque, as lanternas – com luzes de LED para a versão topo de linha Prestige – e refletores.<br> Os retrovisores, que já tinham rebatimento elétrico, agora são como sempre deveriam ter sido: com acionamento automático indexado às travas das portas. <br>A reestilização foi só para segurar as vendas até a chegada da nova geração, entre 2021 e 2022. Ainda que sem parecer um novo Creta, continua bom de briga.<br></p>";
        $descricao[1] = "<p> Jeep Avenger, o primeiro produto de marca originária dos Estados Unidos a ganhar o prêmio de Carro do Ano na Europa. O Avenger é o menor e mais acessível veículo da Jeep. O comprimento é 16cm menor que o do Renegade, Totalizando apenas 4,08m: medida típica de hatch compacto. <br> <br> O projeto do Jeep Avenger é baseado na plataforma CMP, graças a ela, o SUV tem propulsão puramente elétrica ou híbrida, dependendo da versão. <br></p>";
        $descricao[2] = "<p>O CAOA CHERY Tiggo 8, SUV de sete lugares fabricado em Anápolis (GO), foi eleito o melhor SUV médio de 2020 pelo Prêmio UOL Carros.  É comercializado em versão única TXS com motor 1.6 Turbo GDi, com injeção direta de combustível e 187 cavalos de potência. Entre os destaques do modelo estão o porta-malas configurável, que pode chegar a 1.930 litros; o estilo refinado e sofisticado do design e dos acabamentos internos, além dos itens de conforto e segurança.<br></p>";
        $descricao[3] = "<p> Honda Civic Type R , o motor será o 2.0 turbo, vai ultrapassar os 320 cv da geração anterior. O câmbio será manual de seis marchas e a tração, somente dianteira. No visual, o Type R 2023 traz linhas bem agressivas, com dianteira marcada por faróis de LED afilados e um capô longo que avança pela grade do tipo colmeia, deixando o hatch com cara de mau.<br> </p>";
        $descricao[4] = "<p>A vista lateral do Audi A4 Sedan chama atenção imediata para as rodas, bem como para as asas largas e as marcantes das soleiras. A área do difusor interior, com tubos de escape trapezoidais integrados, garante um acabamento esportivo. Na frente, a larga e ampla grade central o para-choque e as entradas de ar amplas e enfáticas formam uma unidade poderosa.<br> <br> Os faróis Matrix LED opcionais podem mascarar seletivamente os veículos que se aproximam enquanto ainda iluminam o resto da estrada. Quando você destrava ou trava o veículo, os faróis realizam sua impressionante sequência dinâmica de luzes. Na parte traseira, também é possível escolher luzes LED com sequenciamento dinâmico de luz e indicadores dinâmicos.</p>";
        $descricao[5] = "<p>O Corolla é um dos sedans mais tradicionais do mundo - atualmente, chega a 12 gerações! O carro da montadora japonesa Toyota é considerado extremamente econômico, fazendo cerca de 10km/l dentro da cidade e até 15km/l na estrada. Além disso, possui bom espaço interno, acabamento de qualidade e um design moderno e elegante. <br> O Brasil produz o automóvel desde a 8ª geração (que começou em 1998) e mantém até hoje um volume estável de vendas, tendo tido um crescimento enorme na demanda com o surgimento dos motores flex.</p>";
        $descricao[6] = "<p>O Cruze é o modelo de sedan médio da Chevrolet para o mercado mundial e apresenta motor 1.8 na primeira geração (140cv gasolina e 144cv etanol) e 1.4 na segunda (150cv gasolina e 153cv etanol). <br>
        O carro tem câmbio automático e grande espaço interno. Além disso, foi eleito o veículo favorito das mulheres pela revista O Poder Feminino em 2016.  Possui uma frente arrojada e é uma excelente opção para quem busca sedans com bom acabamento.<br></p>";
        $descricao[7] = "<p>Tenta aliar visual descolado, economia de combustível e custo/benefício em um carro de entrada. A versão traz alguns toques especiais, como grade preta fosca. No caso das rodas aro 16 de liga leve, da capa dos retrovisores e do spoiler integrado ao teto, o tom escuro é brilhante. A ponteira cromada do escapamento completa o desenho, digamos, mais arrojado. O hatch tem faróis full-LED e as características luzes diurnas no estilo “dentes de sabre”, que escorrem no para-choque. É, não há dúvida: o 208 Style é garboso.<br> <br> Outro grande trunfo do 208 Style é o motor três-cilindros 1.0 Firefly de origem Fiat. A unidade de força é um dos benefícios da Peugeot por fazer parte da Stellantis, aliança entre a antiga FCA e a PSA Peugeot-Citroën. É o mesmo propulsor do Fiat Argo nas configurações básicas.<br> </p>";
        $descricao[8] = "<p>O Novo Polo chega com linhas renovadas e faróis de LED, deixando-o ainda mais moderno e elegante.
        Com excelente desempenho e tecnologias inovadoras, o Novo Polo certamente é a melhor opção do segmento Hatch.<br><br>Você pode fazer o carregamento do seu smartphone sem a utilização de cabos e o motor TSI possui alta eficiência e entrega muita performance com menor consumo de combustível.</p>";
        $descricao[9] = "<p>Superioridade em qualquer estrada: o BMW X6 M Competition demonstra o seu extrovertido domínio com uma surpreendente dinâmica de condução, design expressivo M e agilidade ímpar. Descubra o arrojado Sports Activity Coupés (SAC): o BMW X6 M Competition seduz pelo interior luxuoso e pela dinâmica de condução definida pelos genes de competição. Uma experiência de condução repleta de adrenalina que é ainda mais intensificada no potente e exuberante BMW X6 M Competition. <br></p>";
        $descricao[10] = "<p>Descubra o NOVO PEUGEOT 3008 e o seu estilo revolucionário único. Com linhas poderosas, transpira força, elegância, dinamismo e fluidez. Sem rival no mercado, o PEUGEOT i-Cockpit® 2.0 disponibiliza uma vasta gama de tecnologias inovadoras que foram concebidas para aprimorar o seu conforto e segurança. Graças ao eficiente motor Turbo THP 165, você vai se sentir confortável ao volante deste ágil veículo e sentir um incomparável prazer de condução. <br><br> Ele conta com: Faróis Pixel LED Jaguar com luzes de circulação diurna (DRL) e design “J” Blade que combinam totalmente com o desenho aerodinâmico do F-TYPE.<br></p>";
        $descricao[11] = "<p>A Mercedes-Benz começa a vender neste mês o conversível poderoso AMG GT C Roadster com preço de 7 dígitos no Brasil. Com motor V8 de 4.0 litros de 557 cavalos de potência, o modelo já pode ser encomendado por R$ 1.064.900.<br> <br>Com torque de 69 kgfm e transmissão de dupla embreagem, o AMG GT C Roadster acelera de 0 a 100 km/h em 3,7 segundos, o que significa apenas 0,1 segundo a mais que a versão GT R Coupé, o “diabo verde”, com seus 593 cv. A velocidade máxima é de 316 km/h. <br> <br> A versão conversível mais potente vem com esterçamento das rodas traseiras, suspensão adaptativa, bloqueio de diferencial eletrônico do eixo traseiro e sistema de exaustão variável para dar um toque a mais no som do motor V8.</p>";
    ?>
    <div class="card2" style="width: 35rem; background-color: #20638C ; margin-left: 34%;">
       <img class="card-img-top"> <?php echo $imagem[$id]; ?>
       <div class="card-body">
         <p class="informacoes"> <?php echo $fabricante[$id]; ?></p>  
         <p  class="informacoes"> <?php echo $modelo[$id]; ?> </p> 
         <p class="informacoes"> <?php echo $preco[$id] ?></p>
         <p class="descricao"> <?php echo $descricao[$id] ?></p>

        </div>
    </div>
<br><br>
<?php include("rodape.php"); ?>