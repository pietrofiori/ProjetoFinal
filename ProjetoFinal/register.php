<?php
if (isseT($_POST['submit'])) 
{
    //print_r('Nome:' . $_POST['nome']);
   // print_r('<br>');
   // print_r('Email:' . $_POST['email']);
   // print_r('<br>');
   // print_r('Telefone:' . $_POST['telefone']);
   // print_r('<br>');
   // print_r('Datad de Nascimento:' . $_POST['data_nascimento']);
   // print_r('<br>');
   // print_r('Gênero:' . $_POST['genero']);
   // print_r('<br>');
   // print_r('Cidade:' . $_POST['cidade']);
    //print_r('<br>');
   // print_r('Estado:' . $_POST['estado']);
   // print_r('<br>');
   // print_r('Endereço:' . $_POST['endereco']);
   include_once('config.php');
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $data_nascimento = $_POST['data_nascimento'];
   $sexo = $_POST['genero'];

   $result = mysqli_query($conecta, "INSERT INTO users(nome,email,telefone,sexo,data_nascimento)
   VALUES ('$nome','$email','$telefone','$sexo','$data_nascimento')");
   
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(65deg,cyan, black)
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid black;
        }
        legend{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color: black;
            border-radius: 10px;
            
        }
        .inputbox{
            position: relative;

        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color:white;
            font-size: 15px;
            width:100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: cyan;
            font-weight: bold;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size:15px;
        }
        #submit{
            background-image: linear-gradient(100deg, cyan, black);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 12px;
            font-weight: bold;
        }
        #submit:hover{
            background-image: linear-gradient(95deg, cyan ,black);
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="register.php" method="POST">
            <fieldset>
                <legend><b>Registre-se</b></legend>
                <br> 
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="nome" class="labelInput">E-mail</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="nome" class="labelInput">Telefone</label>
                </div>
                
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  required >
                <br>
                <br>
                <br>
                <input type="submit" name="submit" id="submit" value = "Cadastrar">
            </fieldset> 

    </div>
    
</body>
</html>