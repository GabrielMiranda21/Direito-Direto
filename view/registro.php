<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/registro.css">

    <title>Direito Direto - Registrar</title>
</head>
    <body>
        <?php include('../view/partials/header.php')?>

        <main>
            <section class="registro-container">
                
                <form action="#">
                    <fieldset>
                        <h1>Como você se identifica?</h1>
                        
                        <div class="opcao">
                            <button type="submit">Pessoa Fisica</button>
                            <button type="submit">Advogado</button>
                        </div>     
                    </fieldset>
                </form>
            </section>
        </main>

        <script src="../public/javascript/menu.js"></script>
    </body>  
</html>