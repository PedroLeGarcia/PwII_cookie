<?php 
    session_start();
    if($_POST){
        $_SESSION['nome'] = $_POST['nome'];
        setcookie('nome','', time()+10);
        header('location: echo.php');
    } 
?>
<form method="post">
    Nome: <input type="text" name="nome">
    <br>
    <button>Entrar</button>
</form>
