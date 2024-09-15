<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JM Solar Engenharia - Projetos de energia solar e soluções sustentáveis para iluminação, bombeamento e telecomunicações.">
    <meta name="keywords" content="energia solar, fotovoltaica, projetos elétricos, sistemas on grid, sistemas off grid">
    <title>JM Solarys</title>
    <link rel="stylesheet" href="Location.css">
    <link rel="shortcut icon" href="img/JM.png" type="image/x-icon">
</head>
<body>
    <nav class="menu">
    <a class="logo" href="index.php"><img id="icon-0" src="img/JM.png" alt="logo" ></a>
        <a class="home" href="index.php">Home</a>
        <a href="Location.php">Localização</a>
        <a class="projetos" href="projetos.php">Projetos</a>
        <a onclick="toggleSobre()">Sobre </a>
        <a class="wtz" href="https://wa.me/+5581981167340" target="_blank"><img id="icon2" src="img/icons/WhatsApp.svg" alt="WhatsApp">WHATSAPP</a>
        <a class="inst" href="https://www.instagram.com/jmsolarys/" target="_blank" ><img id="icon3" src="img/icons/iconmonstr-instagram-14.svg" alt="INSTAGRAN">INSTAGRAM</a>
        <a class="user" href="Cadastro.php"><img id="icon4" src="img/icons/iconmonstr-user-6 1.svg" alt=""></a>
    </nav>
    <div class="banner">
        <img src="img/img1.svg" alt="Banner da JM Solar Engenharia, especializada em energia solar">
        <div class="txt">
            <h2> JM SOLARYS<br>Localização</h2>
            <h3> <a href="javascript:void(0);" onclick="scrollToContato()">Localização</a></h3> 
        </div>
    </div>
    <div class="titulos"> 
        <h2> 
           Nossa Localização
        </h2>
    </div>
    <div id="mapa" class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.8297469783259!2d-35.240042830192145!3d-8.370249163738599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aa5f3d8195018f%3A0x7c1f16c9af7d1221!2sJM%20Solarys!5e0!3m2!1spt-BR!2sbr!4v1726153458997!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
      </div>
      <div class="container_conteudo_informativo">
        <table cellpadding="1" cellspacing="1" class="contact-table">
            <tbody>
                <tr>
                    <td class="icon-cell">
                        <span class="far fa-envelope"></span>
                    </td>
                    <td>
                        <p><strong>Email</strong><br>jm.solaryspe@gmail.com</p>
                    </td>
                </tr>
                <tr>
                    <td class="icon-cell">
                        <span class="fas fa-phone"></span>
                    </td>
                    <td>
                        <p><strong>Telefones</strong><br>(81)9 8116-7340</p>
                    </td>
                </tr>
                <tr>
                    <td class="icon-cell">
                        <span class="far fa-clock"></span>
                    </td>
                    <td>
                        <p><strong>Horário de funcionamento</strong><br>
                            Segunda à sexta 08:00 - 17:00 h
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="icon-cell">
                        <span class="fas fa-map-marker-alt"></span>
                    </td>
                    <td>
                        <p><strong>Endereço</strong><br>
                            R. Doutorzinho, 93B - Jaguaribe<br>
                            Escada - PE<br>
                            CEP: 55500-000
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
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
    function scrollToContato() {
        document.getElementById('mapa').scrollIntoView({ behavior: 'smooth' });
    }
</script>
    </body>
    </html>