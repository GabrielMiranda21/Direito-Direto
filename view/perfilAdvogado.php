<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/perfilAdvogado.css">

    <title>Direito Direto - Perfil</title>
</head>
<body>
    <?php include('../view/partials/header.php')?>

    <section class="perfilAdvogado">
        <div class="capaFundo">
            <img src="../public/img/capaPerfil1.jpeg" alt="capaPerfil">
        </div>

        <div class="fotoPerfil">
            <img src="../public/img/fotoPerfilAdvogado.jpg" alt="capaPerfil">
        </div>

        <div class="informacoesAdvogado">

            <div class="informacoesPessoais">
                <p><Strong>nomeUsuario</Strong></p>
                <p><strong>idadeUsuario</strong></p>
                <p><strong>numeroOAB</strong></p>
                <p><strong>modeloTrabalhoAdvogado</strong></p>
            </div>

            <div class="feedbackVisual">
                <p><strong>Redes Sociais: </strong>* * * *</p>
                <p><strong>Casos Resolvidos: </strong>numeroCasos</p>
                <p><Strong>Média de Avaliações: </Strong>notaEstrela</p>
            </div>

        </div>
    </section>

    <section class="resumoProfissional">
        <div class="biografia">
            <h1>Resumo Profissional</h1>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil non dolorem consequuntur exercitationem 
                facere esse in sapiente voluptas ullam consequatur? Quis adipisci, tempora eum velit unde repellendus ad 
                omnis qui</p>
            </div>
        </div>

        <div class="servicosOferecidos">
            <h2>Serviços Oferecidos</h2>

            <p>servicoUm</p>
            <p>servicoDois</p>
            <p>servicoTres</p>
        </div>
    </section>


    <section class="avaliacoes">
        <h3>Avaliações</h3>

        <div class="perfilComentario">
            <div class="perfilUsuario">
                <img src="../public/img/perfil1.png" alt="perfil">
            </div>

            <div class="feedback">
                <div class="usuario">
                        
                    <p id="nomePerfil">Nome Completo</p>
                    <p id="estrelas">* * * * *</p>
                </div>
                
                <div class="comentario"></div>
            </div>
        </div>

        
    </section>

    <script src="../public/javascript/menu.js"></script>

</body>
</html>