<?php
include('header.php');
?>
        <main>

        <?php
            include('sidebar.php');
        ?>

            <div class="conteudo">
                <h2 id="dashboard">Dashboard</h2>
                <section id="navegadores">

                <div class="containertop">
                    <div class="container">
                    <canvas id="line-chart" width="900"></canvas>

                    <script>
                        var ctx = document.getElementById('line-chart').getContext('2d');
                        var chartGraph = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: ['Jan', 'Fev','Mar', 'Abr', 'Mai', 'Jun', 'Jul','Ago', 'Set','Out', 'Nov','Dez'],
                                datasets: [{
                                    label: 'Taxa de Chamados - 2022',
                                    data: ['15','20','17','11','9','11','17','15','8','4','23','7'],
                                    borderWidth: 4,
                                    borderColor: 'rgba(77,166,253,0.9)',
                                    backgroundColor: 'transparent'
                                }]
                            }
                        });
                    </script>
                    </div>

                    <div class="container">
                        <canvas id="pie-chart" width="600" height="430"></canvas>
    
                        <script>
                            var ctp = document.getElementById('pie-chart').getContext('2d');
                            var chartGraph2 = new Chart(ctp, {
                                    type: 'pie',
                                    data: {
                                        labels: ['Abertos', 'Solucionados', 'Fechados'],
                                        datasets: [
                                            {
                                            label: 'Dataset 1',
                                            data: ['5', '10', '6'],
                                            backgroundColor: ['Green', 'Yellow', 'Red']
                                            }
                                        ]
                                    },
                                    options: {
                                        responsive: true,
                                        plugins: {
                                        legend: {
                                            position: 'top',
                                        },
                                        title: {
                                            display: true,
                                            text: 'Chart.js Pie Chart'
                                        }
                                    }
                                },
                            });
                        </script>
                        </div>

                    <div class="container">
                        <table>
                            <caption>Tabela de Chamados</caption>
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">T??tulo</th>
                                <th scope="col">Data Abertura</th>
                                <th scope="col">Aberto por</th>
                                <th scope="col">Prioridade</th>
                                <th scope="col">A????es</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td data-label="ID">4120</td>
                                <td data-label="T??tulo">Solicita????o de Cota de Impress??o</td>
                                <td data-label="Data-Abertura">23/11/2022 15:09</td>
                                <td data-label="Aberto Por">Gustavo Silva</td>
                                <td data-label="Prioridade">Alta</td>
                                <td data-label="A????es">
                                    <a href="chamados.php"><button class="acoes backverde">+</button></a>
                                    <a href="chamados.php"><button class="acoes backred">-</button></a>
                                    <a href="chamados.php"><button class="acoes">=</button></a>
                                </td>
                              </tr>
                              <tr>
                                <td data-label="ID">4121</td>
                                <td data-label="T??tulo">programas desatualizados</td>
                                <td data-label="Data-Abertura">23/11/2022 13:32</td>
                                <td data-label="Aberto Por">Soares Silva</td>
                                <td data-label="Prioridade">Alta</td>
                                <td data-label="A????es">
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
                    <h3>Mapeamento do Pr??dio</h3>
                    <div class="container">
                    <img src="img/mapa.png" id="mapaideflor" width="100%">
                </div>
                </section>

            </div>
        </main>

    </body>

</html>