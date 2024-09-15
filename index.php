<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="JM Solar Engenharia - Projetos de energia solar e soluções sustentáveis para iluminação, bombeamento e telecomunicações.">
    <meta name="keywords"
        content="energia solar, fotovoltaica, projetos elétricos, sistemas on grid, sistemas off grid">
    <title>JM Solarys</title>
   <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="img/JM.png" type="image/x-icon">
</head>

<body>
    <nav class="menu">
        <a class="logo" href="index.php"><img id="icon-0" src="img/JM.png" alt="logo" ></a>
        <a class="home" href="index.php">Home</a>
        <a href="Location.php">Localização</a>
        <a class="projetos" href="projetos.php">Projetos</a>
        <a class="sbr" onclick="toggleSobre()">Sobre </a>
        <a class="wtz" href="https://wa.me/+5581981167340" target="_blank"><img id="icon2" src="img/icons/WhatsApp.svg" alt="WhatsApp">WHATSAPP</a>
        <a class="inst" href="https://www.instagram.com/jmsolarys/" target="_blank"><img id="icon3" src="img/icons/iconmonstr-instagram-14.svg" alt="INSTAGRAM">INSTAGRAM</a>
        <a class="user" href="Cadastro.php"><img id="icon4" src="img/icons/iconmonstr-user-6 1.svg" alt=""></a>
    </nav>

    <div class="banner">
        <img src="img/img1.svg" alt="Banner da JM Solar Engenharia, especializada em energia solar">
        <div class="txt">
            <h2>JM SOLARYS <br>Projetos de Energia Solar</h2>
            <h3> <a href="javascript:void(0);" onclick="scrollToContato()">Orçamento</a></h3>
        </div>
    </div>
    <button class="scrb" id="scr" onclick="scrollToTop()" ><img src="img/icons/up-arrow-svgrepo-com.svg" alt=""></button>
    <div class="Principal">
        <h2>Benefícios Da Energia Solar</h2>
    </div>
    <div class="item">
        <h3>
            Economia e Durabilidade
            <p>
                O seu sistema fará com que você deixe de consumir a energia da rede da distribuidora.
                A partir daí sua economia pode chegar até 95% na conta todos os meses.
                O retorno só não atinge 100% devido à taxa de disponibilidade e uso da rede, que precisa ser paga, assim
                como todos os outros consumidores de energia.
                Essa economia pode durar até 25 anos de vida útil do sistema.
            </p>
        </h3>
        <h3>
            Valorização do Imóvel
            <p>
                Veja como a energia fotovoltaica contribui para valorização de imóveis!
                A energia solar fotovoltaica, além de contribuir para a saúde do planeta, é um investimento que resulta
                na redução considerável dos gastos com as contas de luz.
                Para você ter uma ideia, diversos compradores se dispõem a pagar mais caro na hora de adquirir um imóvel
                sustentável, visando as futuras economias que uma construção desse tipo oferece.
            </p>
        </h3>
        <h3>
            Auto Consumo
            <p>
                O autoconsumo remoto é uma das três modalidades da geração distribuída criada pela Agência Nacional de
                Energia Elétrica (Aneel), em 2015, quando foram atualizadas as regras de sua primeira RN, a Nº 482 de
                2012.
                A modalidade permite que o consumidor instale seu sistema gerador em local diferente do local de
                consumo, desde que ambos estejam em sua titularidade e dentro da área de concessão da mesma
                distribuidora
            </p>
        </h3>
        <h3> Manutenção Mínima
            <p>
                A necessidade de manutenção é mínima, sendo exigida em regiões com muita poeira e pouca chuva, já que a
                sujeira pode prejudicar a eficiência da geração de energia.
                É recomendável realizar inspeções visuais periódicas para garantir que não haja obstruções, como folhas
                ou detritos, sobre os painéis. A limpeza pode ser feita de forma simples,
                utilizando água e uma esponja macia para evitar arranhões no vidro dos módulos.
            </p>
        </h3>
    </div>
    <div class="sobre" id="sb" style="display: none; transition: .2s" >
        <h2>Sobre Nós</h2>
        <img src="img/img2.svg">
        <br>
        <br>
        <h3>
            Somos a JM Solarys, uma empresa que tem muito mais que missão e valores, temos PROPÓSITO. Nosso compromisso
            é levar energia sustentável para todo o Brasil, proporcionando mais que soluções energéticas,
            mas também contribuindo para um futuro mais verde e eficiente.
            Trabalhamos com dedicação e inovação para garantir que a energia que nos move também mova você, com
            qualidade, confiança e respeito ao meio ambiente.
            Juntos, estamos criando um impacto positivo na sociedade e no planeta.
        </h3>
    </div>
    

    <div class="contato" id="contato">
        <h2>Solicite Seu Orçamento</h2>
        <form method="post" name="contact_form" action="contact-form-handler.php">
            <div>
                
                <input class="form-control" type="text" name="name" placeholder="Seu nome" required>
            </div>
            <div>
                
                <input class="form-control" type="email" name="email" placeholder="Seu email" required>
            </div>
            <div>
               
                <input class="form-control" type="text" name="Telefone" placeholder="Ex:(81) 8632-0002" required>
            </div>
            <div>
              
            <input class="form-control" type="text" name="Endereço" placeholder="Seu endereço">
           </div>
           <div>
            
            <input class="form-control" type="tel" name="kw" placeholder="Média de kw" required>
            </div>
            <div>
                <textarea class="form-control" name="mensagem" rows="10" placeholder="Sua mensagem" required></textarea>
            </div>
            <div>

            </div>
            <input class="enviar" type="submit" value="Enviar">
        </form>
    </div>
    <footer>
        <h2>Copyright © 2019 JM Solar Engenharia – todos os direitos reservados. </h2>
        <address>
            Endereço: R. Doutorzinho, 93B - Jaguaribe, Escada - PE, 55500-000<br>
            Telefone: (81) 98116-7340
        </address>
        <h2 class="dev">Desenvolvido por Mim</h2>
    </footer>
    <script>
        function toggleSobre() {
            var sobreSection = document.querySelector('.sobre');
            sobreSection.style.display = (sobreSection.style.display === 'none' || sobreSection.style.display === '') ? 'block' : 'none';
            document.getElementById('sb').scrollIntoView({ behavior: 'smooth' });
        }

        function scrollToContato() {
            document.getElementById('contato').scrollIntoView({ behavior: 'smooth' });
        }

        function scrollToTop(){
           
    
           window.scrollTo(0,0 || {behavior: 'smooth'});

        }
    </script>
</body>

</html>