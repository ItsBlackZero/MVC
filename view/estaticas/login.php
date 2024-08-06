

<body>
        <div class="contenedorPrincipal" style="display: flex; justify-content: center; align-items: center; padding-top: 50px; padding-bottom: 50px;">
                <div class="contenedorLogin" style="display: flex; width: 400px; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); align-items: center; flex-direction: column;">
                        <form action="index.php?c=login&f=usuarioValidado" method="post">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" required style="width: 100%;padding: 10px;margin: 10px 0;border: 1px solid #ccc;border-radius: 5px;">
                                <br>
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="pasword" required style="width: 100%;padding: 10px;margin: 10px 0;border: 1px solid #ccc;border-radius: 5px;">
                                <br>
                                <a href="recuperarPassword.php">Olvidaste tu clave?</a>
                                <a href="registroUsuario.php">Registro</a>
                                <input type="submit" name="login" value="Login" style="width: 100%;padding: 10px;margin: 10px 0;border: 1px solid #ccc;border-radius: 5px;">

                        </form>
                </div>
        </div>
</body>

</html>