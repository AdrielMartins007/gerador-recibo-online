<?php

require_once 'Formulario.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEU RECIBO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="POST">

        <section id="titulo">
            <h1>SEU RECIBO</h1>
        </section>

        <section id="formulario">
            <div id="tituloForm">
                <p>Preencha os campos com os dados.</p>
            </div>

            <div id="campo">
                <input type="text" placeholder="Digite o Nome do Recebedor" name="recebedor" value="">
                <input type="text" placeholder="Digite o Nome do Pagador" name="pagador" value="">
                <input type="Number" placeholder="Digite o CPF / CNPJ" name="id" value="">
                <input type="Number" placeholder="Insira o Valor R$" name="valor" value="">
                <input type="date" name="data" value="">
            </div>

            <div id="botao">
                <button type="submit">Enviar</button>
            </div>
        </section>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $user = new Formulario(
            $_POST['recebedor'],
            $_POST['pagador'],
            $_POST['id'],
            $_POST['valor']
        );

        $user->mensagem();
    }

    ?>

</body>

</html>