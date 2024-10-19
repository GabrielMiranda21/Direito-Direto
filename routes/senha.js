const express = require("express");
const router = express.Router();

const SenhaController = require("../controller/SenhaController");

router.post('/redefinirSenha', SenhaController.verificaSenha )