<?php
if (isset($_POST['tema_usuario'])) {
    $tema_usuario = $_POST['tema_usuario'];

    setcookie('tema_usuario', $tema_usuario, time() + 30, "/");

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_COOKIE['tema_usuario'])) {
    $tema_usuario = $_COOKIE['tema_usuario'];

    if ($tema_usuario === 'escuro') {
        $background = 'black';
        $textColor = 'white';
    } else {
        $background = 'white';
        $textColor = 'black';
    }
} else {
    $background = 'white';
    $textColor = 'black';
}
?>

<html>
    <head>
        <style>
            body {
                background-color: <?php echo $background; ?>;
                color: <?php echo $textColor; ?>;
            }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form name="cookie" method="post" action="">
            Tema:
            <select name="tema_usuario" id="tema">
                <option value="claro" <?php echo (isset($tema_usuario) && $tema_usuario === 'claro') ? 'selected' : ''; ?>>Claro</option>
                <option value="escuro" <?php echo (isset($tema_usuario) && $tema_usuario === 'escuro') ? 'selected' : ''; ?>>Escuro</option>
            </select>
            <button type="submit">Alterar</button>
        </form>

        <p class="titulo">Música A de Luan Santana</p><br><br>
        <p class="alinha">Tá em dúvida</p>
        <p class="alinha">Não sabe se é normal gostar de dois</p>
        <p class="alinha">Tá entre o que é e o que já foi</p>
        <p class="alinha">Vou te ajudar a decidir agora</p><br>

        <p class="alinha">Vamo lá</p>
        <p class="alinha">Suponha que eu sou A e ele é o B</p>
        <p class="alinha">Que assim vai ser mais fácil de entender</p>
        <p class="alinha">Vou começar agora com as perguntas</p><br>

        <p class="alinha">Quem te leva ao céu? A</p>
        <p class="alinha">Sem te tirar do colchão? A</p>
        <p class="alinha">Quem é que tira o seu mel? A</p>
        <p class="alinha">Te deixa molinha no chão?</p><br><br>

        <p class="alinha">Não tenha dúvida, quem? A</p>
        <p class="alinha">Te traz o céu pro colchão? A</p>
        <p class="alinha">Quem é que tira o seu mel? A</p>
        <p class="alinha">Te deixa molinha no chão?</p>
        <p class="alinha">Acabou sua dúvida</p><br><br>

        <p class="alinha">Tá em dúvida (tá em dúvida)</p>
        <p class="alinha">Não sabe se é normal gostar de dois (não é normal)</p>
        <p class="alinha">Tá entre o que é e o que já foi (ele já foi)</p>
        <p class="alinha">Vou te ajudar a decidir agora, oh</p><br><br>

        <p class="alinha">Vamo lá</p>
        <p class="alinha">(Vamo lá, vamo lá, vamo lá, vamo lá)</p>
        <p class="alinha">Suponha que eu sou A e ele é o B</p>
        <p class="alinha">(Ele é o B, ele é o B, ele é o B, ele é o B)</p>
        <p class="alinha">Que assim vai ser mais fácil de entender</p>
        <p class="alinha">Vou começar agora com as perguntas</p><br>

        <p class="alinha">(Quem te leva ao céu? A</p>
        <p class="alinha">Sem te tirar do colchão? A</p>
        <p class="alinha">Quem é que tira o seu mel? A)</p>
        <p class="alinha">Te deixa molinha no chão?</p><br><br>

        <p class="alinha">Não tenha dúvida, quem? A</p>
        <p class="alinha">Te traz o céu pro colchão? A</p>
        <p class="alinha">Quem é que tira o seu mel? A</p>
        <p class="alinha">Te deixa molinha no chão?</p>
        <p class="alinha">Acabou sua dúvida</p><br><br>

        <p class="alinha">Tá com medo do passado, né?</p>
        <p class="alinha">Mas eu sei exatamente o que você quer, é</p>
        <p class="alinha">Você não é mulher de Ralé, Lado B</p>
        <p class="alinha">Esse disco já furou mete o pé</p>
        <p class="alinha">Vem que eu te mostro lado A da vida</p>
        <p class="alinha">Cola sua boca aqui na minha</p>
        <p class="alinha">Hoje a noite vou te encher de amor oh</p><br>

        <p class="alinha">(Quem te leva ao céu? A</p>
        <p class="alinha">Sem te tirar do colchão? A)</p>
        <p class="alinha">Quem é que tira o seu mel? A</p>
        <p class="alinha">Te deixa molinha no chão?</p><br><br>

        <p class="alinha">Não tem mais dúvida</p>
        <p class="alinha">Não tem mais dúvida</p>
        <p class="alinha">Ele é o B, eu sou o A</p>
        <p class="alinha">Com quem cê vai ficar?</p><br><br>

        <p class="alinha">Não tem mais dúvida</p>
        <p class="alinha">Não tenha dúvida</p>
        <p class="alinha">Ele é o B, eu sou o A</p>
        <p class="alinha">Com quem cê vai ficar?</p><br><br>

        <p class="alinha">A</p>
    </body>
</html>
