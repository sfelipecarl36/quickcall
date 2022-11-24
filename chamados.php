<?php
include('header.php');
?>
        <main>

        <?php
            include('sidebar.php');
        ?>

            <div class="conteudo">
                <h2 id="dashboard">Chamados</h2>
                <section id="chamados">

                
                    <div class="filter">
                        <select>
                            <option>Status</option>
                            <option>Título</option>
                            <option>Aberto Por</option>
                        </select>
                        <p>É</p>
                        <select>
                            <option>Solucionado</option>
                            <option>Aberto</option>
                            <option>Fechado</option>
                        </select>
                        <button>Pesquisar</button>
                    </div>

                <div class="containertop">
                    <div class="container">
                        <table>
                            <caption>Tabela de Chamados</caption>
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Título</th>
                                <th scope="col">Data Abertura</th>
                                <th scope="col">Aberto por</th>
                                <th scope="col">Prioridade</th>
                                <th scope="col">Ações</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td data-label="ID">4120</td>
                                <td data-label="Título">Solicitação de Cota de Impressão</td>
                                <td data-label="Data-Abertura">23/11/2022 15:09</td>
                                <td data-label="Aberto Por">Gustavo Silva</td>
                                <td data-label="Prioridade">Alta</td>
                                <td data-label="Ações">
                                    <a href="chamados.php"><button class="acoes backverde">+</button></a>
                                    <a href="chamados.php"><button class="acoes backred">-</button></a>
                                    <a href="chamados.php"><button class="acoes">=</button></a>
                                </td>
                              </tr>
                              <tr>
                                <td data-label="ID">4121</td>
                                <td data-label="Título">programas desatualizados</td>
                                <td data-label="Data-Abertura">23/11/2022 13:32</td>
                                <td data-label="Aberto Por">Soares Silva</td>
                                <td data-label="Prioridade">Alta</td>
                                <td data-label="Ações">
                                    <a href="chamados.php"><button class="acoes backverde">+</button></a>
                                    <a href="chamados.php"><button class="acoes backred">-</button></a>
                                    <a href="chamados.php"><button class="acoes">=</button></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>

                </section>

                <section id="prodepa">
                    <h3>Mapeamento do Prédio</h3>
                    <div class="container">
                    <img src="img/mapa.png" id="mapaideflor" width="100%">
                </div>
                </section>

            </div>
        </main>

    </body>

</html>