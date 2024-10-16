const express = require('express');
const path = require('path');

const app = express();
const port = 3000;

var indexRouter = require('./routes/index');

app.set('views', path.join(__dirname, 'views'));  // Define a pasta onde estão localizadas as views.
app.set("view engine", "ejs"); // Define a engine de templates como EJS.

app.use(express.json()); // Permite o parsing de dados JSON no corpo das requisições.
app.use(express.urlencoded({extended: false})); // Permite o parsing de dados enviados via formulários.
app.use(express.static(path.join(__dirname, 'public'))); // Serve arquivos estáticos (CSS, JS, imagens) da pasta public.

// Listen é uma funcionalidade de conexão com a porta criada, pense em uma chave(variavel "port") e uma porta(listen).
app.listen(port, () => {
    console.log(`Servidor rodando na porta ${port}`);
  });

app.use("/", indexRouter);

module.exports = app;