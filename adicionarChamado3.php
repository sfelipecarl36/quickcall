<?php
include('header.php');
?>
        <main>

        <?php
            include('sidebar.php');
        ?>
            <div class="conteudo">
                <h2 id="programas">Descreva o Chamado</h2>
                <section id="computadores">
                    <div class="tipochamado2">
                        <img class="iconchamado2" src="img/categorias/categoria4.png">
                        <div class="contentchamado2">
                            <h5>MONITOR</h5>
                            <ul>
                                <li>
                                    <p>Resolução de problemas relacionados a Monitores de Vídeo.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <form method="POST" action="index.php">

                    <h4>Título do Chamado *</h4>
                    <input type="text" name="chamado_title" required minlength="10" max="90">

                    <h4>Descrição do Chamado</h4>
                    <textarea rows="8" name="chamado_desc"></textarea>

                    Anexos: <input type="file" name="anexo">

                    <button type="submit">Enviar Chamado</button>

                </form>
            </div>
        </main>

    </body>

</html>