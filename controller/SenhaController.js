module.exports = {
    verificaSenha: (req, res) => {
        const { repetirSenha, senhaNova } = req.body;

        if ( senhaNova === repetirSenha) {
                res.render('/carregamento', { title: "Direito Direto - Carregamento"})
        }

        console.log("página Acessada")
    }
}