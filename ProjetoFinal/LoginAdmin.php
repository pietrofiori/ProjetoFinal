<?php require 'FunctionsAdmin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginAdmin.css">
    <title>Painel Admin Login</title>
</head>
<body>
<?php  


    if (isset($_POST['enviar'])) {

   $nome  =  $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

        login($conecta,$nome,$email,$senha);
    }
    
    ?>
    <form action = "" method = "post">
    <div class="telaloading">
        <h1>Login Admin</h1>
        <input type="text" name= "nome" placeholder="Nome"  required>
        <br><br>
        <input type="password" name= "email" placeholder="Email" required>
        <br><br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
        <input type="submit" name="enviar" id="submit">
    </div>
</form>
</body>
</html>