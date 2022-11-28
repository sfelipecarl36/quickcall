<!DOCTYPE html>

<html>

    <head>

        <title>Login IDEFLOR</title>
        <link rel="icon" type="image/png" href="img/icon.png">

        <style type="text/css">

            *{
                padding: 0;
                margin: 0;
                font-family: Helvetica, sans-serif;
            }            
            
            h5{
                color: white;
                left: 5px;
                bottom: 5px;
                position: absolute;
            }

            body{
                background-image: url('img/fundo2.jpg');
                background-blend-mode: multiply;
                background-color: rgb(37, 76, 148);
                background-size: cover;
                height: 100vh;
            }

            .flexcolumn{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            #logo{
                background-image: url('img/logo.png');
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 90px;
                margin: 15px 0px;
            }

            /* rgba(255, 255, 255, 0.8) */

            .caixalogin{
                background: radial-gradient(rgba(255, 255, 255, 1),rgba(255, 255, 255, 0.7));
                width: 540px;
                height: 450px;
                box-shadow: 5px 0px 25px 2px #00000085;
            }

            form {
                width: 70%;
            }

            .caixaform {
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            label {
                font-size: 16px;
                font-weight: 600;
                margin-left: -10px;
                color: rgb(50, 50, 50);
            }

            input {
                width: 100%;
                height: 25px;
                padding: 5px 10px;
                font-size: 18px;
                margin: 2px 0px 15px -10px;
                color: rgb(75, 75, 75);
                outline: 0;
                border: 1px solid rgb(170, 170, 170);
                border-radius: 5px;
            }

            input:focus{
                border: 1px solid rgb(129, 129, 129);
            }

            button {
                align-self: center;
                width: 35%;
                height: 45px;
                border: none;
                background-color: rgb(224, 147, 32);
                font-size: 20px;
                font-weight: bold;
                color: white;
                margin: 5px 0px;
                transition-duration: 200ms;
                box-shadow: -2px 2px 10px 0px rgb(156, 156, 156);
                border-radius: 5px;
            }

            button:hover {
                background-color: white;
                color:  rgb(224, 147, 32);
                box-shadow: 0px 0px 5px 0px rgb(224, 147, 32);
                transition-duration: 200ms;
            }

            @media screen and (orientation: portrait) {
                .caixalogin{
                    width: 750px;
                    height: 750px;
                    padding: 10px;
                }

                #logo{
                    height: 150px;
                }

                label {
                    font-size: 25px;
                }

                input {
                    height: 60px;
                    font-size: 32px;
                }

                button {
                    font-size: 35px;
                    width: 60%;
                    height: 60px;
                    margin: 20px 0px;
                }
            }

        </style>

    </head>

    <body class="flexcolumn">

        <div class="caixalogin flexcolumn">
                <div id="logo"><p> </p></div>
            <form action="Auth.php" method="post">
                <div class="caixaform">
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" minlength="4" maxlength="20" autofocus required placeholder="user.name">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" minlength="8" maxlength="25" required placeholder="********">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>

    <h5>Desenvolvido por: Felipe Carlos Rabelo da Silva</h5>
    </body>

</html>