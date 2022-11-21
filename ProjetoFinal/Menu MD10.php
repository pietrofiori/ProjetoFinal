<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD10</title>
    <link rel="stylesheet" href="md10.css">
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
    </header>
    <br>
    <h1>GARANTA SUA MD10</h1>
    <p id="ph1">Nós iremos maximizar as chances de você cair em um elo melhor do que o seu anterior em sua Melhor de 10. 
    <br>Adquira agora mesmo sua MD10 Boosting ou DuoBoosting com valor promocional.
    </p>
    <aside id="aside1">
       <p><span id="span1">1 &nbsp;</span> Escolha a fila desejada</p>
       <select id="select1">
        <option>&nbsp;&nbsp;Solo/duo</option>
        <option>&nbsp;&nbsp;Flex</option>
       </select>
    </aside>
    <aside id="aside2">
        <p><span id="span2">1 &nbsp;</span> Selecione seu elo na temporada anterior </p>
        <select id="select2" onchange="trocaValor()">
            <option value="aaa">&nbsp;&nbsp;Selecione seu elo</option>
            <option value="norank">&nbsp;&nbsp;Nao ranqueado</option>
            <option value="ferro">&nbsp;&nbsp;Ferro</option>
            <option value="bronze">&nbsp;&nbsp;Bronze</option>
            <option value="prata">&nbsp;&nbsp;Prata</option>
            <option value="ouro">&nbsp;&nbsp;Ouro</option>
            <option value="platina">&nbsp;&nbsp;Platina</option>
            <option value="diamante">&nbsp;&nbsp;Diamante</option>
            <option value="mestre">&nbsp;&nbsp;Mestre</option>
           </select>
    </aside>
        <div id="res"> </div>
            <a href="https://api.whatsapp.com/send?phone=5551996286120&text=Ola%20EloJobSpace%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20o%20Elojob!"><button id="comprar" value="Comprar">Comprar</button></a>
    
        
        <p id="taxa">
            <br>
           Para a MD10 garantimos uma taxa de vitoria de <b>80%</b>!!
            <br>
           <br> - Não é possível prever exatamente o elo que você irá cair na MD10. Nós iremos garantir a taxa de vitórias conforme combinado. <br> O elo que irá obter na MD10 depende de seu MMR na sua última temporada, MMR de seu time e time adversário durante a MD10.<br>Adquirindo esse serviço com a ELO JOB HIGH, as chances de cair em divisões superiores à sua classificação anterior são muita altas.
            <br>
           <br> - Em caso raro de o booster não conseguir o padrão de winrate combinado, para cada derrota além do combinado, <br> subiremos manualmente uma divisão do resultado final da MD10.
        
        </p>
    
    <script>
    const res = document.getElementById('res')
    const  select = document.getElementById('select2')
    
    function trocaValor() {
        
    if (select.value == 'ferro'){
      res.innerHTML = 'R$ 40,00'
    }
    else if (select.value == 'bronze'){
        res.innerHTML = ' R$ 42,00'
    }
    else if (select.value == 'prata'){
        res.innerHTML = ' R$ 45,00'
    }
    else if (select.value == 'ouro'){
        res.innerHTML = 'R$ 50,00'
}
    else if (select.value == 'platina'){
        res.innerHTML = 'R$ 50,00'
    }
    else if (select.value == 'diamante'){
        res.innerHTML = 'R$ 60,00'
    }
    else if (select.value == 'mestre'){
        res.innerHTML = 'R$ 80,00'
    }
    if (select.value == 'norank'){
      res.innerHTML = 'R$ 50,00'
    }
}
    </script>
</body>
</html>