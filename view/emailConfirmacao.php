<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/emailConfirmacao.css">

    <title>Direito Direto - Verificação (Etapa 1)</title>
</head>
<body>
    <?php include('../view/partials/header.php')?>

    <main>
        <section>
            <form action="../view/autenticacao.php">
                <fieldset>
                    <legend>Digite seu email</legend>

                    <div class="valorEmail">
                        <label for="email">Enviaremos um código de confirmação</label>
                        <input type="text" name="email" id="email" required>
                    </div>

                    <button type="submit" id="confirmar">Confirmar</button>
                </fieldset>
            </form>
        </section>
    </main>
    <script src="../public/javascript/menu.js"></script>
</body>
</html>