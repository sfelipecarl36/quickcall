<?php
include('header.php');
?>
        <main>

        <?php
            include('sidebar.php');
        ?>
            <div class="conteudo">
                <h2 id="programas">Abrir Chamado</h2>
                <section id="computadores">
                    
                    <h3>Computador</h3>
                    <article>
                        <div class="iconarticle" style="background-image: url('img/categorias/categoria1.png')"></div>
                        <div class="contentarticle">
                        <ul>
                            <li>
                            <a class="linkarticle" href="adicionarChamado2.php">Computador sem Conexão com Internet</a>
                            </li>
                        </ul>
                        </div>
                    </article>

                </section>

                <section id="impressoras">
                    
                    <h3>Impressora</h3>
                    <article>
                        <div class="iconarticle" style="background-image: url('img/categorias/categoria2.png')"></div>
                        <div class="contentarticle">
                            <ul>
                                <li>
                                    <a class="linkarticle" href="adicionarChamado2.php">Computador não se comunica com a impressora</a>
                                </li>
                            </ul>
                        </div>
                    </article>

                </section>
            </div>
        </main>

    </body>

</html>