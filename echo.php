<?php
    session_start();
    if($_POST){
        $_SESSION['p1'] = $_POST['p1'];
        setcookie('p1','', time()+30);
        header('location: birubinha.php');
    } 

?>
<form method="post">
    <fieldset>
        <legenda> Pergunta 1: Voce eh lindo? </legenda>
            <input type="text" name="p1"> <br>
        <button>Responder</button>
    </fieldset>
</form>
