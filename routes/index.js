import { express } from 'express';

const router = express.Router();

router.get("/", function(req, res, next) {
    res.render("paginaInicial", { title: "Direito Direto - Página Inicial" })
});