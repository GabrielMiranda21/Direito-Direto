html, body {
    width: 100%;
    background-color: #111130;
    height: 100%;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 750px;
}

section.autenticacao {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 550px;
    height: 300px;
    background-color: #0C0C24;
    padding: 15px 30px;
}

section.autenticacao h1 {
    color: white;
    font-size: 32px;
    margin-bottom: 20px;
}

section.autenticacao p {
    color: white;
    font-size: 16px;
    font-weight: bold;
}

section.autenticacao form fieldset {
    border: none;
}

section.autenticacao form fieldset div.autenticacaoCodigo {
    display: flex;
    justify-content: space-between;
}

section.autenticacao form fieldset div.autenticacaoCodigo input[type="text"]{
    width: 80px;
    height: 75px;
    margin: 30px 10px;
    padding: 15px 35px;
    font-size: 20px;
    background-color: #D9D9D9;
    border: none;
}

section.autenticacao form fieldset button{
    width: 100%;
    height: 40px;
    background-color: green;
    color: white;
    font-weight: bold;
    font-size: 24px;
    border: none;
}


<main>
        <section class="autenticacao">
            <h1>Autenticação</h1>

            <p>Confirme o código enviado no email</p>

            <form action="#" method="post">
                <fieldset>

                    <div class="autenticacaoCodigo">
                        <input type="text" name="num1" id="num1">
                        <input type="text" name="num2" id="num2">
                        <input type="text" name="num3" id="num3">
                        <input type="text" name="num4" id="num4">
                        <input type="text" name="num5" id="num5">
                    </div>

                    <label for="confirmar"></label>
                    <button type="submit" name="confirmar" id="confirmar">Confirmar</button>
                </fieldset>
            </form>
        </section>
    </main>

    <script src="/public/javascript/autenticacao.js"></script>