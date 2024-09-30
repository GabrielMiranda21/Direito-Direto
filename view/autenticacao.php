<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/autenticacao.css">

    <title>Direito Direto - Autenticação</title>
</head>
<body>
    <?php include('../view/partials/header.php')?>

    <main>
        <section class="autenticacao">
            <h1>Autenticação</h1>

            <p>Confirme o código enviado no email</p>

            <form action="../view/redefinirSenha.php">
                <fieldset>

                    <div class="autenticacaoCodigo">
                        <input type="text" name="num1" id="num1" required>
                        <input type="text" name="num2" id="num2" required>
                        <input type="text" name="num3" id="num3" required>
                        <input type="text" name="num4" id="num4" required>
                        <input type="text" name="num5" id="num5" required>
                    </div>

                    <label for="confirmar"></label>
                    <button type="submit" name="confirmar" id="confirmar">Confirmar</button>
                </fieldset>
            </form>
        </section>
    </main>
    <script src="../public/javascript/autenticacao.js"></script>
    <script src="../public/javascript/menu.js"></script>

</body>
</html>