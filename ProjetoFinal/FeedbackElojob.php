<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
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

 <h1> Feedbacks </h1>
    
 <p id="pfeed">O QUE OS CLIENTES DIZEM SOBRE A ELOJOB SPACE?</p>
 
 <div class="container">
    <img class="mySlides" src="imagens/feedback1.jpeg" style="width:240px">
    <img class="mySlides" src="imagens/feedback5.jpeg" style="width:240px">
    <img class="mySlides" src="imagens/feedback3.jpeg" style="width:240px">
    <img class="mySlides" src="imagens/feedback4.jpeg" style="width:240px" >
    <img class="mySlides" src="imagens/feedback6.jpeg" style="width:240px" >
    <img class="mySlides" src="imagens/feedback7.jpeg" style="width:240px" >
    <img class="mySlides" src="imagens/feedback8.jpeg" style="width:240px" >
    <img class="mySlides" src="imagens/feedback9.jpeg" style="width:240px" >
    <img class="mySlides" src="imagens/feedback10.jpeg" style="width:240px" >
    <img class="mySlides" src="imagens/feedback11.jpeg" style="width:240px" >
    <img src="imagens/gif.gif" id="gif">
    <button id="leftbutton" onclick="plusDivs(-1)"><span id="span1"> <img src="imagens/seta-para-a-esquerda-botao-preto-quadrado.png" width="42px"></span></button>
    <button id="rightbutton" onclick="plusDivs(1)"><span id="span"> <img src="imagens/botao-quadrado-preto-de-seta-para-a-direita.png" width="42px"></span></button>
  </div>


  <script>
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
                                                                
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "flex";  
    }
    </script>
</body>
</html>