const express = require("express");

const router = express.Router();

router.get("/", (req, res) => {
    res.render("index", { title: "Direito Direto - Página Inicial" })
});

router.get("/buscaAdvogado", (req, res) => {
    res.render("buscaAdvogado", { title: "Direito Direto - Busca"})
});

router.get("/login", (req, res) => {
    res.render("login", { title: "Direito Direto - Login"})
});

router.get("/registro", (req, res) => {
    res.render("registro", { title: "Direito Direto - Registro"})
});

router.get("/emailConfirmacao", (req, res) => {
    res.render("emailConfirmacao", { title: "Direito Direto - Email para confirmação"})
});


router.get("/autenticacao", (req, res) => {
    res.render("autenticacao", { title: "Direito Direto - Autenticação"})
});

router.get("/redefinirSenha", (req, res) => {
    res.render("redefinirSenha", { title: "Direito Direto - Redefinir Senha"})
});

router.get("/carregamento", (req, res) => {
    res.render("carregamento", { title: "Direito Direto - Carregamento"})
});

module.exports = router;