<?php  

$host = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "project";

$conecta = mysqli_connect($host,$DBuser,$DBpass,$DBname);


function login($conecta,$nome,$email,$senha){
    if ($_POST['enviar']){

        $erros = array();
        $senha = sha1($senha);
        $query = "SELECT * FROM admins WHERE nome = '$nome' AND email = '$email' AND senha = '$senha' ";
        $executar = mysqli_query($conecta,$query);
        $resultado = mysqli_fetch_assoc($executar);
        
        if (!empty($resultado)){
            session_start();
            $_SESSION['user'] = $resultado['nome'];
            $_SESSION['ativa'] = TRUE;
            // redirecionar para a pagina quando o login for realizado
            header("location: admin.php");
        }else{
            $erros[] = "Usuario ou senha nao encontrados";
        }
        if (!empty($erros)){
        foreach ($erros as $erro){
            echo $erro . "<br>";
        }
        }
    }
}
function logout(){
    session_start();
    // limpar o cache
    session_unset();
    // encerra a sessão
    session_destroy();
    header("location: login.php");
}
?>










