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
                    <article>
                        <div class="iconarticle" style="background-image: url('img/categorias/categoria1.png')"></div>
                        <div class="contentarticle">
                        <ul>
                            <li>
                            <a class="linkarticle">Computador sem Conexão com Internet</a>
                            </li>
                        </ul>
                        </div>
                    </article>
                </section>
                <form method="POST" action="index.php">

                    <h4>Título do Chamado *</h4>
                    <input type="text" name="chamado_title" required minlength="10" max="90">

                    <h4>Descrição do Chamado</h4>
                    <textarea rows="8" name="chamado_desc"></textarea>

                    <button type="submit">Enviar Chamado</button>

                </form>
            </div>
        </main>

    </body>

</html>