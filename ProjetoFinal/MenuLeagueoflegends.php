<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EloJobSpace</title>
    <link rel="stylesheet" href="menu league of legends - elojob.css">
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
    <h1>Elo Job</h1>
    <p id="nota"><span style="color: rgb(18, 49, 43);"><b>Nota:</b></span> Você pode escolher adicionais no momento de finalizar o pedido, como por exemplo: 
        <br>Flash no D ou no F, campeões específicos, horários específicos, chat offline, streaming do serviço, rotas específicas.</p>
    <p id="aviso"><span style="color: red;"><b>Aviso:</b></span><span style="color: red;"> Não</span> estamos trabalhando com as ligas do Grão-Mestre e Desafiante.</p>
    <aside id="liga1">
    <p><span id="selecione">1      </span> &nbsp    Selecione a liga e divisão atual</p>
    <img src="imagens/ferro.png" id="imagem" width="210px" style="text-align: center;">
    <p id="asidep1">Selecione a Liga Atual</p>
    <select id="select1" >
    <option value="Ferro" id="Ferro1">&nbsp&nbsp Ferro</option>
    <option value="Bronze" id="Bronze1">&nbsp&nbsp Bronze</option>
    <option value="Prata" id="Prata1">&nbsp&nbsp Prata</option>
    <option value="Ouro" id="Ouro1">&nbsp&nbsp Ouro</option>
    <option value="Platina" id="Platina1">&nbsp&nbsp Platina</option>
    <option value="Diamante" id="Diamante1">&nbsp&nbsp Diamante</option>
    </select>
    <p id="another">Selecione a Divisão Atual</p>
    <select id="select">
        <option value="Ferro" id="quatro">&nbsp&nbsp IV</option>
        <option value="Ferro" id="tres">&nbsp&nbsp III</option>
        <option value="Ferro" id="dois">&nbsp&nbsp II</option>
        <option value="Ferro" id="um">&nbsp&nbsp I</option>
        </select>
    </aside>
    <aside id="liga2">
        <p><span id="selecione2">1      </span>     &nbsp Selecione a liga e divisão desejada</p>
        <img src="imagens/prata.png" id="imagem2" width="210px" style="text-align: center;">
        <p id="asidep2">Selecione a Liga desejada</p>
        <select id="select2">
            <option value="Ferro" id="Ferro2">&nbsp&nbsp Ferro</option>
            <option value="Bronze" id="Bronze2">&nbsp&nbsp Bronze</option>
            <option value="Prata" id="Prata2" selected>&nbsp&nbsp Prata</option>
            <option value="Ouro" id="Ouro2">&nbsp&nbsp Ouro</option>
            <option value="Platina" id="Platina2">&nbsp&nbsp Platina</option>
            <option value="Diamante" id="Diamante2">&nbsp&nbsp Diamante</option>
            <option value="Mestre" id="Mestre1">&nbsp&nbsp Mestre</option>
        </select>
        <p id="another2">Selecione a Divisão desejada</p>
    <select id="select">
        <option value="Ferro">&nbsp&nbsp IV</option>
        <option value="Ferro">&nbsp&nbsp III</option>
        <option value="Ferro">&nbsp&nbsp II</option>
        <option value="Ferro">&nbsp&nbsp I</option>
        </select>
    </aside>
    <aside id="liga3">
        <p><span id="selecione3">1      </span> &nbsp    Selecione a fila desejada</p>
        <img src="imagens/logo.png" id="logo" width="150px" style="text-align: center;">
        <p id="asidep3">Selecione a fila desejada</p>
        <select id="select">
        <option value="Ferro">&nbsp&nbsp Solo/Duo</option>
        <option value="Ferro">&nbsp&nbsp Flex</option>
        </select>
    </aside>
   <div id="res"> 
    <a href="https://api.whatsapp.com/send?phone=5551996286120&text=Ola%20EloJobSpace%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20o%20Elojob!"><button id="comprar" value="Comprar">Comprar</button></a>
</div>
   </aside>
   <script>
 const imagemElo = document.getElementById('imagem');
const select = document.getElementById('select1');

select.addEventListener('change', alterarImagem)

function alterarImagem() {


    if (select.value == 'Ferro') {
        imagemElo.src = 'imagens/ferro.png'
        

    } else if (select.value == 'Bronze') {
        imagemElo.src = 'imagens/bronze.png'
      

    } else if (select.value == 'Prata') {
        imagemElo.src = 'imagens/prata.png'
        

    } else if (select.value == 'Ouro') {
        imagemElo.src = 'imagens/ouro.png'
   

    } else if (select.value == 'Platina') {
        imagemElo.src = 'imagens/platina.png'
  

    } else if (select.value == 'Diamante') {
        imagemElo.src = 'imagens/diamante.png'
    }
    
}

const select2 = document.getElementById('select2');
const imagemElo2 = document.getElementById('imagem2');


select2.addEventListener('change', alterarImagem2)

function alterarImagem2() {


    if (select2.value == 'Ferro') {
        imagemElo2.src = 'imagens/ferro.png'
        

    } else if (select2.value == 'Bronze') {
        imagemElo2.src = 'imagens/bronze.png'
      

    } else if (select2.value == 'Prata') {
        imagemElo2.src = 'imagens/prata.png'
        

    } else if (select2.value == 'Ouro') {
        imagemElo2.src = 'imagens/ouro.png'
   

    } else if (select2.value == 'Platina') {
        imagemElo2.src = 'imagens/platina.png'
  

    } else if (select2.value == 'Diamante') {
        imagemElo2.src = 'imagens/diamante.png'
    }
    else if (select2.value == 'Mestre') {
        imagemElo2.src = 'imagens/Mestre.png'
    }
}
   </script>
</body>
</html>