<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fonte de texto do site-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">    

    <!--CSS-->
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/buscaAdvogado.css">

    <title>Busca</title>
</head>
<body>
    <?php include('../view/partials/header.php')?>
        
    <main>

        <section class="filtro-advogado">    
            <form action="#" >
                <fieldset class="filtro">
                    <legend>Filtro</legend>

                    <div class="localizacao">
                        <label for="localizacao">Localização:</label>
                        <input type="search" name="localizacao" id="localizacao">
                    </div>

                    <div class="raioDistancia">
                        <label for="raioDistancia">Raio de Distancia:</label>
                        <select name="raioDistancia" id="raioDistancia">
                            <option value="vazio"></option>
                            <option value="distancia_5km">5 km</option>
                            <option value="distancia_50km">50 km</option>
                            <option value="distancia_100km">100 km</option>
                        </select>
                    </div>

                    <div class="especialidade">
                        <label for="especialidade">Especialidade:</label>
                        <select name="especialidade" id="especialidade">
                            <option value="vazio"></option>
                            <option value="direitoCivil">Direito Civil</option>
                            <option value="direitoPenal">Direito Penal</option>
                            <option value="direitoProcessualCivil">Direito Processual Civil</option>
                            <option value="direitoProcessualPenal">Direito Processual Penal</option>
                            <option value="direitoAdministrativo">Direito Administrativo</option>
                            <option value="direitoConstitucional">Direito Constitucional</option>
                            <option value="direitoTributario">Direito Tributário</option>
                            <option value="direitoDoTrabalho">Direito do Trabalho</option>
                            <option value="direitoEmpresarial">Direito Empresarial</option>
                            <option value="direitoPrevidenciario">Direito Previdenciário</option>
                            <option value="direitoDoConsumidor">Direito do Consumidor</option>
                            <option value="direitoAmbiental">Direito Ambiental</option>
                            <option value="direitoInternacional">Direito Internacional</option>
                        </select>
                    </div>

                    <div class="honorario">
                        <label for="honorario">Honorário:</label>
                        <select name="honorario" id="honorario">
                            <option value="vazio"></option>
                            <option value="preco1">R$ 1.000,00</option>
                            <option value="preco2">R$ 2.000,00</option>
                            <option value="preco3">R$ 3.000,00</option>
                            <option value="preco4">R$ 4.000,00</option>
                            <option value="preco5">R$ 5.000,00</option>
                        </select>
                    </div>

                    <div class="consultaGratuita">
                        <label for="consultaGratuita">Consulta Gratuita:</label>
                        <input type="checkbox" name="consultaGratuita" id="consultaGratuita">
                    </div>

                    <div class="enviar">
                        <button type="submit">Aplicar</button>
                    </div>
                </fieldset>
            </form>

            
        </section>

        <section class="filtro-tablet">    
            <form action="#" >
                <fieldset class="filtro">
                    <legend>Filtro</legend>

                    <div class="divisao1">

                        <div class="localizacao">
                            <label for="localizacao">Localização:</label>
                            <input type="search" name="localizacao" id="localizacao">
                        </div>
    
                        <div class="raioDistancia">
                            <label for="raioDistancia">Raio de Distancia:</label>
                            <select name="raioDistancia" id="raioDistancia">
                                <option value="vazio"></option>
                                <option value="distancia_5km">5 km</option>
                                <option value="distancia_50km">50 km</option>
                                <option value="distancia_100km">100 km</option>
                            </select>
                        </div>
    
                        <div class="especialidade">
                            <label for="especialidade">Especialidade:</label>
                            <select name="especialidade" id="especialidade">
                                <option value="vazio"></option>
                                <option value="direitoCivil">Direito Civil</option>
                                <option value="direitoPenal">Direito Penal</option>                           </option>
                                <option value="direitoProcessualCivil">Direito Processual Civil</option>
                                <option value="direitoProcessualPenal">Direito Processual Penal</option>
                                <option value="direitoAdministrativo">Direito Administrativo</option>
                                <option value="direitoConstitucional">Direito Constitucional</option>
                                <option value="direitoTributario">Direito Tributário</option>
                                <option value="direitoDoTrabalho">Direito do Trabalho</option>
                                <option value="direitoEmpresarial">Direito Empresarial</option>
                                <option value="direitoPrevidenciario">Direito Previdenciário</option>
                                <option value="direitoDoConsumidor">Direito do Consumidor</option>
                                <option value="direitoAmbiental">Direito Ambiental</option>
                                <option value="direitoInternacional">Direito Internacional</option>
                            </select>
                        </div>
                    </div>


                    <div class="divisao2">
                        <div class="honorario">
                            <label for="honorario">Honorário:</label>
                            <select name="honorario" id="honorario">
                                <option value="vazio"></option>
                                <option value="preco1">R$ 1.000,00</option>
                                <option value="preco2">R$ 2.000,00</option>
                                <option value="preco3">R$ 3.000,00</option>
                                <option value="preco4">R$ 4.000,00</option>
                                <option value="preco5">R$ 5.000,00</option>
                            </select>
                        </div>
    
                        <div class="consultaGratuita">
                            <label for="consultaGratuita">Consulta Gratuita:</label>
                            <input type="checkbox" name="consultaGratuita" id="consultaGratuita">
                        </div>
    
                        <div class="enviar">
                            <button type="submit">Aplicar</button>
                        </div>

                    </div>


                </fieldset>
            </form>
            </div>
        </section>

        <section class="content">

                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>

                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>

                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>

                <!------------------>

                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>
                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>
                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>
                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>
                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>
                <div class="perfilUsuario">
                    <div class="capa"></div>
                    <div class="foto"></div>
                    <div class="informacoes">
                        <p>nomeUsuario</p>
                        <p>formacaoAcademica</p>
                        <p>numeroOAB</p>
                        <a href="#">Ver Perfil</a>
                    </div>
                </div>

        </section>
    </main>

    <script src="../public/javascript/menu.js"></script>
    <script src="../public/javascript/filtro.js"></script>

</body>
</html>