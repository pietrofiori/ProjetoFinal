<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações enviadas com sucesso!</title>
</head>
<body>
    <link rel="stylesheet" href="info.css">
</head>
<body>
    <header>
        <nav id="menu">
        <ul id="lista">
              <li><h4><a id="inicio" href="ProjetoFinal.php">Início</a></h4></li>
                <li id="league"><a id="league2" href="###">League of legends</a>
                <ul>
                <li><a id="Elojob" href="MenuLeagueoflegends.php">EloJob</a></li>
                <li><a id="md10" href="Menu MD10.php">Md10</a></li>
                </ul>
                </li>
                <li><a id="feedback" href="FeedbackElojob.php">Feedbacks</a></li>

            <li id="contato"> <a id="contato2" href="ContatoElojob.php">Contato</a>
            <ul>
                <li> <a id="trabalhe" href="TrabalheconoscoElojob.php">Trabalhe Conosco</a> </li>
             </ul>
            </li>
            <li><a id = "cliente" href = "register.php"> Área do Cliente </a> </li>
            </ul>
        </nav>
        <h1>INFORMAÇÕES ENVIADAS COM SUCESSO!</h1>
        <p id="ph1">Voce sera redirecionado para pagina principal</p>
        <img src="imagens/enviado icon.png" id="imgicon">
        <script>
           setTimeout(function() {
    window.location.href = "ProjetoFinal.php";
}, 4000);
        </script>
</body>
</html>