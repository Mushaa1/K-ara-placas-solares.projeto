
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JM Solar Engenharia - Projetos de energia solar e soluções sustentáveis para iluminação, bombeamento e telecomunicações.">
    <meta name="keywords" content="energia solar, fotovoltaica, projetos elétricos, sistemas on grid, sistemas off grid">
    <title>JM Solarys</title>
    <link rel="stylesheet" href="Cadastro.css">
    <link rel="shortcut icon" href="img/JM.png" type="image/x-icon">
</head>
<body>
    <nav class="menu">
        <a class="logo" href="index.php">JM SOLARYS</a>
        <a class="home" href="index.php">Home</a>
        <a href="Location.php">localização</a>
        <a class="projetos" href="projetos.php">Projetos</a>
        <a class="wtz" href="https://wa.me/+5581981167340" target="_blank"><img id="icon2" src="img/icons/WhatsApp.svg" alt="WhatsApp">WHATSAPP</a>
        <a class="inst" href="https://www.instagram.com/jmsolarys/" target="_blank" ><img id="icon3" src="img/icons/iconmonstr-instagram-14.svg" alt="INSTAGRAM">INSTAGRAM</a>
    </nav>

    <div class="container">
        <h2>Cadastro</h2>
        <form action="#" method="post">
            <label for="nome">Nome Completo:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" placeholder="99-99999-9999" required><br><br>
            
            <label for="cep">CEP:</label><br>
            <input type="text" id="cep" name="cep" pattern="[0-9]{5}-[0-9]{3}" placeholder="00000-000" required><br><br>
            
            <input type="submit" value="Cadastrar">
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
</body>
</html>
