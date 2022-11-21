<?php session_start();                      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<style>
h1{
    text-align: center;
}
div#logout{
    text-align: center;
}
a{
    text-transform: none;
    text-decoration: none;
    color: red;
    font-size: 25px
}
</style>
<body>
    <?php  if(isset($_SESSION['ativa'])){  ?>

        <h1> Bem vindo ao Painel Admin! </h1>
        <div id="logout">
        <a href = "logout.php">Deslogar</a>
    </div>
 <?php   } else{
     echo "Você nao tem acesso a esta página!";
 } ?>

</body>
</html>