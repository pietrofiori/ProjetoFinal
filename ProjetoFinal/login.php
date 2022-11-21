<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
            font-family:Arial;
            background-image: linear-gradient(45deg, cyan, red);
        }
        .telaloading{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 20px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            color: white;
            font-size: 15px;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            border: none; 
        }
        button:hover{
            background-color: darkred;
            cursor: pointer;
        }
        #submit{
            background-image: linear-gradient(45deg, cyan, red);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 12px;
        }
        #submit:hover{
            background-image: linear-gradient(45deg, rgb(25, 128, 128), rgb(113, 26, 26));
        }
    </style>
</head>
<body>
    <div class="telaloading">
        <h1>Entrar</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <input type="submit" name="submit" id="submit">
    </div>
</body>
</html>