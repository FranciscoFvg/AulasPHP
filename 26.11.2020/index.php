<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicV - Login</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

    <div id="vid"> 
        <video src="video/Lines - 5217.mp4" autoplay="autoplay" muted preload="auto" loop></video>
    </div>

    <div id="login">
        <h1>LOGIN DE USUÁRIO</h1>

        <?php

            if (isset($_GET['mensagem'])) {
                echo "<p>{$_GET['mensagem']}</p>";
            }

        ?>

        <form action="controller/controlador.php" method="POST">

            <div class="group">
                <label>Email:</label>
                <input type="email" name="email" id="email" placeholder="Exemplo@gmail.com">
            </div>

            <br>
            <br>

            <div class="group">
                <label>Senha:</label>
                <input type="password" name="senha" id="password" placeholder="Password">
            </div>
            
            <br>
            <br>

            <button type="submit">Login</button>
        </form>

    </div>

</body>
</html>